@php
    $operatorPageRoute = 'viewOperator';
    $operatorLoadoutRoute = 'viewOperatorLoadout';
    $weaponPageRoute = 'viewWeapon';
    $postPageRoute = 'viewPost';    
@endphp

@extends('layouts.base')

@section('title', 'Rainbow Six Siege')

@section('content')
<div class="column gutter">

    <div id="section-0" class="grid-x recent_operators">
        @include( 'sections.recentOperators' )
    </div>

    <div id="section-1" class="header row">
        <h2 class="large-12">Operators</h2>
    </div>
    <div class="all_operators large-12" data-slideshow>
        <div class="grid-x rail">
        @include('sections.operators')
        </div>
    </div>

    <div id="section-2" class="header row">
        <h2 class="large-12">Weapons</h2>
    </div>
    <div class="grid-x all_weapons">
    @include('sections.weapons')
    </div>

</div>
@endsection