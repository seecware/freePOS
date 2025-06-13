<div class="max-w-7xl mx-auto mt-6 p-6 bg-white shadow rounded">
  <h2 class="text-2xl font-semibold text-gray-800 mb-4">Dashboard</h2>

  <div class="flex space-x-6 mb-8">
    <a href="/dashboard/ventas" class="bg-primary-500 text-white px-6 py-3 rounded hover:bg-primary-600 transition">Ventas</a>
    <a href="/dashboard/almacen" class="bg-secondary-500 text-white px-6 py-3 rounded hover:bg-secondary-600 transition">Almacén</a>
    <a href="/dashboard/productos" class="bg-accent-500 text-white px-6 py-3 rounded hover:bg-accent-600 transition">Productos</a>
  </div>

  <!-- Bajo stock -->
  <div id="bajoStockContainer" class="mb-12"></div>

  <!-- Más vendidos -->
  <div id="masVendidosContainer"></div>
</div>

<script>
  const productos = [
    { sku: "PROD001", nombre: "Laptop", stock: 3, ventas: 25 },
    { sku: "PROD002", nombre: "Mouse", stock: 25, ventas: 15 },
    { sku: "PROD003", nombre: "Teclado", stock: 10, ventas: 20 }
  ];

  const bajoStock = productos.filter(p => p.stock < 10);
  const masVendidos = [...productos].sort((a, b) => b.ventas - a.ventas).slice(0, 5);

  function renderTabla(titulo, productos, containerId, color) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = `
      <h3 class="text-xl font-semibold text-${color}-700 mb-4">${titulo}</h3>
      <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 rounded">
          <thead class="bg-${color}-100 text-left text-sm font-medium">
            <tr>
              <th class="p-2">SKU</th>
              <th class="p-2">Nombre</th>
              <th class="p-2 text-center">${color === 'red' ? 'Stock' : 'Ventas'}</th>
            </tr>
          </thead>
          <tbody>
            ${productos.map(p => `
              <tr class="hover:bg-${color}-50">
                <td class="p-2 border-b">${p.sku}</td>
                <td class="p-2 border-b">${p.nombre}</td>
                <td class="p-2 border-b text-center font-semibold text-${color}-700">
                  ${color === 'red' ? p.stock : p.ventas}
                </td>
              </tr>
            `).join('')}
          </tbody>
        </table>
      </div>
    `;
  }

  renderTabla("⚠️ Productos con bajo stock", bajoStock, "bajoStockContainer", "red");
  renderTabla("🔥 Productos más vendidos", masVendidos, "masVendidosContainer", "green");
</script>
