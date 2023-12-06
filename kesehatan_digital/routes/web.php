<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DapodikController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelasController;

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



Route::get('/getDataPerkembanganArtikel', [App\Http\Controllers\ArtikelController::class, 'getDataPerkembanganArtikel'])->name('getDataPerkembanganArtikel');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/dapodikAdmin', DapodikController::class);
Route::get('/ttd', [App\Http\Controllers\DapodikController::class, 'ttd'])->name('ttd');
Route::post('/create_ttd', [App\Http\Controllers\DapodikController::class, 'create_ttd'])->name('create_ttd');
Route::delete('/destroy_ttd/{id}', [App\Http\Controllers\DapodikController::class, 'destroy_ttd'])->name('destroy_ttd');
// Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'kelas'])->name('kelas');
Route::get('/vaksin', [App\Http\Controllers\DapodikController::class, 'vaksin'])->name('vaksin');
Route::resource('/artikelAdmin', ArtikelController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/dashboardAdmin', DashboardAdminController::class);
Route::resource('/userAdmin', UserController::class);
Route::resource('/kategoriAdmin', KategoriController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
