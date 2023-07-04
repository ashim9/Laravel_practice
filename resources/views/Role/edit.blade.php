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
        .permissions-section{
            display: flex;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <form action="{{route('role.update', $role->id)}}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $role->name }}" required>

        <label for="name">Permission:</label>
        {{-- <select name="permission_id[]" id="permission_id" multiple> --}}
            {{-- @foreach ($permissions as $key => $permission)
                @php
                    $selected = '';
                    if(in_array($key, $permission_role)){
                        $selected = 'selected';
                    }
                @endphp
                <option value="{{$key}}" {{$selected}}>{{$permission}}</option>
            @endforeach --}}
        {{-- </select> --}}
        <div id="permission_id">
            @foreach ($permissions as $key => $permission)
            @php
                $checked = '';
                if(in_array($key, $permission_role)){
                    $checked = 'checked';
                }
            @endphp
                <div class="permissions-section">
                    <input type="checkbox" class="permission" {{$checked}} id="permission" name="permission_id[]" value="{{$key}}">
                    <label for="permission"> {{$permission}}</label><br>
                </div>
                
            @endforeach
        </div>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>

