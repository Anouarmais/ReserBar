<?php

use App\Http\Controllers\Favorito_Controller;
use App\Models\User;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerpApiController;
use App\Http\Controllers\InterfazPrincipalController;
use App\Http\Controllers\Notificaciones_Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/interfaz-principal', function () {
    return view('interfaz-principal');
})->name('interfaz.principal');

Route::middleware('auth')->group(function () {
    Route::get('/notificaciones', [Notificaciones_Controller::class, 'index'])->name('notificaciones');
    Route::get('/favoritos', [Favorito_Controller::class, 'index'])->name('favoritos');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});



Route::get('/serpApi', [SerpApiController::class, 'index']);

require __DIR__.'/auth.php';
