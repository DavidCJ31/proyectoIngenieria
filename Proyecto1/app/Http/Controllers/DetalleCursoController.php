<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\detalle_curso;
use App\Models\curso;
use App\Models\tutor;
use Illuminate\Support\Facades\DB;


class DetalleCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = detalle_curso::all();
        return view('SuperAdministrador/CursoDetallado/indexCursoDetallados')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutores = tutor::all();
        $cursos = curso::all();
        return view('SuperAdministrador/CursoDetallado/createCursosDetallados')->with('cursos', $cursos)->with('tutores', $tutores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new detalle_curso;
        $curso->tutor_id = $request->input('tutor');
        $curso->curso_codigo = $request->input('cursoCodigo');
        $curso->anno = $request->input('anno');
        $curso->periodo = $request->input('periodo');
        $curso->num_periodo = $request->input('numPeriodo');
        $curso->hora_inicio = $request->input('horaInicio');
        $curso->hora_final = $request->input('horaFinal');
        $curso->dia = $request->input('dia');


        $cursoEsta = detalle_curso::where([
            ['tutor_id', '=', $curso->tutor_id],
            ['curso_codigo', '=', $curso->curso_codigo],
            ['anno', '=', $curso->anno],
            ['periodo', '=', $curso->periodo],
            ['num_periodo', '=', $curso->num_periodo],
            ['hora_inicio', '=', $curso->hora_inicio],
            ['hora_final', '=', $curso->hora_final],
            ['dia', '=', $curso->dia]
        ])->get();

            if($cursoEsta->count() == 0){
                $curso->save();
                
            }
            else{

            }


        return redirect('/CursosDetallados');
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
