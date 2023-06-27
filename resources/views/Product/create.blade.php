@extends('layouts.layout')

@section('content')
    <div class="heading">
        <h1>Create a new entry:</h1>
    </div>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <label for="name">Category Name:</label>
        <select name="category_id[]" id="category_id" multiple>
            @foreach ($categories as $key => $category)
                <option value="{{$key}}">{{$category}}</option>
            @endforeach
        </select>

        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>
        
        <input type="submit" value="Submit">
    </form>
@endsection 