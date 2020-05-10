<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinkInfoController extends Controller
{
    public function index(Request $request)
    {
        dump($request);
        return view('customer.drinkinfo');

    }
}
