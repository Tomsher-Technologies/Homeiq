@props(['product'])
    @php
        $priceData = getProductOfferPrice($product);
    @endphp
    <div class="relative group cursor-pointer bg-transparent transition duration-300 overflow-hidden rounded-lg">
        <img src="{{ get_product_image($product->thumbnail_img,'300') }}"  alt="{{ $product->name }}"  class="w-full h-[300px] object-cover rounded-lg transition-transform duration-[400ms] group-hover:scale-[1.05]">

        <div class="absolute bottom-[33px] left-[10px] right-[10px] flex justify-between items-center py-[6px] bg-transparent z-[1]">
            <span class="text-[#41B6E8] py-[7px] px-[10px] rounded-full font-semibold text-sm shadow-sm bg-white/80 backdrop-blur-sm">
                {{ env('DEFAULT_CURRENCY').' '.$priceData['discounted_price'] }}
            </span>

            @if ($priceData['discounted_price'] != $priceData['original_price'])
                <span class="">{{ env('DEFAULT_CURRENCY').' '.$priceData['original_price'] }}</span>
            @endif


            <button class="w-[35px] h-[35px] flex items-center justify-center bg-secondary hover:bg-[#41B6E8] text-white hover:text-white rounded-full shadow-md transition duration-[300ms]" aria-label="Add to Cart">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="20" height="20">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </button>
        </div>

        <p class="mt-[10px] text-left text-sm font-medium text-gray-800">{{ $product->name }}</p>
    </div>
