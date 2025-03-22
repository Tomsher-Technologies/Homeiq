<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'HOME_IQ')</title>
    {!! SEO::generate() !!}
    @vite(['resources/css/app.css','resources/js/app.js'])
    @yield('style')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
   
</head>
<body class="bg-gray-50">

    @include('components.navigation.header')

    <main class="pt-[90px]">
        @yield('content')
    </main>


    @include('components.navigation.footer') 

    @yield('script')

    <script>
         document.addEventListener("DOMContentLoaded", function() {

            @if (session('success'))
                toastr.success('{{ session("success") }}');
            @endif

            @if (session('error'))
                toastr.error('{{ session("error") }}');
            @endif

            $('#newsletter-form').on('submit', function(e){
                e.preventDefault();
        
                let newsletter_email = $('#newsletter_email').val();
                let _token = $('input[name="_token"]').val();
        
                $.ajax({
                    url: "{{ route('newsletter.subscribe') }}",
                    type: "POST",
                    data: { newsletter_email: newsletter_email, _token: _token },
                    success: function(response) {
                        $('#messageNewsletter').text(response.success).css('color', '#00dc00');
                        $('#newsletter_email').val('');
                    },
                    error: function(xhr) {
                        let error = xhr.responseJSON.errors.newsletter_email[0];
                        $('#messageNewsletter').text(error).css('color', 'red');
                    }
                });
            });

            $(document).on('click', '.add-to-cart-btn', function () {
                const productSlug = $(this).data('product-slug');
                const productSku = $(this).data('product-sku');
                var quantity = $('#product_quantity').val() ?? 1;
            
                $.ajax({
                    url: '/cart/add', // Laravel route
                    type: 'POST',
                    data: {
                        product_slug: productSlug,
                        sku : productSku,
                        quantity: quantity, // Default quantity
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function (response) {
                        $('.cart_count').text(response.cart_count);
                        $('.canvasCartcount').text(response.cart_count);
                        if (response.status == true) {
                            toastr.success(response.message, "success");
                        } else {
                            toastr.error(response.message, "error");
                        }
                    },
                    error: function (xhr, status, error) {
                        toastr.error("{{trans('messages.product_add_cart_failed')}}", 'Error');
                    },
                });
            });


        });

      
    </script>
</body>
</html>
