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
    <a href="{{route('student.create')}}" >Add student</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Student Id</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->student_id}}</td>
                <td>{{$student->address}}</td>
                <td>
                    <a href="{{route('student.edit',$student->id)}}">Edit</a> 
                    <form action="{{route('student.delete',$student->id)}}" method="post">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</body>
</html>
