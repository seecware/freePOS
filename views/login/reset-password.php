<main class="flex min-h-full flex-col justify-center py-12 lg:px-80 md:px-20 px-400 antialiased">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm w-500">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Recupera tu cuenta</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">

            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Ingresa tu correo electronico para buscar tu cuenta</label>
                <div class="mt-2">
                <input type="email" name="email" id="email" required placeholder="Correo electronico" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 border">
                </div>
            </div>


            <div>
                <button type="button" onclick="foundAccount()" class="flex w-full justify-center rounded-xl bg-primary-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Buscar</button>
            </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
            Regresar a <a href="/login" class="font-semibold text-primary-600 hover:text-primary-500">login</a>
            </p>
        </div>

        <div id="message" class="bg-green-200 p-5 flex my-10 flex justify-center hidden">
            <p class="w-100 font-bold text-green-900">Se envio un correo para restablecer contraseña</p>
        </div>
</main>

<script>
    const foundAccount = () => {
        const message = document.getElementById("message");
        //buscar cuenta en db
        message.style.display = "flex"
    }
</script>