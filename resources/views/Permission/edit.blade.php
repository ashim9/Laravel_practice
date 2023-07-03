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
    <form action="{{route('permission.update', $permission->id)}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $permission->name }}" required>
        <label for="key">Key:</label>
        <input type="text" id="key" name="key" value="{{ $permission->key }}" required>
        <label for="name">Route Name:</label>
        <input type="text" id="name" name="name" value="{{ $permission->route_name }}" required>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>

