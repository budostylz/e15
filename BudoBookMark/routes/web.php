<?php

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

Route::get('/books', 'BookController@index'); //GET

// Make sure the create route comes before `/books/{title?}` so it takes precedence
Route::get('/books/create', 'BookController@create');

// Note the use of the post method in this route
Route::post('/books', 'BookController@store'); //POST

Route::get('/books/{title}', 'BookController@show');

Route::get('/', 'BookController@welcome');

Route::get('/search', 'BookController@search');



