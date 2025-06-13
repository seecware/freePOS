<!-- ventas.php adaptado para usar el array de productos desde productos.php -->
<div class="max-w-7xl mx-auto mt-6 p-6 bg-white shadow rounded">
  <h2 class="text-2xl font-semibold text-gray-800 mb-4">Ventas POS</h2>

  <!-- Sección para agregar productos -->
  <div class="mb-6">
    <label for="productSelect" class="block font-semibold mb-2">Agregar producto:</label>
    <select id="productSelect" class="border border-gray-300 rounded p-2 w-full max-w-xs">
      <option value="" disabled selected>Selecciona un producto</option>
      <!-- Opciones se llenan por JS -->
    </select>
    <button id="addProductBtn" class="mt-2 bg-primary-500 text-white px-4 py-2 rounded hover:bg-primary-600 transition">Agregar al ticket</button>
  </div>

  <!-- Tabla del ticket -->
  <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-300 rounded">
      <thead class="bg-gray-100">
        <tr>
          <th class="text-left p-2 border-b">Producto</th>
          <th class="text-center p-2 border-b">Cantidad</th>
          <th class="text-right p-2 border-b">Precio Unitario</th>
          <th class="text-right p-2 border-b">Total</th>
          <th class="p-2 border-b">Acción</th>
        </tr>
      </thead>
      <tbody id="ticketBody">
        <tr><td colspan="5" class="text-center p-4 text-gray-500">No hay productos agregados</td></tr>
      </tbody>
    </table>
  </div>

  <!-- Total y descuento -->
  <div class="mt-4 flex items-center space-x-6">
    <div class="text-lg font-semibold">
      Total: $<span id="totalAmount">0.00</span>
    </div>
    <button id="applyDiscountBtn" class="bg-accent-500 text-white px-4 py-2 rounded hover:bg-accent-600 transition">
      Aplicar 10% descuento familiar
    </button>
  </div>

  <!-- Confirmar ticket -->
  <div class="mt-6">
    <button id="confirmTicketBtn" class="bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700 transition" disabled>
      Confirmar y generar ticket
    </button>
  </div>
</div>

<script>
  const productos = [
    { id: 1, nombre: "Laptop", precio: 800 },
    { id: 2, nombre: "Mouse", precio: 25 },
    { id: 3, nombre: "Teclado", precio: 45 }
  ];

  window.addEventListener("DOMContentLoaded", () => {
    const select = document.getElementById("productSelect");

    productos.forEach(producto => {
      const option = document.createElement("option");
      option.value = producto.nombre;
      option.textContent = `${producto.nombre} - $${producto.precio.toFixed(2)}`;
      option.dataset.price = producto.precio;
      select.appendChild(option);
    });
  });

  const productSelect = document.getElementById('productSelect');
  const addProductBtn = document.getElementById('addProductBtn');
  const ticketBody = document.getElementById('ticketBody');
  const totalAmountEl = document.getElementById('totalAmount');
  const applyDiscountBtn = document.getElementById('applyDiscountBtn');
  const confirmTicketBtn = document.getElementById('confirmTicketBtn');

  let ticket = [];
  let discountApplied = false;

  function renderTicket() {
    ticketBody.innerHTML = '';

    if (ticket.length === 0) {
      ticketBody.innerHTML = '<tr><td colspan="5" class="text-center p-4 text-gray-500">No hay productos agregados</td></tr>';
      confirmTicketBtn.disabled = true;
      totalAmountEl.textContent = '0.00';
      return;
    }

    let total = 0;
    ticket.forEach((item, index) => {
      const itemTotal = item.price * item.quantity;
      total += itemTotal;

      const row = document.createElement('tr');
      row.innerHTML = `
        <td class="p-2 border-b">${item.name}</td>
        <td class="p-2 border-b text-center">${item.quantity}</td>
        <td class="p-2 border-b text-right">$${item.price.toFixed(2)}</td>
        <td class="p-2 border-b text-right">$${itemTotal.toFixed(2)}</td>
        <td class="p-2 border-b text-center">
          <button data-index="${index}" class="text-red-600 hover:text-red-800 remove-btn">Eliminar</button>
        </td>
      `;
      ticketBody.appendChild(row);
    });

    if (discountApplied) {
      total *= 0.9;
    }

    totalAmountEl.textContent = total.toFixed(2);
    confirmTicketBtn.disabled = false;
  }

  addProductBtn.addEventListener('click', () => {
    const selectedOption = productSelect.selectedOptions[0];
    if (!selectedOption || !selectedOption.value) {
      alert('Por favor selecciona un producto');
      return;
    }

    const name = selectedOption.value;
    const price = parseFloat(selectedOption.dataset.price);

    const existingIndex = ticket.findIndex(item => item.name === name);
    if (existingIndex > -1) {
      ticket[existingIndex].quantity++;
    } else {
      ticket.push({ name, price, quantity: 1 });
    }

    renderTicket();
  });

  ticketBody.addEventListener('click', (e) => {
    if (e.target.classList.contains('remove-btn')) {
      const index = parseInt(e.target.dataset.index);
      ticket.splice(index, 1);
      renderTicket();
    }
  });

  applyDiscountBtn.addEventListener('click', () => {
    discountApplied = !discountApplied;
    applyDiscountBtn.textContent = discountApplied ? 'Quitar descuento' : 'Aplicar 10% descuento familiar';
    renderTicket();
  });

  confirmTicketBtn.addEventListener('click', () => {
    if (ticket.length === 0) return alert('No hay productos para generar ticket.');

    let mensaje = 'Ticket generado:\n';
    ticket.forEach(item => {
      mensaje += `${item.quantity}x ${item.name} - $${(item.price * item.quantity).toFixed(2)}\n`;
    });
    mensaje += `Total a pagar: $${totalAmountEl.textContent}\n`;
    mensaje += discountApplied ? '(Descuento aplicado)' : '';

    alert(mensaje);

    ticket = [];
    discountApplied = false;
    applyDiscountBtn.textContent = 'Aplicar 10% descuento familiar';
    renderTicket();
  });

  renderTicket();
</script>
