<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/login', function () {
    return view('login');
});