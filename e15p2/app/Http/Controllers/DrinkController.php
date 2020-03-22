<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Arr;
use Str;


class DrinkController extends Controller
{

    public function drink()
    {


        $favoriteDrink = session('favoriteDrink');
        $numberOfDrinks = session('numberOfDrinks');
        $drinksToGo = session('drinksToGo');
        $drinkUrl = session('drinkUrl');

        return view('drinks.drink')->with([
            'favoriteDrink' => $favoriteDrink,
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
            'favoriteDrink' => [
                'required',
                Rule::notIn(['Select a Drink']),
            ],
            'drinksToGo' => 'required',
            'numberOfDrinks' => 'required|integer|between:1,99',
            
        ]);

        $favoriteDrink = $request->input('favoriteDrink', null);
        $numberOfDrinks = $request->input('numberOfDrinks', null);
        $drinksToGo = $request->input('drinksToGo', null);
        $drinkUrl = $request->input('drinkUrl', null);
        $serverPics = ['images/bartender.PNG','images/bartender2.PNG'];

      
        return view('drinks.confirm')->with([
            'favoriteDrink' => $favoriteDrink,
            'numberOfDrinks' => $numberOfDrinks,
            'drinksToGo' => $drinksToGo,
            'drinkUrl' => $drinkUrl,
            'serverPics' => $serverPics
        ]);

    }

}
