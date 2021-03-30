<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\reunion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\asesor;
use App\Models\primer_seguimiento;

class CalendarioController extends Controller
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
        /*
        $reunion = reunion::where('asesor_id', Auth::user()->id)
            ->where('estudiante_id', $request->input('estudiante_id'))
            ->where('estado', 'Pendiente')
            ->first();

        $datosReunion = request()->except(['_token', '_method', 'id']);

        if ($reunion == null) {
            print_r($datosReunion);
            reunion::insert($datosReunion);
        } else {
            print_r("Error");
        }
*/
        /* $reunion = new reunion;
        $reunion->id = 1;
        $reunion->asesor_id = Auth::user()->id;
        $reunion->estudiante_id = $request->input('estudiante_id');
        $reunion->start = $request->input('start');
        $reunion->end = $request->input('end');
        $reunion->descripcion = $request->input('descripcion');
        $reunion->tipo = $request->input('tipo');
        $reunion->estado = $request->input('estado');
        $reunion->color = $request->input('color');
        $reunion->textColor = $request->input('textColor');
        */
        //$reunion->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $reuniones = reunion::where('asesor_id', Auth::user()->id)->get();
        $data['eventos'] = $reuniones;
        return response()->json($data['eventos']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reunion  $reunion
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
     * @param  \App\Models\reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosReunion = request()->except(['_token', '_method']);
        $respuesta = reunion::where('id', '=', $id)->update($datosReunion);
        return response()->json($respuesta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reuniones = reunion::findOrFail($id);
        reunion::destroy($id);
        return response()->json($id);
    }

    public function AgendarPrimerSeguimiento(Request $request)
    {
        $reunion = reunion::where('asesor_id', Auth::user()->id)
            ->where('estudiante_id', $request->input('estudiante_id'))
            ->where('estado', 'Pendiente')
            ->first();
        $datosReunion = request()->except(['_token', '_method', 'id']);

        if ($reunion == null) {
            print_r($datosReunion);
            reunion::insert($datosReunion);
            $primer_seguimiento = new primer_seguimiento;
            $primer_seguimiento->estudiante_id = primer_seguimiento::where('estudiante_id', $request->input('estudiante_id'))->update(['estado' => 'Revisado']);
        } else {
            print_r("Error");
        }
    }

    public function EliminarPrimerSeguimiento(Request $request,$id)
    {
        $reuniones = reunion::findOrFail($id);
        reunion::destroy($id);
        $primer_seguimiento = new primer_seguimiento;
        $primer_seguimiento->estudiante_id = primer_seguimiento::where('estudiante_id', $request->input('estudiante_id'))->update(['estado' => 'Pendiente']);
        return response()->json($id);
    }
}
