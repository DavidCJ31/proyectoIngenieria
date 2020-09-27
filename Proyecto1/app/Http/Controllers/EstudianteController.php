<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\estudiante;
use App\Models\seguimiento;
use App\Models\asesor;
use App\Models\horario_asesor;

class EstudianteController extends Controller
{

    public function tablaEstudiantes(){
        $estudiante = estudiante::find('2324')->user;
        $seguimientos = estudiante::find('2324')->seguimiento;
        $lista_asesor_estu = estudiante::find(123)->lista_asesor_estudiante;
        $asesor = asesor::find($lista_asesor_estu[0]->asesor_id)->user;
        $horario = asesor::find($lista_asesor_estu[0]->asesor_id)->horario_asesor;
        $datos = [$estudiante, $seguimientos, $asesor, $horario];
        return view('tabla_estudiantes')->with('estudiantes',$datos);
    }

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
