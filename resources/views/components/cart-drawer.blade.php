<div id="cart-drawer" 
     class="fixed top-0 right-0 h-full w-[320px] md:w-[400px] bg-white shadow-lg transform translate-x-full transition-transform duration-[400ms] z-[60] overflow-y-auto">
    <!-- Drawer Header -->
    <div class="p-4 flex justify-between items-center border-b border-gray-200">
        <h2 class="text-lg font-semibold text-gray-800">Shopping Cart</h2>
        <button id="close-cart" 
                class="text-xl font-bold text-gray-600 hover:text-red-500 focus:outline-none">
                ✖
        </button>
    </div>

    <!-- Drawer Content -->
    <div id="cart-content" class="p-4 space-y-4">
        <!-- Sample Cart Items -->
        @php
            $cartItems = [
                ['name' => 'Smart Lock', 'price' => '$199', 'quantity' => 1, 'image' => 'cooltech-x500.jpeg'],
                ['name' => 'Security Camera', 'price' => '$299', 'quantity' => 2, 'image' => 'ecoheat-5000.jpeg'],
                ['name' => 'Smart Thermostat', 'price' => '$149', 'quantity' => 1, 'image' => 'ecotemp-pro.jpeg'],
            ];
        @endphp

        @foreach ($cartItems as $item)
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/products/' . $item['image']) }}" alt="{{ $item['name'] }}" 
                     class="w-16 h-16 object-cover rounded-lg shadow-sm">
                <div class="flex-1">
                    <h4 class="text-gray-800 font-medium">{{ $item['name'] }}</h4>
                    <p class="text-gray-600 text-sm">Quantity: {{ $item['quantity'] }}</p>
                    <p class="text-primary font-semibold">{{ $item['price'] }}</p>
                </div>
                <button class="text-red-500 hover:text-red-700 focus:outline-none">
                    ✖
                </button>
            </div>
        @endforeach
    </div>

    <!-- Fixed Bottom Section -->
    <div class="absolute bottom-0 left-0 w-full bg-white p-4 border-t border-gray-200">
        <div class="flex justify-between items-center mb-4">
            <span class="text-gray-800 font-semibold">Total:</span>
            <span class="text-primary font-bold text-lg">$846</span>
        </div>
        <button class="w-full bg-primary text-white py-3 rounded-lg hover:bg-[#3498db] transition-all duration-300">
            Proceed to Checkout
        </button>
    </div>
</div>
