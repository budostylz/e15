<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Actions\CustomerConfirmation\AddCustomerOrder;


class CustomerConfirmationController extends Controller
{
    public function index(Request $request)
    {


        $action = new AddCustomerOrder((object) $request->all());


        return redirect('/barlocator')->with([
            'order-confirmation' => 'Your Order is Received. View Order Status Above to Check Status.'
        ]);




    }
}
