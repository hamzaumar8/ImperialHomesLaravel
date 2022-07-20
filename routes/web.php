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
    //Profile route for user updating INFO
    Route::get('/verify/profile', [ProfileController::class, 'index'])->name('profile');

    Route::middleware(['authprofile'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
});