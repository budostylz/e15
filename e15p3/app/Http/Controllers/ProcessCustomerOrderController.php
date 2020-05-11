<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessCustomerOrderController extends Controller
{
    public function index(Request $request)
    {
        dump($request->all());
        return view('bartender.processcustomerorder');

    }
}
