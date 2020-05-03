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
        
            $json_bar_id = $orderJSON['bar_id'];
            $json_customer_id = $orderJSON['customer_id'];
            $json_bartender_id = $orderJSON['bartender_id'];
    
    
            $bar_id = Bar::where('id', '=', $json_bar_id)->pluck('id')->first();
            $customer_id = Customer::where('user_id', '=', $json_customer_id)->pluck('user_id')->first();
            $bartender_id = Bartender::where('user_id', '=', $json_bartender_id)->pluck('user_id')->first();
    
    
            $order = new Order();
            $order->created_at = Carbon\Carbon::now()->subDays($counter)->toDateTimeString();//differentiate created_at timestamp:subDays($counter)
            $order->updated_at = Carbon\Carbon::now()->subDays($counter)->toDateTimeString();//differentiate updated_at timestamp:subDays($counter)
            $order->slug = $slug;
            $order->customer_order = json_encode($orderJSON['customer_order']);
            $order->bar_id = $bar_id;
            $order->customer_id = $customer_id;
            $order->bartender_id = $bartender_id;
            $order->save();

    
            $counter--;
    
        
    
    
       }
    
    }
}
