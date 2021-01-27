<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'MainController@getPagamenti')
    -> name('pagamenti');

Route::get('/home2', 'MainController@getPending')
    -> name('pagamenti2');