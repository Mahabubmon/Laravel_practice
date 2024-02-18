<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\Frontend\Frontend;

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
// for backend
Route::get('/', [Test::class, 'index'])->name('index');
Route::get('/about', [Test::class, 'about'])->name('about');
Route::get('/product', [Test::class, 'product'])->name('product');


// for Frontend
Route::get('/home', [Frontend::class, 'index'])->name('home');
