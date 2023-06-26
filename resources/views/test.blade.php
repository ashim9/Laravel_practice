@php
    $user = "Hola";
    $fruits = ["Apple","Orange","Banana"];
@endphp

<script>
    var name = @json($user);
    console.log(name);
    //var data = @json($fruits);
    //var data = {{ Js::from($fruits) }};
    var data = @json($fruits);
    data.forEach(function(entry){
        console.log(entry);
    })
</script>