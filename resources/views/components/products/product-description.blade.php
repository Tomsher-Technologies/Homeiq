@props(['product'])

<div class="w-full">

    <h2 class="text-[20px] font-semibold text-gray-800 flex items-center gap-2 pb-4 pt-0 bg-gray-50 rounded-t-lg">
        Product Description
    </h2>


    <p class="text-gray-700 mt-4 leading-relaxed">
        {{ $product['description'] ?? 'No description available.' }}
    </p>
</div>
