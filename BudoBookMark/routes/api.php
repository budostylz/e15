<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function () {
    return $request->user();
});

# Two example routes to show how our application could serve up JSON data
Route::get('/books', function (Request $request) {
    return App\Book::all();
});

Route::get('/books/{slug}', function ($slug) {
    return App\Book::findBySlug($slug);
});
