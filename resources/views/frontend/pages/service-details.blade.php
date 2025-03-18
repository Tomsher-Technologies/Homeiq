@extends('layouts.app')

@section('title', $service['title'] . ' - HOME_IQ')

@section('content')
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="max-w-full mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Service Image -->
            <div class="relative">
                <img src="{{ asset('images/services/' . $service['image']) }}" 
                     alt="{{ $service['title'] }}" 
                     class="w-full h-72 object-cover">
            </div>

            <!-- Service Content -->
            <div class="p-8">
                <h2 class="text-3xl font-bold text-gray-800">{{ $service['title'] }}</h2>

                <!-- Description -->
                <p class="text-gray-700 mt-4 leading-relaxed">{{ $service['description'] }}</p>

     
<!-- Features List -->
@if (!empty($service['features']))
    <h3 class="mt-8 text-2xl font-bold text-gray-800 text-center">Key Features</h3>
    <p class="text-gray-600 text-center mt-2 max-w-2xl mx-auto">
        Our smart thermostat system is designed to enhance comfort, reduce energy costs, and provide seamless home automation.
    </p>
    
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($service['features'] as $feature)
            <div class="bg-white relative p-6 rounded-lg shadow-md border border-gray-200 transition duration-300 hover:shadow-lg hover:border-[#41B6E8] overflow-hidden">
                <div class="flex items-center mb-4">
                    <!-- Feature Icon as Image -->
                    <div class="w-12 h-12 flex items-center justify-center rounded-full shadow-md bg-gray-100">
                        <img src="{{ asset('images/icons/' . $feature['icon']) }}" alt="{{ $feature['title'] }}" class="w-8 h-8 object-contain">
                    </div>

                    <h4 class="ml-4 text-xl font-bold text-gray-800">{{ $feature['title'] }}</h4>
                </div>

                <!-- Feature Description -->
                <p class="text-gray-600 mt-2">{{ $feature['description'] }}</p>
            </div>
        @endforeach
    </div>
@endif




                <!-- Additional Information -->
                <div class="mt-6 bg-gray-100 p-4 rounded-lg">
                    <p class="font-semibold text-gray-800">⏳ Duration: 
                        <span class="text-gray-700">{{ $service['duration'] ?? 'Varies' }}</span>
                    </p>
                    <p class="font-semibold text-gray-800 mt-2">💰 Price: 
                        <span class="text-[#41B6E8] text-xl font-bold">AED {{ $service['price'] ?? 'N/A' }}</span>
                    </p>
                </div>

                <!-- Sub-Services -->
                @if (!empty($service['sub_services']))
                    <h3 class="mt-6 text-xl font-bold text-gray-800">Included Sub-Services</h3>
                    <ul class="mt-3 space-y-2">
                        @foreach ($service['sub_services'] as $subService)
                            <li class="flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                                <div>
                                    <h4 class="font-semibold text-gray-800">{{ $subService['title'] }}</h4>
                                    <p class="text-sm text-gray-600">{{ $subService['description'] }}</p>
                                </div>
                                <span class="text-lg font-semibold text-[#41B6E8]">AED {{ $subService['price'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <!-- Smart Thermostat Details -->
                <h3 class="mt-8 text-xl font-bold text-gray-800">Why Choose Our Smart Thermostat?</h3>
                <p class="text-gray-700 mt-3">
                    Smart thermostats can be controlled from your mobile device anywhere Wi-Fi or mobile networks are accessible. 
                    You can adjust your home’s temperature whether you’re at the supermarket, on vacation, or relaxing at home.
                </p>
                <p class="text-gray-700 mt-3">
                    They integrate with voice assistants like Alexa, Siri, or Google Assistant for seamless control.
                </p>

                <h3 class="mt-8 text-xl font-bold text-gray-800">Nest Thermostat & Ecobee Installation</h3>
                <p class="text-gray-700 mt-3">
                    Nest Labs developed a thermostat that prioritizes efficiency and simplicity of operation. It can regulate heating systems, 
                    air-conditioning (HVAC) systems, and commercial ventilation with high precision.
                </p>
                
                <div class="mt-6 bg-gray-50 p-4 rounded-lg shadow">
                    <h4 class="text-lg font-semibold text-gray-800">Nest Thermostat Key Components</h4>
                    <ul class="mt-3 space-y-2 text-gray-700">
                        <li>🛠️ The Screen</li>
                        <li>⚙️ The Base Housing</li>
                        <li>🔄 The Rotating Ring</li>
                        <li>🔌 The Connection & Wires</li>
                        <li>📏 Built-in Bubble Levels</li>
                    </ul>
                </div>

                <h3 class="mt-8 text-xl font-bold text-gray-800">Why Install a Smart Thermostat?</h3>
                <p class="text-gray-700 mt-3">
                    The biggest advantage of installing a smart thermostat is the **reduction in your monthly electricity bill**—savings of up to **25%**!
                    No more manually adjusting the temperature. Our Nest Thermostat solutions provide full automation and **remote control capabilities**.
                </p>

                <!-- Contact Information -->
                @if (!empty($service['contact']))
                    <p class="mt-6 text-gray-800 font-semibold">
                        📞 Contact: <span class="text-gray-700">{{ $service['contact'] }}</span>
                    </p>
                @endif

                <!-- CTA Buttons -->
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('services.index') }}" 
                       class="px-6 py-3 bg-[#41B6E8] text-white rounded-lg shadow-md text-lg font-medium hover:bg-[#3086B1] transition duration-300">
                        ← Back to Services
                    </a>
                    
                    <a href="#" class="px-6 py-3 bg-gray-800 text-white rounded-lg shadow-md text-lg font-medium hover:bg-gray-900 transition duration-300">
                        📅 Book an Appointment
                    </a>

                    <a href="https://wa.me/971551234567" 
                       class="px-6 py-3 bg-green-500 text-white rounded-lg shadow-md text-lg font-medium hover:bg-green-600 transition duration-300">
                        💬 Chat with Us on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
