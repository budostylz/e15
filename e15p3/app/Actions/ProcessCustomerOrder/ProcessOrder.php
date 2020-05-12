<?php

namespace App\Actions\ProcessCustomerOrder;

use App\Order;
use Auth;

class ProcessOrder
{
    public function __construct($bar)
    {

        //dump('entry ProcessOrder', $bar);
        
        $bartenderID = Auth::user()->id;
        $userID = (int)$bar->user_id;

        //dump('bartender', $bartenderID);
        //dump('$userID', $userID);
        //processcustomerorder
        Order::where('user_id', '=', $userID)
                    ->where('status', '=', null)->update(['status' => 'complete']);
  
        //Order::dump();

        //dump('order processed');


        //$this->barArr = ['barDetails' => $bar->toArray()];

        
    }
}
