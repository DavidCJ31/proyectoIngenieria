<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,initial-scale=1, shrink-to-fit=no">

    <title>Seguimiento Estudiantil</title>

    <link rel="shortcut icon" href="Imagenes/logo-blanco.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-Form.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.header')
</head>

<body style="background-color: #cc071e;">

    <div class="container" id="formRegistro">
        <div class="card shadow-lg o-hidden border-0 my-4">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Registro de Usuarios</h4>
                            </div>
                            <form action="/User" id="registrarUsuario" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row text-left" style="padding: 0px;">
                                    <div class="form-group " id="message">

                                        <div class="form-group has-feedback">
                                            <div class="form-group has-feedback"><label
                                                    for="cedula">Cedula</label><br><input class="form-c" type="number"
                                                    id="id" name="id" required autofocus autocomplete="id"> </div>
                                            <div class="form-group has-feedback"><label
                                                    for="nombre">Nombre</label><br><input class="form-c" type="text"
                                                    id="nombre" name="nombre" required></div>
                                            <div class="form-group has-feedback"><label
                                                    for="email">Email</label><br><input class="form-c" type="email"
                                                    id="email" name="email" required> </div>
                                            <div class="form-group has-feedback"><label
                                                    for="telefono">Telefono</label><br><input class="form-c" type="text"
                                                    id="telefono" name="telefono" required></div>
                                            <div class="form-group" style=" margin-left: 40%; margin-top: 5%;">
                                                <button class="btn btn-primary" type="submit" form="registrarUsuario"
                                                    id='GuardarUsuario'>Registrar &nbsp;</button>
                                            </div>
                                            <span class="input-group-text text-uppercase">Disponibilidad de horario</span>
                                            <div class="input-group">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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