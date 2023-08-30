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
// echo env('APP_URL')."<br>";


Route::get('/home', function () {
    return view('backend.home');
})->name('dashboard');

Route::get('/table', function () {
    return view('backend.table');
})->name('table');


// Route::get('/', function () {
//     return view('welcome');
// });
