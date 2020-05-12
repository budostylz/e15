<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\ReviewOrder\ReviewCustomer;


class ReviewOrderController extends Controller
{
    public function index(Request $request)
    {
        //dump($request->all());
        //dump(Auth::user()->id);

        //dump($request->user_name);
        //validate
        $request->validate([
            'user_id' => 'required',
            
        ]);

        $action = new ReviewCustomer((object) $request->all());


      

        return view('bartender.revieworder')->with([
            'userID' => $request->user_id,
            'userName' => $request->user_name,
            'totalPrice' => $action->carryOver[0],
            'orderArr' => $action->carryOver[1]
        ]);




    }
}
