<main >
        <div id="registrate_secction" class="flex min-h-full flex-col justify-center py-12 lg:px-80 md:px-20 px-400 antialiased">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm w-500">
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Registrate</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form id="registration_form" class="space-y-6" action="#" method="POST">

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Para crear tu cuenta necesitamos</label>
                    <div class="mt-2">
                    <input type="text" name="user_name" id="user_name" required placeholder="Nombre de usaurio" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                    </div>

                    <div class="mt-2">
                    <input type="email" name="email" id="email" required placeholder="Correo electronico" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                    </div>

                    <div class="mt-2 grid grid-flow-col">
                    <p class="mx-auto content-center text-gray-400">Fecha de nacimiento</p>
                    <input type="date" name="birthdate" id="birthdate" required placeholder="Fecha de nacimiento" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                    </div>

                    <div class="mt-2">
                        <input type="password" name="password" id="password" required placeholder="Contraseña" class="password mb-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                        <p id="valid_password" class="rounded-full font-bold text-xs mb-2 text-center py-1.5 w-100 hidden">Contraseña</p>
                        <input type="password" name="password" id="confirm_password" required placeholder="Confirmar contraseña" class="password block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                        <div class="flex mt-2">
                            <input id="checkbox" class="text-90" type="checkbox">
                            <p class="mx-5 text-gray-600 text-md">Mostrar contraseñas</p>
                        </div>
                    </div>
                    <div id="error_message" class="flex justify-center mt-5 bg-red-600 p-1 hidden">
                        <p class="text-white font-bold">Las contraseñas no coinciden</p>
                    </div>
                </div>


                <div>
                    <button id="submit_form" type="submit" class="flex w-full justify-center rounded-xl bg-primary-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear cuenta</button>
                </div>
                </form>

                <p class="mt-10 text-center text-sm/6 text-gray-500">
                Regresar a 
                <a href="/login" class="font-semibold text-primary-600 hover:text-primary-500">login</a>
                </p>
            </div>

            <div id="message_succes" class="transition rounded-full bg-red-200 p-5 flex my-10 flex justify-center hidden">
                <p class="w-100 font-bold text-red-900">Hay campos incompletos</p>
            </div>
        </div>
        
        <div id="animation_succes" class="fixed inset-0 z-30 flex flex-col items-center justify-center hidden">
            <div id="success_animation" class="bg-green-100 border border-green-300 shadow-xl rounded-2xl px-8 py-6 flex items-center gap-4 opacity-100 scale-90 transition-all duration-500 ease-out pointer-events-auto">
                <div class="text-5xl animate-thumb">👍</div>
                <div>
                    <h3 class="text-green-900 font-bold text-xl mb-1">¡Cuenta creada!</h3>
                    <p class="text-green-800 text-sm">Tu registro fue exitoso. ¡Bienvenido a bordo!</p>
                </div>
            </div>
            <p class=" mt-10 text-center text-sm/6 text-gray-500">Regresar a
                <a href="/login" class="font-semibold text-primary-600 hover:text-primary-500">login</a>
            </p>
        </div>

</main>

<!-- estilos de animacion de registro exitoso -->
<style>
  @keyframes thumbMove {
    0%, 100% { transform: rotate(-10deg); }
    50% { transform: rotate(10deg); }
  }

  .animate-thumb {
    animation: thumbMove 1.5s infinite ease-in-out;
  }
</style>

<script src="/assets/js/togglePassword.js"></script>
<script src="/assets/js/registerData.js"></script>
<script src="/assets/js/inspectPassword.js"></script>
