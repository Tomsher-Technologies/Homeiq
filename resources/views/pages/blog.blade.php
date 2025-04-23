@extends('layouts.app')

@section('title', 'Blog - '.env('APP_NAME'))

@section('content')
    <div class="container mx-auto lg:py-12 px-6 lg:px-12">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-4xl font-semibold text-center">
            @php
                $text = $page->getTranslation('title',$lang); // Get this from DB
                $formattedText = preg_replace('/\[(.*?)\]/', '<span class="text-primary font-semibold">$1</span>', $text);
            @endphp

            {!! $formattedText !!}
        </h2>
        <p class="text-gray-600 mt-2 text-center">
            {!! $page->getTranslation('sub_title',$lang) !!}
        </p>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-8 mt-10" id="blog-container">
            @if(!empty($blogs[0]))
                @foreach($blogs as $blog)
                    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 group overflow-hidden">
                        <!-- Blog Image with Hover Zoom -->
                        <div class="overflow-hidden rounded-t-2xl">
                            <img src="{{ uploaded_asset(($blog->image)) }}" alt="{{ $blog->name }}"  class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105" loading="lazy" onerror="this.onerror=null;this.src='{{ asset('images/blogs/default-blog.jpg') }}';">
                        </div>

                        <!-- Blog Content -->
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $blog->name }}</h3>
                            <p class="text-gray-600 text-sm mt-2">
                                {{ Str::limit(strip_tags($blog->description), 120, '...') }}
                            </p>
                            
                            <!-- Read More Button -->
                            <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" 
                            class="mt-4 inline-block px-5 py-2 border border-black text-black rounded-full text-sm transition-all hover:bg-black hover:text-white">
                                Read More →
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- No Services Available Message -->
                <div class="col-span-full text-center text-gray-600 text-lg mt-6">
                    🚨 No blogs available at the moment.
                </div>
            @endif
        </div>

        <div id="load-more-trigger" class="h-10"></div>
       
        <div id="loading-indicator"  style="display: none;" class="fixed inset-0 flex flex-col items-center justify-center bg-white bg-opacity-70 z-50">
            <p class="text-gray-700 text-lg font-semibold mb-2">Loading...</p>
            <img src="{{ asset('assets/images/spinner.gif') }}" alt="Loading" class="w-20 h-20"/>
        </div>
       
        <div id="no-more-data" style="display: none;" class=" text-center text-gray-600 text-lg font-semibold mt-4 p-3 bg-gray-100 rounded-lg border border-gray-300">
            🚨 No more blogs available.
        </div>
        
    </div>
    

    
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
                url: "{{ route('blog.loadMore') }}",
                type: 'GET',
                data: {
                    page: page
                },
                beforeSend: function() {
                    $('#loading-indicator').show(); // Show loading icon
                },
                success: function(response) {
                    if (response.html) {
                        // Append new blogs to the existing blog container
                        document.getElementById('blog-container').innerHTML += response.html;
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
