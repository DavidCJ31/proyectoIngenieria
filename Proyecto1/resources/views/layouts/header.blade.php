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
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Opinions</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons" id="redes">
                <li class="nav-item">
                <x-jet-responsive-nav-link class="nav-link" href="/user/profile" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>
                </li>
                <li class="nav-item">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                        <x-jet-responsive-nav-link class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-responsive-nav-link>
                </form>
                </li>
                <li class="nav-item">
                    <x-jet-responsive-nav-link href="/user/profile" :active="request()->routeIs('profile.show')">
                        <img class="h-8 w-8 rounded-full object-cover" style="width:30px; border-radius:50%;" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </x-jet-responsive-nav-link>
                </li>
            </ul>
        </div>
    </nav>

</header>