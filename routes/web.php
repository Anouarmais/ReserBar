<?php

use App\Models\User;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerpApiController;
use App\Http\Controllers\RestauranteController;


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

Route::get('/buscar', [RestauranteController::class, 'form'])->name('restaurantes.form');
Route::get('/resultados', [RestauranteController::class, 'buscar'])->name('restaurantes.buscar');

Route::get('/serpApi', [SerpApiController::class, 'index']);

require __DIR__.'/auth.php';
