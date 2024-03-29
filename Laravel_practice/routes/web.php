<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Frontend;
use App\Http\Controllers\Backend\Dashboard;
use App\Http\Controllers\Backend\Product;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BrandController;

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


// for product
Route::get('/product', [Product::class, 'index'])->name('product');
Route::post('/insertproduct', [Product::class, 'insert'])->name('insertproduct');
Route::get('/showproduct', [Product::class, 'show'])->name('showproduct');
Route::get('/deleteproduct/{id}', [Product::class, 'delete'])->name('deleteproduct');
Route::get('/activeproduct/{id}', [Product::class, 'active'])->name('activeproduct');
Route::get('/inactiveproduct/{id}', [Product::class, 'inactive'])->name('inactiveproduct');
Route::get('/editproduct/{id}', [Product::class, 'edit'])->name('editproduct');
Route::post('/updateproduct/{id}', [Product::class, 'update'])->name('updateproduct');
// for Brand
Route::get('/addbrand', [BrandController::class, 'index'])->name('addbrand');
Route::post('/storebrand', [BrandController::class, 'store'])->name('storebrand');




// for category
Route::get('/addcategory', [CategoryController::class, 'index'])->name('addcategory');
Route::get('/showcategory', [CategoryController::class, 'show']);
Route::post('/insertcategory', [CategoryController::class, 'store'])->name('insertcategory');
Route::get('/deletecategory/{id}', [CategoryController::class, 'destroy']);
Route::get('/activecategory/{id}', [CategoryController::class, 'active']);
Route::get('/inactivecategory/{id}', [CategoryController::class, 'inactive']);
Route::get('/editcategory/{id}', [CategoryController::class, 'edit']);
Route::post('/updatecategory/{id}', [CategoryController::class, 'update']);




// for Frontend
Route::get('/home', [Frontend::class, 'index'])->name('home');
