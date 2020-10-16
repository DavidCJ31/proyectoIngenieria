<?php


use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EstudianteDetalleController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\HorarioAsesorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\SeguimientoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    $usuario = Auth::user();
    if($rol == 1){//Administrador
        return view('Administrador/inicioAdministrador')->with('usuario',$usuario);
    }
    if($rol == 2){//Asesor
        return view('Asesor/inicioAsesor')->with('usuario',$usuario);
    }
    if($rol == 3){//Estudiante
        return view('Estudiante/inicioEstudiante')->with('usuario',$usuario);
    }
    if($rol == 4){//Tutor
        return view('Tutor/inicioTutor')->with('usuario',$usuario);
    }
    else{
        return view('auth/login');
    }
});

// Rutas Super Administrador

// Rutas Administrador
Route::get('/Tutores', [AdministradorController::class, 'tablaTutores']);

// Rutas Asesor

// Rutas Tutores

//Rutas Estudiantes

Route::resources([
    '/Asesor' => AsesorController::class,
    '/Estudiante' => EstudianteController::class,
    '/Tutor' => TutorController::class,
    '/Administrador' => AdministradorController::class,
    '/User' => UserController::class,
    '/EstudianteDetalle' => EstudianteDetalleController::class,
    '/AgendarSeguimientos' => SeguimientoController::class
    ]);

Route::get('/', function () {
    return view('welcome.welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('/horario-citas', HorarioAsesorController::class);

Route::get('/informe-mensual', function () {
    return view('informe-mensual');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/referencia', function () {
    return view('referencia-orientacion');
});

Route::get('/prueba', function(){
    return view('Tutor/prueba');
});



//Route::resource('/horario', HorarioAsesorController::class);
Route::resource('/Cursos', CursoController::class);


Route::get('/asistencia', function(){
    return view('Tutor/asistencia');
});

Route::get('/usuarios', [PersonaController::class, 'tablaUsuarios']);
Route::get('/estudiantes-asignados',[TutorController::class,'vistaEstudiante']);
Route::get('/estudiante', [EstudianteController::class, 'tablaEstudiantes']);
//Route::get('/horarioAsesor', [HorarioAsesorController::class, 'tablaHorarios']);

Route::get('/contrato', function () {
    return view('contratoDeTutoria');
});
