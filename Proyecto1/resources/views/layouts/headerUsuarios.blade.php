<link href="{{ asset('css/styleHeader.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="Imagenes/logo-blanco.png" type="image/x-icon" />
<header>
    <!-- ****** Bara del header ************ -->
    <nav class="navbar navbar-expand-lg navbar-dark default-color">

        <a class="logoHeader"><img src="imagenes/logo-largo.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @switch(Auth::user()->rol)
            @case(0)
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/SuperAdministrador">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/User">Registrar Usuario</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="/Cursos" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cursos
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/Cursos">Ver Cursos</a>
                        <a class="dropdown-item" href="/Cursos/create">Agregar Curso</a>
                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/usuarios">Tabla usuarios</a>
                        <a class="dropdown-item" href="/estudiante">Tabla estudiantes</a>
                        <a class="dropdown-item" href="/Tutores">Tabla Tutores</a>
                    </div>
                </li>
            </ul>
            @break
            @case(1)
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/Adminitrador">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/User">Registrar Usuario</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/usuarios">Tabla usuarios</a>
                        <a class="dropdown-item" href="/estudiante">Tabla estudiantes</a>
                        <a class="dropdown-item" href="/Tutores">Tabla Tutores</a>
                    </div>
                </li>
            </ul>
            @break
            @case(2)
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/Asesor">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Detalles de asesor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Fomulario</a>
                        <a class="dropdown-item" href="#">Informe mensual</a>
                        <a class="dropdown-item" href="/usuarios">Tabla usuarios</a>
                        <a class="dropdown-item" href="/estudiantes">Tabla estudiantes</a>
                        <a class="dropdown-item" href="/horario-citas">Guardar horario</a>
                        <a class="dropdown-item" href="/horarioAsesor">Tabla horarios</a>
                    </div>
                </li>
            </ul>
            @break
            @case(3)
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/Tutor">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sesiones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Tutoria-estudiantes">Estudiantes Asignados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/asistencia">Asistencia</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Fomulario</a>
                        <a class="dropdown-item" href="#">Informe mensual</a>
                        <a class="dropdown-item" href="/usuarios">Tabla usuarios</a>
                        <a class="dropdown-item" href="/estudiante">Tabla estudiantes</a>
                    </div>
                </li>
            </ul>
            @break
            @case(4)
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/Estudiante">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Agendar cita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Historial</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/EstudianteDetalle">Fomulario Informacion Personal</a>
                        <a class="dropdown-item" href="#">Informe mensual</a>
                        <a class="dropdown-item" href="/usuarios">Tabla usuarios</a>
                        <a class="dropdown-item" href="/estudiante">Tabla estudiantes</a>
                    </div>
                </li>
            </ul>
            @break
            @default
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            @endswitch
            <ul class="navbar-nav navbar-rigth">
                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="/user/profile" :active="request()->routeIs('profile.show')">
                        {{ __('Perfil') }}
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Salir') }}
                        </a>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                </li>
                @endif
                @endif
                @endif
            </ul>
        </div>

    </nav>

</header>