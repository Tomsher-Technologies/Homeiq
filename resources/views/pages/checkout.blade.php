@extends('layouts.app')
@section('title', 'Checkout - HOME_IQ')
@section('content')
<section class="container mx-auto py-12 px-6 lg:px-12">
   <div class="mx-auto px-4 2xl:px-0">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl text-left">
         Checkout</span>
      </h2>
      <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
         <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl ">
            <div class="space-y-5 rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
               <h3 class="text-xl font-medium text-gray-900 ">Delivery Details</h3>
               <form class="">
                  <div class="md:flex md:space-x-4">
                     <div class="w-full mb-4 md:w-1/2 ">
                        <!-- input-label capitalize block  mb-2 text-gray text-[13px] font-normal font-['Inter']" -->
                        <label class="block mb-1 font-medium text-gray-800 capitalize ">First Name *</label>
                        <input type="text" name="first-name" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your first name" required="">
                     </div>
                     <div class="w-full mb-4 md:w-1/2">
                        <label class="block mb-1 font-medium text-gray-800 capitalize">Last Name *</label>
                        <input type="text" name="last-name" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your last name" required="">
                     </div>
                  </div>
                  <div class="md:flex md:space-x-4">
                     <div class="w-full mb-4 md:w-1/2">
                        <label class="block mb-1 font-medium text-gray-800 capitalize">Country / Region *</label>
                        <select name="country" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" required="">
                           <option value="">Select a country</option>
                           <option value="usa">United States</option>
                           <option value="canada">Canada</option>
                           <!-- Add more countries as needed -->
                        </select>
                     </div>
                     <div class="w-full mb-4 md:w-1/2">
                        <label class="block mb-1 font-medium text-gray-800 capitalize">Street Address *</label>
                        <input type="text" name="street-address" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="House number and street name" required="">
                     </div>
                  </div>
                  <div class="md:flex md:space-x-4">
                     <div class="w-full mb-4 md:w-1/3">
                        <label class="block mb-1 font-medium text-gray-800 capitalize">Town / City *</label>
                        <input type="text" name="city" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your town/city" required="">
                     </div>
                     <div class="w-full mb-4 md:w-1/3">
                        <label class="block mb-1 font-medium text-gray-800 capitalize">State *</label>
                        <select name="state" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" required="">
                           <option value="">Select a state</option>
                           <option value="california">California</option>
                           <option value="texas">Texas</option>
                           <!-- Add more states as needed -->
                        </select>
                     </div>
                     <div class="w-full mb-4 md:w-1/3">
                        <label class="block mb-1 font-medium text-gray-800 capitalize">ZIP Code *</label>
                        <input type="text" name="zip-code" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your ZIP code" required="">
                     </div>
                  </div>
                  <div class="mb-4 md:flex md:space-x-4">
                     <div class="w-full md:w-1/2">
                        <label class="block mb-1 font-medium text-gray-800 capitalize">Phone *</label>
                        <input type="tel" name="phone" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your phone number" required="">
                     </div>
                     <div class="w-full md:w-1/2">
                        <label class="block mb-1 font-medium text-gray-800 capitalize">Email Address *</label>
                        <input type="email" name="email" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your email" required="">
                     </div>
                  </div>
                  <div class="sm:col-span-2 mb-5 mt-4">
                     <button type="submit" class="flex w-full items-center justify-center gap-2 py-4 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                        </svg>
                        Add new address
                     </button>
                  </div>
                  <label class="inline-flex items-center mb-4">
                  <input type="checkbox" id="different-address-checkbox" name="different-address" class="form-checkbox h-5 w-5 text-[#202020]">
                  <span class="ml-2 text-gray-700">Ship to a different address?</span>
                  </label>
                  <!-- Default Address Fields -->
                  <div id="different-address" class="p-4 bg-gray-100 hidden">
                     <h3 class="mb-4 text-lg font-medium text-gray-900">Shipping Address</h3>
                     <div class="mb-4 md:flex md:space-x-4">
                        <div class="w-full md:w-1/2">
                           <label class="block mb-1 font-medium text-gray-800 capitalize">First Name *</label>
                           <input type="text" name="first-name" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your first name" required="">
                        </div>
                        <div class="w-full md:w-1/2">
                           <label class="block mb-1 font-medium text-gray-800 capitalize">Last Name *</label>
                           <input type="text" name="last-name" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your last name" required="">
                        </div>
                     </div>
                     <div class="md:flex md:space-x-4">
                        <div class="w-full mb-4 md:w-1/2">
                           <label class="block mb-1 font-medium text-gray-800 capitalize">Country / Region *</label>
                           <select name="country" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" required="">
                              <option value="">Select a country</option>
                              <option value="usa">United States</option>
                              <option value="canada">Canada</option>
                              <!-- Add more countries as needed -->
                           </select>
                        </div>
                        <div class="w-full mb-4 md:w-1/2">
                           <label class="block mb-1 font-medium text-gray-800 capitalize">Street Address *</label>
                           <input type="text" name="street-address" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="House number and street name" required="">
                        </div>
                     </div>
                     <div class="md:flex md:space-x-4">
                        <div class="w-full mb-4 md:w-1/3">
                           <label class="block mb-1 font-medium text-gray-800 capitalize">Town / City *</label>
                           <input type="text" name="city" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your town/city" required="">
                        </div>
                        <div class="w-full mb-4 md:w-1/3">
                           <label class="block mb-1 font-medium text-gray-800 capitalize">State *</label>
                           <select name="state" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" required="">
                              <option value="">Select a state</option>
                              <option value="california">California</option>
                              <option value="texas">Texas</option>
                              <!-- Add more states as needed -->
                           </select>
                        </div>
                        <div class="w-full mb-4 md:w-1/3">
                           <label class="block mb-1 font-medium text-gray-800 capitalize">ZIP Code *</label>
                           <input type="text" name="zip-code" class="w-full bg-gray-50 py-4 ps-6 rounded-lg border border-gray-300" placeholder="Enter your ZIP code" required="">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="space-y-5 mt-4 rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
               <h3 class="text-xl font-medium text-gray-900 ">Payment Methods</h3>
               <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
  <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4">
    <div class="flex items-start">
      <div class="flex h-5 items-center">
        <input id="credit-card" aria-describedby="credit-card-text" type="radio" name="payment-method" value="credit" class="h-4 w-4 border-gray-300 bg-white text-primary-600 focus:ring-2 focus:ring-primary-600" checked onclick="toggleCardDetails(true)" />
      </div>
      <div class="ms-4 text-sm flex justify-between w-96">
         <div class="align-self-start">
         <label for="credit-card" class="font-medium leading-none text-gray-900">Visa ending in 7658 </label>
         <p id="credit-card-text" class="mt-1 text-xs font-normal text-gray-500">Expiry 10/2024</p>
         </div>
        <img src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa.svg" class="w-16" alt="">
      </div>
    </div>
    
    <div id="card-details" class="mt-4">
      <input type="text" placeholder="Card Number" class="w-full p-2 border rounded-lg" />
      <div class="flex gap-2 mt-2">
        <input type="text" placeholder="MM/YY" class="w-1/2 p-2 border rounded-lg" />
        <input type="text" placeholder="CVV" class="w-1/2 p-2 border rounded-lg" />
      </div>
    </div>
  </div>
  
  <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4">
    <div class="flex items-start">
      <div class="flex h-5 items-center">
        <input id="pay-on-delivery" aria-describedby="pay-on-delivery-text" type="radio" name="payment-method" value="delivery" class="h-4 w-4 border-gray-300 bg-white text-primary-600 focus:ring-2 focus:ring-primary-600" onclick="toggleCardDetails(false)" />
      </div>
      <div class="ms-4 text-sm">
        <label for="pay-on-delivery" class="font-medium leading-none text-gray-900"> Payment on delivery </label>
        <p id="pay-on-delivery-text" class="mt-1 text-xs font-normal text-gray-500">AED15 payment processing fee</p>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleCardDetails(show) {
    document.getElementById("card-details").style.display = show ? "block" : "none";
  }
