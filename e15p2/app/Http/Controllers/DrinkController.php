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
        $drinkResult = session('drinkResult');
        $drinkResults = session('drinkResults');
        $togoYes = session('togoYes');
        $togoNo = session('togoNo'); 


        return view('drinks.bar')->with([
            'getDrink' => $getDrink,
            'drinkResult' => $drinkResult,
            'drinkResults' => $drinkResults,
            'togoYes' => $togoYes,
            'togoNo' => $togoNo

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

        //dump($request);

        /*$request->validate([
            'togoNo' => 'required',
            'togoYes' => 'required'

        ]);*/

        $getDrink = $request->input('getDrink', null);
        $numberOfDrinks = $request->input('numberOfDrinks', null);
        $togoYes = $request->input('togoYes', null);
        $togoNo = $request->input('togoNo', null);

        dump($getDrink);
        dump($togoNo);
        dump($togoYes);


        /*return redirect('/')->with([
            'togoNo' => $togoNo
        ]);*/


        //dump($getDrink);
        //dump($numberOfDrinks);
        //dump($togoYes);
        //dump($togoNo);


        //dump($request->all());


        /*

       
        

        
        
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
