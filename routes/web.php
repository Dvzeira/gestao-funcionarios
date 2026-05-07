<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\Route;

//rotas protegidas
Route::middleware('auth')->group(function () {
    Route::resource('funcionarios', FuncionarioController::class);
});

//register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//redirect raiz
Route::get('/', function () {
    return redirect()->route('funcionarios.index');
});