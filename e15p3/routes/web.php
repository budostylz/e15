<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Bar;
use App\Customer;
use App\Bartender;
use App\Order;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Redis Test 
 /*$app = LRedis::connection();
    $app->set("key102", "value102");
    dump('Redis Test');
    dump($app->get("key102"));
    dump($app);
*/

Route::get('/test', function(){

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


       dump('customer id', $customer_id);
       dump('bartender id', $bartender_id);



        $counter--;

    


   }



});

Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

Route::get('/barlocator', function () {
    return view('barlocator');
});

Route::get('/bartenderreview', function () {
    return view('bartenderreview');
});

Route::get('/checkoutdrinks', function () {
    return view('checkoutdrinks');
});

Route::get('/customerconfirmation', function () {
    return view('customerconfirmation');
});

Route::get('/drinkdetails', function () {
    return view('drinkdetails');
});

Route::get('/drinkinfo', function () {
    return view('drinkinfo');
});


Route::get('/', function () {
    return view('home');
});


Route::get('/processcustomerorder', function () {
    return view('processcustomerorder');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/signin', function () {
    return view('signin');
});









