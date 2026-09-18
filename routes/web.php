<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokohController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');

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

Route::get('/tokoh/tambah', [TokohController::class, 'create'])
    ->name('tokoh.create');

Route::post('/tokoh/tambah', [TokohController::class, 'store'])
    ->name('tokoh.store');

Route::middleware('auth')->group(function () {

    Route::delete('/tokoh/{id}', [TokohController::class, 'destroy'])
        ->name('tokoh.destroy');

    Route::get('/admin/tokoh', [TokohController::class, 'review'])
        ->name('tokoh.review');

    Route::patch('/admin/tokoh/{id}/approve', [TokohController::class, 'approve'])
        ->name('tokoh.approve');

    Route::patch('/admin/tokoh/{id}/reject', [TokohController::class, 'reject'])
        ->name('tokoh.reject');

});

Route::get('/profil', function () {
    return view('profil');
})->name('profil');