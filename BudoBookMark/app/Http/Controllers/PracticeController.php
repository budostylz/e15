<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Str;

class PracticeController extends Controller
{
    /**
    * Example comparing filtering on the query vs. the collection
    */
    public function practice10()
    {
        # Collection
        $books = Book::where('author', 'F. Scott Fitzgerald')->get();

        # Run the `first` method on the Collection to get a single book object
        dump($books->first());

        # Compare the above to here where the `first` method is part of the Eloquent query
        $results = Book::where('author', 'F. Scott Fitzgerald')->first();
        dump($results);

        # Both examples above yield the same results using different approaches

    }

    /**
    * Example of looping through a Collection and
    * accessing the data as an array or object
    */
    public function practice9()
    {
        $books = Book::all();

        # Loop through the Collection
        foreach ($books as $book) {
            # Data can be accessed using array notation:
            //dump($book['title']);

            //dump($books);
            //echo($books);

            # Or object notation:
            dump($book->title);
        }
    }

    /**
    * Example queries that return Collections
    */
    public function practice8()
    {
        # The following queries return a Book object
        //$results = Book::find(1);
        //$results = Book::orderBy('title')->first();

        # Yields a collection of multiple books
        //$results = Book::all();
        //$results = Book::orderBy('title')->get();
        
        # Should match 1 book; yields a Collection of 1 Book
        $results = Book::where('author', 'F. Scott Fitzgerald')->get();

        # Should match 0 books; yields an empty Collection
        //$results = Book::where('author', 'Virginia Wolf')->get();
        
        # Even though we limit it to 1 book, we're using the `get` fetch method so we get a Collection (of 1 Book)
        //$results = Book::limit(1)->get();

        dump($results);

    }

    /**
     * Demonstrates deleting data
     */
    public function practice7()
    {
        # First get a book to delete
        $book = Book::where('author', '=', 'F. Scott Fitzgerald')->first();

        if (!$book) {
            dump('Did not delete- Book not found.');
        } else {
            $book->delete();
            dump('Deletion complete; check the database to see if it worked...');
        }
    }
    
    /**
     * Demonstrates updating data
     */
    public function practice6()
    {
        # First get a book to update
        $book = Book::where('author', '=', 'F. Scott Fitzgerald')->first();

        if (!$book) {
            dump("Book not found, can not update.");
        } else {
            # Change some properties
            $book->title = 'The Really Great Gatsby';
            $book->published_year = '2025';

            # Save the changes
            $book->save();

            dump('Update complete; check the database to confirm the update worked.');
        }
    }

    /**
     * Demonstrates the `first` method
     */
    public function practice5()
    {
        $book = Book::where('slug', '=', 'the-martian')->first();

        dump($book);
        dump($book->toArray());
    }

    /**
     * Demonstate reading data
     */
    public function practice4()
    {
        //$book = new Book();
        //$books = Book::where('title', 'LIKE', '%Harry Potter%')->get();
        $books = Book::where('title', 'LIKE', '%Harry Potter%')->orWhere('published_year', '>=', 1998)->get();

        if ($books->isEmpty()) {
            dump('No matches found');
        } else {
            dump($books->toArray());

            foreach ($books as $book) {
                dump($book->title);
            }
        }
    }

    /**
     * Demonstrates creating data
     */
    public function practice3()
    {
        # Instantiate a new Book Model object
        $book = new Book();

        # Set the properties
        # Note how each property corresponds to a column in the table
        $book->title = 'The Martian';
        $book->slug = 'the-martian';
        $book->author = 'Anthony Weir';
        $book->published_year = 2011;
        $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/the-martian.jpg';
        $book->info_url = 'https://en.wikipedia.org/wiki/The_Martian_(Weir_novel)';
        $book->purchase_url = 'https://www.barnesandnoble.com/w/the-martian-andy-weir/1114993828';
        $book->description = 'The Martian is a 2011 science fiction novel written by Andy Weir. It was his debut novel under his own name. It was originally self-published in 2011; Crown Publishing purchased the rights and re-released it in 2014. The story follows an American astronaut, Mark Watney, as he becomes stranded alone on Mars in the year 2035 and must improvise in order to survive.';

        # Invoke the Eloquent `save` method to generate a new row in the
        # `books` table, with the above data
        $book->save();

        dump('Added: ' . $book->title);
    }

    /**
     * Demonstrates using the Book model
     */
    public function practice2()
    {
        //dump(Str::plural('mouse'));

        dump(Book::find(3));
        dump(Book::all()->toArray());
    }

    /**
     * First practice example
     */
    public function practice1()
    {
        dump('This is the first example.');
    }

    /**
     * ANY (GET/POST/PUT/DELETE)
     * /practice/{n?}
     * This method accepts all requests to /practice/ and
     * invokes the appropriate method.
     * http://bookmark.loc/practice => Shows a listing of all practice routes
     * http://bookmark.loc/practice/1 => Invokes practice1
     * http://bookmark.loc/practice/5 => Invokes practice5
     * http://bookmark.loc/practice/999 => 404 not found
     */
    public function index($n = null)
    {
        $methods = [];

        # Load the requested `practiceN` method
        if (!is_null($n)) {
            $method = 'practice' . $n; # practice1

            # Invoke the requested method if it exists; if not, throw a 404 error
            return (method_exists($this, $method)) ? $this->$method() : abort(404);
        } # If no `n` is specified, show index of all available methods
        else {
            # Build an array of all methods in this class that start with `practice`
            foreach (get_class_methods($this) as $method) {
                if (strstr($method, 'practice')) {
                    $methods[] = $method;
                }
            }

            # Load the view and pass it the array of methods
            return view('practice')->with(['methods' => $methods]);
        }
    }
}
