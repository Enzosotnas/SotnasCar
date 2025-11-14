<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CarroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template_site.index');
});

Route::get('/estoque', [CarroController::class, 'estoque'])->name('estoque');

Route::get('/estoque/{carro}', [CarroController::class, 'infos'])->name('estoque.infos');

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('marcas', MarcaController::class);
    Route::resource('modelos', ModeloController::class);
    Route::resource('colors', ColorController::class);
    Route::resource('carros', CarroController::class);
});

require __DIR__.'/auth.php';
