<?php

namespace App\Actions\Fortify;

use App\Models\estudiante;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'id' => ['required', 'integer'],
            'nombre' => ['required', 'string', 'max:45'],
            'apellido' => ['required', 'string', 'max:45'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'usuario' => ['required', 'string', 'max:45'],
            'password' => $this->passwordRules(),
        ])->validate();

        $usuario = User::create([
            'id' => $input['id'],
            'password' => Hash::make($input['password']),
            'rol' => 4,
            'name' => $input['nombre'],
            'apellido' => $input['apellido'],
            'email' => $input['email'],
            'usuario' => $input['usuario'],
        ]);
        estudiante::create([
            'id' => $input['id']
        ]);

        return $usuario;
    }
}
