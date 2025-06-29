<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::view('/home','home');
Route::view('/about','about');
Route::view('/post','post');
Route::view('/contact','contact');