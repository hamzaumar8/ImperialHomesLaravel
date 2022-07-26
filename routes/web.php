<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\VendorController;
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


    // Admin Routes 
    Route::middleware(['authadmin'])->group(function () {
        Route::group(['prefix' => 'admin'], function () {
            Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

            Route::group(['prefix' => 'vendors'], function () {
                Route::get('/', [VendorController::class, 'index'])->name('admin.vendors');
                Route::get('/{company}/view', [VendorController::class, 'show'])->name('company.view');
                Route::get('/{company}/edit', [VendorController::class, 'edit'])->name('company.edit');
                Route::post('/vendors', [VendorController::class, 'index'])->name('company.destroy');
            });
        });
    });
});