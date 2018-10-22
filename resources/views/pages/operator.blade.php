@php
    $imagePath = '/images/operators'; 
    $weaponsArray = [];
    foreach ($weapons as $key => $weaponArray) {
        foreach ($weaponArray as $key => $weapon) {
            array_push($weaponsArray, $weapon);
        }
    }
@endphp

@extends('layouts.base')

@section('title', 'Rainbow Six Siege -')

@section('content')
<div class="grid-x">
    <div class="large-8 small-12 info">

        <div class="header row border-bottom" data-operator-info>
            <h2>Operator Information</h2> <i class="fi-plus"></i>
        </div>

        <div id="operator-info" class="styled hidden grid-x">
            <p class="large-6"><strong>Name: </strong>{{ $operator->name }}</p>
            <p class="large-6"><strong>Fullname: </strong>{{ $operator->fullname }}</p>
            <p class="large-6"><strong>Position: </strong>{{ $operator->position }}</p>
            <p class="large-6"><strong>Birthplace: </strong>{{ $operator->birthplace }}</p>
            <p class="large-6"><strong>CTU: </strong>{{ $operator->ctu }}</p>
            <p class="large-6"><strong>Date-of-Birth: </strong>{{ $operator->dob }}</p>
            <p>{{ $operator->description }}</p>
            <div class="large-6 light-bg">
                <div class="header_small row">
                    <h4 class="large-12">{{ $operator->ability_name }}</h4>
                </div>
                <img class="ability-image lazy" src="{{ $imagePath .'/abilities/'.$operator->ability_image }}" alt="{{ $operator->name }}'s ability" data-src="{{ $imagePath .'/abilities/'.$operator->ability_image }}"/>
            </div>
            <div class="large-6 light-bg center-text">
                <h5>{{ $operator->ability_description }}</h5>
            </div>
        </div>

        <div class="header row border-bottom" data-operator-weapon>
            <h2>Operator Weapons</h2> <i class="fi-plus"></i>
        </div>
    
        <div id="weapon-info" class="styled hidden grid-x">
            @foreach ($weaponsArray as $key => $weapon)
            <div class="large-6">
                <div class="header_small row">
                    <h3>{{ $weapon->name }}</h3>
                </div>
                <div class="operator-image-container">
                    <img class="ability-image lazy" src="{{ $imagePath.'/weapons/'.$weapon->image }}" alt="{{ $weapon->name }}" data-src="{{ $imagePath.'/weapons/'.$weapon->image }}"/>
                </div>
                <p>{{ $weapon->description }}</p>
                <p><strong>Damage:</strong> {{ $weapon->damage }}</p>
                <p><strong>Magazine:</strong> {{ $weapon->magazine }}</p>
                <p><strong>Rate-of-fire:</strong> {{ $weapon->rateOfFire }}</p>
                <p><strong>Mobility:</strong> {{ $weapon->mobility }}</p>
                <ul><strong>Sights: </strong>
                    <li>{{ $weapon->{'first-sight'} }}</li>
                    <li>{{ $weapon->{'second-sight'} }}</li>
                    <li>{{ $weapon->{'third-sight'} }}</li>
                    <li>{{ $weapon->{'fourth-sight'} }}</li>
                </ul>
                <ul><strong>Barrel Attachments:</strong>
                    <li>{{ $weapon->{'first-barrel'} }}</li>
                    <li>{{ $weapon->{'second-barrel'} }}</li>  
                    <li>{{ $weapon->{'third-barrel'} }}</li>  
                    <li>{{ $weapon->{'fourth-barrel'} }}</li>  
                    <li>{{ $weapon->{'fifth-barrel'} }}</li>      
                </ul>
                <ul><strong>Grips: </strong>
                    <li>{{ $weapon->{'first-grip'} }}</li>
                    <li>{{ $weapon->{'second-grip'} }}</li>
                </ul>
                <p><strong>Underbarrel:</strong> {{ $weapon->underbarrel }}</p>
            </div>
            @endforeach
        </div>

        <div class="header row border-bottom" data-operator-weapon>
            <h2>Operator Tips</h2> <i class="fi-plus"></i>
        </div>

    </div>
    <div class="large-4 small-12 image-container">
        <img class="main-image" src="{{ $imagePath }}/{{ $operator->fullimage }}" alt="{{ $operator->name }}" />
    </div>
</div>

@endsection