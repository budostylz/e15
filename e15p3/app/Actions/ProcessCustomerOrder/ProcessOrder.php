<?php

namespace App\Actions\ProcessCustomerOrder;

use App\Order;
use Auth;

class ProcessOrder
{
    public function __construct($bar)
    {

        
        $bartenderID = Auth::user()->id;
        $userID = (int)$bar->user_id;

        Order::where('user_id', '=', $userID)
                    ->where('status', '=', null)->update(['status' => 'complete']);
  

        
    }
}
