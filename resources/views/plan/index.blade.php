<!DOCTYPE html>
<html>
<head>
    <style>
        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Alternate row background color */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <a href="{{route('plan.create')}}" >Add plan</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Duration</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($plans as $plan)
            <tr>
                <td>{{$plan->name}}</td>
                <td>{{$plan->description}}</td>
                <td>{{$plan->price}}</td>
                <td>{{$plan->duration}}</td>
                <td><a href="{{route('plan.edit',$plan->id)}}">Edit</a> <form action="{{route('plan.delete',$plan->id)}}" method="post">@csrf<button type="submit">Delete</button></form></td>
            </tr>
        @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</body>
</html>
