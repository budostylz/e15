<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\CheckoutDrinks\ListDrinks;

class CheckoutDrinksController extends Controller
{
    public function index(Request $request)
    {
        //dump(Auth::user()->id);

        //validate
        $request->validate([
            'bar_title' => 'required',
            
        ]);

        //dump($request->all());


        $action = new ListDrinks((object) $request->all());

        //dump($action->drinkArr);
        /*dump($action->drinkArr['barTitle']);
        dump($action->drinkArr['drinkList']);
        dump($action->drinkArr['totalPrice']);*/

        return view('customer.checkoutdrinks')->with([
            'barID' => $request->bar_id,
            'barTitle' => $action->drinkArr['barTitle'],
            'barDrinks' => $action->drinkArr['drinkList'],
            'totals' => $action->drinkArr['totalPrice']
        ]);



    }
}
