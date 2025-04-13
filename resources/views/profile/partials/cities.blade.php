<option value="">Select City</option>
@foreach($cities as $city)
    <option value="{{ $city['code'] }}">{{ $city['name'] }}</option>
@endforeach