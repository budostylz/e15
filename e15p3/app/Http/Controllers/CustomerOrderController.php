<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class CustomerOrderController extends Controller
{
    public function index(Request $request)
    {
        dump($request->all());


        //dump(Auth::user()->id);

        //validate
        /*$request->validate([
            'optradio' => 'required',
            
        ]);*/


        //$action = new GetCustomer((object) $request->all());

        /*dump($action->drinkArr);
        dump($action->drinkArr['barTitle']);
        dump($action->drinkArr['drinkList']);
        dump($action->drinkArr['totalPrice']);*/

        /*return view('customer.drinkinfo')->with([
            'barID' => $request->bar_id,
            'barTitle' => $action->drinkArr['barTitle'],
            'barDrinks' => $action->drinkArr['barDrinks']
        ]);*/

        return view('customer.customerorder');




    }
}
