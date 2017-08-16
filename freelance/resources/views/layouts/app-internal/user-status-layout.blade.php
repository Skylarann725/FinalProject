@extends('layouts.app')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                {{$user->name}}
            </div>
            <div class="panel-body">
                <p>{{$status->status_text}}</p>
            </div>
        </div>
@endsection