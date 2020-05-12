<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\ProcessCustomerOrder\ProcessOrder;


class ProcessCustomerOrderController extends Controller
{
    public function index(Request $request)
    {
        //dump($request->all());


        $action = new ProcessOrder((object) $request->all());

        return redirect('/bartenderreview')->with([
            'order-confirmation' => 'Your Customer Order Have Been Processed.'
        ]);



    }
}
