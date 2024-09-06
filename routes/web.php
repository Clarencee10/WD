<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Root / home route
Route::get('/', function () {
    return view('home', ['message' => 'Welcome to the homepage!']);
})->name('home');

// Redirect from /home to /
Route::get('/home', function () {
    return redirect()->route('home');
});

// Homepage with an optional username parameter
Route::get('/homepage/{username?}', function ($username = 'Guest') {
    return view('homepage', ['username' => $username]);
})->where('username', '[a-zA-Z]+')->name('homepage');

// About Us page with optional username parameter
Route::get('/about/{username?}', function ($username = 'Guest') {
    return view('about', ['username' => $username]);
})->where('username', '[a-zA-Z]+')->name('about');

// Content page with optional username parameter
Route::get('/content/{username?}', function ($username = 'Guest') {
    return view('content', ['username' => $username]);
})->where('username', '[a-zA-Z]+')->name('content');

// Contact Us page with optional username parameter
Route::get('/contact/{username?}', function ($username = 'Guest') {
    return view('contactPage', ['username' => $username]);
})->where('username', '[a-zA-Z]+')->name('contactPage');

// Display a Contact Us form
Route::get('/contact-us', function () {
    return view('contactForm');
})->name('contactForm');

// Route with required username parameter to display a welcome message
Route::get('/user/{username}', function ($username) {
    return view('welcomeUser', ['message' => "Welcome, $username!"]);
})->where('username', '[a-zA-Z]+')->name('welcomeUser');

// Handle form submission and redirect to the homepage with username
Route::post('/homepage', function (Request $request) {
    $loginType = $request->input('login_type');
    $username = $loginType === 'guest' ? 'Guest' : $request->input('username');

    if ($loginType === 'user') {
        $request->validate(['username' => 'required|alpha']);
    }

    return redirect()->route('homepage', ['username' => $username]);
});
