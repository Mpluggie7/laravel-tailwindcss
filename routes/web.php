<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsListController;
use App\Http\Controllers\CategoryListController;
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
    // return view('welcome');
    return redirect()->route('products');
});

Route::controller(ProductsListController::class)->group(function () {
    Route::get('/products/all', 'index')->name('products');
    Route::get('/products/search', 'search')->name('searchProduct');
    Route::get('/products/form-add', 'formAddProduct')->name('formAddProduct');
    Route::post('/products/add', 'insert')->name('addProduct');
    Route::get('/products/form-edit/{id}', 'formEdit');
    Route::post('/products/edit/{id}', 'update');
});

Route::controller(CategoryListController::class)->group(function () {
    Route::get('/category/all','index')->name('categories');
    Route::get('/category/search','search')->name('searchCategory');
    Route::get('/category/form-add','formAddCategory')->name('formAddCategory');
    Route::post('/category/add','insert')->name('addCategory');
    Route::get('/category/form-edit/{id}','formEdit');
    Route::post('/category/edit/{id}','update');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
