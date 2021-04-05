<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\estudiante_detalle;
use App\Models\estudiante;
use App\Models\asesor;
use App\Models\seguimiento_regular;
use App\Models\disponibilidad_estudiante;

class SeguimientoRegularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $asesor = asesor::find($id)->user;
        $seguimiento_regular = seguimiento_regular::where('estado', 'Pendiente')->get();
        return view('Asesor/IndexSeguimientoRegular')->with('asesor', $asesor)->with('seguimientos', $seguimiento_regular);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $estudiante = estudiante::find($id)->user;
        $estudianteDetalle = estudiante_detalle::where('estudiante_id', $id)->first();
        return view('Estudiante/CreateSeguimientoRegular')->with('estudiante', $estudiante)->with('estudianteDetalle', $estudianteDetalle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seguimiento_regular = new seguimiento_regular;
        $seguimiento_regular->estudiante_id = Auth::user()->id;
        $seguimiento_regular->situacion = $request->input('campo-situacion');
        $seguimiento_regular->fechaSolicitud = $request->input('campo-fecha');
        $seguimiento_regular->estado = 'Pendiente';
        $seguimiento_regular->save();
        return redirect('/Estudiante');
        //
        $id = Auth::user()->id;
            if(isset($_POST["horarios"])){
                $array = json_decode($_POST["horarios"]);
                $horarios = disponibilidad_estudiante::where('estudiante_id', $id)->where('dia', $array->dia)->where('hora', $array->horaInicio)->get();
                echo $horarios;
                if(!empty($horarios[0])){ //Esto es que ya hay una solicitud de ese horario
                    $message = $array->inicio;
                    return response()->json([
                        'status'=> 'Error', 
                        'message' => $message, 
                    ]);
                }
                $disponibilidadhorario = new disponibilidad_estudiante;                
                $disponibilidadhorario->estudiante_id = $id;
                $disponibilidadhorario->dia = $array->dia;
                $disponibilidadhorario->hora = $array->horaInicio;
                $disponibilidadhorario->save();
            }
            else{
                echo "something went wrong";
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
