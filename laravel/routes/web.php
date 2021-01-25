<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'MainController@index')
    -> name('home');
Route::get('/blog', 'MainController@blog')
    -> name('blog');
Route::get('/about', 'MainController@about')
    -> name('about');
