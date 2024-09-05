<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
     return view('welcome'); 
 })->name('home');

 Route::get('/content', function () {
     return view('content');
 })->name('content');

 Route::get('/about', function () {
     return view('about');
 })->name('about');
