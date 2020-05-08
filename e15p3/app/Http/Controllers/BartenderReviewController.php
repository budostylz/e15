<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BartenderReviewController extends Controller
{
    public function index()
    {
        return view('bartender.bartenderreview');
        //dump(Auth::user()->entity_type);
        //$user = $request->user();


    }
}
