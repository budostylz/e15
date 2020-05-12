<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class ListController extends Controller
{
    /**
     * GET /list
     */
    public function show(Request $request)
    {
        $books = $request->user()->books->sortByDesc('pivot.created_at');

        return view('lists.show')->with(['books' => $books]);
    }

    /**
     * GET /list/{slug?}/add
     */
    public function add($slug)
    {
        $book = Book::findBySlug($slug);

        # TODO: Handle case where book isn't found for the given slug

        return view('lists.add')->with(['book' => $book]);
    }

    /**
     * POST /list/{slug?}/add
     */
    public function save(Request $request, $slug)
    {
        # TODO: Validate incoming data, making sure they entered a note

        $book = Book::findBySlug($slug);

        # Add book to user's list
        # (i.e. Create a new row in the book_user table)
        $request->user()->books()->save($book, ['notes' => $request->notes]);

        return redirect('/list')->with([
            'flash-alert' => 'The book ' .$book->title. ' was added to your list.'
        ]);
    }
}
