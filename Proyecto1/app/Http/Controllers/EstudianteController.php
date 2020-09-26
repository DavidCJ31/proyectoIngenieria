<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\estudiante;

class EstudianteController extends Controller
{
    //
    /*
    public function tablaEstudiantes(){
        $estudiante = \DB::table('estudiantes')
        ->select('id','especialidad')->where('id','207600154')
        ->get();
        return view('tabla_estudiantes')->with('estudiantes',$estudiante);
    }
    */
    public function tablaEstudiantes(){
        $estudiante = estudiante::find('207600154')->user;
        return view('tabla_estudiantes')->with('estudiantes',$estudiante);
    }
}
