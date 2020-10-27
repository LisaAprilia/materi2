<<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agroindustri', function () {
    return view("agroindustri");
});

Route::get('/elektro', function () {
    return view("elektro");
});

Route::get('/sipil', function () {
    return view("sipil");
});

Route::get('/home', function () {
    return view("home");
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/contact', function () {
    return view("contact");
});

Route::get('/cart', function () {
    return view("cart");
});

Route::get('/shop', function () {
    return view("shop");
});

Route::get('/checkout', function () {
    return view("checkout");
});

Route::get('/shop-single', function () {
    return view("shop-single");
});

Route::get('/thankyou', function () {
    return view("thankyou");
});

Route::get('/login', function () {
    return view("login");
});