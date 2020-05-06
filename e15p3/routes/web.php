<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Bar;
use App\Drink;
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

    $barDrinksJSON = file_get_contents(database_path('bar_drink.json'));
    $barDrinks = json_decode($barDrinksJSON, true);
    $counter = count($barDrinks['bar_drinks']);

    dump($counter);
    

    for ($i = 0; $i < $counter; $i++){
    
        $barID = $barDrinks['bar_drinks'][$i]['bar_id'];
        $drinkID = $barDrinks['bar_drinks'][$i]['drink_id'];

        $bar = Bar::where('id', '=', $barID)->first();
        $drink = Drink::where('id', '=', $drinkID)->first();



        //$drink->bars()->save($bar);


       //dump('$bar_id', $customer_id);
       //dump($bar->slug);
       //dump($drink->title);
       //dump('drink id:',$drinkID);




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










Auth::routes();

