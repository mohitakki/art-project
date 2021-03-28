<?php

use App\Http\Controllers\Website\AuthController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register');
Route::group(['middleware'=> 'user_auth'], function () {

});

/*
|--------------------------------------------------------------------------
| Web Routes for Admin Access
|--------------------------------------------------------------------------
|
|
*/
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

