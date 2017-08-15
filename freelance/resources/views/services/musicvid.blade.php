@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" id="subs">
            <div class="col-sm-3">
                <a class="profile" href="{{ url('/profile/5') }}"><h1>Prince Eric</h1></a>
            </div>
            <div class="col-sm-3">
                <a class="profile" href="{{ url('/profile/6') }}"><h1>Prince Charming</h1></a>
            </div>
        </div>
    </div>
@endsection