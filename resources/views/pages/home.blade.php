@extends('layouts.app')

@section('title', 'Home - '.env('APP_NAME'))

@section('content')
    <x-home.hero :slider="$slider"/>

    {{-- ✅ Categories Section --}}
   
    @if(isset($categories) && count($categories) > 0)
        <x-home.category :categories="$categories" :page="$page" :lang="$lang" />
    @endif

    {{-- ✅ Products Section (Only Show 3 Latest Products) --}}
    @if(isset($products) && count($products) > 0)
        <x-home.products-grid :products="$products"  :page="$page" :lang="$lang"/>
    @else
        <p class="text-center text-gray-600">🚨 No products available at the moment.</p>
    @endif

    {{-- ✅ Services Section --}}
    @if(isset($services) && count($services) > 0)
        <x-home.services :services="$services" :page="$page" :lang="$lang" />
    @endif

    {{-- ✅ Why Choose Us Section --}}
    <x-home.why-choose-us :page="$page" :lang="$lang"/>

    {{-- ✅ Testimonials Section --}}
    @if(isset($testimonials) && count($testimonials) > 0)
        <x-home.testimonials :testimonials="$testimonials" :page="$page" :lang="$lang"/>
    @endif

    {{-- ✅ Blog Section --}}
    @if(isset($blogs) && count($blogs) > 0)
        <x-blogList :blogs="$blogs" :page="$page" :lang="$lang"/>
    @endif

 
   <script type="module" src="{{ asset('dist/assets/app-f10b86b9.js') }}"></script>
@endsection
