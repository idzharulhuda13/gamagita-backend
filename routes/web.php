<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
//     return view('welcome');
// })->name('welcome');

// Route::get('/test', function () {
//     return view('pages.dashboard');
// });
