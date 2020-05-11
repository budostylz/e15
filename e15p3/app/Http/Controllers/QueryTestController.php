<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Bar;
use App\Drink;
use App\Customer;
use App\Bartender;
use App\Order;
use Auth;
use Carbon;

class QueryTestController extends Controller
{


    /*
        1. validate
        2. actions
        3. return

     */



        /**
    * Demonstrates retrieving data in a one-to-many relationship
    */
    public function getBarInfo()
    {

        //barlocator
        $bar = Bar::where('title', '=', 'Mulligan’s Irish Pub')->first();

        if($bar){
            dump($bar->toArray());
        }else{
            dump('null',$bar);

        }
        # Note that the `books` relationship method is accessed as a dynamic property
        //dump($user->books->toArray());
         
    }

    public function getBarDrinks()
    {

        //drinkinfo
        $bar = Bar::where('id', '=', 1)->first();
        $drinks = $bar->drinks()->wherePivot('bar_id', '=', 1)->get();


        dump($bar->title);

        foreach ($drinks as $drink) {
            dump($drink->toArray());
            dump($drink->toArray()['title']);
            dump($drink->toArray()['drink_image']);
            dump((float)$drink->toArray()['pivot']['price']);
        }


        /*
        # As an example, grab a user we know has books on their list
        $user = User::where('email', '=', 'jill@harvard.edu')->first();

        # Grab the first book on their list
        $book = $user->books()->first();

        # Update and save the notes for this relationship
        $book->pivot->notes = "New note...";
        $book->pivot->save();

        dump($book->toArray());

        return 'Update complete';

        */
    }

    public function getBarDrink()
    {

        //drinkdetails
        $drink = Drink::where('id', '=', 2)->first();

        if($drink){
            dump($drink->toArray());
        }else{
            dump('null',$drink);
        }
        # Note that the `books` relationship method is accessed as a dynamic property
        //dump($user->books->toArray());
         
    }

    public function placeCustomerOrder()
    {
        //drinkinfo
        $drinkTag = 'drink'.strval(1);
        $bar_id = 1;
        $user_id = 3;//Auth::user()->id;
        $customer_id = 2;
        $bartender_id = 2;
        $order_id = (int)(Order::latest()->limit(1)->get()->first()->id) + 1;
        $slug = 'bar-louie-order'.$order_id;

        $orderArr = array(
            array(
                "drink_id" => 1,
                "price" => 3.10
            ),
            array(
                "drink_id" => 2,
                "price" => 3.00
            )
            
        );

        dump(json_encode($orderArr));
        dump(json_decode(json_encode($orderArr)));    
        dump($bar_id, $customer_id, $bartender_id);
        //dump($slug);
        //dump($drinkTag);


        $order = new Order();
        $order->created_at = Carbon\Carbon::now();
        $order->updated_at = Carbon\Carbon::now();
        $order->slug = $slug;
        $order->customer_order = json_encode($orderArr);
        $order->user_id = $user_id;
        $order->bar_id = $bar_id;
        $order->customer_id = $customer_id;
        $order->bartender_id = $bartender_id;
        $order->save();

        dump('order created');
        



         
    }

    public function reviewCustomerOrder()
    {
        //processcustomerorder
          # Eager load `users` to avoid uncessary extra queries in the loop below
          $orders = Order::where('customer_id', '=', 2)
                            ->where('status', '=', null)->get();
          dump($orders);
  
          foreach ($orders as $order) {
              $orderArr = json_decode($order->customer_order);
              for($i = 0; $i < count($orderArr); $i++){
                dump($orderArr[$i]);
                

                    $drink_id = $orderArr[$i]->drink_id;
                    $price = $orderArr[$i]->price;
                    $drink = Drink::where('id', '=', $drink_id)->first();
                    dump($drink_id, $price, $drink->title, $drink->drink_image);
              }
                 

          }

    }

    public function processCustomerOrder()
    {
        //processcustomerorder
        Order::where('user_id', '=', 2)
                            ->where('status', '=', null)->update(['status' => 'complete']);
  
        Order::dump();
          
    }

    public function bartenderReview()
    {
        //bartenderReview
        $orders = Order::where('status', '=', null)->get();
        dump($orders);

        foreach ($orders as $order) {

            $user_id = $order->user_id;
            $user_title = User::where('id', '=', $user_id)->get()->first()->user_name;

            dump($user_title);


        }
          
    }

    public function createCustomer()
    {

        //barlocator
        dump(Auth::user()->id);
        $user_id = Auth::user()->id;
        $customer = Customer::where('user_id', '=', $user_id)->first();

        if(!$customer){
            dump($customer);

            $customer = new Customer();
            $customer->created_at = Carbon\Carbon::now();
            $customer->updated_at = Carbon\Carbon::now();
            $customer->user_id = $user_id;
            $customer->save();

            dump('customer created');
    
    

        }else{
            dump('customer exists');
        }
          
    }

    public function createBartender()
    {

        ///bartenderreview
        dump(Auth::user()->id);
        $user_id = Auth::user()->id;
        $bartender = Bartender::where('user_id', '=', $user_id)->first();

        if(!$bartender){
            dump($bartender);

            $bartender = new Bartender();
            $bartender->created_at = Carbon\Carbon::now();
            $bartender->updated_at = Carbon\Carbon::now();
            $bartender->user_id = $user_id;
            $bartender->save();

            dump('bartender created');
    
    

        }else{
            dump('bartender exists');
        }
          
    }









}
