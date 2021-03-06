@php
    $weaponData = [];
    $weapon = $weapon[0];

    foreach ($weapon as $key => $value) {
        $weaponData[$key] = $value;
    };

    $weaponName = $weaponData['name'];

@endphp

@extends('layouts.base')

@section('title', "Rainbow Six Siege - Edit $weaponName")

@section('content')

<div class="center large-8 medium-10 small-12">
    <div id="toggle-form"  class="header row">
    <h1>Edit {{ $weaponData['name'] }}</h1>
        <i class="fi-plus"></i>
    </div>

    @include('admin.forms.addWeaponForm')

</div>
@endsection