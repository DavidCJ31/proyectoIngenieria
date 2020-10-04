<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-Form.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</head>

<body>
<!--Main Navigation-->
    @include("layouts.header")
<!--Main Navigation-->

    <!-- Aqui empieza el  formulario -->
    <div class= "form-card">
        <h6 class="text-center">VICERRECTORÍA DE VIDA ESTUDIANTIL</h6><H6 class="text-center text-uppercase">DEPARTAMNETO DE ORIENTACIÓN Y PSICOLOGÍA</H6>
        <h5 class="text-center text-uppercase">  REFERENCIA PARA LOS SERVICIOS DE </h5>
        <h5 class="text-center text-uppercase"> ORIENTACIÓN,PSICOLOGÍA Y PSICOPEDAGOGÍA </h5>

        <!-- Hilera del formulario -- nombre -->
        <div class="input-group mb-3" style=" width: 50%;">
            <div class="input-group-prepend">
              <span class="input-group-text">Fecha: </span>
            </div>
            <input type="text" class="form-control" value="<?php echo date('l jS \of F Y') ?>" id ="campo-fecha" aria-describedby="basic-addon1" disabled >
          </div>
          <!-- Hilera del formulario -- Nombre estudiante  -->
          <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text ">Nombre del estudiante: </span>
              </div>
            <input type="text" class="form-control" id="nombre-estudiante" aria-describedby="basic-addon2">
          </div>

        <!-- Hilera del formulario -- Numero de cedula y edad -->
        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Numero de Cédula: </span>
              </div>
            <input type="text" class="form-control" id="cedula" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <span class="input-group-text">Edad: </span>
              </div>
            <input type="text" class="form-control" id="edad" aria-describedby="basic-addon2">
          </div>
          

          <!-- Hilera del formulario -- Sexo -->
          <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Sexo: &nbsp &nbsp </span>
              </div>
              <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio-sexo" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Hombre</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio-sexo" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Mujer</label>
                    </div>
          </div>
          

         <!-- Hilera del formulario -- Lugar de procedencia y residencia. -->
         <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Lugar de Procedencia: </span>
              </div>
            <input type="text" class="form-control" id="precedencia" aria-describedby="basic-addon2">

            <div class="input-group-append" >
                <span class="input-group-text">Residencia Actual: </span>
              </div>
            <input type="text" class="form-control" id="residencia" aria-describedby="basic-addon2" >
          </div>

                <!-- Hilera del formulario -- numeros de telefono -->
                <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Teléfono 1: </span>
              </div>
            <input type="text" class="form-control" id="telefono1" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <span class="input-group-text">Teléfono 2: </span>
              </div>
            <input type="text" class="form-control" id="telefono2" aria-describedby="basic-addon2">
          </div>
          
          
            <!-- Hilera del formulario -- Tutoria que recibe  -->
            <div class="input-group mb-3">
            <div class="input-group-append">
            <span class="input-group-text">Correo Electrónico : </span>
            </div>
            <input type="text" class="form-control" id="correo" aria-describedby="basic-addon2">
            </div>


              <!-- Hilera del formulario -- Carrera y ano de ingreso -->
              <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Carrera: </span>
              </div>
            <input type="text" class="form-control" id="carrera" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <span class="input-group-text">Año de Ingreso: </span>
              </div>
            <input type="text" class="form-control" id="ano-ingreso" aria-describedby="basic-addon2">
             </div>

             <!-- Hilera del formulario -- Tutoria que recibe  -->
            <div class="input-group mb-3">
            <div class="input-group-append">
            <span class="input-group-text">Tipo de Beca : </span>
            </div>
            <input type="text" class="form-control" id="tipo-beca" aria-describedby="basic-addon2">
            </div>

             <!-- Servicio Al que se Refiere.  -->
            <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Servicio del Departamento al que se refiere: </span>
              </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio-refiere" id="psicopedagogia" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Atención psicopedagógica.</label>
                    </div>
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="radio-refiere" id="psicologia" value="option2">
                         <label class="form-check-label" for="inlineRadio2">Psicología.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio-refiere" id="individual" value="option3">
                        <label class="form-check-label" for="inlineRadio2">Orientación Individual.</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio-refiere" id="Vocacional" value="option4">
                        <label class="form-check-label" for="inlineRadio2">Orientación Vocacional.</label>
                    </div>
                </div>

                <span class="input-group-text text-uppercase">Motio de la Referencia:</span>
            <div class="input-group mb-3">
                <textarea class="form-control" id="campo-observaciones" placeholder="Explique de manera concisa el motivo,respetando el derecho de confidencialidad del estudiante."></textarea>
            </div>


        <h6>Datos del profesional que realiza la referencia:</h6>


        <!-- Datos del profesional -->
        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Grado Académico: </span>
              </div>
            <input type="text" class="form-control" id="grado-profesional" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <span class="input-group-text">Nombre Completo: </span>
              </div>
            <input type="text" class="form-control" id="nombre-profesional" aria-describedby="basic-addon2">
            </div>


            <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Puesto o Cargo: </span>
              </div>
            <input type="text" class="form-control" id="puesto-cargo" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <span class="input-group-text">Lugar de Trabajo: </span>
              </div>
            <input type="text" class="form-control" id="lugar-trabajo" aria-describedby="basic-addon2">

            </div>





        
        <div class="input-group mb-3">
            <div class="input-group-append">
                <button type="button" class="btn btn-primary" id="boton-enviar">Enviar informe</button>
            </div>
        </div>
    </div>
    @include("layouts.footer")
</body>

<script>
    
    function empezar(){
        $(".opcion-tabla").hover(function(){
            $(this).css("background-color", "#f6f799");
            },function(){
        $(this).css("background-color","white");} );
    }

    empezar();


</script>

</html>