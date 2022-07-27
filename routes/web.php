<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    // TODO::rediction on this link if company works
    Route::get('/verify/company', [ProfileController::class, 'companyverify'])->name('company.verify');

    Route::get('/profile', [ProfileController::class, 'index'])->middleware(['authcompany'])->name('profile');

    Route::middleware(['authcompany', 'authprofile'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
});