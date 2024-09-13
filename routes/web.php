<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('coffees', function () {
    return view('coffees');
})->name('coffees');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('inventory', function () {
    return view('inventory');
})->name('inventory');

