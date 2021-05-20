<?php

namespace Database\Seeders;

use App\Models\asesor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\super_administrador;
use App\Models\User;
use App\Models\tutor;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Super Usuario
        $user = new User;
        $user->id = 123;
        $user->name = 'admin';
        $user->apellido = 'admin';
        $user->email = 'admin@hotmail.com';
        $user->usuario = ucwords('admin');
        $user->password = Hash::make('123456789');
        $user->rol = 0;
        $user->save();

        $superAdministrador = new super_administrador();
        $superAdministrador->id = $user->id;
        $superAdministrador->save();

        //Asesores
        $user = new User;
        $user->id = 123;
        $user->name = 'admin';
        $user->apellido = 'admin';
        $user->email = 'admin@hotmail.com';
        $user->usuario = ucwords('admin');
        $user->password = Hash::make('123456789');
        $user->rol = 0;
        $user->save();
        $asesor = new asesor;
        $asesor->id = $user->id;
        $asesor->save();

        //Tutores
        $user = new User;
        $user->id = 123;
        $user->name = 'admin';
        $user->apellido = 'admin';
        $user->email = 'admin@hotmail.com';
        $user->usuario = ucwords('admin');
        $user->password = Hash::make('123456789');
        $user->rol = 0;
        $user->save();
        $tutor = new tutor;
        $tutor->id = $user->id;
        $tutor->save();
    }
}
