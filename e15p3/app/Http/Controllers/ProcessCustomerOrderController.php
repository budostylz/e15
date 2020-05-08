<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessCustomerOrderController extends Controller
{
    public function index()
    {
        return view('bartender.processcustomerorder');

    }
}
