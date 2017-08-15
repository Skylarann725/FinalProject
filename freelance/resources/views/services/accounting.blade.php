@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" id="subs">
            <div class="col-sm-3">
                <a class="profile" href="{{ url('/profile/5') }}"><h1>Cinderella</h1></a>
            </div>
            <div class="col-sm-3">
                <a class="profile" href="{{ url('/profile/6') }}"><h1>Step Mother</h1></a>
            </div>
        </div>
    </div>
@endsection