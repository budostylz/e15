<?php

namespace App\Actions\CustomerConfirmation;

use App\Bar;
use App\Order;
use Auth;

class AddCustomerOrder
{
    public function __construct($bar)
    {

        //dump('entry AddCustomerOrder');

         //drinkinfo
         $barID = (int)$bar->bar_id;
         $bartenderID = (int)$bar->optradio;
         $userID = Auth::user()->id;//Auth::user()->id;
         $drinkArr = array();

         //dump($barID, $bartenderID, $userID);

         foreach( $bar as $key => $value ){
            if($key != 'bar_id' && $key != 'optradio' && $key != '_token'){
                $drinkArr[$key] = '$'.$value;
            }         
          }

         $order = new Order();
         $order->customer_order = json_encode($drinkArr);
         $order->user_id = $userID;
         $order->bar_id = $barID;
         $order->bartender_id = $bartenderID;
         $order->save();

    }
}
