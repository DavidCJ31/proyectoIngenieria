<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/logged_in', function(){
    $rol = Auth::user()->rol;
    if($rol == 1){//Administrador
        return view('Administrador/dashboardAdministrador');
    }
    if($rol == 2){//Asesor
        return view('Asesor/dashboardAsesor');
    }
    if($rol == 3){//Estudiante
        return view('Estudiante/dashboardEstudiante');
    }
    if($rol == 4){//Tutor
        return view('Tutor/dashboardTutor');
    }
    else{
        return view('auth/login');
    }
});

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




Route::get('/asistencia', [PersonaController::class, 'tablaUsuarios']);
Route::get('/usuarios', [PersonaController::class, 'tablaUsuarios']);
Route::get('/estudiante', [EstudianteController::class, 'tablaEstudiantes']);

