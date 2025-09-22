<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomersController;

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

// Categories routes
//Tampilkan semua kategori
Route::get('/category', [CategoriesController::class, 'index'])->name('category.index');
//Form tambah kategori
Route::get('/category/create', [CategoriesController::class, 'create'])->name('category.create');
//simpan kategori baru
Route::post('/category', [CategoriesController::class, 'store'])->name('category.store');
//Foerm edit kategori baru
Route::get('/category/{id}/edit', [CategoriesController::class, 'edit'])->name('category.edit');
//Update kategori
Route::put('/category/{id}', [CategoriesController::class, 'update'])->name('category.update');
//Hpus kategori 
Route::delete('/category/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');

// Customers routes
//Tanmpilkan semua pelanggan
Route::get('/customers', [CustomersController::class, 'index'])->name('customer.index');
//Form tambah kategori
Route::get('/customer/create', [CustomersController::class, 'create'])->name('customer.create');
//simpan kategori baru
Route::post('/customers', [CustomersController::class, 'store'])->name('customer.store');
//Foerm edit kategori baru
Route::get('/customers/{id}/edit', [CustomersController::class, 'edit'])->name('customer.edit');
//Update kategori
Route::put('/customers/{id}', [CustomersController::class, 'update'])->name('customer.update');
//Hpus kategori 
Route::delete('/customers/{id}', [CustomersController::class, 'destroy'])->name('customer.destroy');
