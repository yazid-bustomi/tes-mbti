<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
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

// route home
Route::get('/', [HomeController::class, 'index'])->name('user-home');

// route question
Route::get('/question', [QuestionController::class, 'index'])->name('user-question');

Route::middleware(['auth'])->group(function () {
    // route for result
    Route::resource('/result', ResultController::class);

    // route for admin manajemen user
    Route::resource('/admin/user', AdminController::class);
});

require __DIR__ . '/auth.php';
