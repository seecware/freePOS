<div class="p-6 space-y-6 border border-gray-300 rounded-xl shadow-md p-6 bg-white">
  <!-- Title -->
  <h1 class="text-3xl font-bold">Point of Sale (POS)</h1>

  <!-- Barcode Input -->
  <div class="flex items-center space-x-4">
    <input 
      type="text" 
      placeholder="Enter barcode or product code"
      class="w-full px-4 py-3 border-2 border-gray-300 bg-gray-50 rounded-lg focus:outline-none focus:ring-4 focus:ring-green-400 focus:animate-pulse transition-all duration-300"
    />
    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add</button>
  </div>

  <!-- Product List -->
  <div class="overflow-x-auto bg-white rounded-lg shadow p-4 max-h-96 overflow-y-auto">
    <table class="min-w-full text-sm">
      <thead>
        <tr class="bg-gray-100">
          <th class="text-left p-2">#</th>
          <th class="text-left p-2">Product</th>
          <th class="text-left p-2">Presentation</th>
          <th class="text-left p-2">Warehouse</th>
          <th class="text-left p-2">Qty</th>
          <th class="text-left p-2">Price</th>
          <th class="text-left p-2">Subtotal</th>
          <th class="text-left p-2">Tax</th>
          <th class="text-left p-2">Total</th>
          <th class="text-left p-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
          <td class="p-2">1</td>
          <td class="p-2">Apple Juice</td>
          <td class="p-2">500ml Bottle</td>
          <td class="p-2">Main Warehouse</td>
          <td class="p-2">2</td>
          <td class="p-2">$2.50</td>
          <td class="p-2">$5.00</td>
          <td class="p-2">$0.80</td>
          <td class="p-2">$5.80</td>
          <td class="p-2">
            <button class="text-red-500 hover:text-red-700">Remove</button>
          </td>
        </tr>
        <!-- More rows dynamically inserted here -->
      </tbody>
    </table>
  </div>

  <!-- Summary Section -->
  <div class="flex justify-end mt-6">
    <div class="w-full max-w-md space-y-2">
      <div class="flex justify-between">
        <span class="font-medium">Subtotal:</span>
        <span>$5.00</span>
      </div>
      <div class="flex justify-between">
        <span class="font-medium">Tax (16%):</span>
        <span>$0.80</span>
      </div>
      <div class="flex justify-between text-lg font-bold border-t pt-2">
        <span>Total:</span>
        <span>$5.80</span>
      </div>
    </div>
  </div>

  <!-- Actions -->
  <div class="flex space-x-4 mt-6">
    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">Complete Sale</button>
    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">Hold</button>
    <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">Cancel</button>
    <button class="bg-gray-300 hover:bg-gray-400 px-4 py-2 rounded-lg">Print</button>
  </div>
</div>
