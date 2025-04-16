@extends('layouts.app')
@section('title', 'Register - '.env('APP_NAME'))
@section('content')

<div class="container mx-auto py-12 px-6 lg:px-12">
    <div class="max-w-2xl m-auto bg-white shadow-2xl rounded-2xl p-8 transform transition duration-300">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-6">Register</h1>
        
        <form action="{{ url('register') }}" method="POST" class="space-y-6" autocomplete="off">
            @csrf
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-1">Full Name</label>
                <input type="text" id="name"  class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm" name="name" value="{{ old('name') }}" placeholder="Enter name.." pattern="[A-Za-z ]+" title="Only letters and spaces are allowed.">
                @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" id="email" placeholder="Enter email.." class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm" autocomplete="off" name="email" value="{{ old('email') }}">
                @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">Phone Number</label>
                <input type="tel" name="phone" id="phone" autocomplete="off" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary outline-none"  value="{{ old('phone') }}" placeholder="Enter phone..">
                @error('phone') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
                <input type="password" id="password" name="password" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm" autocomplete="new-password" placeholder="Enter password..">
                @error('password') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="confirm-password" class="block text-gray-700 font-medium mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter confirm password.." class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
                @error('password_confirmation') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            
            <button type="submit" class="w-full bg-primary text-white py-4 rounded-full hover:bg-[#3498db] transition-all duration-300 transform hover:scale-105 font-medium text-sm">Register</button>
        </form>
        
        <p class="text-center text-gray-700 mt-6 text-sm">Already have an account? <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">Login</a></p>
    </div>
    </div>

@endsection

@section('script')
    <script>
        document.querySelector('input[name="phone"]').addEventListener('input', function (e) {
            this.value = this.value.replace(/[^0-9]/g, ''); // Remove non-numeric characters
        });
    </script>
@endsection
