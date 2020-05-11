<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\CustomerConfirmation\AddCustomerOrder;
use App\Actions\BartenderReview\GetCustomer;



class BartenderReviewController extends Controller
{
    public function index(Request $request)
    {
        //dump($request->all());

        $action = new GetCustomer((object) $request->all());

        //dump($action->userArr);

          return view('bartender.bartenderreview')->with([
            'userArr' => $action->userArr
        ]);

        


    }
}
