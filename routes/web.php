<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/**
 * Pages Routes
 */
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

/**
 * Resource Products
 */
Route::resource('products', ProductsController::class);
