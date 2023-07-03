@extends('layouts.layout')

@section('content')
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <textarea id="email" name="email" required></textarea>

        <label for="student_id">Student Id:</label>
        <input type="number" id="student_id" name="student_id" step="0.01" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <input type="submit" value="Submit">
    </form>
@endsection