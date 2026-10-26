<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios/crear', [UserController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');

Route::get('/lotes', [LoteController::class, 'index'])->name('lotes.index');
Route::get('/lotes/crear', [LoteController::class, 'create'])->name('lotes.create');
Route::post('/lotes', [LoteController::class, 'store'])->name('lotes.store');

