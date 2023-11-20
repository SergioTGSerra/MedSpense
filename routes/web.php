<?php

use App\Http\Controllers\AuthController;
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

Route::prefix('/app')->group(function () {

    Route::middleware(['guest'])->group(function () {
        Route::view('/login', 'app.sign-in')->name('login');
        Route::post('/login',[AuthController::class, 'authenticate'])->name('login');
        Route::view('/register', 'app.sign-up')->name('register');
    });

    Route::middleware(['auth'])->group(function () {
        Route::view('/dashboard', 'app.dashboard')->name('dashboard');
        Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
    });

});

Route::prefix('{location?}')->middleware(['guest', 'location'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
});