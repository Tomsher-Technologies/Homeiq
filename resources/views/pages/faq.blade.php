@extends('layouts.app')

@section('title', 'Faq - HOME_IQ')

@section('content')

<div class="container mx-auto py-12 px-6 lg:px-12">
        <h1 class="text-3xl font-bold text-center mb-8">Frequently Asked Questions</h1>
        <div class="max-w-3xl mx-auto space-y-4">
            <div class="bg-white p-6 rounded-lg shadow">
                <button class="w-full flex justify-between items-center text-left font-semibold text-lg" onclick="toggleFAQ('faq1', this)">
                    <span>What services does HomeIQ offer?</span>
                    <span class="arrow">+</span>
                </button>
                <p id="faq1" class="mt-2 text-gray-600 hidden transition-all duration-300 ease-in-out">HomeIQ specializes in smart home solutions, including AC services, smart security, and home automation.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <button class="w-full flex justify-between items-center text-left font-semibold text-lg" onclick="toggleFAQ('faq2', this)">
                    <span>How can I get my Nest products professionally installed?</span>
                    <span class="arrow">+</span>
                </button>
                <p id="faq2" class="mt-2 text-gray-600 hidden transition-all duration-300 ease-in-out">HomeIQ's certified Nest PRO installers provide expert installation for all Nest products.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <button class="w-full flex justify-between items-center text-left font-semibold text-lg" onclick="toggleFAQ('faq3', this)">
                    <span>What is the process for setting up a service with HomeIQ?</span>
                    <span class="arrow">+</span>
                </button>
                <p id="faq3" class="mt-2 text-gray-600 hidden transition-all duration-300 ease-in-out">Simply select your service, choose installation, make a payment, and schedule a visit.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <button class="w-full flex justify-between items-center text-left font-semibold text-lg" onclick="toggleFAQ('faq4', this)">
                    <span>How can I contact HomeIQ for support or inquiries?</span>
                    <span class="arrow">+</span>
                </button>
                <p id="faq4" class="mt-2 text-gray-600 hidden transition-all duration-300 ease-in-out">You can reach us via email at info@homeiq.ae or call us at 04 5479552.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <button class="w-full flex justify-between items-center text-left font-semibold text-lg" onclick="toggleFAQ('faq5', this)">
                    <span>Does HomeIQ provide annual maintenance contracts?</span>
                    <span class="arrow">+</span>
                </button>
                <p id="faq5" class="mt-2 text-gray-600 hidden transition-all duration-300 ease-in-out">Yes, we offer annual maintenance contracts for AC, smart security, and home automation services.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <button class="w-full flex justify-between items-center text-left font-semibold text-lg" onclick="toggleFAQ('faq6', this)">
                    <span>What smart home products does HomeIQ support?</span>
                    <span class="arrow">+</span>
                </button>
                <p id="faq6" class="mt-2 text-gray-600 hidden transition-all duration-300 ease-in-out">HomeIQ supports a variety of smart home products, including smart thermostats, cameras, locks, and more.</p>
            </div>
        </div>
    </div>


@endsection
