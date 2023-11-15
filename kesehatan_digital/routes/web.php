<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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
Route::resource('/artikelAdmin', ArtikelController::class);
Route::resource('/dashboardAdmin', DashboardAdminController::class);
Route::resource('/userAdmin', userController::class);