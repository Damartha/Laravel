<?php

use App\Http\Controllers\AdminControler;
use App\Http\Controllers\FrontpageControler;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userControler;
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
    return view('welcome');
});
Route::get('/tumbuhan/{id}', [userControler::class, 'show_tumbuhan'])->name('tumbuhan.show');
Route::get('/hewan/{id}', [userControler::class, 'show_hewan'])->name('hewan.show');
Route::get('/landingpage', [UserControler::class, 'landingpage']) -> name('landingpage');
Route::get('/search_tumbuhan', [UserControler::class, 'search_tumbuhan']) -> name('search_tumbuhan');
Route::get('/detail_tumbuhan', [userControler::class, 'detail_tumbuhan']) -> name('detail_tumbuhan');
Route::get('/tumbuhan', [userControler::class, 'tumbuhan']) -> name('tumbuhan');
Route::get('/hewan', [userControler::class, 'hewan']) -> name('hewan');
Route::get('/login2', [FrontpageControler::class, 'login2']) -> name('login2');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin_home', [AdminControler::class, 'admin_home']) -> name('admin_home');
    Route::post('/store', [AdminControler::class, 'store']) -> name('store');
    Route::get('/create', [AdminControler::class, 'create']) -> name('create');
    Route::get('/destroy/{id}', [AdminControler::class, 'destroy']) -> name('destroy');
    Route::post('/update/{id}', [AdminControler::class, 'update']) -> name('update');
    Route::get('/admin_home/{id}', [AdminControler::class, 'edit']) -> name('edit');
    Route::get('/admin_hewan', [AdminControler::class, 'admin_hewan']) -> name('admin_hewan');
    Route::get('/tambah_edit', [AdminControler::class, 'create']) -> name('tambah_edit');
    Route::get('/search', [AdminControler::class, 'search']) -> name('search');
    Route::get('/tambah_editBinatang', [AdminControler::class, 'tambah_editBinatang']) -> name('tambah_editBinatang');
    Route::post('/store_hewan', [AdminControler::class, 'store_hewan']) -> name('store_hewan');
    Route::get('/create_hewan', [AdminControler::class, 'create_hewan']) -> name('create_hewan');
    Route::get('/destroy_hewan/{id}', [AdminControler::class, 'destroy_hewan']) -> name('destroy_hewan');
    Route::post('/update_hewan/{id}', [AdminControler::class, 'update_hewan']) -> name('update_hewan');
});

require __DIR__.'/auth.php';
