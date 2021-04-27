<?php

namespace App\Http\Controllers;

use App\Models\seguimiento_regular;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reunion;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class SeguimientoRegularController extends Controller
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
        $seguimiento_regular = new seguimiento_regular;
        $seguimiento_regular->estudiante_id = $request->input('campo-estudiante');
        $seguimiento_regular->situacion = $request->input('campo-sintesis');
        $seguimiento_regular->acuerdos = $request->input('campo-acuerdos');
        // Guarda el archivo
        $name = $request->file('archivo')->getClientOriginalName();
        $seguimiento_regular->archivo = $name;
        $request->file('archivo')->storeAs('public/' . $seguimiento_regular->estudiante_id, $name);
        //----------------------------------------------------------------

        $seguimiento_regular->fecha = $request->input('campo-fecha');
        $seguimiento_regular->save();

        $data = [
            'estudiante_id' =>  $request->input('campo-estudiante'),
            'situacion' =>  $request->input('campo-sintesis'),
            'acuerdos' =>  $request->input('campo-acuerdos')
        ];
        $pdf = PDF::loadView('PDF/seguimientoRegular', $data)
            ->save(storage_path('app/public/' . $seguimiento_regular->estudiante_id) . '/' . 'seguimientoRegular-' . $seguimiento_regular->estudiante_id . '-' . $seguimiento_regular->id . '.pdf');

        reunion::where('id', $request->input('campo-id'))->update([
            'estado' => 'Realizada'
        ]);
        return redirect('/Calendario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seguimiento_regular  $seguimiento_regular
     * @return \Illuminate\Http\Response
     */
    public function show(seguimiento_regular $seguimiento_regular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seguimiento_regular  $seguimiento_regular
     * @return \Illuminate\Http\Response
     */
    public function edit(seguimiento_regular $seguimiento_regular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\seguimiento_regular  $seguimiento_regular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        seguimiento_regular::where('estudiante_id', $request->input('campo-estudiante'))->where('estado')
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
     * @param  \App\Models\seguimiento_regular  $seguimiento_regular
     * @return \Illuminate\Http\Response
     */
    public function destroy(seguimiento_regular $seguimiento_regular)
    {
        //
    }
}
