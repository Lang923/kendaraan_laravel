<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\InvoiceController;


Route::resource('penyewa', PenyewaController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('kwitansi', KwitansiController::class);
Route::resource('sewa', SewaController::class);
Route::resource('invoice', InvoiceController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// route::get('admin/home', [KendaraanController::class, 'index'])->middleware(['auth', 'admin']);
