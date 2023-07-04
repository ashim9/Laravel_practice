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
    <a href="{{route('role.create')}}">Add role</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($roles as $role)
            <tr>
                <td>{{$role->name}}</td>
                <td>
                    @foreach ($role->permissions as $permission)
                        {{ $permission->name }}
                    @endforeach
                </td>
                <td>
                    <a href="{{route('role.edit',$role->id)}}">Edit</a> 
                    <form action="{{route('role.delete',$role->id)}}" method="post">
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
