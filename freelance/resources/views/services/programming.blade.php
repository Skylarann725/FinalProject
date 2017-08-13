@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" id="subs">
            <div class="col-sm-3">
                <a class="profile" href="{{ url('/profile/1') }}"><h1>Trixie D</h1></a>
            </div>
            <div class="col-sm-3">
                <a class="profile" href="{{ url('/profile/3') }}"><h1>Little Bo P</h1></a>
            </div>
        </div>
    </div>
@endsection