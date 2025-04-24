@extends('layouts.app')

@section('title', 'About Us - '.env('APP_NAME'))

@section('content')
<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold text-gray-800">{{ $page->getTranslation('title', $lang) }}</h1>
        <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
            {{ $page->getTranslation('sub_title', $lang) }}
        </p>
    </div>
</div>

<div class="container mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <!-- Image Section -->
    <div>
        <img src="{{ asset($page->image) }}" alt="About HOME IQ" class="rounded-lg shadow-lg">
    </div>

    <!-- Text Section -->
    <div>
        <h2 class="text-3xl font-bold text-gray-800 mb-4">{{ $page->getTranslation('heading1', $lang) }}</h2>
        {!! $page->getTranslation('content', $lang) !!}
    </div>
</div>

<!-- Mission & Vision Section -->
<div class="bg-primary text-white py-16">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Mission -->
        <div>
            <h3 class="text-3xl font-bold mb-4">{{ $page->getTranslation('heading2', $lang) }}</h3>
            <p class="text-lg">
                {!! $page->getTranslation('content1', $lang) !!}
            </p>
        </div>

        <!-- Vision -->
        <div>
            <h3 class="text-3xl font-bold mb-4">{{ $page->getTranslation('heading3', $lang) }}</h3>
            <p class="text-lg">
                {!! $page->getTranslation('content2', $lang) !!}
            </p>
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="container mx-auto px-6 py-16 text-center">
    <h2 class="text-3xl font-bold text-gray-800">{{ $page->getTranslation('heading4', $lang) }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
        <!-- Feature 1 -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <img src="{{ uploaded_asset($page->image1) }}" alt="{{$page->getTranslation('heading5', $lang)}}" class="h-16 mx-auto mb-4">
            <h3 class="text-xl font-semibold text-gray-800">{{$page->getTranslation('heading5', $lang)}}</h3>
            <p class="text-gray-600 mt-2">{!! $page->getTranslation('content3', $lang) !!}</p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <img src="{{ uploaded_asset($page->image2) }}" alt="{{$page->getTranslation('heading6', $lang)}}" class="h-16 mx-auto mb-4">
            <h3 class="text-xl font-semibold text-gray-800">{{$page->getTranslation('heading6', $lang)}}</h3>
            <p class="text-gray-600 mt-2">{!! $page->getTranslation('content4', $lang) !!}</p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <img src="{{ uploaded_asset($page->image3) }}" alt="{{$page->getTranslation('heading7', $lang)}}" class="h-16 mx-auto mb-4">
            <h3 class="text-xl font-semibold text-gray-800">{{$page->getTranslation('heading7', $lang)}}</h3>
            <p class="text-gray-600 mt-2">{!! $page->getTranslation('content5', $lang) !!}</p>
        </div>
    </div>
</div>
@endsection
