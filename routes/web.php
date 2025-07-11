<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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