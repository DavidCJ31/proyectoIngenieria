<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{

    public function tablaCursos(){
        $detalle_cursos = DB::table('detalle_cursos')
        ->select('detalle_cursos.*')
        ->orderBy('id','DESC')
        ->get();
        (array) $cursos = DB::table('cursos')
        ->select('cursos.*')
        ->orderBy('codigo','DESC')
        ->get();
        $All_Info = array();
        foreach($detalle_cursos as $curso){
            $info_cursos = array();
            $info_cursos[]= $curso->id;
            $info_cursos[]= $curso->tutor_id;
            $info_cursos[]= $curso->anno;
            $info_cursos[]= $curso->periodo;
            $info_cursos[]= $curso->num_periodo;
            $info_cursos[]= $curso->hora_inicio;
            $info_cursos[]= $curso->hora_final;
            $info_cursos[]= $curso->dia;
            foreach($cursos as $cur){
                if($curso->curso_codigo == $cur->codigo){
                    $info_cursos[]= $cur->nombre;
                    $info_cursos[]= $cur->curso_necesario;
                    $All_Info[]=$info_cursos;
                }
            }
        }
        return view('Coordinacion')->with('info_cursos',$All_Info);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = curso::all();
        return view('SuperAdministrador/Curso/indexCurso')->with('cursos',$cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SuperAdministrador/Curso/createCursos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new curso;
        $curso->codigo = $request->input('cursoCodigo');
        $curso->nombre = $request->input('cursoNombre');
        $curso->curso_necesario = $request->input('cursoNecesario');
        $curso->save();
        return redirect('/Cursos');
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
