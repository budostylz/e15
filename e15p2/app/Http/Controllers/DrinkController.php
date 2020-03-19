<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Arr;
use Str;

class DrinkController extends Controller
{

    //action:bar
    public function drink()
    {


        $getDrink = session('getDrink', null);
        $drinkResults = session('drinkResults');

        return view('drinks.bar')->with([
            'getDrink' => $getDrink,
            'drinkResults' => $drinkResults
        ]);


    }

    public function dictionary()
    {
        $drinkArr = json_decode(file_get_contents(database_path('drinks.json')), true)['drinks'];

        //dump($drinkArr);

        return view('drinks.dictionary')->with([
            'drinkArr' => $drinkArr
        ]);

    }

    //was testing this but not going to use it for this app, inspiration from Ms.Susan Buck
    public function confirm(Request $request)
    {

        dump($request);

        /*

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

        */

      



    }

}
