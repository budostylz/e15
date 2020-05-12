<?php

/**
 * Practice
 */
Route::any('/practice/{n?}', 'PracticeController@index');


/**
 * Miscellaneous mostly-static pages
 */
Route::get('/', 'PageController@welcome');
Route::get('/support', 'PageController@support');


/**
 * Auth required routes
 */
Route::group(['middleware' => 'auth'], function () {

    /**
     * Book routes
     */
    # Create a book
    Route::get('/books/create', 'BookController@create');
    Route::post('/books', 'BookController@store');

    # Update a book
    Route::get('/books/{slug}/edit', 'BookController@edit');
    Route::put('/books/{slug}', 'BookController@update');

    # Show all books
    Route::get('/books', 'BookController@index');

    # Show a book
    Route::get('/books/{slug?}', 'BookController@show');

    # Show the page to confirm deletion of a book
    Route::get('/books/{slug}/delete', 'BookController@delete');

    # Process the deletion of a book
    Route::delete('/books/{slug}', 'BookController@destroy');
    
    # Search for a book
    Route::get('/search', 'BookController@search');

    /**
     * List routes
     */
    # Show your list
    Route::get('/list', 'ListController@show');

    # Page to add a book to your list
    Route::get('/list/{slug?}/add', 'ListController@add');

    # Process adding a book to your list
    Route::post('/list/{slug?}/add', 'ListController@save');
});


/**
 * Auth routes
 */
Auth::routes();
