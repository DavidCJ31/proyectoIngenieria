<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\curso;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cursos
        $curso = new curso;
        $curso->codigo = 'MAT001';
        $curso->nombre = 'Matemática General';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAT002';
        $curso->nombre = 'Cálculo 1';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAT030';
        $curso->nombre = 'Matemática para Informática';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAT020';
        $curso->nombre = 'Matemática Financiera';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'EIF200';
        $curso->nombre = 'Fundamentos de Informática';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAC408';
        $curso->nombre = 'Geometría Analítica';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAC409';
        $curso->nombre = 'Análisis';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'QUX101';
        $curso->nombre = 'Quimica General I';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'QUX106';
        $curso->nombre = 'Química Orgánica';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'QUY515';
        $curso->nombre = 'Intriducxion a la química';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'QUX103';
        $curso->nombre = 'Fundamentos de química';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'QUC400';
        $curso->nombre = 'Química Orgánica';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'BIJ401';
        $curso->nombre = 'Zoología General';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'FIX310';
        $curso->nombre = 'Física General';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'FIX422';
        $curso->nombre = 'Física I';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'FIY422';
        $curso->nombre = 'Fisica para biología';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'BIJ407';
        $curso->nombre = 'Bioestadística II';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = '4223';
        $curso->nombre = 'Física II';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'EIF203';
        $curso->nombre = 'Estructuras Discretas';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'EIF204';
        $curso->nombre = 'Programación II';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'EIF206';
        $curso->nombre = 'Programación III';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'LIX410';
        $curso->nombre = 'Inglés integrado I';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'LIX411';
        $curso->nombre = 'Inglés integrado II';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'SPJ202';
        $curso->nombre = 'Inglés para administración de oficinas';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'ECF405';
        $curso->nombre = 'Macroeconómia I';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'ECF4001';
        $curso->nombre = 'Introducción a la economía';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'ECF404';
        $curso->nombre = 'Microeconomía I';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'ECF416';
        $curso->nombre = 'Econométria II';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'ECB408';
        $curso->nombre = 'Microeconomía III';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'ECF417';
        $curso->nombre = 'Microeconomía para comercio y negocios';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'ECY416';
        $curso->nombre = 'Economía para PPS Y RI';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MVA501';
        $curso->nombre = 'Anatomía para Medicina Veterinaria';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MVA507';
        $curso->nombre = 'Zoología para medicina Veterinaria';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAC413';
        $curso->nombre = 'Estadística y Probabilidades';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAT005';
        $curso->nombre = 'Álgebra Lineal';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'EIF205';
        $curso->nombre = 'Arquitectura de Computadoras';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'ECF407';
        $curso->nombre = 'Estadística II';
        $curso->curso_necesario = null;
        $curso->save();
    }
}
