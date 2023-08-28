<div class="flex space-x-4 mb-4">
    <div class="flex-1 bg-white rounded-lg p-4 shadow">
        <h2 class="text-lg font-semibold mb-2">Total Spending</h2>
        <p class="text-gray-600">${{ $totalOrderCost }}</p>
    </div>
    <div class="flex-1 bg-white rounded-lg p-4 shadow">
        <h2 class="text-lg font-semibold mb-2">Total Orders</h2>
        <p class="text-gray-600">{{ $orderCount }}</p>
    </div>
</div>
<div class="flex space-x-4 mb-4">
    <div class="flex-1 bg-white rounded-lg p-4 shadow">
        <h2 class="text-lg font-semibold mb-2">Wishlist</h2>
        <p class="text-gray-600">{{ $cart }}</p>
    </div>
    <div class="flex-1 bg-white rounded-lg p-4 shadow">
        <h2 class="text-lg font-semibold mb-2">Cart</h2>
        <p class="text-gray-600">{{ $wishlist }}</p>
    </div>
</div>
