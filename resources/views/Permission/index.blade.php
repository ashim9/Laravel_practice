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
    <a href="{{route('permission.create')}}">Add permission</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Key</th>
                <th>Route Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($permissions as $permission)
            <tr>
                <td>{{$permission->name}}</td>
                <td>{{$permission->key}}</td>
                <td>{{$permission->route_name}}</td>
                <td>
                    <a href="{{route('permission.edit',$permission->id)}}">Edit</a> 
                    <form action="{{route('permission.delete',$permission->id)}}" method="post">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
