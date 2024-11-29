<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home']);

Route::get('products/add', [ProductController::class, 'form']);
Route::post('products/add', [ProductController::class, 'create']);
Route::get('/products/edit/{id}', [ProductController::class, 'editForm']);
Route::put('/products/edit/{id}', [ProductController::class, 'edit']);
Route::get('/products/{id}', [ProductController::class, 'single']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);

Route::get('/blogs', [BlogController::class, 'blog']);
Route::get('/blogs/add', [BlogController::class, 'form']);
Route::post('/blogs/add', [BlogController::class, 'create']);
Route::get('/blogs/edit/{id}', [BlogController::class, 'editBlogForm']);
Route::get('/blogs/{id}', [BlogController::class, 'blogpost']);
