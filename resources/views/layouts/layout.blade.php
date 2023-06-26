<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel- @yield('title','Website')</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    @stack('bootstrap')
</head>
<body>
    <main>
        @hasSection('content')
            @yield('content')
        @else
            <h2>No Content Found.....</h2>
        @endif
    </main>
    @yield('scripts')
</body>
</html>