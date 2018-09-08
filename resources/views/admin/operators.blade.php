@php
    $operatorPageRoute = 'editOperator';

    $weaponArray = [];

    foreach ( $weapons as $weapon ){
        $weaponArray[$weapon->id] = $weapon->name;
    }
@endphp

@extends('layouts.base')

@section('title', 'Rainbow Six Siege - Operators')

@section('content')

<div class="column container">
    <div id="toggle-form"  class="header row">
        <h1>Add Operator</h1>
        <i class="fi-plus"></i>
    </div>

{{ Form::open(array('id' => 'form', 'class' => 'grid-x column styled hidden', 'route' => 'addOperator','enctype' => 'multipart/form-data')) }}
    {{ Form::token() }}

    <!-- if there are login errors, show them here -->
    <p class="large-12 small-12">
        {{ $errors->first('name') }}
        {{ $errors->first('fullname') }}
        {{ $errors->first('position') }}
        {{ $errors->first('fullimage') }}
        {{ $errors->first('halfimage') }}
        {{ $errors->first('icon') }}
        {{ $errors->first('dob') }}
        {{ $errors->first('description') }}
        {{ $errors->first('ctu') }}
        {{ $errors->first('ability') }}
    </p>

    <p class="large-4 small-12">
        {{ Form::label('name', 'Operator Name') }}
        {{ Form::text('name') }}
    </p>

    <p class="large-4 small-12">
        {{ Form::label('fullname', 'Fullname') }}
        {{ Form::text('fullname') }}
    </p>

    <p class="large-4 small-12">
        {{ Form::label('position', 'Operator Position') }}
        {{ Form::text('position') }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('fullimage', 'Full Operator Image') }}
        {{ Form::file('fullimage') }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('halfimage', 'Half Operator Image') }}
        {{ Form::file('halfimage') }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('icon', 'Operator Icon') }}
        {{ Form::file('icon') }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('dob', 'Operator Date of Birth') }}
        {{ Form::date('dob') }}
    </p>

    <p class="large-12 small-12">
        {{ Form::label('description', 'Operator Description') }}
        {{ Form::textarea('description') }}
    </p>

    <p class="large-4 small-12">
        {{ Form::label('birthplace', 'Operator Birthplace') }}
        {{ Form::text('birthplace') }}
    </p>

    <p class="large-4 small-12">
        {{ Form::label('ctu', 'Operator CTU') }}
        {{ Form::text('ctu') }}
    </p>

    <p class="large-4 small-12">
        {{ Form::label('ability-name', 'Operator Ability Name') }}
        {{ Form::text('ability-name') }}
    </p>
    
    <p class="large-4 small-12">
        {{ Form::label('ability-description', 'Operator Ability Description') }}
        {{ Form::text('ability-description') }}
    </p>

    <p class="large-4 small-12">
        {{ Form::label('ability-image', 'Operator Ability Image') }}
        {{ Form::file('ability-image') }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('weapon-1', 'Operator Weapon #1') }}
        {{ Form::select('weapon-1', $weaponArray, null, ['placeholder' => 'Pick a weapon...']) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('weapon-2', 'Operator Weapon #2') }}
        {{ Form::select('weapon-2', $weaponArray, null, ['placeholder' => 'Pick a weapon...']) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('weapon-3', 'Operator Weapon #3') }}
        {{ Form::select('weapon-3', $weaponArray, null, ['placeholder' => 'Pick a weapon...']) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('weapon-4', 'Operator Weapon #4') }}
        {{ Form::select('weapon-4', $weaponArray, null, ['placeholder' => 'Pick a weapon...']) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('weapon-5', 'Operator Weapon #5') }}
        {{ Form::select('weapon-5', $weaponArray, null, ['placeholder' => 'Pick a weapon...']) }}
    </p>

    <p class="large-4 small-12">
        {{ Form::label('gadget-1', 'Operator Gadget 1') }}
        {{ Form::text('gadget-1') }}
    </p>

    <p class="large-4 small-12">
        {{ Form::label('gadget-2', 'Operator Gadget 2') }}
        {{ Form::text('gadget-2') }}
    </p>

    <p class="large-12 small-12">{{ Form::submit('Submit') }}</p>
    {{ Form::close() }}

</div>

<div class="column container">
    <div class="grid-x">
    @include('sections.operators')
    </div>
</div>

@endsection