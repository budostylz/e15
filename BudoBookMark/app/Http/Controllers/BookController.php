<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //GET /books

    //action:index
    public function index()
    {
        # Work that was previously happening in the routes file is now happening here
        return 'Here are all the books...';
    }

    //action:show
    public function show($title)
    {
        //return 'Results for the book displaying from show action: '.$title;

        return view('books.show')->with([
            'title' => $title
        ]);
    }
}
