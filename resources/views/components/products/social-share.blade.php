@props(['product'])

@php
    $currentUrl = urlencode(request()->fullUrl());
    $pageTitle = urlencode($product['name'] ?? 'Check this product');
    $productImage = isset($product['images'][0]) ? url($product['images'][0]) : url('default-image.jpg');
@endphp

<div class="flex items-center gap-3 mt-4">
    <span class="text-gray-700 text-sm font-semibold">Share:</span>

    <!-- Facebook Share -->
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $currentUrl }}" target="_blank"
        class="flex items-center gap-2 px-3 py-2 bg-gray-200 rounded-full hover:bg-gray-300 transition-all duration-300">
        <svg class="w-5 h-5 text-gray-700 hover:text-gray-900 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="currentColor" d="M22 12A10 10 0 1 0 10.5 22v-7h-2v-2h2V9.5c0-2 .9-3.5 3.7-3.5h2.3V8h-1.7c-1.2 0-1.3.4-1.3 1.2V12h3l-.5 2h-2.5v7A10 10 0 0 0 22 12z"/>
        </svg>
        <span class="text-sm text-gray-700">Facebook</span>
    </a>

    <!-- Twitter Share -->
    <a href="https://twitter.com/intent/tweet?url={{ $currentUrl }}&text={{ $pageTitle }}" target="_blank"
        class="flex items-center gap-2 px-3 py-2 bg-gray-200 rounded-full hover:bg-gray-300 transition-all duration-300">
        <svg class="w-5 h-5 text-gray-700 hover:text-gray-900 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="currentColor" d="M22.5 5.8c-.8.4-1.6.6-2.5.7.9-.5 1.5-1.3 1.9-2.2-.9.5-1.8.9-2.8 1.1a4.4 4.4 0 0 0-7.5 3c0 .3 0 .5.1.7-3.6-.2-6.8-1.9-8.9-4.6a4.5 4.5 0 0 0 1.3 6 4.5 4.5 0 0 1-2-.5v.1a4.5 4.5 0 0 0 3.5 4.4c-.5.1-1 .2-1.5.2-.3 0-.7 0-1-.1a4.4 4.4 0 0 0 4.2 3.1 8.9 8.9 0 0 1-5.5 1.9H2c2 .9 4.2 1.4 6.5 1.4a12.5 12.5 0 0 0 12.6-12.6c0-.2 0-.4-.1-.6a9 9 0 0 0 2.1-2.2z"/>
        </svg>
        <span class="text-sm text-gray-700">Twitter</span>
    </a>

    <!-- Pinterest Share -->
    <a href="https://pinterest.com/pin/create/button/?url={{ $currentUrl }}&media={{ $productImage }}&description={{ $pageTitle }}" target="_blank"
        class="flex items-center gap-2 px-3 py-2 bg-gray-200 rounded-full hover:bg-gray-300 transition-all duration-300">
        <svg class="w-5 h-5 text-gray-700 hover:text-gray-900 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 7 9.5c-.1-.8-.2-2-.1-2.9l.7-2.9s-.2-.5-.2-1.2c0-1.2.7-2.1 1.6-2.1.8 0 1.2.6 1.2 1.5 0 .9-.6 2.3-.9 3.5-.3 1.1.7 2 1.6 2 2 0 3.4-2.1 3.4-5.2 0-2.7-1.9-4.6-4.7-4.6-3.2 0-5.1 2.3-5.1 4.7 0 .9.3 1.9.8 2.5a.4.4 0 0 1 0 .3c-.1.4-.3 1.1-.4 1.2-.2.3-.5.3-.7.1-1.2-.5-1.9-2.1-1.9-3.4 0-2.8 2.1-5.5 6.1-5.5a5.3 5.3 0 0 1 5.6 5.6c0 3.1-1.9 5.6-4.6 5.6-1 0-2-.5-2.3-1l-.6 2.2c-.2.9-.8 2.1-1.2 2.7A10 10 0 1 0 12 2z"/>
        </svg>
        <span class="text-sm text-gray-700">Pinterest</span>
    </a>
</div>
