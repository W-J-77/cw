@extends('layouts.app')

@section('title','Create Grape')

@section('content')
  <form method="POST" action="{{ route('grapes.store') }}">
    @csrf
    <p>Name: <input type="text" name="name"
      value="{{ old('name') }}"></p>

    <p>Number: <input type="text" name="number"
      value="{{ old('number') }}"></p>

    <p>Color: <input type="text" name="color"
      value="{{ old('color') }}"></p>

    <p>Stall Id:
      <select name="stall_id">
        @foreach ($stalls as $stall)
          <option value="{{ $stall->id }}"
            @if ($stall->id == old('stall_id'))
                selected="selected"
            @endif
          >{{ $stall->name }}</option>
        @endforeach
      </select>
    </p>

    <input type="submit" value="Submit">
    <a href="{{ route('grapes.index') }}">Cancel</a>
  </form>

@endsection
