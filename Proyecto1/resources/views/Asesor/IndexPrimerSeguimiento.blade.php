<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,initial-scale=1, shrink-to-fit=no">

    <title>Solicitudes </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-Form.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/styleTable.css') }}" rel="stylesheet">
    <script src="{{ asset('js/buscadorParaTablas.js') }}" crossorigin="anonymous"></script>

    @include('layouts.header')
</head>

<body>

    <div id="fondoTabla">
        <h1 id="TituloVista">Solicitudes</h1>
        <div id="marg">
            <table class="table table-bordered table-striped mb-0 w-auto order-table" id="example">
                <thead>
                    <tr>
                        <th scope="col">CEDULA</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">MATERIA EN LA QUE SOLICITA TUTORIA</th>
                        <th scope="col">NOMBRE DEL/DE LA PROFESOR/A</th>
                        <th scope="col">CREDITOS DEL CURSO</th>
                        <th scope="col">SITUACION</th>
                        <th scope="col">TIPO TUTORIA</th>
                        <th scope="col" colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($seguimientos as $seguimiento)
                    <tr style="height: 10px">
                        <td>{{$seguimiento->estudiante_id}}</td>
                        <td>{{App\Models\User::find(App\Models\estudiante::find($seguimiento->estudiante_id)->id)->name}}</td>
                        <td>{{$seguimiento->materiaTutoria}}</td>
                        <td>{{$seguimiento->profesorCurso}}</td>
                        <td>{{$seguimiento->creditoCruso}}</td>
                        <td>{{$seguimiento->situacion}}</td>
                        <td>{{$seguimiento->tipoTutoria}}</td>
                        <td><a href="javascript:window.open('{{route('PrimerSeguimiento.show', $seguimiento->estudiante_id)}}','','width=1584,height=864,left=100,top=50,toolbar=yes');void 0">Ver Solicitud</a></td>
                        <td><a href="{{route('CalendarizarPrimerSeguimiento.edit', $seguimiento->estudiante_id)}}">Aceptar Solicitud</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</body>
@include("layouts.footer")

</html>
<script>
</script>