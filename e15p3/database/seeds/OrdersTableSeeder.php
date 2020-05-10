<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Bar;
use App\Customer;
use App\Bartender;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $orderJSON = file_get_contents(database_path('orders.json'));
        $orders = json_decode($orderJSON, true);
        $counter = count($orders);
        
    
        foreach ($orders as $slug => $orderJSON){


            $orderArr = array(
                array(
                    "drink_title" => "Alfie Cocktail",
                    "price" => 3.00
                ),
                array(
                    "drink_title" => "Alfie Cocktail",
                    "price" => 3.00
                )
                
            );
        
            $json_bar_id = $orderJSON['bar_id'];
            $json_user_id = $orderJSON['user_id'];
            $json_customer_id = $orderJSON['customer_id'];
            $json_bartender_id = $orderJSON['bartender_id'];
    
    
            $bar_id = Bar::where('id', '=', $json_bar_id)->pluck('id')->first();
            $user_id = User::where('id', '=',  $json_user_id)->pluck('id')->first();
            $bartender_id = Bartender::where('id', '=', $json_bartender_id)->pluck('id')->first();
    
    
            $order = new Order();
            $order->created_at = Carbon\Carbon::now()->subDays($counter)->toDateTimeString();//differentiate created_at timestamp:subDays($counter)
            $order->updated_at = Carbon\Carbon::now()->subDays($counter)->toDateTimeString();//differentiate updated_at timestamp:subDays($counter)
            $order->customer_order = json_encode($orderArr);
            $order->bar_id = $bar_id;
            $order->user_id = $user_id;
            $order->bartender_id = $bartender_id;
            $order->save();

    
            $counter--;
    
        
    
    
       }
    
    }
}
