<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>@yield('title')</title>
</head>
<body class="bg-gray-50">
    @include('navbar')

    <div class="md:pl-60 flex justify-center overflow-hidden">
        <div class="p-4 w-full">
            @yield('content')
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>