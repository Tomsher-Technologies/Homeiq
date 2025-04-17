@extends('layouts.app')

@section('title', 'Contact Us - '.env('APP_NAME'))

@section('content')
<div class="container mx-auto py-12 px-6 lg:px-12">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md border">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
            {{ $page->getTranslation('title',$lang) }}
        </h1>
        <p class="text-gray-600 text-center mb-6">
            {{$page->getTranslation('sub_title',$lang)}}
        </p>

        @if(session('success'))
            <div class="p-4 mb-4 text-green-700 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif
        <!-- Contact Form -->
        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium mb-2">Full Name <span class="text-red-500">*</span></label>
                <input type="text" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none" value="{{ old('name') }}"  minlength="3">
                @error('name')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Email Address <span class="text-red-500">*</span></label>
                <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none" value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Phone Number <span class="text-red-500">*</span></label>
                <input type="tel" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none" value="{{ old('phone') }}">
                @error('phone')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Subject <span class="text-red-500">*</span></label>
                <input type="text" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none" value="{{ old('subject') }}"  minlength="5">
                @error('subject')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Message <span class="text-red-500">*</span></label>
                <textarea name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none"  minlength="10">{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-secondary transition-all">
                Send Message
            </button>
        </form>

        <!-- Contact Information -->
        <div class="mt-8 text-center">
            <p class="text-gray-700">{{ $page->getTranslation('heading2',$lang) }}</p>
            <p class="text-gray-600 mt-2"><strong>Email:</strong> 
                <a href="mailto:{{ $page->getTranslation('heading4',$lang) }}">
                    {{ $page->getTranslation('heading4',$lang) }}
                </a>
            </p>
            <p class="text-gray-600"><strong>Phone:</strong> 
                <a href="tel:{{ $page->getTranslation('heading3',$lang) }}">{{ $page->getTranslation('heading3',$lang) }}
                </a>
            </p>
            <p class="text-gray-600"><strong>Address:</strong> {{ $page->getTranslation('content',$lang) }}</p>
        </div>
    </div>
</div>
@endsection
