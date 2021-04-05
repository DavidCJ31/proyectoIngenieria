<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\estudiante_detalle;
use App\Models\estudiante;
use App\Models\asesor;
use App\Models\primer_seguimiento;
use App\Models\lista_curso_estudiante;
use App\Models\reunion;
use App\Models\User;

class PrimerSeguimientoController extends Controller
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
        $primer_seguimiento = primer_seguimiento::where('estado', 'Pendiente')->get();
        return view('Asesor/IndexPrimerSeguimiento')->with('asesor', $asesor)->with('seguimientos', $primer_seguimiento);
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
        return view('Estudiante/CreatePrimerSeguimiento')->with('estudiante', $estudiante)->with('estudianteDetalle', $estudianteDetalle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $primer_seguimiento = new primer_seguimiento;
        $primer_seguimiento->estudiante_id = Auth::user()->id;
        $primer_seguimiento->materiaTutoria = $request->input('campo-materia');
        $primer_seguimiento->profesorCurso = $request->input('campo-profesor');
        $primer_seguimiento->creditoCruso = $request->input('campo-creditos');
        $primer_seguimiento->situacion = $request->input('campo-situacion');
        $primer_seguimiento->tipoTutoria = 'Individual';
        $primer_seguimiento->estado = 'Pendiente';
        $primer_seguimiento->save();
        return redirect('/Estudiante');
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
        $primer = primer_seguimiento::where('estudiante_id', $id)->first();
        return view('Estudiante/ShowPrimerSeguimiento')->with('estudiante', $user)->with('estudianteDetalle', $estudianteDetalle)->with('primerSeguimiento', $primer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        primer_seguimiento::where('estudiante_id', $request->input('campo-estudiante'))
            ->update([
                'aprovacion' => $request->input('campo-aprovada'),
                'detalle_curso_id' => $request->input('campo-curso'),
                'Observaciones' => $request->input('campo-observaciones'),
                'fecha' => $request->input('campo-fecha')
            ]);

        reunion::where('id', $id)->update([
            'estado' => 'Realizada'
        ]);

        $Curso_Estudiante = new lista_curso_estudiante;
        $Curso_Estudiante->detalle_curso_id = $request->input('campo-curso');
        $Curso_Estudiante->estudiante_id = $request->input('campo-estudiante');
        $Curso_Estudiante->save();
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
