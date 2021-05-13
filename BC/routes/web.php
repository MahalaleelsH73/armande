<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fashion', function () {
    return view('fashion');
});

Route::get('/admin/new/book/', function () {
    return view('book');
});

Route::post('/store/book', 'BookController@store')->name('store_book');

Route::get('/livres', 'BookController@index');

Route::get('/about', function() {
    return view('about');
});
