
<div class="max-w-7xl mx-auto mt-6 p-6 bg-white shadow rounded">
    <h2 class="text-2xl font-semibold text-gray-800">Productos</h2>
    <p class="text-gray-600 mt-2">Busca un producto o regístralo si tienes acceso.</p>

    <!-- Barra de búsqueda (siempre disponible) -->
    <input type="text" id="searchInput" class="w-full p-2 border border-gray-300 rounded mt-4" 
        placeholder="Buscar producto..." onkeyup="searchProduct()">


    <div class="mt-4">
        <a href="/dashboard/registroproducto" class="bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700">
            Registrar Producto
        </a>
    </div>


    <!-- Contenedor de resultados de búsqueda -->
    <div id="results" class="mt-6"></div>
</div>

<script>
    const productos = [
        { id: 1, nombre: "Laptop" },
        { id: 2, nombre: "Mouse" },
        { id: 3, nombre: "Teclado" }
    ];

    function searchProduct() {
        const input = document.getElementById("searchInput").value.toLowerCase();
        const resultsContainer = document.getElementById("results");
        resultsContainer.innerHTML = "";

        const filtered = productos.filter(producto => producto.nombre.toLowerCase().includes(input));

        filtered.forEach(producto => {
            const productDiv = document.createElement("div");
            productDiv.classList.add("p-4", "border", "border-gray-300", "rounded", "flex", "justify-between", "mt-2");
            productDiv.innerHTML = `
                <span>${producto.nombre}</span>
                <a href="/productos/editar/${producto.id}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Editar
                </a>
            `;
            resultsContainer.appendChild(productDiv);
        });
    }
</script>
