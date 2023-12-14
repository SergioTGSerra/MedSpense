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
        require __DIR__.'/receptionist.php';
        Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
    });

});

Route::view('/terms-of-service', 'app.sign-in')->name('terms-of-service');
Route::view('/privacy-policy', 'landing.privacy-policy')->name('privacy-policy');
Route::view('/patient-listing', 'app.dashboard.patient-listing')->name('patient-listing');

Route::prefix('{location?}')->middleware(['location'])->group(function () {
    Route::view('/', 'landing.home')->name('home');
});