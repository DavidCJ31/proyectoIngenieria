<link rel="shortcut icon" href="Imagenes/logo-blanco.png" type="image/x-icon" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Registro</title>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>


<x-guest-layout>
    @include("Welcome.headerWelcome")
    </br>
    <x-jet-authentication-card style="background-color: red;">
        <x-slot name="logo">
            <center>
                <img id="profile-img" style="width: 80%;" class="profile-img-card" src="imagenes/logo.jpg" />
            </center>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <x-jet-input type="hidden" name="rol" :value="3" />
            <div>
                <x-jet-label value="{{ __('Cedula') }}" />
                <x-jet-input class="block mt-1 w-full" type="number" name="id" :value="old('id')" required autofocus autocomplete="id" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Nombre') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Apellido') }}" />
                <x-jet-input class="block mt-1 w-full" type="test" name="apellido" :value="old('apellido')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label value="{{ __('Usuario') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="usuario" :value="old('usuario')" required autofocus autocomplete="id" />
            </div>


            <div class="mt-4">
                <x-jet-label value="{{ __('Contraseña') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya esta registrado?') }}
                </a>
                <x-jet-button class="ml-4">
                    {{ __('Registrase') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>