<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\NovedadController;
use App\Http\Controllers\Admin\NovedadesController as AdminNovedadesController;


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

// Ruta Home (ya la tenés bien definida)
Route::get('/', fn() => view('home'))->name('home');


// Rutas públicas
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/novedades', [NovedadController::class, 'index']);

// Rutas protegidas: Admin ABM de novedades
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('novedades', AdminNovedadesController::class)->parameters([
        'novedades' => 'novedad'
    ]);
});



// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


