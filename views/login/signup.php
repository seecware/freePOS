<main class="flex min-h-full flex-col justify-center py-12 lg:px-80 md:px-20 px-400 antialiased">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm w-500">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Registrate</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">

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
                    <input type="password" name="password" id="password" required placeholder="Contraseña" class="password mb-2 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                    <input type="password" name="password" id="confirm_password" required placeholder="Confirmar contraseña" class="password block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                    <div class="flex mt-2">
                        <input id="checkbox" class="text-90" type="checkbox"">
                        <p class="mx-5 text-gray-600 text-md">Mostrar contraseñas</p>
                    </div>
                </div>
                <div id="error_message" class="flex justify-center mt-5 bg-red-600 p-1 hidden">
                    <p class="text-white font-bold">Las contraseñas no coinciden</p>
                </div>
            </div>


            <div>
                <button id="submitForm" type="button" onclick="registerData()" class="flex w-full justify-center rounded-xl bg-primary-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear cuenta</button>
            </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
            Regresar a 
            <a href="/login" class="font-semibold text-primary-600 hover:text-primary-500">login</a>
            </p>
        </div>

        <div id="message_succes" class="bg-green-200 p-5 flex my-10 flex justify-center hidden">
            <p class="w-100 font-bold text-green-900">¡Cuenta creada exitosamente!</p>
        </div>
</main>
<script src="/assets/js/togglePassword.js"></script>
<script src="/assets/js/registerData.js"></script>
