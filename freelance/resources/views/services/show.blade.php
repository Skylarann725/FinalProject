@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" id="subs">
            @if($services->id === 1)
            <div class="col-sm-4">
                <a href="{{ url('/programming')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                <a href="{{ url('/programming') }}">
                    {{$services->sub1}}
                </a>
            </div>
                <div class="col-sm-4">
                    <a href="{{ url('/ecommerce')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                    <a href="{{ url('/ecommerce') }}">
                        {{$services->sub2}}
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ url('/mobileapp')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                    <a href="{{ url('/mobileapp') }}">
                        {{$services->sub3}}
                    </a>
                </div>
            @endif
            @if($services->id === 2)
            <div class="col-sm-4">
                <a href="{{ url('/editing')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                <a href="{{ url('/editing') }}">
                    {{$services->sub1}}
                </a>
            </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/videopro')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                        <a href="{{ url('/videopro') }}">
                            {{$services->sub2}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/musicvid')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                        <a href="{{ url('/musicvid') }}">
                            {{$services->sub3}}
                        </a>
                    </div>
                @endif
                @if($services->id === 3)
                    <div class="col-sm-4">
                        <a href="{{ url('/business')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                        <a href="{{ url('/business') }}">
                            {{$services->sub1}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/business')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                        <a href="{{ url('/business') }}">
                            {{$services->sub2}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/business')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                        <a href="{{ url('/business') }}">
                            {{$services->sub3}}
                        </a>
                    </div>
                @endif
                @if($services->id === 4)
                    <div class="col-sm-4">
                        <a href="{{ url('/photography')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                        <a href="{{ url('/photography') }}">
                            {{$services->sub1}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/photography')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                        <a href="{{ url('/photography') }}">
                            {{$services->sub2}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/photography')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                        <a href="{{ url('/photography') }}">
                            {{$services->sub3}}
                        </a>
                    </div>
                @endif
                @if($services->id === 5)
                    <div class="col-sm-4">
                        <a href="{{ url('/writing')}}"><img src="{{$services->sub1photo}}" height="184"></a><br>
                        <a href="{{ url('/writing') }}">
                            {{$services->sub1}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/writing')}}"><img src="{{$services->sub2photo}}" height="184"></a><br>
                        <a href="{{ url('/writing') }}">
                            {{$services->sub2}}
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ url('/writing')}}"><img src="{{$services->sub3photo}}" height="184"></a><br>
                        <a href="{{ url('/writing') }}">
                            {{$services->sub3}}
                        </a>
                    </div>
                @endif
        </div>
    </div>
@endsection