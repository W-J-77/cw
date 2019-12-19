@extends('layouts.app')

@section('title','Grape Details')

@section('content')
  <ul>
    <li>Name: {{ $grape->name }}</li>
    <li>Number: {{ $grape->number }}</li>
    <li>Color: {{ $grape->color }}</li>
    <li>Stall: {{ $grape->stall->name }}</li>
  </ul>

  <form method="POST"
        action="{{ route('grapes.destroy',['id' => $grape->id] )}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
  </form>
  <a href="{{ route('grapes.edit',['id' => $grape->id] )}}">Edit Grape</a>
  <p><a href="{{ route('grapes.index') }}">Back</a></p>
@endsection
