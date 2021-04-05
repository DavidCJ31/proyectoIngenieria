<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\estudiante;
use App\Models\asesor;
use App\Models\estudiante_detalle;
use App\Models\primer_seguimiento;
use Illuminate\Support\Facades\Auth;
use App\Models\disponibilidad_estudiante;
use Exception;

class EstudianteController extends Controller
{

    public function tablaEstudiantes(){
        $id = Auth::user()->id;
        $rol = Auth::user()->rol;
        if($rol == 4){        
        $estudiante = estudiante::find($id)->user;
        $seguimientos = estudiante::find($id)->seguimiento;
        $lista_asesor_estu = estudiante::find($id)->lista_asesor_estudiante;
        $asesor = asesor::find($lista_asesor_estu[0]->asesor_id)->user;
        $horario = asesor::find($lista_asesor_estu[0]->asesor_id)->horario_asesor;
        $datos = [$estudiante, $seguimientos, $asesor, $horario, $rol];
        return view('tabla_estudiantes')->with('estudiantes',$datos);
        }else{
            $asesor = asesor::find($id)->user;
            $datos = [$asesor,0,0,0,$rol];
            return view('tabla_estudiantes')->with('estudiantes',$datos);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $usuario = estudiante::find(Auth::user()->id)->user;
        $estadoInformacionDetalle = false;
        if (estudiante_detalle::where('estudiante_id', $id)->first()) {
            $estadoInformacionDetalle = true;
        }
        return view('Estudiante/inicioEstudiante')->with('usuario', $usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try {
            $opciones = disponibilidad_estudiante::where('estudiante_id', $id)->get();
            $datos = array();
            $cont = 0;
            
        foreach($opciones as $row)
        {
            $datos[$cont++] = array(
            'dia' => $row->dia,
            'hora' => $row->hora
            );
        }
        return response($datos,200,$datos);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            return response('Erorr a la hora de cargar los horarios disponibles', 400);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
