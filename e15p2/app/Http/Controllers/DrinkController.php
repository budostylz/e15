<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Arr;
use Str;


class DrinkController extends Controller
{

    //action:bar
    public function drink()
    {


        $drinkResult = session('drinkResult');
        $numberOfDrinks = session('numberOfDrinks');
        $drinksToGo = session('drinksToGo');
        $drinkUrl = session('drinkUrl');

        return view('drinks.drink')->with([
            'drinkResult' => $drinkResult,
            'numberOfDrinks' => $numberOfDrinks,
            'drinksToGo' => $drinksToGo,
            'drinkUrl' => $drinkUrl
        ]);


    }

    public function dictionary()
    {
        $drinkArr = json_decode(file_get_contents(database_path('drinks.json')), true)['drinks'];
        
        return view('drinks.dictionary')->with([
            'drinkArr' => $drinkArr
        ]);
    }

    public function confirm(Request $request)
    {

        $request->validate([
            'drinkResult' => [
                'required',
                Rule::notIn(['intro']),
            ],
            'drinksToGo' => 'required',
            'numberOfDrinks' => 'required|integer|between:1,99',
            
        ]);

        $drinkResult = $request->input('drinkResult', null);
        $numberOfDrinks = $request->input('numberOfDrinks', null);
        $drinksToGo = $request->input('drinksToGo', null);
        $drinkUrl = $request->input('drinkUrl', null);

        //dump($drinkResult);
        //dump($numberOfDrinks);
        dump($drinksToGo);
        //dump($drinkUrl);

      
        return view('drinks.confirm')->with([
            'drinkResult' => $drinkResult,
            'numberOfDrinks' => $numberOfDrinks,
            'drinksToGo' => $drinksToGo,
            'drinkUrl' => $drinkUrl
        ]);

    }

}
