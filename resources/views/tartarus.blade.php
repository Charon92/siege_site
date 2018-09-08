@extends('layouts.base')

@section('title', 'Rainbow Six Siege - Login')

@section('content')
<div class="column container">
    <div class="header row">
        <h1>Login</h1>
    </div>
    {{ Form::open(array('class' => 'grid-x column show styled', 'url' => 'login')) }}
    {{ Form::token() }}

    <!-- if there are login errors, show them here -->
    <p class="large-12">
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
    </p>

    <p class="large-12">
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email') }}
    </p>

    <p class="large-12">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
    </p>

    <p class="large-12">{{ Form::submit('Login') }}</p>
    {{ Form::close() }}
</div>
@endsection