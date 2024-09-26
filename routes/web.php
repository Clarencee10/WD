<?php

use App\Http\Middleware\LogRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;

// Route for displaying the Age verification form
Route::get('/', function () {
    return view('Age');
})->name('Age');

// Group routes logreq
Route::middleware([LogRequests::class])->group(function () {
    Route::post('/', function (Request $request) {
        return view('/adults');
    })->name('age.verify')->middleware(CheckAge::class);//route specific

Route::get('/home', function () {
    return view('home');
})->name('home');

    Route::get('/homepage/{username?}', function ($username = 'Guest') {
        return view('homepage', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('homepage');

    Route::get('/about/{username?}', function ($username = 'Guest') {
        return view('about', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('about');

    Route::get('/content/{username?}', function ($username = 'Guest') {
        return view('content', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('content');

    Route::get('/contact/{username?}', function ($username = 'Guest') {
        return view('contactPage', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('contactPage');

    Route::get('/contact-us', function () {
        return view('contactForm');
    })->name('contactForm');
});

// form submission and redirect to the homepage with username
Route::post('/homepage', function (Request $request) {
    $loginType = $request->input('login_type');
    $username = $loginType === 'guest' ? 'Guest' : $request->input('username');
    if ($loginType === 'user') {
        $request->validate(['username' => 'required|alpha']);
    }
    return redirect()->route('homepage', ['username' => $username]);
});

//Access Denied page
Route::get('/denied', function () {
    return view('denied');
})->name('denied');


// CheckAge middleware to restricted contents
Route::get('/adults', function () {
    return view('adults');
})->name('adults')->middleware(CheckAge::class.':21');


Route::get('/logout', function (Request $request) {
    $request->session()->forget('age');
    return redirect('/');
})->name('logout');