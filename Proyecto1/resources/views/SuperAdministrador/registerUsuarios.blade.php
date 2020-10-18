<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,initial-scale=1, shrink-to-fit=no">

    <title>Seguimiento Estudiantil</title>

    <link rel="shortcut icon" href="Imagenes/logo-blanco.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-Form.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.header')
</head>

<body>

    <div id="formRegistro" class="row pt-5" style="margin-left: 32%;">


        <!-- FORM -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align-last: center;">
                    <h4>Añadir un Usuario</h4>
                </div>
                <form method="post" action="/User" id="registrarUsuario">
                    @csrf
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CEDULA:</span>
                            <input type="number" id="id" name="id" required autofocus autocomplete="id" placeholder="Cedula" class="form-control no-spin">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">NOMBRE:</span>
                            <input type="text" id="nombre" name="nombre" required required placeholder="Nombre" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">APELLIDO:</span>
                            <input type="text" id="apellido" name="apellido" placeholder="Apellido" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">EMAIL:</span>
                            <input type="email" id="email" name="email" placeholder="Email" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">USUARIO:</span>
                            <input type="text" id="usuario" name="usuario" placeholder="Usuario" required autofocus autocomplete="id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CONTRASEÑA:</span>
                            <input type="password" id="contrasena" name="password" required autocomplete="new-password" placeholder="Contraseña" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">CONFIRMAR CONTRASEÑA:</span>
                            <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirmar Contraseña" class="form-control">
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text">ROL:</span>
                        <select class="form-control btn btn-secondary dropdown-toggle" name="rol" id="rol" form="registrarUsuario">
                            <option class="dropdown-item" value="0" checked>Super Administrador</option>
                            <option class="dropdown-item" value="1">Administrador</option>
                            <option class="dropdown-item" value="2">Supervisor</option>
                            <option class="dropdown-item" value="3">Tutor</option>
                        </select>
                    </div>
                    <div colspan="2" id="boton">
                        <button type="submit" class="btn btn-primary" form="registrarUsuario" id='GuardarUsuario'>Guardar</button>
                        <!-- <button type="button" class="btn btn-primary" id='GuardarUsuario' onclick="init()" data-dismiss="modal">Guardar</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
<!--  Se incluye el footer  -->
@include("layouts.footer")

</html>



<script>
    function init() {
        id2 = document.getElementById("id").value
        name2 = document.getElementById("nombre").value
        apellido2 = document.getElementById("apellido").value
        email2 = document.getElementById("email").value
        user2 = document.getElementById("usuario").value
        contrasena2 = document.getElementById("contrasena").value
        rol2 = document.getElementById("rol").value



        let obj = {
            id: id2,
            name: name2,
            apellido: apellido2,
            email: email2,
            user: user2,
            contrasena: contrasena2,
            rol: rol2
        }
        guarda(obj);
    }


    function guarda(datos) {

        console.log("Entro a guardar con:");
        console.log(datos);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "User",
            type: "POST",
            data: {
                usu: JSON.stringify(datos),
                _token: '{{csrf_token()}}'
            },
            success: function(result) {
                console.log("success");
                console.log(result);
            }
        });
    }
</script>