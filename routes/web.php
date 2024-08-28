<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home/{fragment?}', [HomeController::class, 'index'])->name('user-home');
Route::get('/question', [QuestionController::class, 'index'])->name('user-question');
Route::resource('/result', ResultController::class);

Route::get('/tes', function(){
    return view('tesdata');
});

require __DIR__.'/auth.php';
