<section id="hero-slider" class="relative pt-2 lg:pt-10 pb-5 overflow-hidden bg-gray-50">
    <x-wrapper>
        <!-- Swiper Slider -->
        <div class="swiper hero-swiper relative w-full h-[300px] md:h-[400px] lg:h-[500px] overflow-hidden rounded-md shadow-lg">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide flex justify-center items-center h-full">
                    <img src="{{ asset('images/slider-1.jpg') }}" 
                         data-src="{{ asset('images/slider-1.jpg') }}" 
                         class="swiper-lazy w-full h-full object-cover rounded-lg" 
                         alt="Smart Camera"
                         loading="lazy">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide flex justify-center items-center h-full">
                    <img src="{{ asset('images/slider-2.jpg') }}" 
                         data-src="{{ asset('images/slider-2.jpg') }}" 
                         class="swiper-lazy w-full h-full object-cover rounded-lg" 
                         alt="Smart Doorbell"
                         loading="lazy">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <!-- Slide 3 -->
                <!-- <div class="swiper-slide flex justify-center items-center h-full">
                    <img src="{{ asset('images/slider-3.jpeg') }}" 
                         data-src="{{ asset('images/slider-3.jpeg') }}" 
                         class="swiper-lazy w-full h-full object-cover rounded-lg" 
                         alt="Smart Thermostat"
                         loading="lazy">
                    <div class="swiper-lazy-preloader"></div>
                </div> -->
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination flex justify-center gap-2 absolute bottom-4"></div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-prev bg-primary rounded-full !w-[40px] !h-[40px] !text-[20px] !text-white shadow-md transition-all duration-300 hover:bg-[#3498db] hover:scale-105"></div>
            <div class="swiper-button-next bg-primary rounded-full !w-[40px] !h-[40px] !text-[20px] !text-white shadow-md transition-all duration-300 hover:bg-[#3498db] hover:scale-105"></div>
        </div>
    </x-wrapper>
</section>
