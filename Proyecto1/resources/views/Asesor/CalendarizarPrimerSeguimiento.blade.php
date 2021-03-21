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

    <link href="{{ asset('fullcalendar-5.5.1/lib/main.css') }}" rel="stylesheet">
    <script src="{{ asset('fullcalendar-5.5.1/lib/main.js') }}"></script>
</head>

<body>
    <!--Main Navigation-->
    @include('layouts.header')
    <!--Main Navigation-->
    <!-- Aqui empieza el  formulario -->
    <div class="form-card">
        <h4>VICERRECTORIA DE DOCENCIA</h4>
        <H5>EXITO ACADEMICO</H5>
        <h4>CALENDARIZAR PRIMERA REUNION</h4>



        <h5> DISPONIBILIDAD DE HORARIO </h5>
        <!-- Disponibilidad del Estudiante -->
        <!-- Aqui empieza el  formulario -->
        <div class="form-card">
            <h4 class="text-center">VICERRECTORIA DE DOCENCIA</h4>
            <H5 class="text-center">EXITO ACADEMICO</H5>
            <h4 class="text-center">DISPONIBILIDAD PARA ASESORIAS</h4>
            <br><br>
            <div class="container">
                <div id="calendar"></div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" id="boton-desplegar">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive ">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="cuadro-tabla">Horarios</th>
                                        <th class="cuadro-tabla">Selecciones su disponibilidad </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 8am - 9am </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="8" final="9"></td>
                                    </tr>
                                    <tr>
                                        <td> 9am - 10am </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="9" final="10"></td>
                                    </tr>
                                    <tr>
                                        <td> 10am - 11am </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="10" final="11"></td>
                                    </tr>
                                    <tr>
                                        <td> 11am - 12pm </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="11" final="12"></td>
                                    </tr>
                                    <tr>
                                        <td> 1pm - 2pm </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="13" final="14"></td>
                                    </tr>
                                    <tr>
                                        <td> 2pm - 3pm </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="14" final="15"></td>
                                    </tr>
                                    <tr>
                                        <td> 3pm - 4pm </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="15" final="16"></td>
                                    </tr>
                                    <tr>
                                        <td> 4pm - 5pm </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="16" final="17"></td>
                                    </tr>
                                    <tr>
                                        <td> 5pm - 6pm </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="17" final="18"></td>
                                    </tr>
                                    <tr>
                                        <td> 6pm - 7pm </td>
                                        <td class="cuadro-tabla opcion-tabla" inicio="18" final="19"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id='horario-dia' data-dismiss="modal">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIN Disponibilidad del Estudiante -->
    </div>
    @include("layouts.footer")
</body>

</html>

<script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth'
  });
  calendar.render();
});

</script>