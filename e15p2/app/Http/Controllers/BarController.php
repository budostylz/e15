<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Arr;
use Str;

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


    public function search(Request $request)
    {
        $searchTerm = "ab";
        $drinkArr = json_decode(file_get_contents(database_path('drinks.json')), true);
        //dump($drinkArr["drinks"]);

        $searchResults = array_filter($drinkArr["drinks"], function ($drink) use ($searchTerm) {
            return Str::contains(strtolower($drink["strDrink"]), strtolower($searchTerm));
        });

        dump($searchResults);





        

        



    }

}
