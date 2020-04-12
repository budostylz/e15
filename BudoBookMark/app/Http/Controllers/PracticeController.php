<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Str;

class PracticeController extends Controller
{
    /**
     * Demonstrates deleting data
     */
    public function practice7()
    {
        # First get a book to delete
        $books = Book::where('author', 'LIKE', '%Rowling%')->get();

        foreach ($books as $book) {
            dump($book->author, $book->title);

            $book->delete();
            dump('Deletion complete; check the database to see if it worked...');

        }

        /*if (!$book) {
            dump('Did not delete- Book not found.');
        } else {
            $book->delete();
            dump('Deletion complete; check the database to see if it worked...');
        }*/
    }
    
    /**
     * Demonstrates updating data
     */
    public function practice6()
    {
        # First get a book to update
        $books = Book::where('author', '=', 'J.K. Rowling')->get();

        foreach ($books as $book) {
            dump($book->author, $book->title);

                # Change some properties
                $book->author = 'JK Rowling';
    
                # Save the changes
                $book->save();
        }

        /*
        if (!$books) {
            dump("Books are not found, can not update.");
        } else {
            # Change some properties
            $book->title = 'The Really Great Gatsby';
            $book->published_year = '20';

            # Save the changes
            $book->save();

            dump('Update complete; check the database to confirm the update worked.');
        }
        */
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

        
        
        
        $book = new Book();
        $books = Book::where('title', 'LIKE', '%Harry Potter%')->get();

       
        if ($books->isEmpty()) {
            dump('No matches found');
        } else {
            dump($books->toArray());

            foreach ($books as $book) {
                dump($book->published_year, $book->title);
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
        $book->published_year = 1;
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
