@php
    $lang = getActiveLanguage();
@endphp
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