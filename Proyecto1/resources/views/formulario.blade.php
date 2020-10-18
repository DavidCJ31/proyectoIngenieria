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
@include('layouts.header')
<!--Main Navigation-->

    <!-- Aqui empieza el  formulario -->
    <div class= "form-card">
        <h4>VICERRECTORIA DE DOCENCIA</h4><H5>EXITO ACADEMICO</H5><h4>SOLICITUD DE TUTORIA</h4>
        <!-- Hilera del formulario -- nombre -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">NOMBRE: </span>
            </div>
            <input type="text" class="form-control" placeholder="Esto deberia agarrarse automaticamente" id ="campo-nombre" aria-describedby="basic-addon1">
          </div>
          <!-- Hilera del formulario -- cedula y telefono -->
          <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">NUMERO DE CEDULA: </span>
              </div>
            <input type="text" class="form-control" placeholder="Numero de cedula (tambien automaticamente)" id="campo-cedula" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <span class="input-group-text">TELEFONO: </span>
              </div>
            <input type="text" class="form-control" id="campo-telefono" aria-describedby="basic-addon2">
          </div>
          
          <!-- Hilera del formulario -- Correo y beca -->
          <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">CORREO: </span>
              </div>
            <input type="text" class="form-control" id="campo-correo" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <span class="input-group-text">BECA: </span>
              </div>
            <input type="text" class="form-control" id="campo-beca" aria-describedby="basic-addon2">
          </div>

          <!-- Hilera del formulario -- Carrera y ano de ingreso -->
          <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Carrera: </span>
              </div>
            <input type="text" class="form-control" id="campo-carrera" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <span class="input-group-text">AÑO DE INGRESO: </span>
              </div>
            <input type="text" class="form-control" id="campo-ingreso" aria-describedby="basic-addon2">
          </div>

          <!-- Hilera del formulario -- Materia -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">MATERIA EN LA QUE SOLICITA TUTORIA: </span>
            </div>
            <input type="text" class="form-control" id ="campo-materia" aria-describedby="basic-addon1">
          </div>

          <!-- Hilera del formulario -- Profesor -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">NOMBRE DEL/DE LA PROFESOR/A: </span>
            </div>
            <input type="text" class="form-control" id ="campo-profesor" aria-describedby="basic-addon1">
          </div>

          <!-- Hilera del formulario -- Creditos y ano de horas -->
          <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">CREDITOS DEL CURSO: </span>
              </div>
            <input type="text" class="form-control" id="campo-creditos" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <span class="input-group-text">HORA DE ESTUDIO: </span>
              </div>
            <input type="text" class="form-control" id="campo-horas" aria-describedby="basic-addon2">
          </div>



          <span class="input-group-text text-uppercase">Síntesis de la situación:</span>
          <div class="input-group">
            <textarea class="form-control"></textarea>
          </div>

          <br>
          <h5> DISPONIBILIDAD DE HORARIO  </h5>
          <div class="table-responsive ">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="cuadro-tabla">HORARIOS</th>
                  <th class="cuadro-tabla">LUNES</th>
                  <th class="cuadro-tabla">MARTES</th>
                  <th class="cuadro-tabla">MIERCOLES</th>
                  <th class="cuadro-tabla">JUEVES</th>
                  <th class="cuadro-tabla">VIERNES</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>8-10</td>
                  <td class="cuadro-tabla opcion-tabla" hora="8-10" dia="lunes"></td>
                  <td class="cuadro-tabla opcion-tabla" hora="8-10" dia="martes"></td>
                  <td class="cuadro-tabla opcion-tabla" hora="8-10" dia="miercoles"></td>
                  <td class="cuadro-tabla opcion-tabla" hora="8-10" dia="jueves"></td>
                  <td class="cuadro-tabla opcion-tabla" hora="8-10" dia="viernes"></td>
                </tr>
                <tr>
                    <td>10-12</td>
                    <td class="cuadro-tabla opcion-tabla" hora="10-12" dia="lunes"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="10-12" dia="martes"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="10-12" dia="miercoles"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="10-12" dia="jueves"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="10-12" dia="viernes"></td>
                  </tr>
                
                <tr>
                    <td>1-3</td>
                    <td class="cuadro-tabla opcion-tabla" hora="1-3" dia="lunes"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="1-3" dia="martes"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="1-3" dia="miercoles"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="1-3" dia="jueves"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="1-3" dia="viernes"></td>
                  </tr>

                <tr>
                    <td>3-5</td>
                    <td class="cuadro-tabla opcion-tabla" hora="3-5" dia="lunes"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="3-5" dia="martes"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="3-5" dia="miercoles"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="3-5" dia="jueves"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="3-5" dia="viernes"></td>
                  </tr>

                <tr>
                    <td>5-7</td>
                    <td class="cuadro-tabla opcion-tabla" hora="5-7" dia="lunes"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="5-7" dia="martes"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="5-7" dia="miercoles"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="5-7" dia="jueves"></td>
                    <td class="cuadro-tabla opcion-tabla" hora="5-7" dia="viernes"></td>
                  </tr>

              </tbody>
            </table>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-append">
                <button type="button" class="btn btn-primary" id="boton-enviar">Enviar solicitud</button>
            </div>
        </div>
    </div>
    @include("layouts.footer")
</body>

</html>

<script>
    
    function empezar(){
        $(".opcion-tabla").hover(function(){
            $(this).css("background-color", "#f6f799");
            },function(){
        $(this).css("background-color","white");} );
    }

    empezar();


</script>


