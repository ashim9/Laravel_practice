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
        <a href="{{route('product.create')}}" >Add Product</a>
    </div>
        <table class="w3-table w3-striped">
                <tr>
                    <th>Product Name</th>
                    <th>Categories</th>
                    <th>Actions</th>
                </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>
                        @foreach ($product->categories as $category)
                            {{ $category->name }} ,        
                        @endforeach
                    </td>
                    <td class="table_data"><a href="{{route('product.edit',$product->id)}}">Edit</a>
                        <form action="{{route('product.delete',$product->id)}}" method="post">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
</body>
</html>
