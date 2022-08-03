<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/form_create', [ProductController::class, 'create']);
Route::get('/product/store', [ProductController::class, 'store']);
Route::get('/product/read', [ProductController::class, 'read']);
Route::get('/product/form_update/{id}', [ProductController::class, 'show']);
Route::get('/product/update/{id}', [ProductController::class, 'update']);
Route::get('/product/destroy/{id}', [ProductController::class, 'destroy']);

Route::get('/categori', [CategoryController::class, 'index']);
Route::get('/categori/create', [CategoryController::class, 'create']);
Route::get('/categori/store', [CategoryController::class, 'store']);
Route::get('/categori/read', [CategoryController::class, 'read']);
Route::get('/categori/edit/{id}', [CategoryController::class, 'edit']);
Route::get('/categori/update/{id}', [CategoryController::class, 'update']);
Route::get('/categori/destroy/{id}', [CategoryController::class, 'destroy']);