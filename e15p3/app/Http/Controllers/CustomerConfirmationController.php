<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Actions\CustomerConfirmation\AddCustomerOrder;


class CustomerConfirmationController extends Controller
{
    public function index(Request $request)
    {
        //dump($request->all());


        //dump(Auth::user()->id);

        //validate
        /*$request->validate([
            'optradio' => 'required',
            
        ]);*/



        $action = new AddCustomerOrder((object) $request->all());

        /*dump($action->drinkArr);
        dump($action->drinkArr['barTitle']);
        dump($action->drinkArr['drinkList']);
        dump($action->drinkArr['totalPrice']);*/

        return redirect('/barlocator')->with([
            'order-confirmation' => 'Your Order is Received. View Order Status Above to Check Status.'
        ]);




    }
}
