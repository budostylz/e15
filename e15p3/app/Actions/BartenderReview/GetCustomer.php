<?php

namespace App\Actions\BartenderReview;

use App\User;
use App\Order;

class GetCustomer
{
    public function __construct()
    {

        dump('entry');

        $userOrder = Order::distinct()->select('user_id')->get();
        
        //where('status', '=', null)->orderBy('updated_at', 'desc');
        //$userArr = array();
        //Order::dump();
        dump("Order::distinct()->select('user_id')->get()");
        //dump( Order::distinct()->select('user_id')->where('status', '=', null)->orderBy('updated_at', 'desc')->get() );
        dump($userOrder->where('status', '=', null));
        /*foreach ($orders as $order) {

            //dump($order);
            //$user_id = $order->user_id;
            //$user_title = User::where('id', '=', $user_id)->get()->first()->user_name;
            //$userArr[$user_id] = $user_title;
            //dump($user_title);


        }*/

        //$this->userArr = $userArr;

        //dump($this->userArr);

        

    }
}
