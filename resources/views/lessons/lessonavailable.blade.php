@extends('layouts.app')

@section('content')
  <h1>Lessons available</h1>


@if (Auth::user()->admin===false) {
     <h2>{{ Html::link('http://localhost:8000/booked') }}</h2>
  }
@endif



  @foreach ($lessons as $lesson)
    <h2>{{ $lesson->lesson_name}}</h2>
    <h3>{{$lesson->nb_inscrits}}/{{$lesson->nb_places}}</h3>
    {{-- <a href="{{action('UserController@booking')}}"><button type="button" name="button">Book</button></a> --}}
    <a href="{{ url('/mylesson/'. Auth::user()->id . '/'. $lesson->id ) }}" class="btn btn-xs btn-info pull-left">Book</a>
    {{-- <li>{{ Html::link('http://localhost:8000/booked') }}</li>
    <li>{{ Html::link('http://localhost:8000/unbooked') }}</li> --}}
  @endforeach

@endsection
