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

        if ($cursoEsta->count() == 0) {
            $curso->save();
            $cursoCreado = detalle_curso::where([
                ['tutor_id', '=', $curso->tutor_id],
                ['curso_codigo', '=', $curso->curso_codigo],
                ['anno', '=', $curso->anno],
                ['periodo', '=', $curso->periodo],
                ['num_periodo', '=', $curso->num_periodo],
                ['hora_inicio', '=', $curso->hora_inicio],
                ['hora_final', '=', $curso->hora_final],
                ['dia', '=', $curso->dia]
            ])->first();

            echo $cursoCreado->id;


            switch ($cursoCreado->dia) {
                case "Lunes":
                    $diaIngles = "Mon";
                    break;
                case "Martes":
                    $diaIngles = "Tue";
                    break;
                case "Miercoles":
                    $diaIngles = "Wed";
                    break;
                case "Jueves":
                    $diaIngles = "Thu";
                    break;
                case "Viernes":
                    $diaIngles = "Fri";
                    break;
                case "Sabado":
                    $diaIngles = "Sat";
                    break;
                default:
                    $diaIngles = "Sun";
                    break;
            }
            echo $diaIngles . "<br>";
            switch ($curso->periodo) {
                case "Semestre": {
                        if ($cursoCreado->num_periodo == 1) {
                            $priemerdia = date("M-d-Y", mktime(0, 0, 0, 1, 1, $cursoCreado->anno));
                            echo $priemerdia . "<br>";
                            $ultimoDia = date("M-d-Y", mktime(0, 0, 0, 7, 0, $cursoCreado->anno));
                            echo $ultimoDia . "<br>";
                            $dia = strtotime($priemerdia);
                            echo $dia . "<br>";
                            echo date("M-d-Y", $dia) . "<br>";
                            $i = 0;
                           /* while (date_diff($priemerdia, $ultimoDia)) :
                                echo date("M-d-Y", $dia) . date("D", $dia) . $i . "<br>";
                                if (date("D", $dia) == $diaIngles) {
                                    echo "Si es el dia <br>";
                                }
                                $dia = strtotime("+1 day", $dia);
                                $i++;
                            endwhile;*/
                        }
                    }
                    break;
                case "Cuatrimestre":
                    break;
                case "Trimestre":
                    break;
                case "Bimestre":
                    break;
                default:
                    break;
            }
        } else {
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
