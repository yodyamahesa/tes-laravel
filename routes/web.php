<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewController;

use App\Http\Controllers\Auth\LogoutController;

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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/review', [ReviewController::class, 'index'])->name('review-index');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/write-review', [ReviewController::class, 'create'])->name('review-create');
    Route::post('/write-review', [ReviewController::class, 'store'])->name('review-store');
});


Auth::routes();
