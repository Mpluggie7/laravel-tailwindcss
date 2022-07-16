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
    return view('welcome');
});

Route::get('/products/all', [ProductsListController::class, 'index'])->name('products');
Route::get('/products/form-add', [ProductsListController::class, 'formAddProduct'])->name('formAddProduct');
Route::post('/products/add', [ProductsListController::class, 'insert'])->name('addProduct');

Route::get('/category/all', [CategoryListController::class, 'index'])->name('categories');
Route::post('/category/add', [CategoryListController::class, 'insert'])->name('addCategory');
Route::get('/category/form-edit/{id}', [CategoryListController::class, 'formEdit']);
Route::post('/category/edit/{id}', [CategoryListController::class, 'update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
