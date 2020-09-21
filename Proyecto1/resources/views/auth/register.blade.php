<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

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
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>


