<?php

use App\Http\Controllers\ColaboradorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/colaborador',[ColaboradorController::class, 'index'])->name('colaborador.index');
Route::get('/colaborador-create',[ColaboradorController::class,'create'])->name('colaborador.create');
Route::post('/colaborador-store',[ColaboradorController::class,'store'])->name('colaborador.store');
Route::delete('/colaborador-delelte/{id}',[ColaboradorController::class,'destroy'])->name('colaborador.delete');
