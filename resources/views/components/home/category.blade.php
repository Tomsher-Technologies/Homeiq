@props(['categories'])

<section id="categories-section" class="text-center pt-5 pb-5">
    <x-wrapper>
        <h2 class="text-3xl md:text-4xl font-normal">
            Explore Our <span class="text-[#41B6E8] font-semibold">Smart Home Categories</span>
        </h2>
        <p class="text-gray-600 mt-4">
            Upgrade your home with the latest in security, energy-saving, and automation. <br>
            Explore our categories to find the perfect smart devices for your lifestyle.
        </p>

        <!-- Swiper Container -->
        <div id="category-swiper" class="swiper-container mt-10">
            <div class="swiper-wrapper">
                @foreach($categories as $category)
                    <div class="swiper-slide flex flex-col items-center group">
                        <!-- Image Wrapper with Hover Border -->
                        <div class="relative rounded-full p-[5px] bg-transparent transition-all duration-300 border-[3px] border-gray-300 group-hover:border-[#41B6E8]">
                            <img src="{{ asset('images/categories/' . $category['image']) }}" 
                                 class="w-[100px] h-[100px] rounded-full object-cover transition-transform duration-300 group-hover:scale-105" 
                                 alt="{{ $category['name'] }}">
                        </div>
                        <p class="mt-4 text-gray-700 font-medium">{{ $category['name'] }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Swiper Pagination -->
            <div id="category-swiper-pagination" class="swiper-pagination"></div>
        </div>
    </x-wrapper>
</section>
