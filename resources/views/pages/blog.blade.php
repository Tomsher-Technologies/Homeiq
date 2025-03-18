@extends('layouts.app')

@section('title', 'Blog - HOME_IQ')

@section('content')
    <div class="container mx-auto lg:py-12 px-6 lg:px-12">
        <!-- Section Title -->
        <h2 class="text-3xl md:text-4xl font-semibold text-center">
            Latest <span class="text-[#41B6E8]">Blog Posts</span>
        </h2>
        <p class="text-gray-600 mt-2 text-center">
            Stay informed with expert insights, smart home tips, and the latest trends in home automation, security, and energy efficiency.
        </p>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
            @foreach($blogs as $blog)
                <div class="bg-white rounded-2xl shadow-lg border border-gray-200 group overflow-hidden">
                    <!-- Blog Image with Hover Zoom -->
                    <div class="overflow-hidden rounded-t-2xl">
                        <img src="{{ asset('images/blogs/' . ($blog['image'] ?? 'default-blog.jpg')) }}" 
                             alt="{{ $blog['title'] }}" 
                             class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105"
                             loading="lazy"
                             onerror="this.onerror=null;this.src='{{ asset('images/blogs/default-blog.jpg') }}';">
                    </div>

                    <!-- Blog Content -->
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">{{ $blog['title'] }}</h3>
                        <p class="text-gray-600 text-sm mt-2">{{ $blog['excerpt'] }}</p>
                        
                        <!-- Read More Button -->
                        <a href="{{ route('blog.details', ['id' => $blog['id']]) }}" 
                           class="mt-4 inline-block px-5 py-2 border border-black text-black rounded-full text-sm transition-all hover:bg-black hover:text-white">
                            Read More →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- View All Blogs Button -->
        <div class="mt-10 flex justify-center">
            <a href="{{ route('blog') }}" class="px-6 py-3 bg-black text-white rounded-full text-sm hover:bg-gray-800 transition-all">
                View All Blogs
            </a>
        </div>
    </div>.
    

    
@endsection
