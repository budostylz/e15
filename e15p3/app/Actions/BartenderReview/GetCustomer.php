<?php

namespace App\Actions\BartenderReview;

use App\User;
use App\Order;

class GetCustomer
{
    public function __construct()
    {

        $this->userArr = [];
        $userArr = array();
        $orders =  Order::distinct()
            ->select('user_id')
            ->where('status', '=', null)
            //->orderBy('updated_at', 'desc')
            ->get();
        
        
        foreach ($orders as $order) {

            $user_id = $order->user_id;
            $user_title = User::where('id', '=', $user_id)->get()->first()->user_name;
            $userArr[$user_id] = $user_title;


        }

        $this->userArr = $userArr;


    }
}
