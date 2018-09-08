@php
    $operatorData = [];
    $operator = $operator[0];

    foreach ($operator as $key => $value) {
        $operatorData[$key] = $value;
    };

    $operatorName = $operatorData['name'];
    $imagePath = '/images/operators'; 
@endphp

@extends('layouts.base')

@section('title', 'Rainbow Six Siege')

@section('content')

<div class="header row">
    <h2 class="large-12">{{ $operatorName }}</h2>
</div>
<div class="grid-x">
    <div class="large-8 small-12 image-container">
        <img class="main-image" src="{{ $imagePath }}/{{ $operator->fullimage }}" alt="{{ $operatorName }}" />
    </div>
    <div class="large-4 small-12 info">
        <p><strong>Name: </strong>{{ $operator->name }}</p>
        <p><strong>Fullname: </strong>{{ $operator->fullname }}</p>
        <p><strong>Position: </strong>{{ $operator->position }}</p>
        <p><strong>Birthplace: </strong>{{ $operator->birthplace }}</p>
        <p><strong>CTU: </strong>{{ $operator->ctu }}</p>
        <p><strong>Date-of-Birth: </strong>{{ $operator->dob }}</p>
        <p>{{ $operator->description }}</p>
        <div class="header_small row">
            <h4 class="large-12">{{ $operator->ability_name }}</h4>
        </div>
        <img class="ability-image" src="{{ $imagePath }}/abilities/{{ $operator->ability_image }}" alt="{{ $operatorName }}'s ability" />
        <p>{{ $operator->ability_description }}</p>
    </div>
</div>

@endsection