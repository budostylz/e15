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


        $getDrink = session('getDrink', null);
        $drinkResults = session('drinkResults');

        return view('drinks.bar')->with([
            'getDrink' => $getDrink,
            'drinkResults' => $drinkResults
        ]);


    }


    public function search(Request $request)
    {

        $request->validate([
            'getDrink' => 'required'
        ]);
        
        $getDrink = $request->input('getDrink', null);
        //dump($getDrink);

        
        
        $drinkArr = json_decode(file_get_contents(database_path('drinks.json')), true);
        //dump($drinkArr["drinks"]);

        $drinkResults = array_filter($drinkArr["drinks"], function ($drink) use ($getDrink) {
            return Str::contains(strtolower($drink["strDrink"]), strtolower($getDrink));
        });

        //dump($drinkResults);

        return redirect('/')->with([
            'getDrink' => $getDrink,
            'drinkResults' => $drinkResults
        ]);

        



        



    }

}
