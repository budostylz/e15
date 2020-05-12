<?php

namespace App\Actions\ReviewOrder;



use App\Order;
use Auth;

class ReviewCustomer
{
    public function __construct($bar)
    {

        //dump('entry ReviewCustomer', $bar);
        $userID = $bar->user_id;
        $orders = Order::where('status', '=', null)
                        ->where('user_id', '=', $userID)->get();
                        //->orderBy('updated_at', 'desc')->get();
        $orderArr = array();
        $totals = 0;
        //dump($orders);

        //dump('orders count', count($orders));

        for($i = 0; $i < count($orders); $i++){
            //dump($orders[$i]);

            $index = $i+1;
            $order = $orders[$i];
            $orderArr[$index] = json_decode($order->customer_order);
            $totals += floatval($order->total_price);

            //dump($totals);

        }
       
        $totals = '$'.number_format($totals, 2, '.', '');
       
        $this->carryOver = [$totals, $orderArr];

        //dump($this->carryOver[1]);

        /*foreach( $this->carryOver[1] as $key => $drinks ){           
            //dump($key);
            foreach( $drinks as $drinkKey => $drinkValue ){
                
                    //dump($drinkKey, $drinkValue);
        }*/

        
    }
}
