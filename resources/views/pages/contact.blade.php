@extends('layouts.app')

@section('title', 'Contact Us - ' . env('APP_NAME'))

@section('content')
    <div class="container mx-auto py-12 px-6 lg:px-12">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md border">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                {{ $page->getTranslation('title', $lang) }}
            </h1>
            <p class="text-gray-600 text-center mb-6">
                {{ $page->getTranslation('sub_title', $lang) }}
            </p>

            @if (session('success'))
                <div class="p-4 mb-4 text-green-700 bg-green-100 rounded">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Contact Form -->
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none"
                        value="{{ old('name') }}" minlength="3">
                    @error('name')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Email Address <span
                            class="text-red-500">*</span></label>
                    <input type="email" name="email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Phone Number <span
                            class="text-red-500">*</span></label>
                    <input type="tel" name="phone"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Subject <span class="text-red-500">*</span></label>
                    <input type="text" name="subject"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none"
                        value="{{ old('subject') }}" minlength="5">
                    @error('subject')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-2">Message <span class="text-red-500">*</span></label>
                    <textarea name="message" rows="5"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none"
                        minlength="10">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-primary text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-secondary transition-all">
                    Send Message
                </button>
            </form>

            <!-- Contact Information -->
            <div class="mt-8 text-start">
                <p class="text-gray-700 mb-4">{{ $page->getTranslation('heading2', $lang) }}</p>
                <p class="text-gray-600 mt-2 flex gap-2 mb-4">

                    <svg class="w-5 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                    </svg>

                    <a href="mailto:{{ $page->getTranslation('heading4', $lang) }}">
                        {{ $page->getTranslation('heading4', $lang) }}
                    </a>
                </p>
                <p class="text-gray-600 flex gap-2 mb-4"> <svg class="w-6 h-6 text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                    </svg>

                    <a href="tel:{{ $page->getTranslation('heading3', $lang) }}">{{ $page->getTranslation('heading3', $lang) }}
                    </a>
                </p>
                <p class="text-gray-600 flex gap-2"><svg class="w-6 h-6 text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                    </svg>
                    {{ $page->getTranslation('content', $lang) }}</p>
            </div>
        </div>
    </div>

    <section class="contact-map">
        <iframe src="{{ $page->getTranslation('content1', $lang) }}" width="100%" height="500" style="border:0;" allowfullscreen=""
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
