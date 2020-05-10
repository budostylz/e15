<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\DrinkInfo\GetBarDrinks;


class DrinkInfoController extends Controller
{
    public function index(Request $request)
    {
        //dump(Auth::user()->id);

        //dump($request->bar_id);
        //validate
        $request->validate([
            'bar_id' => 'required',
            
        ]);

        $action = new GetBarDrinks((object) $request->all());

        //dump($action->drinkArr);
        //dump($action->drinkArr['barTitle']);

        return view('customer.drinkinfo')->with([
            'barID' => $request->bar_id,
            'barTitle' => $action->drinkArr['barTitle'],
            'barDrinks' => $action->drinkArr['barDrinks']
        ]);


    }
}
