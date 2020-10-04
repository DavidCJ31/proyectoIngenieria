<link href="{{ asset('css/styleHeader.css') }}" rel="stylesheet">
<header>

    <!-- ****** Bara del header ************ -->
    <nav class="navbar navbar-expand-lg navbar-dark default-color">

        <a class="navbar-brand" href="#"><strong>UNA</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle btn-navbar" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reportes
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Estudiantes</a>
                            <a class="dropdown-item" href="/horarioAsesor">Horarios</a>
                            <a class="dropdown-item" href="#">General</a>
                        </div>
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
