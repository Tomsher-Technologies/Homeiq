@extends('layouts.app')

@section('title', $service->getTranslation('name', $lang) . ' - '.env('APP_NAME'))

@section('content')
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="max-w-full mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Service Image -->
            <div class="relative">
                <img src="{{ uploaded_asset($service->image) }}" alt="{{ $service->getTranslation('name', $lang) }}" class="w-full h-72 object-cover">
            </div>

            <!-- Service Content -->
            <div class="p-8">
                <h2 class="text-3xl font-bold text-gray-800">{{ $service->getTranslation('name', $lang) }}</h2>

                <!-- Description -->
                <p class="text-gray-700 mt-4 leading-relaxed">{!! $service->getTranslation('description', $lang) !!}</p>


                <!-- CTA Buttons -->
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('services.index') }}" 
                       class="px-6 py-3 bg-[#41B6E8] text-white rounded-lg shadow-md text-lg font-medium hover:bg-[#3086B1] transition duration-300">
                        ← Back to Services
                    </a>
                    
                    <a href="https://wa.me/{{get_setting('default_service_whatsapp')}}"  target="_blank"
                       class="px-6 py-3 bg-green-500 text-white rounded-lg shadow-md text-lg font-medium hover:bg-green-600 transition duration-300">
                        💬 Chat with Us on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
