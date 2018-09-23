@extends('layouts.base')

@section('title', 'Rainbow Six Siege - Login')

@section('content')
<div class="column grid-x">
    <div class="large-10 center">
        <div class="header row">
            <h1>Login</h1>
        </div>
        {{ Form::open(array('class' => 'grid-x column show styled', 'url' => 'login')) }}
        {{ Form::token() }}

        <div class="large-6 grid-x flex-column">

        <p class="large-6">
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email') }}
        </p>

        <p class="large-6">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        </p>

        </div>

        <div class="large-6 grid-x flex-column border-left-white">

        <!-- if there are login errors, show them here -->
        <p class="large-12">
            {{ $errors->first('email') }}
            {{ $errors->first('password') }}
        </p>

        <p class="large-6 center">{{ Form::submit('Login') }}</p>

        </div>

        {{ Form::close() }}
    </div>
</div>
@endsection