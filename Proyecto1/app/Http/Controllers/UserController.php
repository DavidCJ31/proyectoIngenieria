<?php

namespace App\Http\Controllers;

use App\Models\administrador;
use App\Models\asesor;
use App\Models\User;
use App\Models\tutor;
use App\Http\Controllers\Controller;
use App\Models\super_administrador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SuperAdministrador.registerUsuarios');
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
        $user = new User;
        $user->id = $request->input('id');
        $user->name = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->email = $request->input('email');
        $user->usuario = $request->input('usuario');
        $user->password = Hash::make($request->input('password'));
        $user->rol = $request->input('rol');
        $user->save();

        if($user->rol == 0){
            $superAdministrador = new super_administrador();
            $superAdministrador->id = $user->id;
            $superAdministrador->save();
        }
        if($user->rol == 1){
            $administrador = new administrador;
            $administrador->id = $user->id;
            $administrador->save();
        }
        if($user->rol == 2){
            $asesor = new asesor;
            $asesor->id = $user->id;
            $asesor->save();
        }
        if($user->rol == 3){
            $tutor = new tutor;
            $tutor->id = $user->id;
            $tutor->save();
        }
<<<<<<< Updated upstream
        return redirect('logged_in');
=======
        $usuario = administrador::find(Auth::user()->id)->user;
        return view('Administrador/inicioAdministrador')->with('usuario',$usuario);
>>>>>>> Stashed changes
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
