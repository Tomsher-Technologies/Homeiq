@extends('layouts.app')

@section('title', 'Contact Us - HOME_IQ')

@section('content')
<div class="container mx-auto py-12 px-6 lg:px-12">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md border">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Get in Touch</h1>
        <p class="text-gray-600 text-center mb-6">Have questions? We'd love to hear from you. Fill out the form below.</p>

        <!-- Contact Form -->
        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input type="text" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Message</label>
                <textarea name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none" required></textarea>
            </div>

            <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-secondary transition-all">
                Send Message
            </button>
        </form>

        <!-- Contact Information -->
        <div class="mt-8 text-center">
            <p class="text-gray-700">Or reach out to us directly:</p>
            <p class="text-gray-600 mt-2"><strong>Email:</strong> support@homeiq.com</p>
            <p class="text-gray-600"><strong>Phone:</strong> +1 234 567 890</p>
            <p class="text-gray-600"><strong>Address:</strong> 123 Main Street, City, Country</p>
        </div>
    </div>
</div>
@endsection
