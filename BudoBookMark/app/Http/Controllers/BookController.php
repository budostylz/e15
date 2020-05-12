<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Arr;
use Str;
use App\Book;
use App\Author;
use App\Actions\Books\StoreNewBook;

class BookController extends Controller
{
    /**
    * GET /books/create
    * Display the form to add a new book
    */
    public function create(Request $request)
    {
        # Get authors for our dropdown
        $authors = Author::orderBy('last_name')
            ->select(['id', 'first_name', 'last_name'])
            ->get();

        return view('books.create')->with([
            'authors' => $authors
        ]);
    }

    /**
    * POST /books
    * Process the form for adding a new book
    */
    public function store(Request $request)
    {
        # Validate the request data
        # The `$request->validate` method takes an array of data
        # where the keys are form inputs
        # and the values are validation rules to apply to those inputs
        $request->validate([
            'slug' => 'required|unique:books,slug|alpha_dash',
            'title' => 'required',
            //'author_id' => 'required', # Giving the option of choosing "None specified"
            'published_year' => 'required|digits:4',
            'cover_url' => 'url',
            'info_url' => 'url',
            'purchase_url' => 'required|url',
            'description' => 'required|min:100'
        ]);

        # Note: If validation fails, it will automatically redirect the visitor back to the form page
        # and none of the code that follows will execute.

        # Week 13 example of streamlining controllers by outsourcing the storing of the book to an action class
        $action = new StoreNewBook((object) $request->all());

        return redirect('/books/'.$request->slug)->with([
            'flash-alert' => 'Your book '.$action->rda['title'].' was added.'
        ]);
    }

    /**
     * GET /search
     */
    public function search(Request $request)
    {
        $request->validate([
            'searchTerms' => 'required',
            'searchType' => 'required',
        ]);

        # Note: if validation fails, it will redirect
        # back to `/` (page from which the form was submitted)
        
        # Start with an empty array of search results; books that
        # match our search query will get added to this array
        $searchResults = [];

        # Get the input values (default to null if no values exist)
        $searchTerms = $request->input('searchTerms', null);
        $searchType = $request->input('searchType', null);

        # Load our book data using PHP's file_get_contents
        # We specify our books.json file path using Laravel's database_path helper
        $bookData = file_get_contents(database_path('books.json'));
    
        # Convert the string of JSON text we loaded from books.json into an
        # array using PHP's built-in json_decode function
        $books = json_decode($bookData, true);
    
        # This algorithm will filter our $books down to just the books where either
        # the title or author ($searchType) matches the keywords the user entered ($searchTerms)
        # The search values are convereted to lower case using PHP's built in strtolower function
        # so that the search is case insensitive
        $searchResults = array_filter($books, function ($book) use ($searchTerms, $searchType) {
            return Str::contains(strtolower($book[$searchType]), strtolower($searchTerms));
        });

        # The above array_filter accomplishes the same thing this for loop would
        // foreach ($books as $slug => $book) {
        //     if (strtolower($book[$searchType]) == strtolower($searchTerms)) {
        //         $searchResults[$slug] = $book;
        //     }
        // }

        # Redirect back to the form with data/results stored in the session
        # Ref: https://laravel.com/docs/redirects#redirecting-with-flashed-session-data
        return redirect('/')->with([
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
    }

    /**
     * GET /books
     * Show all the books in the library
     */
    public function index()
    {
        $books = Book::orderBy('title')->get();

        # Query database for new books
        //$newBooks = Book::orderByDesc('created_at')->orderBy('title')->limit(3)->get();

        # Or, filter out the new books from the existing $books Collection
        $newBooks = $books->sortByDesc('created_at')->take(3);
        
        return view('books.index')->with([
            'books' => $books,
            'newBooks' => $newBooks
        ]);
    }

    /**
     * GET /book/{slug}
     * Show the details for an individual book
     */
    public function show($slug)
    {
        $book = Book::where('slug', '=', $slug)->first();

        return view('books.show')->with([
            'book' => $book,
            'slug' => $slug,
        ]);
    }

    /**
     * GET /books/{slug}/edit
     */
    public function edit(Request $request, $slug)
    {
        $book = Book::where('slug', '=', $slug)->first();

        return view('books.edit')->with([
            'book' => $book
        ]);
    }

    /**
     * PUT /books/{$slug}
     */
    public function update(Request $request, $slug)
    {
        $book = Book::where('slug', '=', $slug)->first();

        $request->validate([
            'slug' => 'required|unique:books,slug,'.$book->id.'|alpha_dash',
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|digits:4',
            'cover_url' => 'url',
            'info_url' => 'url',
            'purchase_url' => 'required|url',
            'description' => 'required|min:255'
        ]);

        $book->slug = $request->slug;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->published_year = $request->published_year;
        $book->cover_url = $request->cover_url;
        $book->info_url = $request->info_url;
        $book->purchase_url = $request->purchase_url;
        $book->description = $request->description;
        $book->save();

        return redirect('/books/'.$slug.'/edit')->with([
            'flash-alert' => 'Your changes were saved.'
        ]);
    }

    /**
    * Asks user to confirm they want to delete the book
    * GET /books/{slug}/delete
    */
    public function delete($slug)
    {
        $book = Book::findBySlug($slug);

        if (!$book) {
            return redirect('/books')->with([
                'flash-alert' => 'Book not found'
            ]);
        }

        return view('books.delete')->with([
            'book' => $book,
        ]);
    }

    /**
    * Deletes the book
    * DELETE /books/{slug}/delete
    */
    public function destroy($slug)
    {
        $book = Book::findBySlug($slug);

        $book->users()->detach();

        $book->delete();

        return redirect('/books')->with([
            'flash-alert' => '“' . $book->title . '” was removed.'
        ]);
    }
}
