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
    <form action="{{route('plan.update', $plan->id)}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$plan->name}}" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{$plan->description}}</textarea>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="{{$plan->price}}" required>

        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="duration" required value="{{$plan->duration}}">

        <input type="submit" value="Submit">
    </form>
</body>
</html>

