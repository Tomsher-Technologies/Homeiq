@props(['products'])

<section id="products-section" class="py-10 bg-white">
    <x-wrapper>
        <h2 class="text-3xl md:text-4xl font-normal text-center">
            Explore Our <span class="text-[#41B6E8] font-semibold">Products</span>
        </h2>
        <p class="text-gray-600 mt-4 text-center">
            Upgrade your home with the latest in security, energy-saving, and automation. <br>
            Explore our categories to find the perfect smart devices for your lifestyle.
        </p>


                <!-- Filters -->
<!-- Alpine.js Wrapper -->
<div x-data="{ open: false }" class="relative w-full">
    <div class="flex justify-between items-center mt-6">
        
        <!-- 🚀 Button to Open Drawer (Filter) -->
        <button @click="open = true" class="px-5 py-2 bg-black text-white rounded-full shadow-md hover:bg-gray-800 transition">
            Filter
        </button>

        <!-- 🔽 Sort Dropdown (Right Aligned) -->
        <div>
            <label for="sort_by" class="sr-only">Sort By</label>
            <select id="sort_by" class="border border-gray-300 px-4 py-2 rounded-full text-gray-700 hover:bg-gray-100 transition">
                <option value="">Sort by</option>
                <option value="low_high">Price: Low to High</option>
                <option value="high_low">Price: High to Low</option>
            </select>
        </div>
    </div>

    <!-- 🔥 Filters Drawer (Hidden by Default) -->
    <div x-show="open" class="fixed inset-0 z-50 flex justify-end bg-black bg-opacity-50">
        <!-- 🛠 Drawer Content -->
        <div class="bg-white w-80 p-6 h-full shadow-lg transform transition-transform duration-300"
             x-show="open"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full">
            
            <!-- ❌ Close Button -->
            <button @click="open = false" class="absolute top-4 right-4 text-gray-500 hover:text-gray-900">
                ✖
            </button>

            <!-- 🏷️ Filters Heading -->
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Filters</h3>

            <!-- 🏷️ Category Filter -->
            <label for="category" class="text-gray-700 font-medium">Category</label>
            <select id="category" class="border border-gray-300 w-full px-4 py-2 rounded-lg mt-2">
                <option value="">All Categories</option>
                <option value="Smart Home">Smart Home</option>
                <option value="Security">Security</option>
                <option value="Climate Control">Climate Control</option>
            </select>

            <!-- 🏷️ Discount Filter -->
            <label for="discount" class="text-gray-700 font-medium mt-4 block">Discount</label>
            <select id="discount" class="border border-gray-300 w-full px-4 py-2 rounded-lg mt-2">
                <option value="">Discount</option>
                <option value="10%">10% Off</option>
                <option value="20%">20% Off</option>
            </select>

            <!-- 🏷️ Price Range Filter -->
            <label for="price_range" class="text-gray-700 font-medium mt-4 block">Price Range</label>
            <select id="price_range" class="border border-gray-300 w-full px-4 py-2 rounded-lg mt-2">
                <option value="">Price Range</option>
                <option value="100-200">AED 100 - 200</option>
                <option value="200-300">AED 200 - 300</option>
            </select>

            <!-- ✅ Apply Filters Button -->
            <button class="w-full mt-6 py-2 bg-[#41B6E8] text-white rounded-lg hover:bg-[#3498db] transition">
                Apply Filters
            </button>
        </div>
    </div>
</div>




        <!-- Products Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-[20px] gap-y-[30px] mt-[40px]">
            @foreach ($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>

        <!-- View More Button -->
        <div class="mt-[40px] flex justify-center">
        <a href="/products"
   class="inline-block px-[30px] py-[12px] bg-black text-white rounded-full shadow-md hover:bg-[#41B6E8] transition duration-[300ms]">
   View More
</a>


        </div>
    </x-wrapper>
</section>
