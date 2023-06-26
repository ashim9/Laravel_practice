<h1>Users Page</h1>

{{-- <h3>Hello {{ $user }}</h3> --}}
{{-- <h3>You are from: {{ !empty($city) ? $city : 'Not Found' }}</h3> --}}

@foreach ($user as $id => $value )
    <h2>{{ $id }} {{ $value['name'] }} | {{ $value['city'] }} | {{ $value['phone'] }}</h2>
@endforeach



@php
    $users = ["user1", "user2", "user3", "user4"];
@endphp

<script>
    //var data = @json($users);
    var data = {{ Js::from($users) }}
    data.forEach( function(entry){
        console.log(entry);
    });
</script>