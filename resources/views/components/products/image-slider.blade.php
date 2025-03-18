@props(['product'])

<div class="w-full md:w-1/2 relative flex justify-center items-center">
    <div class="swiper product-images-swiper overflow-hidden rounded-lg border">
        <div class="swiper-wrapper py-10 m-auto">
            @foreach ($product['images'] ?? ['default-product.jpg'] as $image)
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ asset('images/products/' . $image) }}" 
                         alt="{{ $product['name'] }}" 
                         class="max-w-full max-h-[500px] object-contain m-auto">
                </div>
            @endforeach
        </div>

        <!-- Navigation Arrows -->
        <div class="swiper-button-prev1 absolute z-50 left-3 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full w-[50px] h-[50px] flex items-center justify-center cursor-pointer shadow-lg prev hover:bg-gray-700 transition-all duration-300">
            <svg fill="white" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                <g id="_17" data-name="17">
                    <path d="m15 19a1 1 0 0 1 -.71-.29l-6-6a1 1 0 0 1 0-1.41l6-6a1 1 0 0 1 1.41 1.41l-5.29 5.29 5.29 5.29a1 1 0 0 1 -.7 1.71z"></path>
                </g>
            </svg>
        </div>

        <div class="swiper-button-next1 absolute z-50 right-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white rounded-full w-[50px] h-[50px] flex items-center justify-center cursor-pointer shadow-lg hover:bg-gray-700 transition-all duration-300">
            <svg fill="white" height="30" width="30" viewBox="0 0 6.35 6.35" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(0 -290.65)">
                    <path d="m2.258 291.965a.265.265 0 0 0 -.174.469l1.619 1.387-1.619 1.386a.265.265 0 1 0 .344.4l1.854-1.586a.265.265 0 0 0 0-.403l-1.854-1.588a.265.265 0 0 0 -.169-.067z"/>
                </g>
            </svg>
        </div>
    </div>
    
</div>
