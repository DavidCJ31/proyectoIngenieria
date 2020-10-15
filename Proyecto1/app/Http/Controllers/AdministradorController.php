<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\administrador;
use App\Models\tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministradorController extends Controller
{

    public function tablaTutores(){
        $id = Auth::user()->id;
        $rol = Auth::user()->rol;
        if($rol == 1){
        $adiministrador = administrador::find($id)->user;
        $tutor = DB::table('tutors')->select('tutors.*')->get();
        $con = 0;
        $tutores = [];
        foreach ($tutor as $value) {
            $tutores[$con++] = DB::table('users')->select('users.*')->where('id', $value->id)->get();
        }
        $datos = [$adiministrador,$tutores,$rol];
        return view("Administrador/tabla_tutores")->with('tutores',$datos);
        }else{
            $datos = [$adiministrador,$tutores,$rol];
            echo "LLEGO";
            return view("Administrador/tabla_tutores")->with('tutores',$datos);
        }
    }

    public function buscador(Request $request){
        $id = Auth::user()->id;
        $rol = Auth::user()->rol;
        if($rol == 1){
        $adiministrador = administrador::find($id)->user;
        $tutor = DB::table('tutors')->select('tutors.*')->where("id","like",$request->texto."%")->take(5)->get();
        $con = 0;
        $tutores = [];
        foreach ($tutor as $value) {
            $tutores[$con++] = DB::table('users')->select('users.*')->where('id', $value->id)->get();
        }
        $datos = [$adiministrador,$tutores,$rol];
        return view("Administrador/tabla_tutores")->with('tutores',$datos);
        }else{
            $datos = [$adiministrador,0,$rol];
            echo "LLEGO";
            return view("Administrador/tabla_tutores")->with('tutores',$datos);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = administrador::find(Auth::user()->id)->user;
        return view('Administrador/inicioAdministrador')->with('usuario',$usuario);
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
        //
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
