<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
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
Route::get('/admin/new/article', function() {
    return view('article');
});
Route::post('/store/article', 'ArticleController@store')->name('store_article');
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/admin/dashboard', function () {
    return view('admin');
});
