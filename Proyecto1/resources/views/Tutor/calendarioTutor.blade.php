<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-Form.css') }}" rel="stylesheet">

    <script src='https://cdn.jsdelivr.net/npm/moment@2.27.0/min/moment.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="{{ asset('fullcalendar-5.5.1/lib/main.css') }}" rel="stylesheet">
    <script src="{{ asset('fullcalendar-5.5.1/lib/main.js') }}"></script>
    <script src="{{ asset('fullcalendar-5.5.1/lib/locales/es.js') }}"></script>
</head>

<body>
    <!--Main Navigation-->
    @include('layouts.header')
    <!--Main Navigation-->
    <!-- Aqui empieza el  formulario -->
    <div class="form-card">
        <h4>VICERRECTORIA DE DOCENCIA</h4>
        <H5>EXITO ACADEMICO</H5>
        <h4>CALENDARIO DE TUTORIAS</h4>

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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Calendarizar Seguimiento</h5>
                        <button type="button" class="close" data-dismiss="modal" id="cerrar" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="campo-id" id="campo-id">
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="campo-fecha">Fecha</label>
                                <input type="date" class="form-control" name="campo-fecha" id="campo-fecha" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="campo-hora">Hora</label>
                                <input type="time" class="form-control" name="campo-hora" id="campo-hora" placeholder="Hora" min="07:00" max="21:00" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="campo-duracion">Duracion(Horas)</label>
                                <input type="number" class="form-control" name="campo-duracion" id="campo-duracion" placeholder="duracion" min="1" max="2" value="1" required pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==1) return false;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="campo-descripcion">Descripcion</label>
                            <textarea class="form-control" name="campo-descripcion" id="campo-descripcion" placeholder="descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="campo-tipo">Tipo de Seguimiento</label>
                            <select class="form-control" name="campo-tipo" id="campo-tipo" form="">
                                <option value="Seguimiento Normal">Seguimiento Normal</option>
                                <option value="Primer Seguimiento">Primer Seguimiento</option>
                                <option value="Ultimo Seguimiento">Ultimo Seguimiento</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="campo-color">Color</label>
                                <input type="color" class="form-control" name="campo-color" id="campo-color" placeholder="color">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btnAgregar" class="btn btn-success">Agregar</button>
                        <button id="btnModificar" class="btn btn-secondary">Modificar</button>
                        <button id="btnEliminar" class="btn btn-danger">Eliminar</button>
                        <button id="btnCancelar" data-dismiss="modal" class="btn btn-primary">Cancelar</button>
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
            initialView: 'dayGridMonth',
            selectable: false,
            weekends: false,
            editable: false,
            select: function(start, end) {
                if (start.isBefore(moment())) {
                    $('#calendar').fullCalendar('unselect');
                    return false;
                }
            },
            headerToolbar: {
                left: 'prev,next today Miboton',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            customButtons: {
                Miboton: {
                    text: "Boton",
                    click: function() {
                        alert("Hola MUNDO");
                        $('#exampleModalCenter').modal('toggle');
                    }
                }
            },
            dateClick: function(info) {
                limpiarFormurario();
                $('#campo-fecha').val(info.dateStr);

                $("#btnAgregar").prop("disabled", false);
                $("#btnModificar").prop("disabled", true);
                $("#btnEliminar").prop("disabled", true);

                $('#exampleModalCenter').modal('toggle');

            },
            eventClick: function(info) {
                console.log(info);

                $("#btnAgregar").prop("disabled", true);
                $("#btnModificar").prop("disabled", false);
                $("#btnEliminar").prop("disabled", false);

                mes = (info.event.start.getMonth() + 1);
                mes = (mes < 10) ? "0" + mes : mes;
                dia = (info.event.start.getDate());
                dia = (dia < 10) ? "0" + dia : dia;
                anio = (info.event.start.getFullYear());
                hora = (info.event.start.getHours());
                hora = (hora < 10) ? "0" + hora : hora;
                minutos = (info.event.start.getMinutes());
                minutos = (minutos < 10) ? "0" + minutos : minutos;

                $('#exampleModalCenter').modal('toggle');
            },
            events: "{{url('/calendarioTutor/show')}}"
        });
        
        calendar.setOption('locale', 'Es')
        calendar.render();

        function recolectarDatosGUI(method) {
        }

        function EnviarInformacion(accion, objEvento) {
            $.ajax({
                type: "POST",
                url: "{{url('/Calendario')}}" + accion,
                data: objEvento,
                success: function(msg) {
                    console.log(msg);
                    $('#exampleModalCenter').modal('toggle');
                    calendar.refetchEvents();
                },
                error: function() {
                    alert("Hay un error");
                }
            });
        }

        function limpiarFormurario() {
        }
    });
</script>