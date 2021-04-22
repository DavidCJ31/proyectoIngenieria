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
use App\Models\User;
use App\Models\reunion;

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
        $s = seguimiento_regular::where('estudiante_id', Auth::user()->id)
            ->where('estado', 'Pendiente')->get();
        //print_r($s);

        if (empty($s[0])) {
            $seguimiento_regular = new seguimiento_regular;
            $seguimiento_regular->estudiante_id = Auth::user()->id;
            $seguimiento_regular->situacion = $request->input('situacion');
            $seguimiento_regular->estado = $request->input('estado');
            $seguimiento_regular->fechaSolicitud = $request->input('fechaSolicitud');
            $seguimiento_regular->save();
            print_r('Exito');
        } else {
            print_r('Error');
        }

        disponibilidad_estudiante::where('estudiante_id', Auth::user()->id)->delete();

        $lista_horarios = json_decode(stripslashes($_POST['horarios']));
        if ($lista_horarios == null) {
        } else {
            foreach ($lista_horarios as $horario) {
                $h = new disponibilidad_estudiante;
                $h->estudiante_id = Auth::user()->id;
                $h->dia = $horario->dia;
                $h->hora = $horario->horaInicio;
                $h->save();
            }
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
        $estudiante = estudiante::where('id', $id)->first();
        $user = User::find($estudiante->id);
        $estudianteDetalle = estudiante_detalle::where('estudiante_id', $id)->first();
        $primer = seguimiento_regular::where('estudiante_id', $id)->where('estado', 'Pendiente')->first();
        return view('Estudiante/ShowSeguimientoRegular')->with('estudiante', $user)->with('estudianteDetalle', $estudianteDetalle)->with('SeguimientoRegular', $primer);
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
        seguimiento_regular::where('estudiante_id', $request->input('campo-estudiante'))
            ->update([
                'aprovacion' => $request->input('campo-aprovada'),
                'detalle_curso_id' => $request->input('campo-curso'),
                'Observaciones' => $request->input('campo-observaciones'),
                'fecha' => $request->input('campo-fecha')
            ]);

        reunion::where('id', $id)->update([
            'estado' => 'Realizada'
        ]);
        return redirect('/Calendario');
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
