<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinkInfoController extends Controller
{
    public function index()
    {
        return view('customer.drinkinfo');

    }
}
