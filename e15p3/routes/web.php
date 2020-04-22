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

Route::get('/', function () {
    
    /*$app = LRedis::connection();
    $app->set("key102", "value102");
    dump('Redis Test');
    dump($app->get("key102"));
    dump($app);*/
    return view('welcome');
});
