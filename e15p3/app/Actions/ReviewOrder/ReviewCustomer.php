<?php

namespace App\Actions\ReviewOrder;



use App\Order;
use Auth;

class ReviewCustomer
{
    public function __construct($bar)
    {

        $userID = $bar->user_id;
        $orders = Order::where('status', '=', null)
                        ->where('user_id', '=', $userID)->get();
                        //->orderBy('updated_at', 'desc')->get();
        $orderArr = array();
        $totals = 0;

        for($i = 0; $i < count($orders); $i++){

            $index = $i+1;
            $order = $orders[$i];
            $orderArr[$index] = json_decode($order->customer_order);
            $totals += floatval($order->total_price);


        }
       
        $totals = '$'.number_format($totals, 2, '.', '');
       
        $this->carryOver = [$totals, $orderArr];


        
    }
}
