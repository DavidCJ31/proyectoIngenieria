<?php

namespace App\Http\Controllers;

use App\Models\seguimiento_regular;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        //
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
