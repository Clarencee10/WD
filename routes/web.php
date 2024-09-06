<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Root / home route
Route::get('/', function () {
    return view('home');
})->name('home');

// sa homepage, optional username parameter
Route::get('/homepage/{username?}', function ($username = 'Guest') {
    return view('homepage', ['username' => $username]);
})->name('homepage');

// About Us 
Route::get('/about/{username?}', function ($username = 'Guest') {
    return view('about', ['username' => $username]);
})->name('about');

// Content 
Route::get('/content/{username?}', function ($username = 'Guest') {
    return view('content', ['username' => $username]);
})->name('content');

// Contact
Route::get('/contact/{username?}', function ($username = 'Guest') {
    return view('contactPage', ['username' => $username]);
})->name('contactPage');

// handle form submission and redirect to the homepage with username
Route::post('/homepage', function (Request $request) {
    $loginType = $request->input('login_type');
    $username = $loginType === 'guest' ? 'Guest' : $request->input('username');

    if ($loginType === 'user') {
        $request->validate(['username' => 'required|alpha']);
    }

    return redirect()->route('homepage', ['username' => $username]);
});
