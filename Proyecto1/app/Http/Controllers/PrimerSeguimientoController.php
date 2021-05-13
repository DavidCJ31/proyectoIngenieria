<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reunion;
use App\Models\primer_seguimiento;
use Illuminate\Support\Facades\Auth;
use App\Models\lista_curso_estudiante;


class PrimerSeguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $primer_seguimiento = new primer_seguimiento;
        $primer_seguimiento->estudiante_id = $request->input('campo-estudiante');
        $primer_seguimiento->aprovacion = $request->input('campo-aprovada');
        $primer_seguimiento->detalle_curso_id = $request->input('campo-curso');
        $primer_seguimiento->observaciones = $request->input('campo-observaciones');
        $name = $request->file('archivo')->getClientOriginalName();
        $primer_seguimiento->archivo = $name;
        $primer_seguimiento->fecha = $request->input('campo-fecha');

        if ($primer_seguimiento->aprovacion == "Aprobada") {
            $primer_seguimiento->save();

            // Guarda el archivo
            $request->file('archivo')->storeAs('public/' . $primer_seguimiento->estudiante_id, $name);
            reunion::where('id', $request->input('campo-id'))->update([
                'estado' => 'Realizada'
            ]);

            $Curso_Estudiante = new lista_curso_estudiante;
            $Curso_Estudiante->detalle_curso_id = $request->input('campo-curso');
            $Curso_Estudiante->estudiante_id = $request->input('campo-estudiante');
            $Curso_Estudiante->save();
        } else {
        }
        reunion::where('id', $request->input('campo-id'))->update([
            'estado' => 'Realizada'
        ]);
        return redirect('/Calendario');
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
