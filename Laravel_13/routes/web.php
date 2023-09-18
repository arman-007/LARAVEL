<?php

use App\Http\Controllers\CategoryControler;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('backend.home');
})->name('dashboard');

Route::get('/table', function () {
    return view('backend.table');
})->name('table');

Route::get('/chart', function () {
    return view('backend.chart');
})->name('chart');


Route::get('/categories', [CategoryControler::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryControler::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryControler::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoryControler::class, 'show'])->name('categories.show');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
