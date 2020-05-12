<?php

namespace App\Actions\CustomerOrder;



use App\Order;
use Auth;

class ReviewOrder
{
    public function __construct($bar)
    {

        //dump('entry');
        

        //dump('entry ReviewCustomer', $bar);
        $userID = Auth::user()->id;
        $orders = Order::where('status', '=', 'complete')
                        ->where('user_id', '=', $userID)
                        ->orderBy('updated_at', 'desc')->get();
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

        

        //dump($this->carryOver);

        /*foreach( $this->carryOver[1] as $key => $drinks ){           
            //dump($key);
            foreach( $drinks as $drinkKey => $drinkValue ){
                
                    //dump($drinkKey, $drinkValue);
        }*/

        
    }
}
