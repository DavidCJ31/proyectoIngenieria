<link href="{{ asset('css/styleHeader.css') }}" rel="stylesheet">
<header>

    <!-- ****** Bara del header ************ -->
    <nav class="navbar navbar-expand-lg navbar-dark default-color">

        <a class="logoHeader"><img src="imagenes/logo-largo.png" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                        <a class="dropdown-item" href="/estudiante">Tabla Tutores</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-rigth">
                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="/user/profile" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
                @endif
                @endif
                @endif
            </ul>
        </div>

    </nav>

</header>