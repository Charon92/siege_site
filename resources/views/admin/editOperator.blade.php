@php
    $operatorData = [];
    $operator = $operator[0];

    foreach ($operator as $key => $value) {
        $operatorData[$key] = $value;
    };

    $operatorName = $operatorData['name'];
@endphp

@extends('layouts.base')

@section('title', "Rainbow Six Siege - Edit $operatorName")

@section('content')

<div class="column container">
        <div id="toggle-form"  class="header row">
        <h1>Edit {{ $operatorData['name'] }}</h1>
            <i class="fi-plus"></i>
        </div>


</div>

@endsection