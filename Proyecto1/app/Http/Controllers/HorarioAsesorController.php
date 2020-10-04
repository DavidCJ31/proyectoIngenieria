<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\asesor;
use App\Models\horario_asesor;


class HorarioAsesorController extends Controller
{

    public function tablaHorarios(){
        $id = Auth::user()->id;        
        $horario = asesor::find($id)->horario_asesor;
        $datos = [$horario];
        return view('layouts/tabla_horarios_asesor')->with('horarios',$datos);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Asesor/HorarioAsesor');
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
        $horario = new horario_asesor;
        $horario->asesor_id = $request->input('idAsesor');
        $horario->hora_inicio = $request->input('horaInicio');
        $horario->hora_final = $request->input('horaFinal');
        $horario->dia = $request->input('dia');
        $horario->save();
        return view('Asesor/HorarioAsesor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = DB::table('horario_asesors')
        ->select('horario_asesors.*')
        ->where('asesor_id', $id)
        ->get();
        return view('horarios-citas')->with('horario',$horario);
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
