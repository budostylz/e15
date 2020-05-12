<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\DrinkInfo\GetBarDrinks;


class DrinkInfoController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'bar_id' => 'required',
            
        ]);

        $action = new GetBarDrinks((object) $request->all());


        return view('customer.drinkinfo')->with([
            'barID' => $request->bar_id,
            'barTitle' => $action->drinkArr['barTitle'],
            'barDrinks' => $action->drinkArr['barDrinks']
        ]);


    }
}
