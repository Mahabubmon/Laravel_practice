<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\Frontend\Frontend;
use App\Http\Controllers\Backend\Dashboard;

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
Route::get('/dashboard', [Dashboard::class, 'index'])->name('Dashboard');
Route::get('/product', [Dashboard::class, 'product'])->name('product');





// for Frontend
Route::get('/home', [Frontend::class, 'index'])->name('home');
