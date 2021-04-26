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
            <div class="container">
                <div id="calendar"></div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Asistencia de Estudiantes</h5>
                        <button type="button" class="close" data-dismiss="modal" id="cerrar" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <h6 id='idClase'></h6>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Estudiante</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Presente</th>
                            </tr>
                        </thead>
                        <tbody id="listarEstudiantes">
                        </tbody>
                    </table>
                    </div>
                    <div class="modal-footer">
                        <button id="btnEnviar" class="btn btn-success">Enviar</button>
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

    let listaEstudiantes = [];
    let claseIdTemp = 0;
    let datosTemp;
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
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            eventClick: function(info) {
                //Limpiar el model
                console.log(info);
                claseIdTemp = parseInt(info.event.id);
                cargarEstudiantes(info.event.extendedProps.curso_id);
                cargarAsistencia(info.event.id);
                $('#exampleModalCenter').modal('toggle');
            },
            events: "{{url('/calendarioTutor/show')}}"
        });

        calendar.setOption('locale', 'Es')
        calendar.render();

        $('#btnCancelar').click(function() {
            $('#exampleModalCenter').modal('hide');
        });

        $('#cerrar').click(function() {
            $('#exampleModalCenter').modal('hide');
        });

        $('#btnEnviar').click(function() {
            recolectarDatosGUI();
            $('#exampleModalCenter').modal('hide');
        });

        function recolectarDatosGUI() {
            console.log("Entro a recolectar Datps GUI");
            console.log(listaEstudiantes);
            listaEstudiantes.forEach((est)=>{
                var asistencia
                if($("#checkbox-"+est.estudiante_id).prop("checked")==true){
                    console.log("Es check box de "+ est.estudiante_id +" esta chequeado");
                    asistencia = 1; // presente
                }
                else{
                    console.log("Es check box de "+ est.estudiante_id +" no esta chequeado");
                    asistencia = 2; //ausente
                }
                datosTemp = {
                    clase: claseIdTemp,
                    estudiante: est.estudiante_id,
                    presencialidad: asistencia
                }

                EnviarInformacion(datosTemp);

            });

           
        }

        function EnviarInformacion(datos) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{url('/Asistencia')}}",
                data: datos,
                success: function(msg) {
                    console.log(msg);
                    calendar.refetchEvents();
                },
                error: function() {
                    alert("Hay un error");
                }
            });
        }

        function cargarEstudiantes(curso_id) {
            listaEstudiantes = [];
            console.log("Curso id: " + curso_id);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/ListaCursoEstudiante/' + curso_id,
                type: 'get',
                dataType: 'JSON',
                success: function(estudiantes) {
                    listaEstudiantes = estudiantes;
                    console.log(estudiantes);
                    cargarListaEstudiantes(estudiantes);
                },
                error: function(result) {}
            });
        }

        function cargarAsistencia(clase_id) {
            console.log("Clase id: " + clase_id);
            /*
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/Asistencia/' + clase_id,
                type: 'get',
                dataType: 'JSON',
                success: function(response) {
                    console.log(response);
                    return response
                },
                error: function(result) {}
            });
            */
        }

        function cargarListaEstudiantes(estudiantes){
            var lista = $("#listarEstudiantes")
            var rowCount = document.getElementById('listarEstudiantes').rows.length;
            console.log(rowCount);
            for(let i = 0; i< rowCount; i++){
            $('#fila').closest('tr').remove();
            }
            estudiantes.forEach((est)=>{rowListaEstudiante(lista, est);});
        }

        function rowListaEstudiante(lista, est){
            var tr = $("<tr id='fila'/>");
            tr.html("<td>"+ est.nombre +" "+est.apellido + "</td>"+
                    "<td>"+ est.estudiante_id + "</td>"+
                    "<td>"+ est.correo + "</td>" + 
                    "<td>"+
                    "<center><div><input class='form-check-input' type='checkbox' id='checkbox-"+est.estudiante_id+"' value='' aria-label=''></div></center>"+
                    "</td>"

                    );
            lista.append(tr);
        }

        function limpiarFormurario() {}
    });
</script>