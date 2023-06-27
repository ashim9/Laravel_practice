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
        <a href="{{route('category.create')}}" >Create Categories</a>
    </div>
        <table class="w3-table w3-striped">
                <tr>
                    <th>Category Name</th>
                </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>@if(!empty($category)){{ $category->name }} @endif</td>
                </tr>
            @endforeach
        </table>
</body>
</html>
