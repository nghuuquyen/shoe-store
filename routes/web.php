<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactDashboardController;
use App\Http\Controllers\NewArrivalsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/newarrivals', [NewArrivalsController::class, 'index'])->name('newarrivals.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::prefix('admin')->group(function () {
    Route::get('/contacts', [ContactDashboardController::class, 'index'])->name('admin.contacts.index');
});
