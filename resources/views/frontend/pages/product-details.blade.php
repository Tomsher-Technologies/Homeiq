@extends('layouts.app')

@section('title', $product['name'] . ' - HOME_IQ')



@section('content')
<div class="container mx-auto py-6 lg:py-12 px-6 lg:px-12">
    <div class="flex flex-col md:flex-row gap-10">
        <!-- Product Image Slider -->
        <x-products.image-slider :product="$product" />

        <div class="w-full md:w-1/2">
            <h1 class="text-3xl font-semibold text-gray-800">{{ $product['name'] }}</h1>
            <p class="text-gray-600 mt-2 text-lg">
    {{ $product['category'] }} | Model: <span class="font-semibold">{{ $product['model_number'] }}</span>
</p>

            <!-- Price & Discount -->
            <div class="flex items-center gap-3 mt-4">
                <span class="text-3xl font-bold text-primary">${{ $product['price'] }}</span>
                @if (!empty($product['discount']))
                <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-md">
                    {{ $product['discount'] }} OFF
                </span>
                @endif
            </div>

            <!-- Short Description Before Add to Cart -->
            <x-products.short-description :product="$product" />

            <!-- Action Buttons -->
<!-- Action Buttons -->
<div class="mt-6 flex items-center gap-4">
    <!-- Add to Cart Button (70% Width) -->
    <a href="#" class="bg-primary whitespace-nowrap text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-secondary transition-all w-[70%] lg:w-[50%] text-center">
        Add to Cart
    </a>

    <!-- Wishlist Button -->
    <button class="bg-gray-200 w-[45px] h-[45px] flex justify-center items-center rounded-full hover:bg-primary transition-all duration-300 transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
            <path d="M17.3689 4.46447C19.2545 6.35393 19.3192 9.36417 17.5656 11.3275L10.5 18.4042L3.43456 11.3275C1.68095 9.36417 1.7465 6.34918 3.63121 4.46447C5.51806 2.57763 8.53774 2.51406 10.5009 4.27378C12.4584 2.51667 15.4834 2.575 17.3689 4.46447ZM4.80972 5.64298C3.56827 6.88443 3.50595 8.87275 4.65002 10.186L10.5 16.0453L16.3502 10.186C17.4947 8.87225 17.4326 6.88771 16.1892 5.64175C14.9498 4.39983 12.9549 4.34005 11.6453 5.48647L8.14306 8.98908L6.96455 7.81053L9.31841 5.455L9.25025 5.39751C7.93796 4.34331 6.01943 4.43328 4.80972 5.64298Z" fill="black"></path>
        </svg>
    </button>
</div>




<h2 class="text-lg font-bold text-gray-800 mt-6 flex items-center gap-2">
    Features
</h2>

<ul class="mt-4 flex flex-wrap gap-3">
    @foreach ($product['features'] as $feature)
        <li class="py-2 px-4 rounded-full bg-green-50 text-green-700 text-sm font-medium shadow-sm border border-green-200 transition-all duration-300 hover:bg-green-100 hover:text-green-900 hover:shadow-md">
            {{ $feature }}
        </li>
    @endforeach
</ul>

    <!-- Social Share -->
    <div class="mt-10">
        <x-products.social-share />
    </div>


        </div>
    </div>

    <!-- Tabs Section -->
    <x-products.product-tabs :product="$product" />

    <!-- Related Products -->
    <x-products.related-products :relatedProducts="$relatedProducts" />


</div>
@endsection
