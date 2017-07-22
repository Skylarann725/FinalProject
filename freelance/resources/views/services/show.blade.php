@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" id="subs">
            <div class="col-sm-4">
                <a href="{{ url('/webdev')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                <a href="{{ url('/webdev') }}">{{$services->sub1}}</a>
            </div>
            <div class="col-sm-4">
                <a href="{{ url('/webdev')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                <a href="{{ url('/webdev') }}">{{$services->sub2}}</a>
            </div>
            <div class="col-sm-4">
                <a href="{{ url('/webdev')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                <a href="{{ url('/webdev') }}">{{$services->sub3}}</a>
            </div>
        </div>
    </div>
@endsection