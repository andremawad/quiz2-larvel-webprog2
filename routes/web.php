<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignOutController;
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
    return view('home');
})->name('home');

Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::post('/home', [DashboardController::class, 'create']);

Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::post('/search', [SearchController::class, 'search']);

Route::post('/signout', [SignOutController::class, 'store'])->name('signout');

Route::get('/signin', [SignInController::class, 'index'])->name('signin');
Route::post('/signin', [SignInController::class, 'store']);

Route::get('/create', [CreateController::class, 'index'])->name('create');
Route::post('/create', [CreateController::class, 'store']);
