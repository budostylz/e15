<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\CustomerOrder\ReviewOrder;
use App\User;
use Auth;


class CustomerOrderController extends Controller
{
    public function index(Request $request)
    {
        //dump($request->all());


        //dump(Auth::user()->id);

        


        $action = new ReviewOrder((object) $request->all());

        /*dump($action->drinkArr);
        dump($action->drinkArr['barTitle']);
        dump($action->drinkArr['drinkList']);
        dump($action->drinkArr['totalPrice']);*/

        return view('customer.customerorder')->with([
            'userID' => $request->user_id,
            'userName' => $request->user_name,
            'totalPrice' => $action->carryOver[0],
            'orderArr' => $action->carryOver[1]
        ]);

        //return view('customer.customerorder');




    }
}
