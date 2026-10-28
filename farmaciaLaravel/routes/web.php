<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JugueteController;

Route::get('/', function () {
    return view('login');
});

Route::get('/usuarios/crear', [UserController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');

Route::get('/lotes', [LoteController::class, 'index'])->name('lotes.index');
Route::get('/lotes/crear', [LoteController::class, 'create'])->name('lotes.create');
Route::post('/lotes', [LoteController::class, 'store'])->name('lotes.store');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/juguetes', [JugueteController::class, 'index'])->name('juguetes.index');
Route::get('/juguetes/nuevo', [JugueteController::class, 'create'])->name('juguetes.create');
Route::post('/juguetes/nuevo', [JugueteController::class, 'store'])->name('juguetes.store');