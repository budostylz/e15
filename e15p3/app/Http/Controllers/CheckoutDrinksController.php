<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\CheckoutDrinks\ListDrinks;

class CheckoutDrinksController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'bar_title' => 'required',
            
        ]);


        $action = new ListDrinks((object) $request->all());

        return view('customer.checkoutdrinks')->with([
            'barID' => $request->bar_id,
            'barTitle' => $action->drinkArr['barTitle'],
            'barDrinks' => $action->drinkArr['drinkList'],
            'totals' => $action->drinkArr['totalPrice']
        ]);



    }
}
