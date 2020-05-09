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


Route::get('/query1', 'QueryTestController@getBarInfo');
Route::get('/query2', 'QueryTestController@getBarDrinks');
Route::get('/query3', 'QueryTestController@getBarDrink');
Route::get('/query4', 'QueryTestController@placeCustomerOrder');
Route::get('/query5', 'QueryTestController@reviewCustomerOrder');
Route::get('/query6', 'QueryTestController@processCustomerOrder');
Route::get('/query7', 'QueryTestController@bartenderReview');
Route::get('/query8', 'QueryTestController@createCustomer');
Route::get('/query9', 'QueryTestController@createBartender');







Route::get('/test', function(){

    $customersJSON = file_get_contents(database_path('customers.json'));
    $customers = json_decode($customersJSON, true);
    $counter = count($customers['customers']);

    for($i = 0; $i < $counter; $i++){


        $json_user_id = $customers['customers'][$i]['user_id'];
        dump($json_user_id);
        $user_id = User::where('id', '=', $json_user_id)->pluck('id')->first();



        $customer = new Customer();
        $customer->created_at = Carbon\Carbon::now()->subDays($i)->toDateTimeString();//differentiate created_at timestamp:subDays($counter)
        $customer->updated_at = Carbon\Carbon::now()->subDays($i)->toDateTimeString();//differentiate updated_at timestamp:subDays($counter)
        $customer->user_id = $user_id;

       //$customer->save();





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


//time is ticking, so I'll justy handle this in the controllers for now
/*Route::group(['middleware' => 'App\Http\Middleware\CustomerMiddleware'], function()
{
    Route::match('get', '/barlocator', 'BarLocatorController@index');
    Route::match('get', '/checkoutdrinks', 'CheckoutDrinksController@index');

});

Route::group(['middleware' => 'App\Http\Middleware\BartenderMiddleware'], function()
{
    Route::match('get', '/bartenderreview', 'BartenderReviewController@index');
    Route::match('get', '/processcustomerorder', 'ProcessCustomerOrderController@index');

});*/


Route::group(['middleware' => 'auth'], function(){

    Route::get('/barlocator', 'BarLocatorController@index');
    Route::get('/bartenderreview', 'BartenderReviewController@index');
    Route::get('/checkoutdrinks', 'CheckoutDrinksController@index');
    Route::get('/customerconfirmation', 'CustomerConfirmationController@index');
    Route::get('/drinkdetails', 'DrinkDetailsController@index');
    Route::get('/drinkinfo', 'DrinkInfoController@index');
    Route::get('/processcustomerorder', 'ProcessCustomerOrderController@index');

});



Route::get('/', 'HomeController@index');

Auth::routes();