</script>
            </div>
         </div>
         <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
            <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm   sm:p-6">
               <h3 class="text-xl font-medium text-gray-900 ">Order Summary</h3>
               <div class="space-y-6">
                  <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm   md:p-3">
                     <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                        <a href="#" class="shrink-0 md:order-1">
                        <img class="hidden h-10 w-10 dark:block rounded-md" src="http://127.0.0.1:8000/images/products/ecoheat-5000.jpeg" alt="imac image" />
                        </a>
                        <div class="flex items-center justify-between md:order-3 md:justify-end ">
                           <div class="text-end md:order-4 md:w-32">
                              <p class="text-base text-lg font-semibold text-gray-900 text-black">AED 499.00</p>
                           </div>
                        </div>
                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                           <a href="#" class="text-base font-medium text-gray-900 hover:underline text-black">Google Nest Learning Thermostat 4th Gen with Sensor</a>
                        </div>
                     </div>
                  </div>
                  <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm   md:p-3">
                     <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                        <a href="#" class="shrink-0 md:order-1">
                        <img class="hidden h-10 w-10 dark:block rounded-md" src="http://127.0.0.1:8000/images/products/thermasense-x1.jpeg" alt="imac image" />
                        </a>
                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                           <div class="text-end md:order-4 md:w-32">
                              <p class="text-lg font-semibold text-gray-900">AED 199.00</p>
                           </div>
                        </div>
                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                           <a href="#" class="text-base font-medium text-gray-900 hover:underline text-black">ThermaSense X1</a>
                        </div>
                     </div>
                  </div>
                  <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm   md:p-3">
                     <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                        <a href="#" class="shrink-0 md:order-1">
                        <img class="hidden h-10 w-10 dark:block rounded-md" src="http://127.0.0.1:8000/images/products/frostwave-elite.jpeg" alt="imac image" />
                        </a>
                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                           <div class="text-end md:order-4 md:w-32">
                              <p class="text-lg font-semibold text-gray-900">AED 412.00</p>
                           </div>
                        </div>
                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                           <a href="#" class="text-base font-medium text-gray-900 hover:underline text-black">FrostWave Elite</a>
                        </div>
                     </div>
                  </div>
                  <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm   md:p-3">
                     <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                        <a href="#" class="shrink-0 md:order-1">
                        <img class="hidden h-10 w-10 dark:block rounded-md" src="http://127.0.0.1:8000/images/products/sentinel-vision-x.jpeg" alt="imac image" />
                        </a>
                        <label for="counter-input" class="sr-only">Choose quantity:</label>
                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                           <div class="text-end md:order-4 md:w-32">
                              <p class="text-lg font-semibold text-gray-900">AED 219.00</p>
                           </div>
                        </div>
                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                           <a href="#" class="text-base font-medium text-gray-900 hover:underline text-black">Sentinel Vision X</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm   sm:p-6">
               <form class="space-y-4">
                  <div>
                     <label for="voucher" class="mb-2 block text-xl font-medium text-gray-900"> Coupon Code </label>
                     <input type="text" id="voucher" class="block w-full py-3 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="" required />
                  </div>
                  <button type="submit" class="flex bg-[#4d4d4f] py-4 w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">Apply Code</button>
               </form>
            </div>
            <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm   sm:p-6">
 
               <div class="space-y-4">
                  <div class="space-y-2">
                     <dl class="flex items-center justify-between gap-4">
                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Sub total</dt>
                        <dd class="text-base font-medium text-gray-900 text-black">AED 1298.00</dd>
                     </dl>
                     <dl class="flex items-center justify-between gap-4">
                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                        <dd class="text-base font-medium text-green-600">-AED 299.00</dd>
                     </dl>
                     <dl class="flex items-center justify-between gap-4">
                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Delivery Charge</dt>
                        <dd class="text-base font-medium text-gray-900 text-black">AED 99.00</dd>
                     </dl>
                  </div>
                  <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 ">
                     <dt class="text-base font-bold text-gray-900 text-black">Total</dt>
                     <dd class="text-base font-bold text-gray-900 text-black">AED 1,397.00</dd>
                  </dl>
               </div>
               <a href="#" class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 bg-[#41b6e8] py-4">Place Order</a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection