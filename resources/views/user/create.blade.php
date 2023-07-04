@extends('layouts.layout')

@section('content')
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="name">Role:</label>
        <select name="role_id[]" id="role_id" multiple>
            @foreach ($roles as $key => $role)
                <option value="{{$key}}">{{$role}}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
@endsection