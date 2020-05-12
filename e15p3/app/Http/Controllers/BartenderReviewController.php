<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\CustomerConfirmation\AddCustomerOrder;
use App\Actions\BartenderReview\GetCustomer;



class BartenderReviewController extends Controller
{
    public function index(Request $request)
    {

        $action = new GetCustomer();


          return view('bartender.bartenderreview')->with([
            'userArr' => $action->userArr
          ]);

        


    }
}
