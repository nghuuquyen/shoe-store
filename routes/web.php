<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/newarrivals', function () {
    return view('newarrivals');
});
