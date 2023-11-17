<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('app.sign-in');
});

Route::get('/dashboard', function () {
    return view('app.index');
});


Route::prefix('{location?}')->middleware('location')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});