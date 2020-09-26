<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EstudianteController;
use App\Models\User;
use App\Models\estudientes;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/informe-mensual', function () {
    return view('informe-mensual');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/calendario', function () {
    return view('calendario');
});


Route::get('/usuarios', [PersonaController::class, 'tablaUsuarios']);
Route::get('/estudiante', [EstudianteController::class, 'tablaEstudiantes']);
