<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\reunion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\asesor;

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
        $datosReunion = request()->except(['_token','_method','duracion', 'id']);
        print_r($datosReunion);
        reunion::insert($datosReunion);
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
    public function show($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
