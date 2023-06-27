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
        .heading-wrap{
            margin: 15px 0
        }
        .heading-wrap a{
            text-decoration: none;
            color: #000;
            padding:10px 15px;
            background-color: green;
        }
    </style>
</head>
<body>  
        <div class="heading-wrap">
            <a href="{{route('district.create')}}" >Add District</a>
        </div>
        <table class="w3-table w3-striped">
                <tr>
                    <th>Country Name</th>
                    <th>Division Name</th>
                    <th>District Name</th>
                    <th>Actions</th>
                </tr>
                    <tr>
                        {{-- <td>{{ $countries->name }}</td> --}}
                    </tr>
            @foreach ($districts as $district)
                <tr>
                    <td>{{ $district->divisions->countries->name }}</td>
                    <td>{{ $district->divisions->name }}</td>
                    <td>{{ $district->name }}</td>
                    <td class="table_data"><a href="{{route('district.edit',$district->id)}}">Edit</a> 
                        <form action="{{route('district.delete',$district->id)}}" method="post">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
</body>
</html>
