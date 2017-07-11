@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                {!! Form::open(['action' => 'ProfileController@saveSettings']) !!}
                <h3>Edit Info</h3>
                <div class="form-group">
                    {!! Form::label('profile_image_url', 'Profile Image') !!}
                    {!! Form::text('profile_image_url', $user->profile_image_url, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('first_name', 'First Name') !!}
                    {!! Form::text('first_name', $user->first_name, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('last_initial', 'Last Initial') !!}
                    {!! Form::text('last_initial', $user->last_initial, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('profile_title', 'Job Title') !!}
                    {!! Form::text('profile_title', $user->profile_title, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('hourly_amount', 'Hourly Amount') !!}
                    {!! Form::text('hourly_amount', $user->hourly_amount, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('location_city', 'City') !!}
                    {!! Form::text('location_city', $user->location_city, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('location_state', 'State') !!}
                    {!! Form::text('location_state', $user->location_state, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('skills', 'Skills') !!}
                    {!! Form::text('skills', $user->skills, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('profile_summary', 'Summary') !!}
                    {!! Form::text('profile_summary', $user->profile_summary, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <button class="btn btn-info btn-block" type="submit">Save Info</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection