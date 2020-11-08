<link href="{{ asset('css/styleHeader.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="Imagenes/logo-blanco.png" type="image/x-icon" />
<header>
    <!-- ****** Bara del header ************ -->
    <nav class="navbar navbar-expand-lg navbar-dark default-color">
        <a class="logoHeader"><img src="imagenes/logo-largo.png" id="logoLargo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(Auth::user() == null)
            <!-- ///////////////////////////////////////////////////////////////////////////// Header Vacio ///////////////////////////////////////////////////////////////////////////// -->
            <ul class="navbar-nav mr-auto navbar-rigth">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            @else
            @switch(Auth::user()->rol)
            @case(0)
            <!-- ///////////////////////////////////////////////////////////////////////////// Header Super Usuario ///////////////////////////////////////////////////////////////////////////// -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/logged_in">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/User">Registrar Usuario</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="/Cursos" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cursos
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/CursosDetallados">Ver Cursos</a>
                        <a class="dropdown-item" href="/CursosDetallados/create">Agregar Curso</a>
                        <a class="dropdown-item" href="/Cursos">Administar Cursos</a>
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
            <!-- ///////////////////////////////////////////////////////////////////////////// Header Administrador ///////////////////////////////////////////////////////////////////////////// -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/logged_in">Inicio<span class="sr-only">(current)</span></a>
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
            <!-- ///////////////////////////////////////////////////////////////////////////// Header Asesor ///////////////////////////////////////////////////////////////////////////// -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/logged_in">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/referencia">Referencias</a>
                        <a class="dropdown-item" href="/usuarios">Tabla usuarios</a>
                        <a class="dropdown-item" href="/horario-citas">Guardar horario</a>
                        <a class="dropdown-item" href="/horarioAsesor">Tabla horarios</a>
                    </div>
                </li>
            </ul>
            @break
            @case(3)
            <!-- ///////////////////////////////////////////////////////////////////////////// Header Tutor ///////////////////////////////////////////////////////////////////////////// -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/logged_in">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Clases">Sesiones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Tutorias-estudiantes">Estudiantes Asignados</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/estudiantes-asignados">Asistencia</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/informe-mensual">Informe mensual</a>
                        <a class="dropdown-item" href="/usuarios">Tabla usuarios</a>
                        <a class="dropdown-item" href="/estudiantes-asignados">Estudiantes asignados</a>
                    </div>
                </li>
            </ul>
            @break
            @case(4)
            <!-- ///////////////////////////////////////////////////////////////////////////// Header Estudiante ///////////////////////////////////////////////////////////////////////////// -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/logged_in">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/AgendarSeguimientos">Agendar Seguimiento</a>
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
                        <a class="dropdown-item" href="/usuarios">Tabla usuarios</a>
                        <a class="dropdown-item" href="/estudiante">Sus asesores</a>
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
            @endif
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