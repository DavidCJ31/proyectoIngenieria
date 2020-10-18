<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\detalle_curso;
use App\Models\curso;
use App\Models\lista_curso_estudiante;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class ListaCursoEstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $detalle_curso = detalle_curso::where('tutor_id', $id)->get();
        $data = array();
        foreach($detalle_curso as $row)
        {
            $curso = curso::where('codigo', $row->curso_codigo)->get();
            $data[] = array(
            'id_detalle' => $row["id"],
            'curso'   => $curso->nombre,
            'periodo'   => $row["periodo"],
            'hora_inicio'   => $row["hora_inicio"],
            'dia'   => $row["dia"]
            );
        }
        return view('listaCursosEstudiantes')->with($data);
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
        try {
            $curso_estudiante = lista_curso_estudiante::where('detalle_curso_id', $id)->get();
            $estudiantes = User::where('id', $curso_estudiante->estudiante_id)->get();
            $data = array();
        foreach($estudiantes as $row)
        {
            $data[] = array(
            'nombre' => $row["name"],
            'apellido' => $row["apellido"],
            'cedula' => $row["id"],
            'correo'   => $row["email"]
            );
        }
        return response()->json($data);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            return response('Erorr a la hora de cargar los estudiantes', 400);
        }
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
