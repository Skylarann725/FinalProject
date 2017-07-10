@extends('layouts.app')

@section('content')
    <img src="{{URL::asset('img/placeholder.jpg')}}" alt="profile Pic" height="400" width="1280">
    <h1>Services</h1>
    <hr>
    @foreach($services as $serv)
        Name: <a href="{{route('services.show', ['id' => $serv->id])}}">{{$serv->name}}</a><br>
    @endforeach
@endsection