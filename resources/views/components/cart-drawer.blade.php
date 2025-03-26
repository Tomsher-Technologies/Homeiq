<div id="cart-drawer" class="fixed top-0 right-0 h-full w-[320px] md:w-[400px] bg-white shadow-lg transform translate-x-full transition-transform duration-[400ms] z-[60] overflow-y-auto">
    <!-- Drawer Header -->
    <div class="p-4 flex justify-between items-center border-b border-gray-200">
        <h2 class="text-lg font-semibold text-gray-800">Shopping Cart (<span class="canvasCartcount">{{ cartCount() }}</span>)</h2>
        <button id="close-cart" class="text-xl font-bold text-gray-600 hover:text-red-500 focus:outline-none">
                ✖
        </button>
    </div>
    

    <!-- Drawer Content -->
    <div id="cart-canvas-content" class="p-4 space-y-4">
       
    </div>

    <!-- Fixed Bottom Section -->
    <div class="absolute bottom-0 left-0 w-full bg-white p-4 border-t border-gray-200">
        <div class="flex justify-between items-center mb-4">
            <span class="text-gray-800 font-semibold">Total:</span>
            <span class="text-primary font-bold text-lg">AED <span class="cart_sub_total ">0</span></span>
        </div>
        <a href="{{ route('checkout') }}">
            <button class="w-full bg-primary text-white py-3 rounded-lg hover:bg-[#3498db] transition-all duration-300">
                Proceed to Checkout
            </button>
        </a>
        <a href="{{ route('cart') }}">
            <button class="w-full bg-secondary text-white py-3 rounded-lg hover:bg-[#2d2d2dd9] transition-all duration-300 mt-[10px]">
                View Cart
            </button>
        </a>
    </div>
</div>
