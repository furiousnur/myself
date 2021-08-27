<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('frontend.home');
//});
//
//Route::get('/portfolio-details', function () {
//    return view('frontend.portfolio-details');
//});
//
//Route::get('/blog-details', function () {
//    return view('frontend.blog-details');
//});

Route::get('/{any?}', function () {
    return view('app');
})->where('any','[\/\w\.-]*');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
