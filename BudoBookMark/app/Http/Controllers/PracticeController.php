<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Str;
use App\Author;
use App\User;
use Auth;

class PracticeController extends Controller
{

    /**
    * Demonstrates updating a many-to-many relationship
    */
    public function practice23()
    {
        # As an example, grab a user we know has books on their list
        $user = User::where('email', '=', 'jill@harvard.edu')->first();

        # Grab the first book on their list
        $book = $user->books()->first();

        # Update and save the notes for this relationship
        $book->pivot->notes = "New note...";
        $book->pivot->save();

        dump($book->toArray());

        return 'Update complete';
    }

    /**
    * Demonstrates deleting a many-to-many relationship
    */
    public function practice22()
    {
        # As an example, grab a user we know has books on their list
        $user = User::where('email', '=', 'jill@harvard.edu')->first();

        # Grab the first book on their list
        $book = $user->books()->first();

        # Delete the relationship
        $book->pivot->delete();

        dump($book->toArray());

        return 'Delete complete';
    }

    /**
    * Demonstrates retrieving data in a one-to-many relationship
    */
    public function practice21()
    {
        # Eager load `users` to avoid uncessary extra queries in the loop below
        $books = Book::with('users')->get();

        foreach ($books as $book) {
            dump($book->title);
            dump($book->users->toArray());
        }
    }

    /**
    * Demonstrates retrieving data in a one-to-many relationship
    */
    public function practice20()
    {
        $user = User::where('email', '=', 'jill@harvard.edu')->first();

        # Note that the `books` relationship method is accessed as a dynamic property
        dump($user->books->toArray());
    }

    /**
     * [6 of 6] Solution to query practice from Week 9 assignment
     * Remove any/all books with an author name that includes the string “Rowling”.
     */
    public function practice19()
    {
        # Show books before we do the delete
        Book::dump();

        # Do the delete
        Book::where('author', 'LIKE', '%Rowling%')->delete();
        dump('Deleted all books where author %Rowling%');

        # Show books after the delete
        Book::dump();
        # Underlying SQL: delete from `books` where `author` LIKE '%Rowling%'
    }

    /**
     * [5 of 6] Solution to query practice from Week 9 assignment
     * Find any books by the author “J.K. Rowling” and update the author name to be “JK Rowling”.
     */
    public function practice18()
    {
        Book::dump();

        # Approach # 1
        # Get all the books that match the criteria
        $books = Book::where('author', '=', 'J.K. Rowling')->get();

        $matches = $books->count();
        dump('Found ' . $matches . ' ' . str_plural('book', $matches) . ' that match this search criteria');

        if ($matches > 0) {
            # Loop through each book and update them
            foreach ($books as $book) {
                $book->author = 'JK Rowling';
                $book->save();
                # Underlying SQL: update `books` set `updated_at` = '20XX-XX-XX XX:XX:XX', `author` = 'JK Rowling' where `id` = '4'
            }
        }

        # Approach #2
        # More ideal - Requires 1 query instead of 3
        Book::where('author', '=', 'J.K. Rowling')->update(['author' => 'JK Rowling']);

        Book::dump();
    }

    /**
     * [4 of 6] Solution to query practice from Week 9 assignment
     * Retrieve all the books in descending order according to published date
     */
    public function practice17()
    {
        $books = Book::orderByDesc('published_year')->get();
        Book::dump($books);
        # Underlying SQL: select * from `books` order by `published_year` desc
    }

    /**
     * [3 of 6] Solution to query practice from Week 9 assignment
     * Retrieve all the books in alphabetical order by title
     */
    public function practice16()
    {
        $books = Book::orderBy('title', 'asc')->get();
        Book::dump($books);
        # Underlying SQL: select * from `books` order by `title` asc
    }

    /**
     * [2 of 6] Solution to query practice from Week 9 assignment
     * Retrieve all the books published after 1950.
     */
    public function practice15()
    {
        $books = Book::where('published_year', '>', 1950)->get();
        Book::dump($books);
        # Underlying SQL: select * from `books` where `published` > '1950'
    }

    /**
     * [1 of 6] Solution to query practice from Week 9 assignment
     * Retrieve the last 2 books that were added to the books table.
     */
    public function practice14()
    {
        $books = Book::orderBy('id', 'desc')->limit(2)->get();

        # Alternative approach using the `latest` convenience method:
        #$books = Book::latest()->limit(2)->get();

        Book::dump($books);
        # Underlying SQL: select * from `books` order by `id` desc limit 2
    }

    /**
    *
    */
    public function practice13()
    {
        # Eager load the author with the book
        $books = Book::with('author')->get();

        foreach ($books as $book) {
            if ($book->author) {
                dump($book->author->first_name.' '.$book->author->last_name.' wrote '.$book->title);
            } else {
                dump($book->title. ' has no author associated with it.');
            }
        }

        dump($books->toArray());
    }


    /**
    *
    */
    public function practice12()
    {
        
        # Get an example book
        $book = Book::whereNotNull('author_id')->first();

        # Get the author from this book using the "author" dynamic property
        # "author" corresponds to the the relationship method defined in the Book model
        $author = $book->author;

        # Output
        dump($book->title.' was written by '.$author->first_name.' '.$author->last_name);
        dump($book->toArray());
    }


    /**
    *
    */
    public function practice11()
    {
        $author = Author::where('first_name', '=', 'J.K.')->first();

        $book = new Book;
        $book->slug = 'fantastic-beasts-and-where-to-find-them';
        $book->title = "Fantastic Beasts and Where to Find Them";
        $book->published_year = 2001;
        $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/cover-placeholder.png';
        $book->info_url = 'https://en.wikipedia.org/wiki/Fantastic_Beasts_and_Where_to_Find_Them';
        $book->purchase_url = 'http://www.barnesandnoble.com/w/fantastic-beasts-and-where-to-find-them-j-k-rowling/1004478855';
        $book->author()->associate($author); # <--- Associate the author with this book
        $book->description = 'Fantastic Beasts and Where to Find Them is a 2001 guide book written by British author J. K. Rowling (under the pen name of the fictitious author Newt Scamander) about the magical creatures in the Harry Potter universe. The original version, illustrated by the author herself, purports to be Harry Potter’s copy of the textbook of the same name mentioned in Harry Potter and the Philosopher’s Stone (or Harry Potter and the Sorcerer’s Stone in the US), the first novel of the Harry Potter series. It includes several notes inside it supposedly handwritten by Harry, Ron Weasley, and Hermione Granger, detailing their own experiences with some of the beasts described, and including in-jokes relating to the original series.';
        $book->save();
        dump($book->toArray());
    }


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
            dump($book['title']);

            # Or object notation:
            //dump($book->title);
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
        //$results = Book::where('author', 'F. Scott Fitzgerald')->get();

        # Should match 0 books; yields an empty Collection
        //$results = Book::where('author', 'Virginia Wolf')->get();
        
        # Even though we limit it to 1 book, we're using the `get` fetch method so we get a Collection (of 1 Book)
        //$results = Book::limit(1)->get();
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
