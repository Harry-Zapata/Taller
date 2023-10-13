<?php

use App\Http\Controllers\PropietarioController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('home', [PropietarioController::class, 'home']);
Route::prefix('propietario')->group(function () {
    Route::get('add', [PropietarioController::class, 'vistaadd']);
    Route::post('insert', [PropietarioController::class, 'add']);
    Route::get('borrar/{id}', [PropietarioController::class, 'delete']);
    Route::get('edit/{id}', [PropietarioController::class, 'update']);
    Route::post('update/{id}', [PropietarioController::class, 'edit']);
    Route::get('read/{id}', [PropietarioController::class, 'read']);
});
