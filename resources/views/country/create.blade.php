@extends('layouts.layout')

@section('content')
    <div class="heading">
        <h1>Create a new entry:</h1>
    </div>
    <form action="{{route('country.store')}}" method="POST">
        @csrf
        <label for="name">Country Name:</label>
        <input type="text" id="name" name="name" required>
        
        <input type="submit" value="Submit">
    </form>
@endsection 