<div class="max-w-7xl mx-auto mt-6 p-6 bg-white shadow rounded">
  <h2 class="text-2xl font-semibold text-gray-800 mb-4">Almacén / Inventario</h2>

  <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-300 rounded">
      <thead class="bg-gray-100">
        <tr>
          <th class="text-left p-2 border-b">SKU</th>
          <th class="text-left p-2 border-b">Producto</th>
          <th class="text-center p-2 border-b">Categoría</th>
          <th class="text-center p-2 border-b">Stock</th>
          <th class="text-right p-2 border-b">Precio Venta</th>
          <th class="text-right p-2 border-b">Precio Costo</th>
          <th class="text-center p-2 border-b">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- Producto 1 -->
        <tr class="hover:bg-gray-50">
          <td class="p-2 border-b">PROD001</td>
          <td class="p-2 border-b">Laptop</td>
          <td class="p-2 border-b text-center">Electrónica</td>
          <td class="p-2 border-b text-center text-red-600 font-semibold">3</td>
          <td class="p-2 border-b text-right">$950.00</td>
          <td class="p-2 border-b text-right">$800.00</td>
          <td class="p-2 border-b text-center space-x-2">
            <button class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">Editar</button>
            <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm">Ajustar Stock</button>
          </td>
        </tr>
        <!-- Producto 2 -->
        <tr class="hover:bg-gray-50">
          <td class="p-2 border-b">PROD002</td>
          <td class="p-2 border-b">Mouse</td>
          <td class="p-2 border-b text-center">Accesorios</td>
          <td class="p-2 border-b text-center text-green-700 font-semibold">25</td>
          <td class="p-2 border-b text-right">$35.00</td>
          <td class="p-2 border-b text-right">$20.00</td>
          <td class="p-2 border-b text-center space-x-2">
            <button class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">Editar</button>
            <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm">Ajustar Stock</button>
          </td>
        </tr>
        <!-- Producto 3 -->
        <tr class="hover:bg-gray-50">
          <td class="p-2 border-b">PROD003</td>
          <td class="p-2 border-b">Teclado</td>
          <td class="p-2 border-b text-center">Accesorios</td>
          <td class="p-2 border-b text-center text-yellow-600 font-semibold">10</td>
          <td class="p-2 border-b text-right">$50.00</td>
          <td class="p-2 border-b text-right">$30.00</td>
          <td class="p-2 border-b text-center space-x-2">
            <button class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">Editar</button>
            <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm">Ajustar Stock</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Botón para agregar nuevo producto -->
  <div class="mt-6">
    <a href="/dashboard/registroproducto" class="bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700">
      + Agregar nuevo producto
    </a>
  </div>
</div>
