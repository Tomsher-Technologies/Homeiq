@extends('layouts.app')

@section('title', $blog->name . ' - '.env('APP_NAME'))

@section('content')
    <div class="container mx-auto px-4 sm:x-4 md:x-4 xl:x-0 py-12 max-w-3xl">
        <!-- Featured Image -->
        <img src="{{ uploaded_asset(($blog->image)) }}" class="w-full h-64 object-cover rounded-lg" alt="{{ $blog->name }}" loading="lazy" onerror="this.onerror=null;this.src='{{ asset('images/blogs/default-blog.jpg') }}';">
        
        <!-- Blog Title and Meta -->
        <h2 class="text-3xl font-semibold mt-6">{{ $blog->name }}</h2>
        <p class="text-gray-500 text-sm">{{ $blog->blog_date }}</p>

        <!-- Blog Content -->
        <div class="text-gray-700 mt-6 leading-relaxed">
            {!! $blog->description !!}
        </div>

        <!-- Call to Action or Related Posts -->
        <div class="mt-8 flex justify-center">
            <a href="{{ route('blog') }}" class="px-6 py-3 bg-black text-white rounded-full text-sm hover:bg-gray-800 transition-all">
                Back to Blog
            </a>
        </div>

        @php
            $url = urlencode(request()->fullUrl()); // Get the current page URL
            $title = urlencode($blog->name); // Get the blog title
        @endphp
        <!-- Optional: Share Buttons -->
        <div class="mt-6 flex justify-center">

            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank" class="mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.66 9.14 8.43 9.88v-6.99h-2.54v-2.89h2.54V9.31c0-2.51 1.49-3.89 3.77-3.89 1.09 0 2.23.19 2.23.19v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.44 2.89h-2.34v6.99C18.34 21.14 22 17 22 12z"/>
                </svg>
                {{-- <span>Facebook</span> --}}
            </a>

            <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}" target="_blank" class="mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-6">
                    <path d="M20.19 2H23L14.56 10.98L24 22H16.92L10.9 15.02L3.33 22H0.48L9.47 12.36L0 2H7.32L12.79 8.42L20.19 2ZM18.9 20H21.1L7.04 4H4.67L18.9 20Z"/>
                </svg>
                {{-- <span>Twitter</span> --}}
            </a>

            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"  target="_blank" class="mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-5">
                    <path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8h5v16H0V8zm7.5 0h4.8v2.2h.07c.67-1.26 2.3-2.6 4.73-2.6 5.06 0 5.99 3.33 5.99 7.66V24h-5v-7.55c0-1.8-.03-4.12-2.51-4.12-2.52 0-2.9 1.97-2.9 4v7.67h-5V8z"/>
                </svg>
                
                {{-- <span>LinkedIn</span> --}}
            </a>
        </div>

        <!-- Previous and Next Blog Posts -->

        <!-- Previous and Next Blog Posts -->
        <div class="mt-6 flex justify-between gap-4">
            @if(isset($previousBlog))
                <a href="{{ route('blog.details', ['slug' => $previousBlog->slug]) }}" class="flex items-center bg-gray-100 p-4 rounded-lg shadow-sm hover:bg-gray-200 transition-all">
                    <i class="fa fa-arrow-left mr-2 text-lg text-gray-500"></i> 
                    <span class="text-gray-600 hover:text-gray-900 font-bold">Previous: {{ $previousBlog->name }}</span>
                </a>
            @endif
            @if(isset($nextBlog))
                <a href="{{ route('blog.details', ['slug' => $nextBlog->slug]) }}" class="flex items-center bg-gray-100 p-4 rounded-lg shadow-sm hover:bg-gray-200 transition-all">
                    <span class="text-gray-600 hover:text-gray-900 font-bold">Next: {{ $nextBlog->name }}</span> 
                    <i class="fa fa-arrow-right ml-2 text-lg text-gray-500"></i>
                </a>
            @endif
        </div>



        <!-- Related Posts Section -->
        @if (!empty($recentBlogs[0]))
            <h3 class="text-2xl font-semibold mt-12">Recent Posts</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                
                @foreach ($recentBlogs as $post)
                    <div class="rounded-2xl overflow-hidden bg-white shadow-lg border border-gray-200 group">
                        <!-- Post Image with Hover Zoom -->
                        <div class="overflow-hidden rounded-t-2xl">
                            <img src="{{ uploaded_asset(($post->image)) }}" alt="{{ $post->name }}" class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105" loading="lazy" onerror="this.onerror=null;this.src='{{ uploaded_asset(($post->image)) }}';">
                        </div>

                        <!-- Post Content -->
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $post->name }}</h3>
                            <p class="text-gray-600 text-sm mt-2">{{ Str::limit(strip_tags($post->description), 120, '...') }}</p>
                            
                            <!-- Read More Button -->
                            <a href="{{ route('blog.details', ['slug' => $post->slug]) }}" 
                               class="mt-4 inline-block px-5 py-2 border border-black text-black rounded-full text-sm transition-all hover:bg-black hover:text-white">
                                Read More →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

       
    </div>
@endsection


@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

@endsection