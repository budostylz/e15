<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BarLocatorController extends Controller
{
    public function index()
    {   
        //dump(Auth::user()->id);
        return view('customer.barlocator');

    }
}
