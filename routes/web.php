<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [
    \App\Http\Controllers\ScheduleController::class,
    'index'
])->name('home');
Route::get('/visimisi', function () {
    return view('profil.visimisi');
})->name('visimisi');
Route::get('/lambangdaerah', function () {
    return view('profil.lambangdaerah');
})->name('lambangdaerah');
Route::get('/pimpinan', function () {
    return view('profil.pimpinan');
})->name('pimpinan');
Route::get('/standardpelayanan', function () {
    return view('profil.standardpelayanan');
})->name('standardpelayanan');
Route::get('/berita', [\App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{berita}', [\App\Http\Controllers\BeritaController::class, 'show'])->name('berita.show');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('schedules', \App\Http\Controllers\ScheduleController::class);
});

require __DIR__ . '/auth.php';
