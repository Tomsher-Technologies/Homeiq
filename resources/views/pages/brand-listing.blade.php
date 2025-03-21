@extends('layouts.app')

@section('title', 'Brand Listing - HOME_IQ')

@section('content')

<div class="container mx-auto py-12 px-6 lg:px-12">
    <h1 class="text-4xl font-extrabold text-start text-gray-800 mb-6">Brand Listing</h1>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img1.jpg') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img2.png') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img3.png') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img4.png') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img5.jpg') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img6.png') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img7.png') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img8.png') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img3.png') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img2.png') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img1.jpg') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-4 flex flex-col items-center">
            <img src="{{ asset('images/brand-img6.png') }}" alt="Brand Logo" class="w-24 h-24 object-contain mb-4">
        </div>
    </div>
</div>




@endsection
