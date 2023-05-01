
    

@extends('admin.layouts.app')
@section('content')


<form action="{{ route('bloodInventory.store') }}" method="POST">
    @csrf
    <div class="form-group">

        <div class="mb-3">
          <label for="">Select Bloodbank</label>
          <select class="form-control" name="bloodbank_id" value="{{ old('bloodbank') }}" required>
            @foreach($bloodbanks as $bloodbank)
          <option value="{{$bloodbank->id}}">{{$bloodbank->name}}</option>
            @endforeach
          </select>
        </div>
   
    <label for="blood_group">Blood Group</label>
    <select name="blood_group" id="blood_group " required>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>
    <label for="pints_available">Pints Available</label>
    <input type="number" name="pints_available" id="pints_available" required>
    <button type="submit">Save</button>
 
</form>
@endsection
