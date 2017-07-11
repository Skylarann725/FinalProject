@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="profcontainer">
    @if ($user->profile_image_url != "")
        <img src="{{$user->profile_image_url}}" width="200">
    @endif
    @if($user->first_name != "")
        <h3>{{$user->first_name}}</h3>
    @endif
    @if($user->last_initial != "")
        <h3>{{$user->last_initial}}</h3>
    @endif
    @if($user->profile_title != "")
        <h4>{{$user->profile_title}}</h4>
    @endif
    @if($user->hourly_amount != "")
        <h4>${{$user->hourly_amount}} /hr</h4>
    @endif
    @if($user->location_city != "")
        <h4>{{$user->location_city}}</h4>
    @endif
    @if($user->location_state != "")
        <h4>{{$user->location_state}}</h4>
    @endif
    <h2>Skills</h2>
    @if($user->skills != "")
        <h4>{{$user->skills}}</h4>
    @endif
    <h2>Overview</h2>
    @if($user->profile_summary != "")
        <h4>{{$user->profile_summary}}</h4>
    @endif
    {{--<h1>{{$user->name}}</h1>--}}
        </div>
    </div>
@endsection