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
        $curso->codigo = '123';
        $curso->nombre = 'admin';
        $curso->curso_necesario = null;
        $curso->save();
    }
}
