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
use App\Models\solicitudes_primer_seguimiento;
use App\Models\solicitudes_seguimiento_regular;
use Exception;

class EstudianteController extends Controller
{
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
        $name = $request->file('file')->getClientOriginalName();
        $id = Auth::user()->id;
        $path = $request->file('file')->storeAs('public/archivos', $id);

        $estudiante = new estudiante;

        //$file->name = $name;
        $estudiante->id = $id;
        $estudiante->especialidad = "Bien";
        $estudiante->archivo = $name;

        $estudiante->save();

        return redirect('Estudiante')->with('status', 'File Has been uploaded successfully in laravel 8');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $opciones = disponibilidad_estudiante::where('estudiante_id', $id)->get();
            $datos = array();
            $cont = 0;

            foreach ($opciones as $row) {
                $datos[$cont++] = array(
                    'dia' => $row->dia,
                    'hora' => $row->hora
                );
            }

            return response($datos, 200, $datos);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            return response('Erorr a la hora de cargar los horarios disponibles', 400);
        }
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

        echo "entro aqui";

        /*
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
        */
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

        estudiante::where('id', $id)
            ->update([
                'archivo' => $request->file('file')->getClientOriginalName()
            ]);
        $request->file('file')->storeAs('public/' . $id, $id);
        return redirect('/Estudiante');
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

    public function ValidarDetalle()
    {
        $id = Auth::user()->id;
        $estudianteDetalle = estudiante_detalle::where('estudiante_id', $id)->first();
        if ($estudianteDetalle != NULL) {
            return $estudianteDetalle;
        } else {
            return null;
        }
    }

    public function ValidarPrimerSeguimiento()
    {
        $id = Auth::user()->id;
        $estudianteDetalle = estudiante_detalle::where('estudiante_id', $id)->first();
        if ($estudianteDetalle == NULL) {
            return null;
        }
        $primer_seguimiento = solicitudes_primer_seguimiento::where('estudiante_id', $id)->orderBy('id', 'desc')->first();
        if ($primer_seguimiento != NULL) {
            if ($primer_seguimiento->estado == "Revisado") {
                return 1;
            } else {
                return 2;
            }
        } else {
            return 3;
        }
    }

    public function ValidarSeguimientoNormal()
    {
        $id = Auth::user()->id;
        $primer_seguimiento = solicitudes_primer_seguimiento::where('estudiante_id', $id)->orderBy('id', 'desc')->first();
        $seguimiento_regular = solicitudes_seguimiento_regular::where('estudiante_id', $id)->orderBy('id', 'desc')->first();
        if ($primer_seguimiento != NULL && $primer_seguimiento->estado == "Pendiente") {
            return 1;
        }
        if ($seguimiento_regular != NULL && $seguimiento_regular->estado == "Pendiente") {
            return 2;
        }
        else{
            return 3;
        }
    }
}
