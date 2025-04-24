@extends('layouts.app')

@section('title', 'Our Services - '.env('APP_NAME'))

@section('content')
<section id="services-section" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-4xl font-normal text-center relative z-10">
           
            @php
                $text = $page->getTranslation('title',$lang)    ; // Get this from DB
                $formattedText = preg_replace('/\[(.*?)\]/', '<span class="text-primary font-semibold">$1</span>', $text);
            @endphp

            {!! $formattedText !!}
        </h2>
        <p class="text-gray-600 mt-4 text-center relative z-10">
            {!! $page->getTranslation('sub_title', $lang) !!}
        </p>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-10"  id="services-container">
            @if(!empty($services[0]))
                @foreach($services as $service)
                    <!-- Service Card -->
                    <div class="service-card group p-6 bg-[#f7f7f7] rounded-2xl transition duration-300 border border-gray-200 hover:border-primary relative overflow-hidden">
                        
                        <!-- Service Image (Only Show if Image Exists) -->
                        <div class="relative w-full h-48 overflow-hidden rounded-lg">
                            @if($service->image != NULL)
                                <a href="{{ route('services.show', ['slug' => $service->slug]) }}">
                                    <img src="{{ uploaded_asset($service->image) }}" 
                                        alt="{{ $service->getTranslation('name', $lang) }}" 
                                        class="w-full h-full object-cover rounded-lg transition duration-300 transform group-hover:scale-105">
                                </a>
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-200 rounded-lg">
                                    <span class="text-gray-500">No Image Available</span>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Service Info -->
                        <div class="mt-4 relative z-10">
                            <h3 class="text-lg font-semibold text-black group-hover:text-primary transition duration-300">
                                {{ $service->getTranslation('name', $lang) }}
                            </h3>
                            
                        </div>
                        
                        <p class="mt-3 text-sm text-gray-700 relative z-10">
                            {{ Str::limit($service->getTranslation('short_description', $lang), 200, '...') }}
                        </p>
                        
                        <!-- Service Price & Buttons -->
                        <div class="flex justify-between items-center mt-5 relative z-10">
                        
                            @if ($service->price != 0 && $service->price != NULL)
                                <span class="text-[#41B6E8] py-2 px-4 rounded-full font-semibold text-sm shadow-sm bg-gray-100">
                                    {{ env('DEFAULT_CURRENCY') }} {{ number_format($service->price, 2) }}
                                </span>
                            @endif

                            <div class="flex items-center space-x-2">
                                <a href="{{ route('services.show', ['slug' => $service->slug]) }}"
                                class="px-4 py-2 text-sm font-medium text-gray-600 border border-gray-600 rounded-full transition duration-300 hover:bg-gray-800 hover:text-white">
                                    Learn More
                                </a>
                            </div>
                        </div>
                        
                        <!-- Gradient Overlay (Placed Behind Content) -->
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#E0F7FA] opacity-0 group-hover:opacity-70 transition duration-300 -z-10 rounded-xl"></div>
                    </div>
                @endforeach
            @endif
            
        </div>
        <div id="load-more-trigger" class="h-10"></div>
       
        <div id="loading-indicator"  style="display: none;" class="fixed inset-0 flex flex-col items-center justify-center bg-white bg-opacity-70 z-50">
            <p class="text-gray-700 text-lg font-semibold mb-2">Loading...</p>
            <img src="{{ asset('assets/images/spinner.gif') }}" alt="Loading" class="w-20 h-20"/>
        </div>
       
        <div id="no-more-data" style="display: none;" class=" text-center text-gray-600 text-lg font-semibold mt-4 p-3 bg-gray-100 rounded-lg border border-gray-300">
            🚨 No more services available.
        </div>
    </div>
</section>
@endsection


@section('script')
<script>
    
    document.addEventListener("DOMContentLoaded", function () {
        let page = 1;
        let isLoading = false;
        let hasMoreData = true;

        const observer = new IntersectionObserver(entries => {
            if (entries[0].isIntersecting && !isLoading && hasMoreData) {
                loadMoreData();
            }
        }, { threshold: 1 });

        observer.observe(document.getElementById("load-more-trigger"));

        function loadMoreData() {
            page++; // Increment page number

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('services.loadMore') }}",
                type: 'GET',
                data: {
                    page: page
                },
                beforeSend: function() {
                    $('#loading-indicator').show(); // Show loading icon
                },
                success: function(response) {
                    if (response.html) {
                        // Append new services to the existing services container
                        document.getElementById('services-container').innerHTML += response.html;
                    }else{
                        hasMoreData = false; // No more data, stop further requests
                        $('#no-more-data').show(); // Show a message if needed
                    }
                },
                complete: function() {
                    $('#loading-indicator').hide(); // Hide loading icon
                }
            });
        }

    });

    


</script>
@endsection