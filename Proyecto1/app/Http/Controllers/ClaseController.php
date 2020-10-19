<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\detalle_curso;
use App\Models\clase;
use App\Models\curso;
use Illuminate\Http\Request;
use App\Models\clase;
use App\Models\detalle_curso;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $detallesCursos = detalle_curso::where('tutor_id',$id)->get();
        $data = array();
        foreach($detallesCursos as $row)
        {
            $clases = clase::where('detalle_curso_id', $row->curso_codigo)->get();
            $curso = curso::where('codigo', $row->curso_codigo)->get();
            foreach($clases as $clase){
                $data[] = array(    
                    'codigo_curso' => $row->curso_codigo,
                    'nombre_curso'   => $curso->nombre,
                    'aula_codigo'  => $clase["aula_codigo"],
                    'hora_inicio' => $clase["hora_inicio"],
                    'fecha'  => $clase["fecha"]
                    );
            }
            
        }
        return view("Tutor/reporte_clases")->with($data);

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
