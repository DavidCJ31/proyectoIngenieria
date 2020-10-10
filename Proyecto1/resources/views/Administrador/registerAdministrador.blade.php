        <form method="POST" action="/User">
            @csrf
            <div>
                <label>Cedula: </label>
                <input class="block mt-1 w-full" type="number" name="id" required autofocus autocomplete="id" />
            </div>

            <div class="mt-4">
                <label>Nombre: </label>
                <input class="block mt-1 w-full" type="text" name="nombre" required />
            </div>

            <div class="mt-4">
                <label>Apellido: </label>
                <input class="block mt-1 w-full" type="test" name="apellido" required />
            </div>

            <div class="mt-4">
                <label>Email: </label>
                <input class="block mt-1 w-full" type="email" name="email" required />
            </div>

            <div>
                <label>Usuario: </label>
                <input class="block mt-1 w-full" type="text" name="usuario" required autofocus autocomplete="id" />
            </div>


            <div class="mt-4">
                <label>Password: </label>
                <input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label>Confirm Password: </label>
                <input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label>Rol: </label>
                <input class="block mt-1 w-full" id="Administrador" type="radio" name="rol" value="1" checked />
                <label for="Administrador">Administrador</label><br>
                <input class="block mt-1 w-full" id="Asesor" type="radio" name="rol" value="2" />
                <label for="Asesor">Asesor</label><br>
                <input class="block mt-1 w-full" id="Tutor" type="radio" name="rol" value="4" />
                <label for="Tutor">Tutor</label><br>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>