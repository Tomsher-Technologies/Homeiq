@extends('layouts.app')

@section('title', 'Home - HOME_IQ')

@section('content')
    <x-home.hero />

    {{-- ✅ Categories Section --}}
    @if(isset($categories) && count($categories) > 0)
        <x-home.category :categories="$categories" />
    @endif

    {{-- ✅ Products Section (Only Show 3 Latest Products) --}}
    @if(isset($products) && count($products) > 0)
        <x-home.products-grid :products="$products" />
    @else
        <p class="text-center text-gray-600">🚨 No products available at the moment.</p>
    @endif

    {{-- ✅ Services Section --}}
    @if(isset($services) && count($services) > 0)
        <x-home.services :services="$services" />
    @endif

    {{-- ✅ Why Choose Us Section --}}
    <x-home.why-choose-us />

    {{-- ✅ Testimonials Section --}}
    @if(isset($testimonials) && count($testimonials) > 0)
        <x-home.testimonials :testimonials="$testimonials" />
    @endif

    {{-- ✅ Blog Section --}}
    @if(isset($blogs) && count($blogs) > 0)
        <x-blogList :blogs="$blogs" />
    @endif

    {{-- ✅ JavaScript --}}
    <script type="module" src="{{ mix('js/app.js') }}"></script>
    
@endsection
