@extends('layouts.layout')

@section('content')
    <div class="heading">
        <h1>Edit a new entry:</h1>
    </div>
    <form action="{{route('country.update', $country->id)}}" method="POST">
        @csrf
        <label for="name">Country Name:</label>
        <input type="text" id="name" name="name" value="{{$country->name}}" required>
        
        <input type="submit" value="Submit">
    </form>
@endsection