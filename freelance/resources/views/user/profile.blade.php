@extends('layouts.app')

@section('content')
{{--    {{dd($user)}}--}}
    <div class="container">
    <div class="row">
        <div class="col-md-8">
        <div class="profcontainer">
            <div class="row">
                <div class="col-md-4">
            @if ($user->profile_image_url != "")
                <img class="profimage" src="{{asset('profile_images/'.$user->profile_image_url)}}" class="img-responsive" width="200">
            @endif
                </div>
                <div class="col-md-4">
            @if($user->first_name != "")
                <h3 class="proftitlemain">{{$user->first_name}} {{$user->last_initial}}</h3>
            @endif
            @if($user->profile_title != "")
                <p class="jobtitle">{{$user->profile_title}}</p>
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
        <div class="col-md-4">
                <div class="contactcontainer">
                    <h3 class="profcontact">Contact Me</h3>
                    @if($user->email != "")
                        <p class="email">{{$user->email}}</p>
                    @endif
                </div>
        </div>
    </div>
    </div>
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::open() !!}
            <div class="panel panel-default">
                <div class="heading">
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Write a new review</label>
                        <textarea class="form-control" name="status-text" id="status-text"></textarea>
                    </div>
                </div>
                <div class="panel-footer clearfix">
                    <button class="btn btn-info pull-left btn-sm" id="reviewbutton">Add Review</button>
                </div>
            </div>
            {!! Form::close() !!}

            {{--@foreach($top_15_posts as $status)--}}
                {{--{!!--}}
                {{--view('layouts.app-internal.user-status-layout', [--}}
                {{--'status' => $status,--}}
                {{--'user' => \App\Eloquent\User::find($status->users_id)--}}
                {{--])--}}
                {{--!!}--}}
            {{--@endforeach--}}
        </div>
    </div>
</div>

@endsection