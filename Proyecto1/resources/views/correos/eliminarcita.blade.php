<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminacion de Cita</title>
</head>
<body>


    <h1>Seguimiento Estudiantil le informa:</h1>

    <h3>Hola {{ App\Models\User::find($reunion->estudiante_id)->name}} {{ App\Models\User::find($reunion->estudiante_id)->apellido}}</h3>
    <p> Le informamos por parte de seguimiento estudiantil que la cita que tenia calendarizada para el dia {{$reunion->start}} fue eliminada del sistema para reprogramarla.</p>
    <p> Cuando se calendarize de nuevo se le enviara un correo.</p>
    <p> Muchas gracias por su comprension ante el incoveniente.</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h3>Si tiene algun tipo de duda por favor comunicarse al numero 2562-676 o 2277-3772. </h3>

</body>
</html>