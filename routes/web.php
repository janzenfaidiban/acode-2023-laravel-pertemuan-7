<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home 
Route::get('/', function () {
    return view('pages/home');
});

// Profile 
Route::get('/profile', function () {
    return view('pages/profile');
});

// Products 
Route::get('/products', function () {
    return view('pages/products');
});

// Contact 
Route::get('/contact', function () {
    return view('pages/contact');
});
