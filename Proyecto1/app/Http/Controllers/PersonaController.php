<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function tablaUsuarios(){
        $usuario = \DB::table('users')
        ->select('users.*')
        ->orderBy('id','DESC')
        ->get();
        return view('tabla_usuarios')->with('usuarios',$usuario);
    }

}
