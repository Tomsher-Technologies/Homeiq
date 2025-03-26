@extends('layouts.app')
@section('title', 'Order Details- HOME_IQ')
@section('content')
<section class="container mx-auto py-12 px-6 lg:px-12">


<div class="flex justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-6xl">
            <!-- Header -->
            <div class="flex justify-between items-start">
                <div class="flex items-start">

                    <div>
                        <h1 class="text-2xl font-semibold">Order #5913879987894</h1>

                        <p class="text-gray-700 mukta-medium">14 Jan 2024, 15:43:23</p>
                    </div>
                </div>
                <div>
                    <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm">In progress</span>
                </div>
            </div>
    


            <div class="mt-3 flex justify-between items-center">
                <div class="flex space-x-2">
                    <a class="flex items-center justify-center px-4 py-2.5 text-sm font-bold text-center text-[#41b6e8] border border-[#41b6e8] transition-all duration-200 hover:text-[#41b6e8]  hover:bg-[#41b6e8] " href="re-turn.html">Retun / Cancel</a>
                     <a class="flex items-center justify-center px-4 py-2.5 text-sm font-bold text-white transition-all border  border-[#41b6e8] duration-200 bg-[#41b6e8]  hover:text-[#41b6e8]  hover:bg-[#41b6e8]" href="">Invoice</a>
                </div>
            </div>


            <!-- Order History Timeline -->
            <div id="track-order" class="mt-6 space-y-4">
                <h2 class="text-xl font-semibold mb-4">Track Order</h2>




                
<ol class="relative border-s border-gray-300 ">                  
    <li class="mb-10 ms-4">
        <div class="absolute w-3 h-3 bg-[#41b6e8] rounded-full mt-1.5 -start-1.5 border border-white"></div>
        <time class="mb-1 text-lg font-normal leading-none font-semibold text-black">Product Shipped</time>
        <h3 class="mb-1 text-md text-gray-500">13/09/2024 5:23 pm</h3>
        <p class="mb-1 text-base font-normal text-gray-500">Courier Service: UPS, R. Gosling</p>
        <p class="mb-1 text-base font-normal text-gray-500">Estimated Delivery Date: 15/09/2024</p>
   
    </li>
    <li class="mb-10 ms-4">
        <div class="absolute w-3 h-3 bg-[#41b6e8] rounded-full mt-1.5 -start-1.5 border border-white"></div>
        <time class="mb-1 text-lg font-normal leading-none font-semibold text-black">Product Packaging</time>
        <h3 class="mb-1 text-md text-gray-500">13/09/2024 4:13 pm</h3>
        <p class="mb-1 text-base font-normal text-gray-500">Warehouse: Apple Spot 13b</p>

        
    </li>
    <li class="ms-4">
        <div class="absolute w-3 h-3 bg-[#41b6e8] rounded-full mt-1.5 -start-1.5 border border-[white]"></div>
        <time class="mb-1 text-lg font-normal leading-none font-semibold text-black">Order Confirmed</time>
        <h3 class="mb-1 text-md text-gray-500">13/09/2024 3:53 pm</h3>
    </li>

    <li class="ms-4">
        <div class="absolute w-3 h-3 bg-[#41b6e8] rounded-full mt-1.5 -start-1.5 border border-white"></div>
        <time class="mb-1 text-lg font-normal leading-none font-semibold text-black">Order Placed</time>
        <h3 class="mb-1 text-md text-gray-500">13/09/2024 3:53 pm</h3>
    </li>


    <li class="ms-4">
        <div class="absolute w-3 h-3 bg-[#41b6e8] rounded-full mt-1.5 -start-1.5 border border-white"></div>
        <time class="mb-1 text-lg font-normal leading-none font-semibold text-black">Product Packaging</time>
        <h3 class="mb-1 text-md text-gray-500">13/09/2024 4:13 pm</h3>
        <p class="mb-1 text-base font-normal text-gray-500">Warehouse: Apple Spot 13b</p>
    </li>
