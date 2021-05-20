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
        $user->id = 112760481;
        $user->name = 'Priscilla';
        $user->apellido = 'Venegas Herrera';
        $user->email = 'priscilla.venegas.herrera@una.cr';
        $user->usuario = ucwords('PriscillaVenegasHerrera');
        $user->password = Hash::make('Exito2021');
        $user->rol = 0;
        $user->save();

        $superAdministrador = new super_administrador();
        $superAdministrador->id = $user->id;
        $superAdministrador->save();

        //Asesores
        $user = new User;
        $user->id = 109850886;
        $user->name = 'Laura';
        $user->apellido = 'Ramirez Chavarria';
        $user->email = 'laura.ramirez.chavarria@una.cr';
        $user->usuario = ucwords('LauraRamirezChavarria');
        $user->password = Hash::make('Exito2021');
        $user->rol = 0;
        $user->save();
        $asesor = new asesor;
        $asesor->id = $user->id;
        $asesor->save();

        //Tutores
        $user = new User;
        $user->id = 401910902;
        $user->name = 'Jacqueline';
        $user->apellido = 'Gonzalez Espinoza';
        $user->email = 'jacqueline.gonzalez.espinoza@una.cr';
        $user->usuario = ucwords('JacquelineGonzalezEspinoza');
        $user->password = Hash::make('Exito2021');
        $user->rol = 0;
        $user->save();
        $tutor = new tutor;
        $tutor->id = $user->id;
        $tutor->save();
    }
}
