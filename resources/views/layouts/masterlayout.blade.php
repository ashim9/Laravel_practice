<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel- @yield('title','Website')</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('bootstrap')
</head>
<body>
    <div class="header">
        <h1>Welcome to the Laravel Website</h1>
    </div>
    <div class="pages">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/post">Post</a>
    </div>
    <main>
        <article>
        @hasSection('content')
            @yield('content')
        @else
            <h2>No Content Found.....</h2>
        @endif
        </article>

        <aside>
            @section('sidebar')
            <ul>
                <li>A</li>
                <li>B</li>
                <li>C</li>
            </ul>
            @show
        </aside>
    </main>
    <footer>kumar@copyright 2023</footer>

    @stack('scripts')
</body>
</html>