</ol>



            </div>




            <!-- Additional Products -->
            <div class="mt-6 border-t border-gray-200 pt-4">
                <h2 class="text-xl font-semibold mb-4">Item Details</h2>
                <div class="space-y-6">
                  <div class=" border-b md:pb-3">
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
                  <div class="border-b md:pb-3">
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
                  <div class="border-b md:pb-3">
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
                  <div class="border-b md:pb-3">
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


            <!-- Order Summary -->
            <div class="mt-6 border-t border-gray-200 pt-4">
                <h2 class="text-xl font-semibold mb-4">Order Summary</h2>
                <div class="flex justify-between text-gray-600 mb-3">
                    <p>Total MRP</p>
                    <p>AED 2,795</p>
                </div>
                <div class="flex justify-between text-gray-600 mb-3">
                    <p>Cart Discount</p>
                    <p>- AED 902</p>
                </div>
                <div class="flex justify-between text-gray-600 mb-3">
                    <p>Sub Total</p>
                    <p>AED 1,893</p>
                </div>
                <div class="flex justify-between text-gray-800 mb-3">
                    <p>Delivery Charges</p>
                    <p>Free</p>
                </div>

                <div class="flex justify-between text-gray-800 mb-3">
                    <p>Delivery Charges</p>
                    <p>Free</p>
                </div>

                <hr>

                <div class="mb-2 mt-3 flex justify-between">
                    <p class="text-base text-default-700">Total</p>
                    <p class="text-base font-bold text-default-700">AED 1,893
                    </p>
                </div>


                <!-- Payment Method -->
                <div class="mt-3 border-t border-gray-200 pt-4">
                    <h2 class="text-xl font-semibold mb-4">Payment Method</h2>
                    <p class="text-gray-600">Credit Card ending in 1234</p>
                    <p class="text-gray-600">Billing Address: Same as Shipping Address</p>
                </div>
            </div>





            <!-- Shipping Address -->
            <div class="mt-6 border-t border-gray-200 pt-4">
                <h2 class="text-xl font-semibold mb-4">Shipping Address</h2>
                <p class="text-gray-600">John Doe</p>
                <p class="text-gray-600">4517 Washington Ave</p>
                <p class="text-gray-600">Manchester, Kentucky 39495</p>
                <p class="text-gray-600">United States</p>
            </div>
            <!-- Footer -->

            <!-- Need Help? -->
            <div class="mt-6 border-t border-gray-200 pt-4">
                <h2 class="text-xl font-semibold mb-4">Need Help?</h2>
                <ul class="list-none pl-5 text-gray-600 space-y-2">
                    <li>
                        <a href="#" class="text-gray-600 flex  itemms-center gap-2">
                            <svg width="18pt" height="18pt" class="fill-gray-600" version="1.1" id="fi_471664" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M256,0C114.509,0,0,114.496,0,256c0,141.489,114.496,256,256,256c141.491,0,256-114.496,256-256
                                            C512,114.509,397.504,0,256,0z M256,476.279c-121.462,0-220.279-98.816-220.279-220.279S134.538,35.721,256,35.721
                                            c121.463,0,220.279,98.816,220.279,220.279S377.463,476.279,256,476.279z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M248.425,323.924c-14.153,0-25.61,11.794-25.61,25.946c0,13.817,11.12,25.948,25.61,25.948
                                            c14.49,0,25.946-12.131,25.946-25.948C274.371,335.718,262.577,323.924,248.425,323.924z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M252.805,127.469c-45.492,0-66.384,26.959-66.384,45.155c0,13.142,11.12,19.208,20.218,19.208
                                            c18.197,0,10.784-25.948,45.155-25.948c16.848,0,30.328,7.414,30.328,22.915c0,18.196-18.871,28.642-29.991,38.077
                                            c-9.773,8.423-22.577,22.24-22.577,51.22c0,17.522,4.718,22.577,18.533,22.577c16.511,0,19.881-7.413,19.881-13.817
                                            c0-17.522,0.337-27.631,18.871-42.121c9.098-7.076,37.74-29.991,37.74-61.666S295.937,127.469,252.805,127.469z">
                                        </path>
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                            Order Issues
                        </a>
                    </li>

                    <li><a href="#" class="text-gray-600 flex  itemms-center gap-2">


                            <svg id="fi_2769339" width="20pt" height="20pt" class="fill-gray-600" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path d="m41.211 37.288a4.112 4.112 0 1 1 4.109-4.112 4.114 4.114 0 0 1 -4.109 4.112zm0-6.724a2.612 2.612 0 1 0 2.609 2.612 2.613 2.613 0 0 0 -2.609-2.612z">
                                </path>
                                <path d="m19.542 37.288a4.112 4.112 0 1 1 4.108-4.112 4.115 4.115 0 0 1 -4.108 4.112zm0-6.724a2.612 2.612 0 1 0 2.608 2.612 2.614 2.614 0 0 0 -2.608-2.612z">
                                </path>
                                <path d="m46.621 33.926h-2.051a.75.75 0 0 1 0-1.5h1.839v-3.977a3.16 3.16 0 0 0 -.4-1.536l-4.06-7.279a.4.4 0 0 0 -.349-.205h-5.533v13h1.786a.75.75 0 0 1 0 1.5h-2.536a.75.75 0 0 1 -.75-.75v-14.5a.75.75 0 0 1 .75-.75h6.283a1.9 1.9 0 0 1 1.66.974l4.059 7.28a4.662 4.662 0 0 1 .589 2.266v4.19a1.289 1.289 0 0 1 -1.287 1.287z">
                                </path>
                                <path d="m16.183 33.926h-7.191a.75.75 0 0 1 -.75-.75v-5.768a.75.75 0 0 1 1.5 0v5.018h6.441a.75.75 0 0 1 0 1.5z">
                                </path>
                                <path d="m8.992 24.747a.75.75 0 0 1 -.75-.75v-5.036a.75.75 0 0 1 1.5 0v5.039a.75.75 0 0 1 -.75.747z">
                                </path>
                                <path d="m35.317 33.926h-12.417a.75.75 0 0 1 0-1.5h11.667v-19.621h-24.825v3.089a.75.75 0 0 1 -1.5 0v-3.227a1.364 1.364 0 0 1 1.363-1.362h25.1a1.364 1.364 0 0 1 1.362 1.362v20.509a.75.75 0 0 1 -.75.75z">
                                </path>
                                <path d="m11.957 28.158h-9.519a.75.75 0 0 1 0-1.5h9.519a.75.75 0 0 1 0 1.5z"></path>
                                <path d="m19.542 24.747h-13.283a.75.75 0 0 1 0-1.5h13.283a.75.75 0 0 1 0 1.5z">
                                </path>
                                <path d="m5.846 20.787h-5.187a.75.75 0 1 1 0-1.5h5.187a.75.75 0 0 1 0 1.5z"></path>
                                <path d="m14.163 16.644h-9.156a.75.75 0 1 1 0-1.5h9.156a.75.75 0 0 1 0 1.5z"></path>
                            </svg>


                            Delivery Information</a></li>
                    <li><a href="#" class="text-gray-600 flex  itemms-center gap-2">

                            <svg width="20pt" height="20pt" class="fill-gray-600" viewBox="0 1 511.99981 511" xmlns="http://www.w3.org/2000/svg" id="fi_1585147">
                                <path d="m506.8125 111.230469-199.40625-109.496094c-2.996094-1.6445312-6.628906-1.6445312-9.625 0l-75.160156 41.269531c-1.585938.417969-3.066406 1.214844-4.292969 2.359375l-119.949219 65.867188c-3.199218 1.753906-5.1875 5.113281-5.1875 8.765625v132.429687c-20.234375 6.328125-38.777344 17.488281-54.195312 32.910157-40.1875 40.183593-50.433594 101.472656-25.496094 152.507812 2.421875 4.960938 8.410156 7.019531 13.371094 4.59375 4.964844-2.425781 7.019531-8.414062 4.597656-13.375-21.1875-43.363281-12.480469-95.4375 21.667969-129.585938 21.355469-21.355468 49.746093-33.117187 79.945312-33.117187s58.589844 11.761719 79.945313 33.117187c21.351562 21.351563 33.113281 49.742188 33.113281 79.941407s-11.761719 58.589843-33.117187 79.945312c-34.148438 34.148438-86.222657 42.855469-129.585938 21.667969-4.960938-2.425781-10.949219-.367188-13.371094 4.59375-2.425781 4.964844-.371094 10.953125 4.59375 13.375 18.589844 9.085938 38.535156 13.5 58.335938 13.5 34.542968-.003906 68.625-13.449219 94.171875-38.996094 11.714843-11.714844 20.972656-25.230468 27.523437-39.921875l43.089844 23.660157c1.5.824218 3.15625 1.234374 4.8125 1.234374s3.316406-.410156 4.8125-1.234374l199.40625-109.492188c3.199219-1.757812 5.1875-5.117188 5.1875-8.765625v-69.496094c0-5.523437-4.476562-10-10-10s-10 4.476563-10 10v63.578125l-179.375 98.496094v-196.171875l59.199219-32.507813v51.53125c0 3.539063 1.867187 6.8125 4.910156 8.609376 1.570313.925781 3.328125 1.390624 5.089844 1.390624 1.65625 0 3.316406-.410156 4.820312-1.238281l42.730469-23.519531c3.195312-1.757812 5.175781-5.113281 5.175781-8.757812v-62.460938l57.449219-31.542969v52.597657c0 5.523437 4.476562 10 10 10s10-4.476563 10-10v-69.496094c0-3.648438-1.988281-7.011719-5.1875-8.765625zm-204.21875-89.324219 178.628906 98.089844-56.347656 30.941406-178.628906-98.089844zm0 196.175781-178.628906-98.085937 58.414062-32.078125 178.632813 98.085937zm79.191406-43.484375-178.628906-98.085937 22.3125-12.253907 178.632812 98.085938zm-154.617187 110.738282c-25.132813-25.132813-58.546875-38.972657-94.085938-38.972657-6.722656 0-13.363281.496094-19.890625 1.46875v-110.9375l179.4375 98.53125v196.171875l-31.144531-17.101562c3.066406-11.289063 4.652344-23.0625 4.652344-35.078125 0-35.539063-13.839844-68.953125-38.96875-94.082031zm187.386719-60.347657-22.730469 12.511719v-45.597656l22.730469-12.480469zm0 0">
                                </path>
                                <path d="m502 219.441406c-2.628906 0-5.210938 1.070313-7.070312 2.929688-1.859376 1.859375-2.929688 4.4375-2.929688 7.070312 0 2.628906 1.070312 5.207032 2.929688 7.066406 1.859374 1.863282 4.441406 2.929688 7.070312 2.929688s5.210938-1.066406 7.070312-2.929688c1.859376-1.859374 2.929688-4.4375 2.929688-7.066406 0-2.632812-1.070312-5.210937-2.929688-7.070312-1.859374-1.859375-4.441406-2.929688-7.070312-2.929688zm0 0">
                                </path>
                                <path d="m99.457031 389.417969c2.558594 0 5.121094-.976563 7.070313-2.925781 3.90625-3.90625 3.90625-10.238282 0-14.144532l-6.925782-6.929687h59.101563c14.335937 0 26 11.664062 26 26 0 14.335937-11.664063 26-26 26h-35.019531c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 9.996093 10 9.996093h35.019531c25.363281 0 46-20.632812 46-45.996093s-20.636719-45.996094-46-45.996094h-59.101563l6.925782-6.929687c3.90625-3.90625 3.90625-10.238282 0-14.144532-3.902344-3.902344-10.234375-3.902344-14.140625 0l-24 24c-3.902344 3.90625-3.902344 10.238282 0 14.144532l24 23.996093c1.953125 1.953125 4.511719 2.929688 7.070312 2.929688zm0 0">
                                </path>
                                <path d="m46.074219 476.449219c-2.84375 0-5.667969-1.210938-7.640625-3.558594l-.019532-.023437c-3.554687-4.226563-3.007812-10.53125 1.21875-14.085938 4.226563-3.558594 10.535157-3.011719 14.089844 1.214844 3.550782 4.230468 3.015625 10.546875-1.210937 14.101562-1.878907 1.578125-4.164063 2.351563-6.4375 2.351563zm0 0">
                                </path>
                            </svg>

                            Returns</a></li>
                </ul>
            </div>

        </div>
    </div>

</section>
@endsection