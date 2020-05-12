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
        
        $action = new ReviewOrder((object) $request->all());


        return view('customer.customerorder')->with([
            'userID' => $request->user_id,
            'userName' => $request->user_name,
            'totalPrice' => $action->carryOver[0],
            'orderArr' => $action->carryOver[1]
        ]);



    }
}
