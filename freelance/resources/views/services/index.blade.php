@extends('layouts.app')

@section('content')
    <div class="main-pic">
    <img src="{{URL::asset('img/work.jpg')}}" class="coverpic" alt="profile Pic" height="500" width="100%">
    </div>
        {{--<div class="row" id="search">--}}
            {{--<div class="col-lg-6">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="text" class="form-control" id="search-input" placeholder="What services are you looking for?">--}}
                    {{--<span class="input-group-btn">--}}
                    {{--<button class="btn btn-default" id="search-btn" type="button">Search</button>--}}
                    {{--</span>--}}
                {{--</div><!-- /input-group -->--}}
            {{--</div><!-- /.col-lg-6 -->--}}
        {{--</div><!-- /.row -->--}}
    <div class="container">
    <h3 class="title">Promote your passions.<br>Get paid to do what you love.</h3>
    </div>
    {{--<h1></h1>--}}
    <div class="row" id="services">
    @foreach($services as $serv)
            <div class="col-sm-2">
                <a class="servpics" href="{{ route('services.show', ['id' => $serv->id]) }}">
                <img src="{{$serv->photo}}" width="180" height="130">
                <p>{{$serv->name}}</p>
                </a>
            </div>
    @endforeach
    </div>
    <hr>
    <div class="how-section">
        <h2>How it works</h2>
        <div class="row" id="how">
            <div class="col-md-4">
                <h3>Find</h3>
                <img src="{{URL::asset('img/find3.png')}}" alt="profile Pic" width="100">
                <br>
                <br>
                <p>Search through our services to find the expert that you need to get your job done right.
                    Browse through user profiles to see reviews and comments about prior provided services.
                </p>
            </div>
            <div class="col-md-4">
                <h3>Contact</h3>
                <img src="{{URL::asset('img/contact.png')}}" alt="profile Pic" width="100">
                <br>
                <br>
                <p>Contact professionals via email to ask any questions that you may have about the services that you need.</p>
            </div>
            <div class="col-md-4" id="hire">
                <h3>Hire</h3>
                <img src="{{URL::asset('img/hire2.png')}}" alt="profile Pic" width="100">
                <br>
                <br>
                <p>Once you have found the expert that you believe is best suited to get the job done,
                feel free to leave a comment or review once you have hired them.</p>
            </div>
        </div>
    </div>
    <hr>
@endsection