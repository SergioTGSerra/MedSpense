<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Receptionist\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');