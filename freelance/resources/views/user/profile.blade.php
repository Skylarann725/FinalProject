@extends('layouts.app')

@section('content')
{{--    {{dd($user)}}--}}
    <div class="container">
        <div class="profcontainer">
            <div class="row">
                <div class="col-md-3">
            @if ($user->profile_image_url != "")
                {{--<img src="{{$user->profile_image_url}}" width="200">--}}
                <img src="{{asset('profile_images/'.$user->profile_image_url)}}" class="img-responsive" width="200">
            @endif
                </div>
                <div class="col-md-4">
            @if($user->first_name != "")
                <h3 class="proftitle">{{$user->first_name}} {{$user->last_initial}}</h3>
            @endif
            @if($user->profile_title != "")
                <p>{{$user->profile_title}}</p>
            @endif
            @if($user->hourly_amount != "")
                <p>${{$user->hourly_amount}} /hr</p>
            @endif
            @if($user->location_city != "")
                <p>{{$user->location_city}}, {{$user->location_state}}</p>
            @endif
                </div>
            </div>
            <hr>
            <h3 class="proftitle">Skills</h3>
            @if($user->skills != "")
                <p>{{$user->skills}}</p>
            @endif
            <h3 class="proftitle">Overview</h3>
            @if($user->profile_summary != "")
                <p>{{$user->profile_summary}}</p>
            @endif
            {{--<h1>{{$user->name}}</h1>--}}
        </div>
    </div>
    <div class="test2"></div>
@endsection