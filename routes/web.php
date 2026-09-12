<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokohController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');

Route::get('/tokoh', [TokohController::class, 'index'])
    ->name('tokoh');

Route::get('/login', [LoginController::class, 'show'])
    ->name('login');

Route::get('/register', [RegisterController::class, 'show'])
    ->name('register');

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('/tokoh/tambah', [TokohController::class, 'create'])
        ->name('tokoh.create');

    Route::post('/tokoh/tambah', [TokohController::class, 'store'])
        ->name('tokoh.store');
    
    Route::delete('/tokoh/{id}', [TokohController::class, 'destroy'])
        ->name('tokoh.destroy');

});

Route::get('/profil', function () {
    return view('profil');
})->name('profil');