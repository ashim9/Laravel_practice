@extends('layouts.layout')

@section('content')
    <form action="{{route('role.store')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="name">Permissions:</label>
        <select name="permission_id[]" id="permission_id" multiple>
            @foreach ($permissions as $key => $permission)
                <option value="{{$key}}">{{$permission}}</option>
            @endforeach
        </select>

        <input type="submit" value="Submit">
    </form>
@endsection