@extends('layouts.app')

@section('title', 'Our Services - HOME_IQ')

@section('content')
<section id="services-section" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-4xl font-normal text-center relative z-10">
            Expert <span class="text-[#41B6E8] font-semibold">Installation</span> for a Smarter Home
        </h2>
        <p class="text-gray-600 mt-4 text-center relative z-10">
            Our professionals ensure a seamless setup for your smart home devices. <br>
            Enjoy secure and hassle-free installation tailored to your needs.
        </p>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
            @forelse($services as $service)
                <!-- Service Card -->
                <div class="group p-6 bg-[#f7f7f7] rounded-2xl transition duration-300 border border-gray-200 hover:border-primary relative overflow-hidden">
                    
                    <!-- Service Image (Only Show if Image Exists) -->
                    <div class="relative w-full h-48 overflow-hidden rounded-lg">
                        @if(!empty($service['image']))
                            <img src="{{ asset('images/services/' . $service['image']) }}" 
                                 alt="{{ $service['title'] }}" 
                                 class="w-full h-full object-cover rounded-lg transition duration-300 transform group-hover:scale-105">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gray-200 rounded-lg">
                                <span class="text-gray-500">No Image Available</span>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Service Info -->
                    <div class="mt-4 relative z-10">
                        <h3 class="text-lg font-semibold text-black group-hover:text-primary transition duration-300">
                            {{ $service['title'] }}
                        </h3>
                        <p class="text-sm text-gray-600 mt-1">{{ $service['subtitle'] ?? 'Service Details' }}</p>
                    </div>
                    
                    <p class="mt-3 text-sm text-gray-700 relative z-10">
                        {{ Str::limit($service['description'] ?? 'No description available', 120, '...') }}
                    </p>
                    
                    <!-- Service Price & Buttons -->
                    <div class="flex justify-between items-center mt-5 relative z-10">
                        <span class="text-[#41B6E8] py-2 px-4 rounded-full font-semibold text-sm shadow-sm bg-gray-100">
                            AED {{ number_format($service['price'] ?? 0, 2) }}
                        </span>

                        <div class="flex items-center space-x-2">
                            <a href="{{ route('services.show', ['id' => $service['id']]) }}"
                               class="px-4 py-2 text-sm font-medium text-gray-600 border border-gray-600 rounded-full transition duration-300 hover:bg-gray-800 hover:text-white">
                                Learn More
                            </a>

                            <button class="w-8 h-8 rounded-full bg-gray-800 text-white flex items-center justify-center hover:bg-[#41B6E8] transition duration-300">
                                +
                            </button>
                        </div>
                    </div>
                    
                    <!-- Gradient Overlay (Placed Behind Content) -->
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#E0F7FA] opacity-0 group-hover:opacity-70 transition duration-300 -z-10 rounded-xl"></div>
                </div>
            @empty
                <!-- No Services Available Message -->
                <div class="col-span-full text-center text-gray-600 text-lg mt-6">
                    🚨 No services available at the moment.
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
