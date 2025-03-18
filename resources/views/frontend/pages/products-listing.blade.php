@extends('layouts.app')

@section('title', 'Products - HOME_IQ')

@section('content')
<div class="container mx-auto py-12 px-6 lg:px-12">
    <!-- Section Title -->
    <h2 class="text-3xl md:text-4xl text-center">
        Explore Our <span class="text-[#41B6E8] font-semibold">Products</span>
    </h2>
    <p class="text-gray-600 mt-2 text-center">
        Discover the latest smart home solutions designed to enhance your living experience.
    </p>

    <!-- Filters Section -->
    <div x-data="{ open: false }" class="relative w-full mt-6">
        <div class="flex justify-between items-center">
            <button @click="open = true" class="px-5 py-2 bg-black text-white rounded-full shadow-md hover:bg-gray-800 transition">
                Filter
            </button>
            <div>
                <label for="sort_by" class="sr-only">Sort By</label>
                <select id="sort_by" class="border border-gray-300 px-4 py-2 rounded-full text-gray-700 hover:bg-gray-100 transition">
                    <option value="">Sort by</option>
                    <option value="low_high">Price: Low to High</option>
                    <option value="high_low">Price: High to Low</option>
                </select>
            </div>
        </div>

        <!-- Filters Drawer -->
        <div x-show="open" class="fixed inset-0 z-50 flex justify-end bg-black bg-opacity-50">
            <div class="bg-white w-80 p-6 h-full shadow-lg transform transition-transform duration-300"
                 x-show="open"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full">
                
                <button @click="open = false" class="absolute top-4 right-4 text-gray-500 hover:text-gray-900">
                    ✖
                </button>

                <h3 class="text-lg font-semibold text-gray-800 mb-4">Filters</h3>

                <!-- Category Filter -->
                <label for="category" class="text-gray-700 font-medium">Category</label>
                <select id="category" class="border border-gray-300 w-full px-4 py-2 rounded-lg mt-2">
                    <option value="">All Categories</option>
                    <option value="Smart Home">Smart Home</option>
                    <option value="Security">Security</option>
                    <option value="Climate Control">Climate Control</option>
                </select>

                <!-- Discount Filter -->
                <label for="discount" class="text-gray-700 font-medium mt-4 block">Discount</label>
                <select id="discount" class="border border-gray-300 w-full px-4 py-2 rounded-lg mt-2">
                    <option value="">Discount</option>
                    <option value="10%">10% Off</option>
                    <option value="20%">20% Off</option>
                </select>

                <!-- Price Range Filter -->
                <label for="price_range" class="text-gray-700 font-medium mt-4 block">Price Range</label>
                <select id="price_range" class="border border-gray-300 w-full px-4 py-2 rounded-lg mt-2">
                    <option value="">Price Range</option>
                    <option value="100-200">AED 100 - 200</option>
                    <option value="200-300">AED 200 - 300</option>
                </select>

                <!-- Apply Filters Button -->
                <button class="w-full mt-6 py-2 bg-[#41B6E8] text-white rounded-lg hover:bg-[#3498db] transition">
                    Apply Filters
                </button>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-[20px] gap-y-[30px] mt-[40px]">
        @foreach ($products as $product)


        <div class="relative group cursor-pointer bg-transparent transition duration-300 overflow-hidden rounded-lg">
    <a href="{{ route('products.show', $product['id']) }}" class="block">
        <div class="overflow-hidden rounded-lg">
            <img src="{{ asset('images/products/' . ($product['images'][0] ?? 'default-product.jpg')) }}" 
                 alt="{{ $product['name'] }}" 
                 class="w-full h-[300px] object-cover rounded-lg transition-transform duration-[400ms] ease-in-out group-hover:scale-[1.05]">
        </div>
    </a>

    <div class="absolute bottom-[55px] left-[10px] right-[10px] flex justify-between items-center py-[6px] bg-transparent z-[1]">
        <span class="text-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm bg-white/80 backdrop-blur-sm">
            AED {{ $product['price'] }}
        </span>

        <button 
            class="w-[35px] h-[35px] flex items-center justify-center bg-secondary hover:bg-[#41B6E8] text-white hover:text-white rounded-full shadow-md transition duration-[300ms]"
            aria-label="Add to Cart"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="20" height="20">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        </button>
    </div>

    <p class="mt-[10px] text-left text-sm font-medium text-gray-800">{{ $product['name'] }}</p>
</div>

          
        
        
        <!-- <div class="relative group cursor-pointer bg-transparent transition duration-300 overflow-hidden rounded-lg">
                <a href="{{ route('products.show', $product['id']) }}">
                    <img src="{{ asset('images/products/' . ($product['images'][0] ?? 'default-product.jpg')) }}" 
                         alt="{{ $product['name'] }}" 
                         class="w-full h-[300px] object-cover rounded-lg transition-transform duration-[400ms] group-hover:scale-[1.05]">
                </a>

                <div class="absolute bottom-[33px] left-[10px] right-[10px] flex justify-between items-center py-[6px] bg-transparent z-[1]">
                    <span class="text-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm bg-white/80 backdrop-blur-sm">
                        AED {{ $product['price'] }}
                    </span>

                    <button 
                        class="w-[35px] h-[35px] flex items-center justify-center bg-secondary hover:bg-[#41B6E8] text-white hover:text-white rounded-full shadow-md transition duration-[300ms]"
                        aria-label="Add to Cart"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="20" height="20">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </button>
                </div>

                <p class="mt-[10px] text-left text-sm font-medium text-gray-800">{{ $product['name'] }}</p>
            </div> -->


            



        @endforeach
    </div>

    
</div>
@endsection
