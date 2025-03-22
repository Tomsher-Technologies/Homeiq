@extends('layouts.app')
@section('title', 'Cart - HOME_IQ')
@section('content')
<section class="container mx-auto py-12 px-6 lg:px-12">
   <div class="mx-auto px-4 2xl:px-0">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl text-left">
         My Cart</span>
      </h2>
      <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
         <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
            <div class="space-y-6">
               <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm   md:p-6">
                  <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                     <a href="#" class="shrink-0 md:order-1">
                     <img class="hidden h-20 w-20 dark:block rounded-md" src="http://127.0.0.1:8000/images/products/ecoheat-5000.jpeg" alt="imac image" />
                     </a>
                     <label for="counter-input" class="sr-only">Choose quantity:</label>
                     <div class="flex items-center justify-between md:order-3 md:justify-end ">
                        <div class="flex items-center border px-4 py-2 rounded-lg">
                           <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                              </svg>
                           </button>
                           <input type="text" id="counter-input" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0" placeholder="" value="2" required />
                           <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                              </svg>
                           </button>
                        </div>
                        <div class="text-end md:order-4 md:w-32">
                           <p class="text-base text-lg font-semibold text-gray-900 text-black">AED 499.00</p>
                        </div>
                     </div>
                     <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                        <a href="#" class="text-base font-medium text-gray-900 hover:underline text-black">Google Nest Learning Thermostat 4th Gen with Sensor</a>
                        <div class="flex items-center gap-4">
                           <button type="button" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                              </svg>
                              Add to Favorites
                           </button>
                           <button type="button" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                              </svg>
                              Remove
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm   md:p-6">
                  <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                     <a href="#" class="shrink-0 md:order-1">
                     <img class="hidden h-20 w-20 dark:block rounded-md" src="http://127.0.0.1:8000/images/products/thermasense-x1.jpeg" alt="imac image" />
                     </a>
                     <label for="counter-input-2" class="sr-only">Choose quantity:</label>
                     <div class="flex items-center justify-between md:order-3 md:justify-end">
                        <div class="flex items-center border px-4 py-2 rounded-lg">
                           <button type="button" id="decrement-button-2" data-input-counter-decrement="counter-input-2" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                              </svg>
                           </button>
                           <input type="text" id="counter-input-2" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0" placeholder="" value="1" required />
                           <button type="button" id="increment-button-2" data-input-counter-increment="counter-input-2" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                              </svg>
                           </button>
                        </div>
                        <div class="text-end md:order-4 md:w-32">
                           <p class="text-lg font-semibold text-gray-900">AED 199.00</p>
                        </div>
                     </div>
                     <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                        <a href="#" class="text-base font-medium text-gray-900 hover:underline text-black">ThermaSense X1</a>
                        <div class="flex items-center gap-4">
                           <button type="button" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                              </svg>
                              Add to Favorites
                           </button>
                           <button type="button" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                              </svg>
                              Remove
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm   md:p-6">
                  <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                     <a href="#" class="shrink-0 md:order-1">
                     <img class="hidden h-20 w-20 dark:block rounded-md" src="http://127.0.0.1:8000/images/products/frostwave-elite.jpeg" alt="imac image" />
                     </a>
                     <label for="counter-input" class="sr-only">Choose quantity:</label>
                     <div class="flex items-center justify-between md:order-3 md:justify-end">
                        <div class="flex items-center border px-4 py-2 rounded-lg">
                           <button type="button" id="decrement-button-3" data-input-counter-decrement="counter-input-3" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                              </svg>
                           </button>
                           <input type="text" id="counter-input-3" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0" placeholder="" value="1" required />
                           <button type="button" id="increment-button-3" data-input-counter-increment="counter-input-3" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                              </svg>
                           </button>
                        </div>
                        <div class="text-end md:order-4 md:w-32">
                           <p class="text-lg font-semibold text-gray-900">AED 412.00</p>
                        </div>
                     </div>
                     <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                        <a href="#" class="text-base font-medium text-gray-900 hover:underline text-black">FrostWave Elite</a>
                        <div class="flex items-center gap-4">
                           <button type="button" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                              </svg>
                              Add to Favorites
                           </button>
                           <button type="button" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                              </svg>
                              Remove
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm   md:p-6">
                  <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                     <a href="#" class="shrink-0 md:order-1">
                     <img class="hidden h-20 w-20 dark:block rounded-md" src="http://127.0.0.1:8000/images/products/sentinel-vision-x.jpeg" alt="imac image" />
                     </a>
                     <label for="counter-input" class="sr-only">Choose quantity:</label>
                     <div class="flex items-center justify-between md:order-3 md:justify-end">
                        <div class="flex items-center border px-4 py-2 rounded-lg">
                           <button type="button" id="decrement-button-4" data-input-counter-decrement="counter-input-4" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                              </svg>
                           </button>
                           <input type="text" id="counter-input-4" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0" placeholder="" value="1" required />
                           <button type="button" id="increment-button-4" data-input-counter-increment="counter-input-4" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                              </svg>
                           </button>
                        </div>
                        <div class="text-end md:order-4 md:w-32">
                           <p class="text-lg font-semibold text-gray-900">AED 219.00</p>
                        </div>
                     </div>
                     <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                        <a href="#" class="text-base font-medium text-gray-900 hover:underline text-black">Sentinel Vision X</a>
                        <div class="flex items-center gap-4">
                           <button type="button" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                              </svg>
                              Add to Favorites
                           </button>
                           <button type="button" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                              </svg>
                              Remove
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm   md:p-6">
                  <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                     <a href="#" class="w-20 shrink-0 md:order-1">
                     <img class="hidden h-20 w-20 dark:block rounded-md" src="http://127.0.0.1:8000/images/products/keylessguard-2.jpeg" alt="imac image" />
                     </a>
                     <label for="counter-input" class="sr-only">Choose quantity:</label>
                     <div class="flex items-center justify-between md:order-3 md:justify-end">
                        <div class="flex items-center border px-4 py-2 rounded-lg">
                           <button type="button" id="decrement-button-5" data-input-counter-decrement="counter-input-5" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                              </svg>
                           </button>
                           <input type="text" id="counter-input-5" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0" placeholder="" value="3" required />
                           <button type="button" id="increment-button-5" data-input-counter-increment="counter-input-5" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200">
                              <svg class="h-2.5 w-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                              </svg>
                           </button>
                        </div>
                        <div class="text-end md:order-4 md:w-32">
                           <p class="text-lg font-semibold text-gray-900">AED 320.00</p>
                        </div>
                     </div>
                     <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                        <a href="#" class="text-base font-medium text-gray-900 hover:underline text-black">KeylessGuard 2.0</a>
                        <div class="flex items-center gap-4">
                           <button type="button" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                              </svg>
                              Add to Favorites
                           </button>
                           <button type="button" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                              <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                              </svg>
                              Remove
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
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
               <p class="text-xl font-semibold text-gray-900 text-black">Order summary</p>
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
               <a href="#" class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 bg-[#41b6e8] py-4">Proceed to Checkout</a>
               <div class="flex items-center justify-center gap-2">
                  <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                  <a href="#" title="" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                     Continue Shopping
                     <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                     </svg>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection