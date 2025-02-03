<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\InnovationsController;

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

// Language switch route
Route::get('lang/{locale}', [LangController::class, 'setLocale'])->name('setLocale');

// ✅ Load home page without redirecting
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/innovations', [InnovationsController::class, 'index'])->name('innovations');

// Additional routes
// Route::get('/outh', function () {
//     return view('outh');
// });

// // Authentication routes
// Auth::routes();

// ✅ Protect only specific routes with `auth` middleware
// Route::group(['middleware' => ['auth']], function() {
//     Route::get('/dashboard', function () {
//         return view('dashboard'); // Change this to your dashboard controller if needed
//     })->name('dashboard');
// });
