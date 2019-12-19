@extends('layouts.app')

@section('title','Edit Grape')

@section('content')
            <form action="{{action('GrapeController@update','$id')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT"/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
            <p>Name: <input type="text" name="name" class="form-control" value="{{$grape->name}}"></p>
            <p>Number: <input type="text" name="number" class="form-control" value="{{$grape->number}}"></p>
            <p>Color: <input type="text" name="color" class="form-control" value="{{$grape->color}}"></p>
            <p>Stall Id: <input type="text" name="stall_id" class="form-control" value="{{$grape->stall_id}}"></p>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Update">
            </div>
@endsection
