@extends('layouts.layout')

@section('content')
    <div class="heading">
        <h1>Edit a new entry:</h1>
    </div>
    <form action="{{route('district.update', $district->id)}}" method="POST">
        @csrf
        <label for="name">District Name:</label>
        <input type="text" id="name" name="name" value="{{$district->name}}" required>
        
        <input type="submit" value="Submit">
    </form>
@endsection