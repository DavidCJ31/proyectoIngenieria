<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\estudiante;
use App\Models\seguimiento;
use App\Models\asesor;
use App\Models\horario_asesor;

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
        $estudiante = estudiante::find('2324')->user;
        $seguimientos = estudiante::find('2324')->seguimiento;
        $lista_asesor_estu = estudiante::find(123)->lista_asesor_estudiante;
        $asesor = asesor::find($lista_asesor_estu[0]->asesor_id)->user;
        $horario = asesor::find($lista_asesor_estu[0]->asesor_id)->horario_asesor;
        $datos = [$estudiante, $seguimientos, $asesor, $horario];
        return view('tabla_estudiantes')->with('estudiantes',$datos);
    }
}
