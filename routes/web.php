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

    Route::view('/login', 'app.sign-in')->name('login');
    Route::post('/login',[AuthController::class, 'authenticate'])->name('login');
    Route::view('/register', 'app.sign-up')->name('register');

    Route::middleware(['auth'])->group(function () {
        Route::view('/dashboard', 'app.dashboard')->name('dashboard');
        Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
    });

});

Route::get('/terms-of-service', function () {
    return view('landing.terms-of-service');
})->name('terms-of-service');

Route::get('/privacy-policy', function () {
    return view('landing.privacy-policy');
})->name('privacy-policy');

Route::prefix('{location?}')->middleware(['location'])->group(function () {
    Route::get('/', function () {
        return view('landing.home');
    })->name('home');
});