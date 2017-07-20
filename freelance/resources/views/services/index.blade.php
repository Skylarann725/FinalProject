@extends('layouts.app')

@section('content')
    <div class="main-pic">
    <img src="{{URL::asset('img/work.jpg')}}" alt="profile Pic" height="500" width="1280">
    </div>
        <div class="row" id="search">
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="What services are you looking for?">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Search</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    <h1></h1>
    <div class="row" id="services">
    @foreach($services as $serv)
            <div class="col-sm-2">
                <a href="{{route('services.show', ['id' => $serv->id])}}">
                    <img src="{{$serv->photo}}" width="180" height="130">
                    <p>{{$serv->name}}</p>
                </a>
            </div>
    @endforeach
    </div>
    <hr>
    <div class="how-section">
        <h2>How it works</h2>
    </div>
@endsection