@php
    $operatorPageRoute = 'viewOperator';
    $weaponPageRoute = 'viewWeapon';    
@endphp

@extends('layouts.base')

@section('title', 'Rainbow Six Siege')

@section('content')
<div class="column container">

    <div class="header row">
        <h2 class="large-12">Operators</h2>
    </div>
    <div class="grid-x">
        @include('sections.operators')
    </div>

    <div class="header row">
        <h2 class="large-12">Weapons</h2>
    </div>
    <div class="grid-x">
    @include('sections.weapons')
    </div>

</div>
@endsection