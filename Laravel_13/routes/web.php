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
echo env('APP_URL')."<br>";


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('ecommerce.home');
});
Route::get('/about', function () {
    return view('ecommerce.about');
});
Route::get('/contact', function () {
    return view('ecommerce.contact');
});
Route::get('/login', function () {
    return view('ecommerce.login');
});
Route::get('/signup', function () {
    return view('ecommerce.signup');
});
