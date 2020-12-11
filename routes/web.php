<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.auth');
});

Route::post('/login','Auth\AuthController@authentication')->name('auth');
