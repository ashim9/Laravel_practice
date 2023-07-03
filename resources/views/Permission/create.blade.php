@extends('layouts.layout')

@section('content')
    <form action="{{route('permission.store')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="key">Key:</label>
        <input type="text" id="key" name="key" required>
        <label for="route_name">Route Name:</label>
        <input type="text" id="route_name" name="route_name" required>

        <input type="submit" value="Submit">
    </form>
@endsection