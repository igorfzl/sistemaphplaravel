<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AulaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/contador', [AulaController::class, 'contador']);

Route::get('/data-hora', [AulaController::class, 'dataHora']);

Route::get('/usuario/{id}', [AulaController::class, 'usuario']);

Route::get('/produtos', [AulaController::class, 'produtos']);

Route::get('/soma/{num1}/{num2}', [AulaController::class, 'soma']);

Route::get('/formulario', [AulaController::class, 'formulario']);

route::post('/receber-dados', [AulaController::class, 'receber-dados']);

Route::get('/nome/{nome}', [AulaController::class, 'mostraNome']);

Route::get('/mensagem', [AulaController::class, 'mensagem']);

Route::get('/tsi/backend2/teste', function () {
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

require __DIR__ . '/auth.php';
