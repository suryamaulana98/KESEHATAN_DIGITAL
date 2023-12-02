<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DapodikController;
use App\Http\Controllers\DashboardAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});


Route::resource('/dashboardAdmin', DashboardAdminController::class);
Route::resource('/userAdmin', userController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/dapodikAdmin', DapodikController::class);
Route::resource('/artikelAdmin', ArtikelController::class);
Route::resource('/dashboardAdmin', DashboardAdminController::class);
Route::resource('/userAdmin', UserController::class);
