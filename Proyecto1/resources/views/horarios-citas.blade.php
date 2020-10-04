<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Disponibilidad de citas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-Form.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

</head>

<body>
    <!--Main Navigation-->
    @include("layouts.header")
    <!--Main Navigation-->

    <!-- Aqui empieza el  formulario -->
    <div class="form-card">
        <h4>VICERRECTORIA DE DOCENCIA</h4>
        <H5>EXITO ACADEMICO</H5>
        <h4>DISPONIBILIDAD PARA ASESORIAS</h4>
        <br><br>
        <h5> DISPONIBILIDAD DE HORARIO </h5>
        <div class="table-responsive ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="cuadro-tabla">Selecciones su disponibilidad para estos dias </th>
                        <th class="cuadro-tabla">LUNES</th>
                        <th class="cuadro-tabla">MARTES</th>
                        <th class="cuadro-tabla">MIERCOLES</th>
                        <th class="cuadro-tabla">JUEVES</th>
                        <th class="cuadro-tabla">VIERNES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 8am - 9am </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="8" final="9" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="8" final="9" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="8" final="9" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="8" final="9" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="8" final="9" dia="viernes"></td>
                    </tr>
                    <tr>
                        <td> 9am - 10am </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="9" final="10" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="9" final="10" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="9" final="10" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="9" final="10" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="9" final="10" dia="viernes"></td>
                    </tr>

                    <tr>
                        <td> 10am - 11am </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="10" final="11" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="10" final="11" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="10" final="11" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="10" final="11" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="10" final="11" dia="viernes"></td>
                    </tr>

                    <tr>
                        <td> 11am - 12pm </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="11" final="12" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="11" final="12" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="11" final="12" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="11" final="12" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="11" final="12" dia="viernes"></td>
                    </tr>

                    <tr>
                        <td> 1pm - 2pm </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="1" final="2" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="1" final="2" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="1" final="2" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="1" final="2" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="1" final="2" dia="viernes"></td>
                    </tr>
                    <tr>
                        <td> 2pm - 3pm </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="2" final="3" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="2" final="3" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="2" final="3" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="2" final="3" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="2" final="3" dia="viernes"></td>
                    </tr>
                    <tr>
                        <td> 3pm - 4pm </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="3" final="4" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="3" final="4" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="3" final="4" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="3" final="4" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="3" final="4" dia="viernes"></td>
                    </tr>

                    <tr>
                        <td> 4pm - 5pm </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="4" final="5" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="4" final="5" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="4" final="5" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="4" final="5" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="4" final="5" dia="viernes"></td>
                    </tr>

                    <tr>
                        <td> 5pm - 6pm </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="5" final="6" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="5" final="6" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="5" final="6" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="5" final="6" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="5" final="6" dia="viernes"></td>
                    </tr>

                    <tr>
                        <td> 6pm - 7pm </td>
                        <td class="cuadro-tabla opcion-tabla" inicio="6" final="7" dia="lunes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="6" final="7" dia="martes"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="6" final="7" dia="miercoles"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="6" final="7" dia="jueves"></td>
                        <td class="cuadro-tabla opcion-tabla" inicio="6" final="7" dia="viernes"></td>
                    </tr>
                </tbody>
            </table>
            <form method="post" action="/horario">
                @csrf
                <div class="input-group mb-3" style='display:none;'>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Id asesor: </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Id asesor" id="idAsesor" name="idAsesor"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style='display:none;'>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Hora inicio: </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Hora inicio" id="horaInicio" name="horaInicio"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style='display:none;'>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Hora final: </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Hora final" id="horaFinal" name="horaFinal"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3" style='display:none;'>
                    <div class="input-group-prepend">
                        <span class="input-group-text">Día: </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Dia" id="dia" name="dia"
                        aria-describedby="basic-addon1">
                </div>
                <button type="submit" class="btn btn-primary" name="enviar" id='boton-enviar'>Guardar</button>
            </form>
        </div>
    </div>
    </div>



    @include("layouts.footer")
</body>

</html>

<script>
let lista_horarios = [];

function empezar() {
    $(".opcion-tabla").hover(function() {
        $(this).css("background-color", "#f6f799");
    }, function() {
        $(this).css("background-color", "white");
    });

    $(".opcion-tabla").on("click", function() {
        seleccionarCasilla(this)
    });
}

empezar();

function seleccionarCasilla(casilla) {
    console.log(casilla.attributes['final'].value);
    console.log(casilla.attributes['inicio'].value);
    console.log(casilla.attributes['dia'].value);

    if (casilla.innerHTML == "") {
        casilla.append("Disponible");
        lista_horarios.push(casilla);
    } else {
        casilla.innerHTML = "";
        if (lista_horarios.indexOf(casilla) !== -1) {
            var index = lista_horarios.indexOf(casilla);
            lista_horarios.splice(index, 1);
        }
    }
    console.log(lista_horarios);
}

/*
 */
</script>