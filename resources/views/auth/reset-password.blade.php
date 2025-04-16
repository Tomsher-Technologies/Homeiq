@extends('layouts.app')

@section('title', 'Reset Password - '.env('APP_NAME'))

@section('content')

<div class="container mx-auto py-12 px-6 lg:px-12">
    <div class="max-w-2xl m-auto bg-white shadow-2xl rounded-2xl p-8 transform transition duration-300">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-6">Reset Password</h1>
       
        <form action="{{ route('password.reset') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <input type="hidden" name="token" value="{{ $token }}">
                <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" id="email" placeholder="Email.." class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm" name="email" readonly value="{{ old('email', $email) }}">
                
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">New Password</label>
                <input type="password" id="password" name="password" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm"  placeholder="Enter New Password">
            </div>
            <div>
                <label for="confirmemail" class="block text-gray-700 font-medium mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter Password.." class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>
            @error('email')
                    <span class="text-red-600">{{ $message }}</span>
            @enderror
            @error('password')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
            <button type="submit" class="w-full bg-primary text-white py-4 rounded-full hover:bg-[#3498db] transition-all duration-300 transform hover:scale-105 font-medium text-sm">Reset</button>
        </form>
        
        <p class="text-center text-gray-700 mt-6 text-sm">Remembered your password? <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">Login</a></p>
    </div>
    </div>

@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
       
    });
</script>
@endsection

