<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-gray-50">
    @include('navbar')

    <div class="md:pl-60">
		<div class=" flex justify-center p-4 overflow-hidden">
			<div>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>