@extends('layouts.app')
@section('title', 'Faq - HOME_IQ')
@section('content')
<div class="container mx-auto py-12 px-6 lg:px-12">
   <h1 class="text-3xl font-bold text-center mb-8">Frequently Asked Questions</h1>
<div class="mb-4 border-b border-gray-200">
   <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
      <li class="me-2" role="presentation">
         <button class="inline-block p-4 border-b-2 text-[#41b6e8] font-bold rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">All</button>
      </li>
      <li class="me-2" role="presentation">
         <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">General</button>
      </li>
      <li class="me-2" role="presentation">
         <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Customer Support</button>
      </li>
      <li role="presentation">
         <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Delivery and shipping</button>
      </li>
   </ul>
</div>
<div id="default-tab-content">
   <div class="hidden py-4 rounded-lg bg-gray-50" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="mx-auto space-y-4">
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
   <div class="hidden p-4 rounded-lg bg-gray-50" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
      <p class="text-sm text-gray-500">This is some placeholder content the <strong class="font-medium text-gray-800">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
   </div>
   <div class="hidden p-4 rounded-lg bg-gray-50" id="settings" role="tabpanel" aria-labelledby="settings-tab">
      <p class="text-sm text-gray-500">This is some placeholder content the <strong class="font-medium text-gray-800">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
   </div>
   <div class="hidden p-4 rounded-lg bg-gray-50" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
      <p class="text-sm text-gray-500">This is some placeholder content the <strong class="font-medium text-gray-800">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
   </div>
</div>
</div>
@endsection