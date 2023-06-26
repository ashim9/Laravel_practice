<!DOCTYPE html>
<html>
<head>
    <style>
        /* Table styling */
        table {
            width: 50%;
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
        .table_data{
            display:flex;
        }
        .table_data a{
            margin-right:5px;
            color: #000;
            text-decoration: none;
        }
    </style>
</head>
<body>  
    <a href="{{route('division.create')}}" >Add Country</a>
        <table class="w3-table w3-striped">
                <tr>
                    <th>Country Name</th>
                    <th>Division Name</th>
                    <th>Actions</th>
                </tr>
                    <tr>
                        {{-- <td>{{ $countries->name }}</td> --}}
                    </tr>
            @foreach ($divisions as $division)
                <tr>
                    <td>{{ $division->countries->name }}</td>
                    <td>{{ $division->name }}</td>
                    <td class="table_data"><a href="{{route('division.edit',$division->id)}}">Edit</a> 
                        <form action="{{route('division.delete',$division->id)}}" method="post">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
</body>
</html>
