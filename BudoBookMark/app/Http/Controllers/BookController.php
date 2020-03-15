<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;

class BookController extends Controller
{
    //GET /books

    //action:index
    public function index()
    {
       // Log::info('This is an example...');
        return 'Here are all the books...';
    }

    //action:show
    public function show($title)
    {

        return view('books.show')->with([
            'title' => $title
        ]);
    }

    public function welcome()
    {

         # Return our welcome page
        # If there is data stored in the session as the results of doing a search
        # that data will be extracted from the session and passed to the view
        # to display the results
        return view('welcome')->with([
            'searchTerms' => session('searchTerms', null),
            'searchType' => session('searchType', null),
            'searchResults' => session('searchResults', null)
        ]);
    }

    public function search(Request $request) 
    {
        # ======== Temporary code to explore $request ==========

        # Get all the properties and methods available in the $request object
        //dump($request); # Object of type Illuminate\Http\Request

        # Get the form data (array) from the $request object
        //dump($request->all()); # Equivalent of dump($_GET)

        # Get the form data from individual fields
        //dump($request->input('searchTerms'));
        //dump($request->input('searchType'));
    
        # Form data from individual fields can also be accessed via dynamic properties
        //dump($request->searchTerms);

        # Boolean to see if the request contains data for a particular field
        //dump($request->has('searchTerms')); # Should be true
        //dump($request->filled('searchTerms'));
        
        # You can get more information about a request than just the data of the form, for example...
        //dump($request->path()); # "search"
        //dump($request->is('search')); # true
        //dump($request->is('books')); # false
        //dump($request->fullUrl()); # e.g. http://bookmark.loc search?searchTerms=Harry%20Potter&searchType=title
        //dump($request->method()); # GET
        //dump($request->isMethod('post')); # False

        # ======== End exploration of $request ==========

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
            return \Str::contains(strtolower($book[$searchType]), strtolower($searchTerms));
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
    * GET /books/create
    * Display the form to add a new book
    */
    public function create(Request $request) 
    {
        return view('books.create');
    }


    /**
    * POST /books
    * Process the form for adding a new book
    */
    public function store(Request $request) 
    {
        # Code will eventually go here to add the book to the database, 
        # but for now we'll just dump the form data to the page for proof of concept
        //dump($request->all());

        # Validate the request data
        # The `$request->validate` method takes an array of data 
        # where the keys are form inputs
        # and the values are validation rules to apply to those inputs
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|digits:4',
            'cover_url' => 'url',
            'cover_url' => 'url',
            'purchase_url' => 'required|url',
            'description' => 'required|min:255'
        ]);

        # Note: If validation fails, it will automatically redirect the visitor back to the form page
        # and none of the code that follows will execute.

        # Code will eventually go here to add the book to the database,
        # but for now we'll just dump the form data to the page for proof of concept
        dump($request->all());
    }

}
