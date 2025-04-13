@foreach($barangays as $barangay)
    <option value="{{ $barangay['code'] }}">{{ $barangay['name'] }}</option>
@endforeach