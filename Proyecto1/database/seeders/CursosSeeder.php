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
        $curso->nombre = 'Matematica General';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAT002';
        $curso->nombre = 'Cálculo 1';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAT030';
        $curso->nombre = 'Matematica para Informatica';
        $curso->curso_necesario = null;
        $curso->save();

        $curso = new curso;
        $curso->codigo = 'MAT020';
        $curso->nombre = 'Matematica Financiera';
        $curso->curso_necesario = null;
        $curso->save();
    }
}
