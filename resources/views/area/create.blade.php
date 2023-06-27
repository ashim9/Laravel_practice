@extends('layouts.layout')

@section('content')
    <div class="heading">
        <h1>Create a new entry:</h1>
    </div>
    <form action="{{route('area.store')}}" method="POST">
        @csrf
        <label for="name">Country Name:</label>
        <select name="country_id" id="country_id">
            <option value="">Select Country</option>
            @foreach ($countries as $key => $country)
                <option value="{{$key}}">{{$country}}</option>
            @endforeach
        </select>

        <label for="name">Division Name:</label>
        <select name="division_id" id="division_id">
            <option value="">Select Division</option>
        </select>

        <label for="name">District Name:</label>
         <select name="district_id" id="district_id">
            <option value="">Select District</option>
        </select>

        <label for="name">Area Name:</label>
        <input type="text" id="name" name="name" required>
        {{-- <input type="text" id="name" name="name" required> --}}
        
        <input type="submit" value="Submit">
    </form>
@endsection 

@section('scripts')
<script type="text/javascript">
    $(document).on('change','#country_id',function(){
        var country_id = $(this).val();
        $.ajax({
            method:"get",
            url:"{{route('load_divisions')}}",
            data:{
                country_id:country_id
            },
            success:function (response) {
                $("#division_id").html(response);
            },
            error:function (err) {
                console.log(err);
            }
        });
    });

    $(document).on('change','#division_id',function(){
        var division_id = $(this).val();
        $.ajax({
            method:"get",
            url:"{{route('load_districts')}}",
            data:{
                division_id:division_id
            },
            success:function (response) {
                $("#district_id").html(response);
            },
            error:function (err) {
                console.log(err);
            }
        });
    });

</script>
@endsection