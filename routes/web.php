<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';


Route::middleware(['auth'])->group(function () {

    // TODO::rediction on this link if company works
    Route::get('/verify/company', [ProfileController::class, 'companyverify'])->name('company.verify');

    Route::get('/profile', [ProfileController::class, 'index'])->middleware(['authcompany'])->name('profile');

    Route::middleware(['authcompany', 'authprofile'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });
});