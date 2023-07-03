@extends('layouts.layout')

@section('content')
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <input type="submit" value="Submit">
    </form>
@endsection