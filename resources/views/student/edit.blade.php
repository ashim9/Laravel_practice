<!DOCTYPE html>
<html>
<head>
    <style>
        /* Basic form styling */
        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="{{route('student.update', $student->id)}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$student->name}}" required>

        <label for="email">Email:</label>
        <textarea id="email" name="email" required>{{$student->email}}</textarea>

        <label for="student_id">Price:</label>
        <input type="number" id="student_id" name="student_id" value="{{$student->student_id}}" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required value="{{$student->address}}">

        <input type="submit" value="Submit">
    </form>
</body>
</html>