<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BarLocatorController extends Controller
{
    public function index()
    {   
        return view('customer.barlocator');

    }
}
