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

    <div id="section-0" class="grid-x recent_operators section" data-snap-point>
        @include( 'sections.recentOperators' )
    </div>

    <section>
            <div id="section-1" class="all_operators large-12 section" data-operators data-snap-point>
                    @include('sections.operators')
            </div>
    </section>

    <section>
        <div id="section-2" class="all_weapons large-12 section" data-weapons data-snap-point>
                @include('sections.weapons')
        </div>
    </section>

</div>
@endsection