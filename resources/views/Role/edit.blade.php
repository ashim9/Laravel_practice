<!DOCTYPE html>
<html>
<head>
    <style>
        /* Basic form styling */
        form {
            max-width: 400px;
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
    <form action="{{route('role.update', $role->id)}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $role->name }}" required>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>

