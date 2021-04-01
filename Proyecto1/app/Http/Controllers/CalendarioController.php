<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\reunion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\asesor;
use App\Models\primer_seguimiento;
use Illuminate\Support\Facades\DB;

class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idAsesor = Auth::user()->id;
        $asesor = asesor::find($idAsesor)->user;
        return view('Asesor/indexReuniones')->with('asesor', $asesor);
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
        $reunion = reunion::where('asesor_id', Auth::user()->id)
            ->where('estudiante_id', $request->input('estudiante_id'))
            ->where('estado', 'Pendiente')
            ->first();
        $datosReunion = request()->except(['_token', '_method', 'id']);

        if ($reunion == null) {
            if ($request->input('title') == "Primer Seguimiento") {
                print_r($datosReunion);
                reunion::insert($datosReunion);
                $primer_seguimiento = new primer_seguimiento;
                $primer_seguimiento->estudiante_id = primer_seguimiento::where('estudiante_id', $request->input('estudiante_id'))->update(['estado' => 'Revisado']);
            } else {
            }
        } else {
            print_r("Error");
        }
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
        $idAsesor = Auth::user()->id;
        $asesor = asesor::find($idAsesor)->user;
        $reunion = reunion::find($id);
        if ($reunion->title == "Primer Seguimiento") {
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
            return view('Seguimiento/FormPrimerSeguimiento')->with('asesor', $asesor)->with('reunion', $reunion)->with('info_cursos',$All_Info);
        }
        else{
            return "Seguimiento Normal";
        }
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
    public function destroy(Request $request, $id)
    {
        $reuniones = reunion::findOrFail($id);
        reunion::destroy($id);
        return response()->json($id);
    }

    public function editPrimerSeguimiento($id)
    {
        $idAsesor = Auth::user()->id;
        $asesor = asesor::find($idAsesor)->user;
        $estudiante = estudiante::find($id)->user;
        return view('Asesor/AgendarReunion')->with('asesor', $asesor)->with('estudiante', $estudiante)->with('tipo', "Primer Seguimiento");
    }

    public function eliminarPrimerSeguimiento(Request $request, $id)
    {
        $reuniones = reunion::findOrFail($id);
        reunion::destroy($id);
        $primer_seguimiento = new primer_seguimiento;
        $primer_seguimiento->estudiante_id = primer_seguimiento::where('estudiante_id', $request->input('estudiante_id'))->update(['estado' => 'Pendiente']);
        return response()->json($id);
    }
}
