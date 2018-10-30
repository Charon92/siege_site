@php
    $imagePath = '/images/operators/weapons'; 
    $weaponArray = $weapon->toArray();
    $weapon = $weaponArray[0];
@endphp

@extends('layouts.base')

@section('title', 'Rainbow Six Siege -')

@section('content')
<div class="grid-x weapon">
    <div id="info" class="large-8 small-12 info hidden">
        @section('left-sidebar')
        <div class="large-12 tab-holder flex-column">
                <div class="header tab" data-weapon-info>
                    <h4>Weapon Information</h4>
                </div>
    
                <div class="header tab" data-weapon-tips>
                    <h4>weapon Tips</h4>
                </div>
            </div>
        @endsection

        <div id="weapon-info" class="styled hidden grid-x">
          <p class="large-6"><strong>Name: </strong>{{ $weapon->name }}</p>
          <p class="large-6"><strong>Damage: </strong>{{ $weapon->damage }}</p>
          <p class="large-6"><strong>Magazine: </strong>{{ $weapon->magazine }}</p>
          <p class="large-6"><strong>Rate-Of-Fire: </strong>{{ $weapon->rateOfFire }}</p>
          <p class="large-6"><strong>Mobility: </strong>{{ $weapon->mobility }}</p>
          <p class="large-6"><strong>First Sight: </strong>{{ $weapon->{'first-sight'} }}</p>
          <p class="large-6"><strong>Second Sight: </strong>{{ $weapon->{'second-sight'} }}</p>
          <p class="large-6"><strong>Third Sight: </strong>{{ $weapon->{'third-sight'} }}</p>
          <p class="large-6"><strong>Fourth Sight: </strong>{{ $weapon->{'fourth-sight'} }}</p>
          <p class="large-6"><strong>First Barrel: </strong>{{ $weapon->{'first-barrel'} }}</p>
          <p class="large-6"><strong>Second Barrel: </strong>{{ $weapon->{'second-barrel'} }}</p>
          <p class="large-6"><strong>Third Barrel: </strong>{{ $weapon->{'third-barrel'} }}</p>
          <p class="large-6"><strong>Fourth Barrel: </strong>{{ $weapon->{'fourth-barrel'} }}</p>
          <p class="large-6"><strong>First Grip: </strong>{{ $weapon->{'first-grip'} }}</p>
          <p class="large-6"><strong>Second Grip: </strong>{{ $weapon->{'second-grip'} }}</p>
          <p class="large-6"><strong>Underbarrel: </strong>{{ $weapon->underbarrel }}</p>
      </div>

  </div>
  <div id="image-container" class="large-4 small-12 image-container hidden">
      <img class="main-image" src="{{ $imagePath }}/{{ $weapon->image }}" alt="{{ $weapon->name }}" />
  </div>
</div>

@endsection