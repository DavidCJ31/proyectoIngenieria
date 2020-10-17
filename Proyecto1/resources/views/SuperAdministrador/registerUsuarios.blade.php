<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,initial-scale=1, shrink-to-fit=no">

    <title>Seguimiento Estudiantil</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-Form.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/styleTable.css') }}" rel="stylesheet">
    @include("Tutor.headerTutor")
</head>

<body>

        <div id="formRegistro" class="row pt-5" style="margin-left: 32%;" >

            
                    <!-- FORM -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="text-align-last: center;" >
                        <h4>Añadir un Usuario</h4>
                    </div>
                        <form id="respuestas" class="card-body" method="POST" action="/User">
                        @csrf
                            <div class="form-group">
                                <input type="number" name="id" required autofocus autocomplete="id"  placeholder="Cedula" class="form-control">
                            </div>
                            <div id="respuestas" class="form-group">
                                <input type="text" name="nombre" required  required placeholder="Nombre"
                                    class="form-control">
                            </div>
                            <div id="respuestas" class="form-group">
                                <input type="text" name="apellido" placeholder="Apellido" required
                                    class="form-control">
                            </div>
                            <div id="respuestas" class="form-group">
                                <input type="email" name="email" placeholder="Email" required
                                    class="form-control">
                            </div>
                            <div id="respuestas" class="form-group">
                                <input type="text" name="usuario" placeholder="Usuario" required autofocus autocomplete="id"
                                    class="form-control">
                            </div>
                            <div id="respuestas" class="form-group">
                                <input type="password" name="password" required autocomplete="new-password" placeholder="Contraseña"
                                    class="form-control">
                            </div>
                            <div id="respuestas" class="form-group">
                                <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña"
                                    class="form-control">
                            </div>
                            <div id="respuestas" class="form-group">
                                <input class="block mt-1 w-full" id="SuperAdministrador" type="radio" name="rol" value="0" checked />
                                <label for="Administrador">Super Administrador</label>
                                <input class="block mt-1 w-full" id="Administrador" type="radio" name="rol" value="1"/>
                                <label for="Administrador">Administrador</label>
                                <input class="block mt-1 w-full" id="Asesor" type="radio" name="rol" value="2" />
                                <label for="Asesor">Asesor</label>
                                <input class="block mt-1 w-full" id="Tutor" type="radio" name="rol" value="3" />
                                <label for="Tutor">Tutor</label>
                            </div>
                            <div colspan="2" id="boton">
                                <input type="submit" value="Submit" class="btn btn-primary btn-block">
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
$(document).ready(function() {
    $('#example').DataTable({
        pageLength: 10,
        responsive: true,
        lengthMenu: [
            [10, 20, 100, -1],
            ["10", "20", "100", "Todos"]
        ],
        language: {

            search: "Buscar: ",
            lengthMenu: "Elementos _MENU_  por pagina",

            info: "Mostrando  _START_  a _END_ de _TOTAL_ elementos",

            loadingRecords: "Cargando Elementos...",
            zeroRecords: "No se encontraron elementos que coincidan con los parametros de busqueda",
            emptyTable: "No hay elementos disponibles",
            paginate: {
                first: "Primer",
                previous: "Anterior",
                next: "Siguiente",
                last: "Ultimo"
            },

        }

    });
});
</script>



















































