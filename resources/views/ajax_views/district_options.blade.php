<option value="">Select district</option>
@foreach ($districts as $key => $district)
    <option value="{{$key}}">{{$district}}</option>
@endforeach

