<main class="bg-gray-50 min-h-screen p-6">
    <!-- Contenedor principal con ancho limitado -->
    <div class="mx-auto max-w-screen-xl">
        <!-- Barra de búsqueda (centrada pero dentro del límite) -->
        <div class="mb-8">
            <div class="relative max-w-2xl mx-auto">
                <input 
                    type="text" 
                    placeholder="Buscar producto..." 
                    class="w-full p-4 pl-12 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
                <div class="absolute left-3 top-4 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Categorías (ahora respetan el max-width) -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Categorías</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <!-- Ejemplo de categoría -->
                <a href="#" class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex flex-col items-center">
                    <div class="bg-blue-100 p-3 rounded-full mb-3">
                        <img class="rounded-full" src="/assets/products/bebidas.jpeg" alt="Bebidas en estante.">
                    </div>
                    <h3 class="font-semibold text-gray-800">Bebidas</h3>
                    <p class="text-sm text-gray-500 mt-1">Refrescos, jugos, aguas</p>
                </a>

                <a href="#" class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex flex-col items-center">
                    <div class="bg-red-100 p-3 rounded-full mb-3">
                        <img class="rounded-full" src="/assets/products/lateria.jpeg" alt="Bebidas en estante.">
                    </div>
                    <h3 class="font-semibold text-gray-800">Latería abarrotes</h3>
                    <p class="text-sm text-gray-500 mt-1">Salsas, no perecederos, etc</p>
                </a>

                                <a href="#" class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex flex-col items-center">
                    <div class="bg-green-100 p-3 rounded-full mb-3">
                        <img class="rounded-full" src="/assets/products/lacteos.jpeg" alt="Bebidas en estante.">
                    </div>
                    <h3 class="font-semibold text-gray-800">Lácteos</h3>
                    <p class="text-sm text-gray-500 mt-1">Leches, yogures, quesos</p>
                </a>

                                <a href="#" class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex flex-col items-center">
                    <div class="bg-yellow-100 p-3 rounded-full mb-3">
                        <img class="rounded-full" src="/assets/products/basicos.jpeg" alt="Bebidas en estante.">
                    </div>
                    <h3 class="font-semibold text-gray-800">Alimentos básicos</h3>
                    <p class="text-sm text-gray-500 mt-1">Arroz, frijoles, aceites</p>
                </a>

                                <a href="#" class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex flex-col items-center">
                    <div class="bg-purple-100 p-3 rounded-full mb-3">
                        <img class="rounded-full" src="/assets/products/snacks.jpeg" alt="Bebidas en estante.">
                    </div>
                    <h3 class="font-semibold text-gray-800">Snacks</h3>
                    <p class="text-sm text-gray-500 mt-1">Papas, dulces, galletas</p>
                </a>

                                <a href="#" class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 flex flex-col items-center">
                    <div class="bg-cyan-100 p-3 rounded-full mb-3">
                        <img class="rounded-full" src="/assets/products/limpieza.jpeg" alt="Bebidas en estante.">
                    </div>
                    <h3 class="font-semibold text-gray-800">Limpieza</h3>
                    <p class="text-sm text-gray-500 mt-1">Jabon, cloro, escobas</p>
                </a>
            </div>
        </section>

        <!-- Productos frecuentes (también dentro del límite) -->
        <section class="mb-12">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Productos frecuentes</h2>
                <a href="#" class="text-blue-600 hover:underline">Ver todos</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Ejemplo de producto -->
                <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="h-32 bg-blue-50 rounded-lg mb-3 flex items-center justify-center">
                        <span class="text-gray-400">Imagen</span>
                    </div>
                    <h3 class="font-medium text-gray-800">Coca-Cola 600ml</h3>
                    <p class="text-sm text-gray-500">Refresco</p>
                    <div class="mt-3 flex justify-between items-center">
                        <span class="font-bold text-gray-900">$15.50</span>
                        <button class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Más productos... -->
            </div>
        </section>
        <a href="/"
        class="inline-flex items-center gap-2 px-4 py-2 text-white bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 focus:outline-none rounded-2xl shadow transition-all duration-200 text-sm font-semibold">
  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
  </svg>
        <span>Back to Home</span>
        </a>
    </div>
</main>