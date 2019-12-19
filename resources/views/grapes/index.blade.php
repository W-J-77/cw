@extends('layouts.app')

@section('title','Grapes')

@section('content')
  <p>The grapes of Swansea Fruitstore:</p>
  <ul>
    @foreach($grapes as $grape)
      <li><a href="{{ route('grapes.show',['id' => $grape->id]) }}">{{ $grape->name }}</a></li>
    @endforeach
  </ul>
  <a href="{{ route('grapes.create')}}">Create Grape</a>
@endsection
