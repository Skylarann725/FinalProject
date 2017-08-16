@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" id="subs">
            @foreach($programming as $prog)
                <div class="col-sm-3">
                @if($prog->id ===1 )
                    <a class="profile" href="{{ url('/profile/1') }}"> <p>{{$prog->name}}</p></a>
                @endif
                    @if($prog->id ===2 )
                        <a class="profile" href="{{ url('/profile/3') }}"> <p>{{$prog->name}}</p></a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <div class="test"></div>
@endsection