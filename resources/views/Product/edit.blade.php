@extends('layouts.layout')

@section('content')
    <div class="heading">
        <h1>Edit a new entry:</h1>
    </div>
    <form action="{{route('division.update', $division->id)}}" method="POST">
        @csrf
        <label for="name">Division Name:</label>
        <input type="text" id="name" name="name" value="{{$division->name}}" required>
        
        <input type="submit" value="Submit">
    </form>
@endsection