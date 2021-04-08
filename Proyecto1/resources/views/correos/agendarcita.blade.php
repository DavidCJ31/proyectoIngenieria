<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actuinformacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>

    <h2>Seguimiento Estudiantil le informa:</h2>
    <h3>Hola {{ App\Models\User::find($reunion->estudiante_id)->name}}</h3>
    <p> Le informamos por parte de Éxito académico que se agendo una cita a su nombre.</p>
    <p>La fecha de su cita es el: {{$reunion->start}} y la duracion de su reunion es de : {{$reunion->duracion}} horas. </p>
    <p>El asesor que se encargara de su reunion es {{ App\Models\User::find($reunion->asesor_id)->name}} {{ App\Models\User::find($reunion->asesor_id)->apellido}} y responde al correo {{ App\Models\User::find($reunion->asesor_id)->email}} </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h3>Si tiene algun tipo de duda por favor comunicarse al numero 2562-676 o 2277-3772. </h3>

</body>
@include("layouts.footer")
</html>