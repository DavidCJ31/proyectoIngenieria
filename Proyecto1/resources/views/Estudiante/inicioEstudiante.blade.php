<!-- Agregado -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estudiante</title>
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

                <div>
                <br><br>  
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagenes/carruestudiante.jpg" class="d-block w-100" alt="..." width="420px"
                                    height="450px">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/slider2.png" class="d-block w-100" alt="..." width="420px"
                                    height="450px">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes/slider3.jpg" class="d-block w-100" alt="..." width="420px"
                                    height="450px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
 
                <div class="container mt-4">
 
 <h2 class="text-center">File Upload in Laravel 8 - Tutsmake.com</h2>

     <form method="POST" enctype="multipart/form-data" id="upload-file" action="/Estudiante/{{ $usuario->id }}" >
     @csrf
        @method('PUT')                
         <div class="row">

             <div class="col-md-12">
                 <div class="form-group">
                     <input type="file" name="file" placeholder="Escoger archivo" id="file">
                       @error('file')
                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                 </div>
             </div>
                
             <div class="col-md-12">
                 <button type="submit" class="btn btn-primary" id="submit">Submit</button>
             </div>
         </div>     
     </form>
</div>
</div> 

<a href="storage/{{$usuario->id}}/{{$usuario->id}}.docx"><button>{{$usuario->id}}.docx</button></a>

<!--<iframe width="100%"
	height="850"
	src="https://docs.google.com/document/d/1q673PBte-biMvyu2jRtRjyPh1T5yJo4WKxEDgJUB_uI/edit?usp=sharing">
</iframe>
-->
</div>

</body>

<div>
<br><br>
@include("layouts.footer")
</div>

</html>




<!-- Agregado -->