<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Bar;



class BarLocatorController extends Controller
{
    public function index(Request $request)
    {   


        return view('customer.barlocator');


    }

    

}
