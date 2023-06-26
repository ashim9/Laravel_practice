@extends('layouts.layout')

@section('content')
    <form action="{{route('plan.store')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>

        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="duration" required>

        <input type="submit" value="Submit">
    </form>
@endsection