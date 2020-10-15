<link href="{{ asset('css/styleHeader.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="Imagenes/logo-blanco.png" type="image/x-icon" />
<header>
    <!-- ****** Bara del header ************ -->
    <nav class="navbar navbar-expand-lg navbar-dark default-color">

        <h3><a href="https://www.una.ac.cr/"><img style="width:10%;" src="imagenes/logo-largo.png"/></a></h3>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
