@php
    $operatorPageRoute = 'viewOperator';
    $operatorLoadoutRoute = 'viewOperatorLoadout';
    $weaponPageRoute = 'viewWeapon';
    $postPageRoute = 'viewPost';    
@endphp

@extends('layouts.base')

@section('title', 'Rainbow Six Siege')

@section('content')
<div id="fullpage" class="column gutter">

    <div id="section-0" class="grid-x recent_operators section">
        @include( 'sections.recentOperators' )
    </div>

    <div id="section-1" class="all_operators large-12 section" data-slideshow data-operators>
            @include('sections.operators')
    </div>

    <div id="section-2" class="all_weapons large-12 section" data-slideshow data-weapons>
            @include('sections.weapons')
    </div>

</div>
@endsection