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
        //dump($bar);
        //dump(explode("$", $bar->total_price)[1]);

         //drinkinfo
         $barID = (int)$bar->bar_id;
         $bartenderID = (int)$bar->optradio;
         $userID = Auth::user()->id;//Auth::user()->id;
         $drinkArr = array();
         $totalPrice = explode("$", $bar->total_price)[1];

         //dump($barID, $bartenderID, $userID);

         foreach( $bar as $key => $value ){
            if($key != 'bar_id' && $key != 'optradio' && $key != '_token'){

                
                $drinkArr[$key] = explode("$", $value)[1];
            }         
          }

          //dump($drinkArr);
         $order = new Order();
         $order->customer_order = json_encode($drinkArr);
         $order->total_price = $totalPrice;
         $order->user_id = $userID;
         $order->bar_id = $barID;
         $order->bartender_id = $bartenderID;
         $order->save();

         //dump('order process');

    }
}
