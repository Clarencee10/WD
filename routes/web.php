<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyController; 

// login (/home) ROOT
Route::get('/', function () {
    return view('home');
})->name('home'); 

//PART 1 redirect the home to homepage
Route::redirect('/home', '/homepage');

//homepage
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage'); 

//  "About Us" page
Route::get('/about', function () {
    return view('about');
})->name('about'); 

// "Contact Us" page
Route::get('/content', function () {
    return view('content');
})->name('content');

//PART2
// Route with optional parameter kapag hindi provided ang username
Route::get('/user/{username?}', function ($username = null) {
    return view('homepage', ['username' => $username ?? 'GUEST']);
})->where('username', '[A-Za-z]+')->name('user');

//route with a required parameter 
Route::get('/user/{username}', function ($username) {
    // Return the homepage view with the username parameter
    return view('homepage', ['username' => $username]);
})->where('username', '[A-Za-z]+') // Restriction on username alphabetic characters only
->name('user');


//sa forms,  
Route::get('/user', function (Request $request) {
    $username = $request->query('username');
    if ($username) {
        return view('homepage', ['username' => $username]); //show the username sa homepage
    } else {
        return view('homepage', ['username' => 'GUEST']);   // kapag wala username then guest
    }
})->name('user'); 

//sa contacts,
Route::get('/contact', function () {
    return view('contactPage');
})->name('contactPage');

Route::post('/contact', function () {
    $data = request(['name', 'email', 'subject', 'message']);
    
    \Illuminate\Support\Facades\Mail::to('itwebdev10@gmail.com')
        ->send(new \App\Mail\ContactMe($data));

    return redirect(to: '/contact')
        ->with('flash', 'Message Sent Successfully');

});

Route::get('/emailTemplate', [MyController::class, 'showEmailTemplate']);
