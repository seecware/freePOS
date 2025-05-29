<main class="flex min-h-full flex-col justify-center py-12 lg:px-80 md:px-20 px-400 antialiased">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm w-500">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Iniciar sesión</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form id="login_form" class="space-y-6" method="POST">
            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Dirección e-mail</label>
                <div class="mt-2">
                    <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                </div>
            </div>

            <div style="margin-top: 10px;">
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Contraseña</label>
                </div>
                <div class="mt-2">
                    <input type="password" name="password" id="password" autocomplete="current-password" required class="password block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                    <div class="flex mt-2">
                        <input id="checkbox" class="text-90" type="checkbox">
                        <p class="mx-5 text-gray-600 text-md">Mostrar contraseñas</p>
                    </div>
                </div>
                <div class="text-sm mt-3 flex justify-end">
                    <a href="/reset-password" class="font-semibold text-primary-600 hover:text-primary-500">¿Olvidaste tu contraseña?</a>
                </div>
            </div>

            <div>
                <button type="button" id="ingresar" class="flex w-full justify-center rounded-xl bg-primary-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ingresar</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm/6 text-gray-500">
            ¿No tienes una cuenta?
            <a href="/signup" class="font-semibold text-primary-600 hover:text-primary-500 mx-1">Registrate</a>
        </p>

        <div id="message" class="rounded-full bg-red-200 p-5 flex justify-center my-10 opacity-0 transition-opacity duration-300 pointer-events-none">
            <p class="w-100 font-bold text-red-900">Hay campos incompletos</p>
        </div>

    </div>
</main>

<!-- Loader -->
<div id="loader" class="hidden fixed inset-0 bg-white bg-opacity-90 flex flex-col items-center justify-center z-50">
    <div class="animate-spin rounded-full h-16 w-16 border-4 border-indigo-600 border-t-transparent mb-4"></div>
    <p class="text-lg font-medium text-gray-800 font-bold">Ingresando . . .</p>
</div>

<!-- JS -->
<script src="/assets/js/togglePassword.js"></script>
<script src="/assets/js/showLoader.js"></script>
