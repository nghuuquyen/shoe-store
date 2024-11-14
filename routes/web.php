<?php

use App\Http\Controllers\NewArrivalsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/newarrivals', [NewArrivalsController::class, 'index'])->name('newarrivals.index');
