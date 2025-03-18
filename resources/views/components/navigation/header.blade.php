<header class="bg-white shadow-md w-full fixed top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/logo.svg') }}" alt="HOME_IQ Logo" class="h-[50px]">
        </a>

        <!-- Search Bar -->
        <div class="hidden md:flex items-center bg-gray-100 px-2 py-1 rounded-full w-96 shadow-sm hover:shadow-md transition-shadow duration-300">
            <input type="text" 
                   placeholder="Search products.." 
                   class="bg-transparent py-1 w-full text-gray-700 placeholder-gray-500 border-none outline-none focus:ring-0">
            <button class="bg-primary text-white p-3 rounded-full hover:bg-secondary transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[20px] h-[20px]">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>
<!-- Navigation Links -->
<nav class="hidden md:flex space-x-6 text-secondary font-medium">
    <a href="{{ route('home') }}" class="hover:text-primary transition-colors duration-300">Home</a>


        <!-- About Us Link -->
        <a href="{{ route('about-us') }}" class="hover:text-primary transition-colors duration-300">About Us</a>


    <!-- Products Mega Menu -->
    <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
        <a href="{{ route('products.index') }}" 
           class="hover:text-primary transition-colors duration-300 flex items-center space-x-2">
            <span>Products</span>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg> -->
        </a>

        <!-- <div x-show="open"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-2 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 translate-y-2 scale-95"
             class="absolute bg-white shadow-xl mt-4 py-6 px-8 rounded-lg w-[1000px] left-1/2 -translate-x-1/2 z-50">
            <div class="container mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-4">
                    @foreach ($categories as $category)
                        <div class="col-span-1">
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">{{ $category['name'] }}</h3>
                            @foreach ($category['products'] as $product)
                                @if (isset($product['id']))
                                    <a href="{{ route('products.show', $product['id']) }}" class="block hover:bg-gray-100 p-2 rounded-lg">
                                        <div class="flex items-center space-x-3">
                                            <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['title'] }}" class="w-12 h-12 object-cover rounded-lg">
                                            <div>
                                                <h4 class="text-sm font-semibold text-gray-800">{{ $product['title'] }}</h4>
                                                <p class="text-xs text-gray-600">{{ $product['description'] }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div> -->
    </div>


    <a href="{{ route('services.index') }}" class="hover:text-primary transition duration-300">Services</a>


    <a href="{{ route('blog') }}" class="hover:text-primary transition-colors duration-300">Blog</a>
    <a href="{{ route('contact') }}" class="hover:text-primary transition-colors duration-300">Contact Us</a>
</nav>





        
<!-- Wishlist, Cart, Login/Register -->
<div class="flex items-center space-x-4">
    <!-- Wishlist Icon -->
    <button class="bg-gray-200 w-[45px] h-[45px] flex justify-center items-center rounded-full hover:bg-primary transition-all duration-300 transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
            <path d="M17.3689 4.46447C19.2545 6.35393 19.3192 9.36417 17.5656 11.3275L10.5 18.4042L3.43456 11.3275C1.68095 9.36417 1.7465 6.34918 3.63121 4.46447C5.51806 2.57763 8.53774 2.51406 10.5009 4.27378C12.4584 2.51667 15.4834 2.575 17.3689 4.46447ZM4.80972 5.64298C3.56827 6.88443 3.50595 8.87275 4.65002 10.186L10.5 16.0453L16.3502 10.186C17.4947 8.87225 17.4326 6.88771 16.1892 5.64175C14.9498 4.39983 12.9549 4.34005 11.6453 5.48647L8.14306 8.98908L6.96455 7.81053L9.31841 5.455L9.25025 5.39751C7.93796 4.34331 6.01943 4.43328 4.80972 5.64298Z" fill="black"/>
        </svg>
    </button>

    <!-- Cart Icon -->
    <button id="cart-btn" class="bg-gray-200 w-[45px] h-[45px] flex justify-center items-center rounded-full hover:bg-primary transition-all duration-300 transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
            <path d="M1.64099 11.3333V1.61905H0V0H2.46148C2.91463 0 3.28198 0.36244 3.28198 0.809524V10.5238H13.4876L15.1286 4.04762H4.92297V2.42857H16.1795C16.6327 2.42857 17 2.79101 17 3.2381C17 3.30428 16.9918 3.37023 16.9755 3.43444L14.9242 11.5296C14.833 11.89 14.5048 12.1429 14.1283 12.1429H2.46148C2.00834 12.1429 1.64099 11.7804 1.64099 11.3333ZM3.28198 17C2.37568 17 1.64099 16.2752 1.64099 15.381C1.64099 14.4868 2.37568 13.7619 3.28198 13.7619C4.18827 13.7619 4.92297 14.4868 4.92297 15.381C4.92297 16.2752 4.18827 17 3.28198 17ZM13.1279 17C12.2216 17 11.4869 16.2752 11.4869 15.381C11.4869 14.4868 12.2216 13.7619 13.1279 13.7619C14.0342 13.7619 14.7689 14.4868 14.7689 15.381C14.7689 16.2752 14.0342 17 13.1279 17Z" fill="black"/>
        </svg>
    </button>

    <!-- Login/Register Button -->
    <a href="{{ route('login') }}" 
       class="bg-primary text-white w-[125px] h-[45px] flex justify-center items-center rounded-full hover:bg-[#3498db] transition-all duration-300 transform hover:scale-105 font-medium text-sm">
        Login/Register
    </a>
</div>





    </div>



        <x-cart-drawer />
    </header>