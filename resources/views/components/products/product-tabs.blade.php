@props(['product'])

<div x-data="{ tab: 'description' }" class="mt-10">
    <!-- Tab Navigation -->
    <div class="flex overflow-x-auto md:overflow-hidden font-semibold border border-gray-200 bg-primary/5 rounded-lg">
        <button @click="tab = 'description'" 
            :class="{ 'border-b-2 border-primary text-primary' : tab === 'description' }"
            class="flex-1 min-w-[150px] md:w-auto py-3 px-6 text-gray-600 hover:text-primary transition-all duration-300 !focus:outline-none text-center">
            Product Description
        </button>
        <button @click="tab = 'specifications'" 
            :class="{ 'border-b-2 border-primary text-primary' : tab === 'specifications' }"
            class="flex-1 min-w-[150px] md:w-auto py-3 px-6 text-gray-600 hover:text-primary transition-all duration-300 !focus:outline-none text-center">
            Product Specifications
        </button>
        <button @click="tab = 'features'" 
            :class="{ 'border-b-2 border-primary text-primary' : tab === 'features' }"
            class="flex-1 min-w-[150px] md:w-auto py-3 px-6 text-gray-600 hover:text-primary transition-all duration-300 !focus:outline-none text-center">
            Key Features
        </button>
        <button @click="tab = 'technical'" 
            :class="{ 'border-b-2 border-primary text-primary' : tab === 'technical' }"
            class="flex-1 min-w-[150px] md:w-auto py-3 px-6 text-gray-600 hover:text-primary transition-all duration-300 !focus:outline-none text-center">
            Technical Specifications
        </button>
    </div>

    <!-- Tab Content -->
    <div class=" p-4 lg:p-6 border border-gray-200 rounded-b-lg mt-2">
        <div x-show="tab === 'description'" x-transition.opacity.duration.300ms>
            <x-products.product-description :product="$product" />
        </div>
        <div x-show="tab === 'specifications'" x-transition.opacity.duration.300ms>
            <x-products.product-specifications :product="$product" />
        </div>
        <div x-show="tab === 'features'" x-transition.opacity.duration.300ms>
            <x-products.key-features :product="$product" />
        </div>
        <div x-show="tab === 'technical'" x-transition.opacity.duration.300ms>
            <x-products.technical-specs :product="$product" />
        </div>
    </div>
</div>
