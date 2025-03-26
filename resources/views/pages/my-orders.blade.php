@extends('layouts.app')
 
 @section('title', 'My Address - HOME_IQ')
 
 @section('content')
 
 <div class="container mx-auto py-12 px-6 lg:px-12">
 
    <!-- Section Title -->
    <h2 class="text-3xl md:text-4xl text-left">
         My Orders</span>
     </h2>
 
     <div class="relative overflow-x-auto block mt-6">
     <table class="w-full text-sm text-left text-gray-500 rtl:text-right whitespace-nowrap">
         <thead class="text-xs text-gray-700 uppercase bg-[#F4F4F4] text-[#603813]">
             <tr>
                 <th scope="col" class="px-6 py-3">Order</th>
                 <th scope="col" class="px-6 py-3">Product Name</th>
                 <th scope="col" class="px-6 py-3">Date</th>
                 <th scope="col" class="px-6 py-3">Status</th>
                 <th scope="col" class="px-6 py-3">Price</th>
                 <th scope="col" class="px-6 py-3 text-center"><span class="">Action</span></th>
             </tr>
         </thead>
         <tbody>
         <tr class="bg-white border-b hover:bg-gray-50">
     <th scope="row" class="px-6 py-2 font-normal whitespace-nowrap">#1</th>
     <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap leading-4">
         <div class="flex items-center gap-3">
             <img src="http://127.0.0.1:8000/images/products/ecoheat-5000.jpeg" 
                  alt="Google Nest Learning Thermostat 4th Gen with Sensor" 
                  class="w-20 object-cover rounded-lg transition-transform duration-[400ms] ease-in-out group-hover:scale-[1.05]">
             <div>
             Google Nest Learning Thermostat 4th Gen with Sensor
             </div>
         </div>
     </td>
     <td class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap">12-05-2024</td>
     <td class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap">
         <span class="p-2 text-sm text-[#48a839] bg-green-100 rounded">Delivered</span>
     </td>
     <td class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap">AED 1200</td>
     <td class="px-6 py-2 text-center">
         <a href="order-detail.html" 
            class="font-normal text-black bg-[#202020] hover:bg-[#c9e600] hover:text-black px-3 py-2 hover:underline" 
            type="button">View Details</a>
     </td>
 </tr>
 
             <tr class="bg-white border-b hover:bg-gray-50">
                 <th scope="row" class="px-6 py-2 font-normal whitespace-nowrap">#2</th>
                 <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap leading-4">
                 <div class="flex items-center gap-3">
             <img src="http://127.0.0.1:8000/images/products/thermasense-x1.jpeg" 
                  alt="Google Nest Learning Thermostat 4th Gen with Sensor" 
                  class="w-20 object-cover rounded-lg transition-transform duration-[400ms] ease-in-out group-hover:scale-[1.05]">
             <div>
             ThermaSense X1
             </div>
         </div>
                 </td>
                 <td class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap">12-05-2024</td>
                 <td class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap">
                     <span class="p-2 text-sm text-[#48a839] bg-green-100 rounded">Delivered</span>
                 </td>
                 <td class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap">AED 1100</td>
                 <td class="px-6 py-2 text-center">
                     <a href="order-detail.html" class="font-normal text-black bg-[#202020] hover:bg-[#c9e600] hover:text-black px-3 py-2 hover:underline" type="button">View Details</a>
                 </td>
             </tr>
             <tr class="bg-white border-b hover:bg-gray-50">
                 <th scope="row" class="px-6 py-2 font-normal whitespace-nowrap">#3</th>
                 <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap leading-4">
                 <div class="flex items-center gap-3">
             <img src="http://127.0.0.1:8000/images/products/frostwave-elite.jpeg" 
                  alt="Google Nest Learning Thermostat 4th Gen with Sensor" 
                  class="w-20 object-cover rounded-lg transition-transform duration-[400ms] ease-in-out group-hover:scale-[1.05]">
             <div>
             FrostWave Elite
             </div>
         </div>
                 </td>
                 <td class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap">12-05-2024</td>
                 <td class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap">
                     <span class="p-2 text-sm text-[#48a839] bg-green-100 rounded">Delivered</span>
                 </td>
                 <td class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap">AED 1800</td>
                 <td class="px-6 py-2 text-center">
                     <a href="order-detail.html" class="font-normal text-black bg-[#202020] hover:bg-[#c9e600] hover:text-black px-3 py-2 hover:underline" type="button">View Details</a>
                 </td>
             </tr>
         </tbody>
     </table>
 </div>
 
 
 
 @endsection