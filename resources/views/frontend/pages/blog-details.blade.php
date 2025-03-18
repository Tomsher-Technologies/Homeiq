@extends('layouts.app')

@section('title', $blog['title'] . ' - HOME_IQ')

@section('content')
    <div class="container mx-auto py-12 max-w-3xl">
        <!-- Featured Image -->
        <img src="{{ asset('images/blogs/' . $blog['image']) }}" 
             class="w-full h-64 object-cover rounded-lg" 
             alt="{{ $blog['title'] }}" 
             loading="lazy"
             onerror="this.onerror=null;this.src='{{ asset('images/blogs/default-blog.jpg') }}';">
        
        <!-- Blog Title and Meta -->
        <h2 class="text-3xl font-semibold mt-6">{{ $blog['title'] }}</h2>
        <p class="text-gray-500 text-sm">By {{ $blog['author'] }} | {{ $blog['published_at'] }}</p>

        <!-- Blog Content -->
        <div class="text-gray-700 mt-6 leading-relaxed">
            {!! $blog['content'] !!}
        </div>

        <!-- Call to Action or Related Posts -->
        <div class="mt-8 flex justify-center">
            <a href="{{ route('blog') }}" class="px-6 py-3 bg-black text-white rounded-full text-sm hover:bg-gray-800 transition-all">
                Back to Blog
            </a>
        </div>

        <!-- Previous and Next Blog Posts -->

<!-- Previous and Next Blog Posts -->
<div class="mt-6 flex justify-between">
    @if(isset($previousBlog))
        <a href="{{ route('blog.details', ['id' => $previousBlog['id']]) }}" class="flex items-center bg-gray-100 p-4 rounded-lg shadow-sm hover:bg-gray-200 transition-all">
            <i class="fa fa-arrow-left mr-2 text-lg text-gray-500"></i> 
            <span class="text-gray-600 hover:text-gray-900 font-bold">Previous: {{ $previousBlog['title'] }}</span>
        </a>
    @endif
    @if(isset($nextBlog))
        <a href="{{ route('blog.details', ['id' => $nextBlog['id']]) }}" class="flex items-center bg-gray-100 p-4 rounded-lg shadow-sm hover:bg-gray-200 transition-all">
            <span class="text-gray-600 hover:text-gray-900 font-bold">Next: {{ $nextBlog['title'] }}</span> 
            <i class="fa fa-arrow-right ml-2 text-lg text-gray-500"></i>
        </a>
    @endif
</div>



        <!-- Related Posts Section -->
        @if(isset($relatedPosts))
            <h3 class="text-2xl font-semibold mt-12">Related Posts</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                @foreach($relatedPosts as $post)
                    <div class="rounded-2xl overflow-hidden bg-white shadow-lg border border-gray-200 group">
                        <!-- Post Image with Hover Zoom -->
                        <div class="overflow-hidden rounded-t-2xl">
                            <img src="{{ asset('images/blogs/' . ($post['image'] ?? 'default-blog.jpg')) }}" 
                                 alt="{{ $post['title'] }}" 
                                 class="w-full h-56 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105"
                                 loading="lazy"
                                 onerror="this.onerror=null;this.src='{{ asset('images/blogs/default-blog.jpg') }}';">
                        </div>

                        <!-- Post Content -->
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">{{ $post['title'] }}</h3>
                            <p class="text-gray-600 text-sm mt-2">{{ $post['excerpt'] }}</p>
                            
                            <!-- Read More Button -->
                            <a href="{{ route('blog.details', ['id' => $post['id']]) }}" 
                               class="mt-4 inline-block px-5 py-2 border border-black text-black rounded-full text-sm transition-all hover:bg-black hover:text-white">
                                Read More →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <!-- Optional: Share Buttons -->
        <div class="mt-6 flex justify-center">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="mr-4">
                <i class="fa fa-facebook text-lg text-blue-500"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $blog['title'] }}" target="_blank" class="mr-4">
                <i class="fa fa-twitter text-lg text-blue-400"></i>
            </a>
            <a href="https://www.linkedin.com/sharing/share?url={{ url()->current() }}" target="_blank">
                <i class="fa fa-linkedin text-lg text-blue-700"></i>
            </a>
        </div>
    </div>
@endsection
