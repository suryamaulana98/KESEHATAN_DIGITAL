<?php

use App\Models\User;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DapodikController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\profilAdminController;
use App\Http\Controllers\ProfileUserController;
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
        $user = User::all();
        $data = Artikel::with('kategori')->paginate('3');
    return view('user.index_user',compact('user','data'));
})->name('home2');



Auth::routes();

    Route::middleware(['auth'])->group(function () {
// ini bagian admin
    Route::middleware(['role:admin'])->group(function () {
    Route::resource('/dashboardAdmin', DashboardAdminController::class);
    Route::get('/getDataPerkembanganArtikel', [App\Http\Controllers\ArtikelController::class, 'getDataPerkembanganArtikel'])->name('getDataPerkembanganArtikel');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/dapodikAdmin', DapodikController::class);
    Route::get('/ttd', [App\Http\Controllers\DapodikController::class, 'ttd'])->name('ttd');
    Route::post('/create_ttd', [App\Http\Controllers\DapodikController::class, 'create_ttd'])->name('create_ttd');
    Route::delete('/destroy_ttd/{id}', [App\Http\Controllers\DapodikController::class, 'destroy_ttd'])->name('destroy_ttd');
    Route::get('/vaksin', [App\Http\Controllers\DapodikController::class, 'vaksin'])->name('vaksin');
    Route::resource('/artikelAdmin', ArtikelController::class);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/dashboardAdmin', DashboardAdminController::class);
    Route::resource('/userAdmin', UserController::class);
    Route::resource('/kategoriAdmin', KategoriController::class);
    Route::resource('/profilAdmin', profilAdminController::class);
});
// ini bagian user
Route::middleware(['role:user'])->group(function () {
    Route::resource('/home', HomeController::class);
    Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'show']);
    Route::put('/updateProfile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
    });
});

Route::get('error-403', function () {
    return view('403');
})->name('unauthorized');



Route::get('/berita', [App\Http\Controllers\ArtikelController::class, 'berita'])->name('berita');
Route::get('/detail-berita/{id}', [App\Http\Controllers\ArtikelController::class, 'detail_berita'])->name('detail_berita');

Route::post('/komentar', [App\Http\Controllers\HomeController::class, 'komentar'])->name('komentar');
Route::delete('/delete_komentar/{id}', [App\Http\Controllers\HomeController::class, 'delete_komentar'])->name('delete_komentar');

Route::get('/about', [App\Http\Controllers\ArtikelController::class, 'about'])->name('about');

Route::get('/kontak', [App\Http\Controllers\ArtikelController::class, 'kontak'])->name('kontak');












// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

