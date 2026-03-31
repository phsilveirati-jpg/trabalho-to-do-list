<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Rotas públicas
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing.landing');
})->name('landing');

/*
|--------------------------------------------------------------------------
| Rotas autenticadas básicas
|--------------------------------------------------------------------------
*/

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

/*
|--------------------------------------------------------------------------
| Fluxo de aprovação
|--------------------------------------------------------------------------
*/

Route::get('/pending', function () {
    return view('auth.pending');
})->name('pending');

/*
|--------------------------------------------------------------------------
| 👤 Área do usuário (precisa estar ativo)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'active'])->group(function () {

    // Tasks (seu sistema principal)
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.page');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

});

/*
|--------------------------------------------------------------------------
| 👑 Área do admin
|--------------------------------------------------------------------------
*/

// Rotas de admin separadas para escalabilidade e organização.
require __DIR__ . '/admin.php';

/*
|--------------------------------------------------------------------------
| Auth (login, register, etc)
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';