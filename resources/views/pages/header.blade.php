<h1>This is header</h1>
{{-- <p>{{ $name }}</p> --}}

{{-- @foreach ($fruits  as  $key=>$fruit) --}}
    {{-- <p>{{ $fruit }}<p> --}}
    {{-- <p>{{ $key }} - {{ $fruit }}</p> --}}
{{-- @endforeach --}}


{{-- @forelse ($fruits  as  $key=>$fruit)
    <p>{{ $key }} - {{ $fruit }}</p>
@empty
    <p>No data found</p>
@endforelse --}}


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Blade</title>
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
    <main> --}}