<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarController extends Controller
{

    //action:bar
    public function bar()
    {
        # Work that was previously happening in the routes file is now happening here
        //return 'Here are all the books...';

        //call actions here

        return view('drinks.bar')->with([
            'title' => 'test'
        ]);


    }

    //action:drink
    public function drink($title)
    {
        //return 'Results for the book displaying from show action: '.$title;

        return view('books.show')->with([
            'title' => $title
        ]);
    }

    //action:toGo
    public function toGo()
    {
        return 'Here are all the books...';

    }
}
