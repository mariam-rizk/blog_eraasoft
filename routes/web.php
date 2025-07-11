<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);
Route::view('/about','about');
Route::view('/post','post');
Route::view('/contact','contact');

Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/create',[PostController::class, 'create']);
Route::post('/posts',[PostController::class, 'store']);
Route::get('/posts/{post}/show',[PostController::class, 'show']);
Route::get('/posts/{post}/edit',[PostController::class, 'edit']);
Route::put('/posts/{post}',[PostController::class, 'update']);
Route::delete('/posts/{post}',[PostController::class, 'destroy']);


Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create',[CategoryController::class, 'create']);
Route::post('/categories',[CategoryController::class, 'store']);
Route::get('/categories/{Category}/edit',[CategoryController::class, 'edit']);
Route::put('/categories/{Category}',[CategoryController::class, 'update']);
Route::delete('/categories/{Category}',[CategoryController::class, 'destroy']);