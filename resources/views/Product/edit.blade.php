@extends('layouts.layout')

@section('content')
    <div class="heading">
        <h1>Edit a new entry:</h1>
    </div>
    <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf
        <label for="name">Category Name:</label>
        <select name="category_id[]" id="category_id" multiple>
            @foreach ($categories as $key => $category)
                @php
                    $selected = '';
                    if(in_array($key, $product_categories)){
                        $selected = 'selected';
                    }
                @endphp
                <option value="{{$key}}" {{$selected}}>{{$category}}</option>
            @endforeach
        </select>

        <label for="name">Edit Product:</label>
        <input type="text" id="name" name="name" value="{{$product->name}}" required>
        
        <input type="submit" value="Submit">
    </form>
@endsection