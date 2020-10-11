<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/**
 * Pages Routes
 */
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/contacts', [ContactsController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');

/**
 * Resource Products
 */
Route::resource('products', ProductsController::class);
