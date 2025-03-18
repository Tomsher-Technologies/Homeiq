<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HOME_IQ')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js') <!-- Include JS -->
</head>
<body class="bg-gray-50">

    @include('components.navigation.header')

    <main class="pt-[90px]">
        @yield('content')
    </main>


    @include('components.navigation.footer') 


</body>
</html>
