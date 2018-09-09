@php
    $operatorPageRoute = 'viewOperator';    
@endphp
@extends('layouts.base')

@section('title', 'Rainbow Six Siege - All Operators')

@section('content')

<div class="header row">
    <h2 class="large-12">All Operators</h2>
</div>
<div class="grid-x">
    @include('sections.operators')
</div>

@endsection