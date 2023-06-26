@extends('layouts.layout')

@section('content')
    <div class="heading">
        <h1>Create a new entry:</h1>
    </div>
    <form action="{{route('division.store')}}" method="POST">
        @csrf
        <label for="name">Country Name:</label>
        <select name="country_id" id="country_id">

        <option value="">Select Country</option>
            @foreach ($countries as $key => $country)
                <option value="{{$key}}">{{$country}}</option>
            @endforeach
        </select>

        <label for="name">Division Name:</label>
        <input type="text" id="name" name="name" required>
        
        <input type="submit" value="Submit">
    </form>
@endsection 