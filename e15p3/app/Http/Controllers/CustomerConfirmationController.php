<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerConfirmationController extends Controller
{
    public function index(Request $request)
    {
        dump($request->all());
        return view('customer.customerconfirmation');

    }
}
