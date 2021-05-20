<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\super_administrador;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        // DB::table('users')->insert([
        //     'id' => 123,
        //     'name' => 'admin',
        //     'apellido' => 'admin',
        //     'email' => 'admin@hotmail.com',
        //     'rol' => 0,
        //     'usuario' => 'admin',
        //     'password' => Hash::make('123456789')
        // ]);

        // DB::table('super_administradors')->insert([
        //     'id' => 123
        // ]);
    }
}
