<?php

use Illuminate\Support\Facades\Route;

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









