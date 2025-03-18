@extends('layouts.app')

@section('title', 'About Us - HOME_IQ')

@section('content')
<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold text-gray-800">About HOME IQ</h1>
        <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
            HOME_IQ is dedicated to revolutionizing smart home solutions, offering cutting-edge products to enhance comfort, security, and energy efficiency.
        </p>
    </div>
</div>

<div class="container mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <!-- Image Section -->
    <div>
        <img src="{{ asset('images/about-us.jpg') }}" alt="About HOME IQ" class="rounded-lg shadow-lg">
    </div>

    <!-- Text Section -->
    <div>
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Who We Are</h2>
        <p class="text-gray-600">
            At HOME IQ, we are passionate about integrating technology with everyday living. Our smart home solutions provide seamless automation, ensuring your home is more secure, energy-efficient, and convenient.
        </p>
        <p class="text-gray-600 mt-4">
            From intelligent climate control to advanced security systems, our products are designed to enhance your lifestyle.
        </p>
    </div>
</div>

<!-- Mission & Vision Section -->
<div class="bg-primary text-white py-16">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Mission -->
        <div>
            <h3 class="text-3xl font-bold mb-4">Our Mission</h3>
            <p class="text-lg">
                Our mission is to create a smarter, safer, and more sustainable world through innovative home automation technology.
            </p>
        </div>

        <!-- Vision -->
        <div>
            <h3 class="text-3xl font-bold mb-4">Our Vision</h3>
            <p class="text-lg">
                We envision a future where smart living is accessible to everyone, making homes more efficient, connected, and intelligent.
            </p>
        </div>
    </div>
</div>

<!-- Why Choose Us Section -->
<div class="container mx-auto px-6 py-16 text-center">
    <h2 class="text-3xl font-bold text-gray-800">Why Choose HOME IQ?</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
        <!-- Feature 1 -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <img src="{{ asset('images/icons/energy-saving.png') }}" alt="Innovation" class="h-16 mx-auto mb-4">
            <h3 class="text-xl font-semibold text-gray-800">Innovative Technology</h3>
            <p class="text-gray-600 mt-2">We bring the latest smart home innovations to make your life easier and more efficient.</p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <img src="{{ asset('images/icons/energy-saving.png') }}" alt="Security" class="h-16 mx-auto mb-4">
            <h3 class="text-xl font-semibold text-gray-800">Enhanced Security</h3>
            <p class="text-gray-600 mt-2">Protect your home with our advanced security solutions, giving you peace of mind.</p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <img src="{{ asset('images/icons/energy-saving.png') }}" alt="Sustainability" class="h-16 mx-auto mb-4">
            <h3 class="text-xl font-semibold text-gray-800">Sustainability</h3>
            <p class="text-gray-600 mt-2">Our energy-efficient products help reduce your carbon footprint and save on utility bills.</p>
        </div>
    </div>
</div>
@endsection
