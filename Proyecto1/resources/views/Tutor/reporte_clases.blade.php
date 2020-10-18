<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Disponibilidad de citas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-Form.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
</head>

<body>
    <!--Main Navigation-->
  @include("layouts.header")
<!--Main Navigation-->
  
    <!-- Aqui empieza el  formulario -->
    <div class= "form-card">
    <img src="imagenes/logo.jpg" class="rounded mx-auto d-block" style = "width: 100px; height: 100px;"> 
    <h4 class="text-center">VICERRECTORIA DE DOCENCIA</h4><H5 class="text-center">EXITO ACADEMICO</H5>
    <h4 class="text-center">REPORTE DE CLASES PARA TURORIA ESPECIALIZADA</h4>
        <br><br>
        <div class="container">
        <div class="input-group mb-3 text-center">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Codigo Tutoria</span>
            </div>
            <input type="text" class="form-control" id="codigo_tutoria" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 text-center">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nombre tutoria</span>
            </div>
            <input type="text" class="form-control" id="nombre_tutoria" aria-describedby="basic-addon1">
        </div>
        <h6>*Puede buscar con nombre o codigo, no necesariamente ambos</h6>
        <button type="button" class="btn btn-primary text-center" id='GenerarPDF'> Generar reporte </button>

        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Curso</th> <!-- Nombre del curso -->
                            <th scope="col">Aula</th>
                            <th scope="col">Hora inicio</th>
                            <th scope="col">Hora final</th>
                            <th scope="col">Fecha</th>
                            </tr>
                        </thead>
                        <tbody id="tabla_clases">
                        </tbody>
                    </table>
        </div>
    </div>
    @include("layouts.footer")
</body>

</html>

<script>

</script>