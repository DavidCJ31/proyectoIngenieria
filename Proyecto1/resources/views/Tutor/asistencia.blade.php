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
    @include('layouts.header')
</head>

<body>

<div id="fondoTabla">
<div class="container" style="padding: 0px;">
            <div class="row row-cols-4 justify-content-start" style="margin: 0%;">
                <div class="col" style="margin: 0%; padding: 0px;"><span class="input-group-text">Curso </span></div>
                <div class="col" style="margin: 0%; padding: 0px;"><span class="input-group-text"> Funtamentos de Informatica </span></div>

                <div class="col" style="margin: 0%; padding: 0px;"><span class="input-group-text">Tutor </span></div>
                <div class="col" style="margin: 0%; padding: 0px;"><span class="input-group-text">David Cordero Jimenez </span></div>
            </div>
          </div>
   </div>
  
          
<div id="fondoTabla">

        <h1 id="TituloVista">Estudiantes</h1>
        <div id="marg">
            <table class="table table-bordered table-striped mb-0 " id="example">
                <thead>
                    <tr>
                        <th id="colcorta" scope="col">#</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Si</th>
                        <th scope="col">No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                      
                        <td>1</td>
                        <td>402390969</td>
                        <td>kevin</td>
                        <td>Artavia</td>
                        <td>kevin@gmail.com</td>
                        <td>    <div class="form-check form-check-inline">
                    
                        <input class="form-check-input" type="radio" name="pregunta1" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Si</label>
                        </div></td>
                        <td>              <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pregunta1" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-primary btn-lg" style="position: relative; margin-left: 40%;">Guardar Cambios</button>
    </div>
    

          





</body>
@include("layouts.footer")
</html>
<script>
</script>