<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

//products
Route::get('/products', function () {
    return view('products', [
        "title" => "Products"
    ]);
});

//product
Route::get('/product', function () {
    return view('product', [
        "title" => "Name of Product"
    ]);
});

//login
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

//register
Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});
