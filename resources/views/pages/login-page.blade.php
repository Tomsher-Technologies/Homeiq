@extends('layouts.app')

@section('title', 'Login - HOME_IQ')

@section('content')

<div class="container mx-auto py-12 px-6 lg:px-12">
    <div class="max-w-2xl m-auto bg-white shadow-2xl rounded-2xl p-8 transform transition duration-300">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-6">Login</h1>
        
        <form action="#" method="POST" class="space-y-6">
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>
            
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
                <input type="password" id="password" name="password" required class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>
            
            <div class="flex justify-between items-center">
                <label class="flex items-center">
                    <input type="checkbox" class="mr-2">
                    <span class="text-gray-700 text-sm">Remember me</span>
                </label>
                <a href="#" class="text-blue-500 text-sm font-medium hover:underline">Forgot password?</a>
            </div>
            
            <button type="submit" class="w-full bg-primary text-white py-4 rounded-full hover:bg-[#3498db] transition-all duration-300 transform hover:scale-105 font-medium text-sm">Login</button>
        </form>
        
        <p class="text-center text-gray-700 mt-6 text-sm">Don't have an account? <a href="#" class="text-blue-600 font-medium hover:underline">Sign up</a></p>
    </div>
    </div>

@endsection
