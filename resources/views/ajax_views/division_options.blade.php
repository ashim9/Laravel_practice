<option value="">Select division</option>
@foreach ($divisions as $key => $division)
    <option value="{{$key}}">{{$division}}</option>
@endforeach