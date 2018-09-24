@php
    $weaponPageRoute = 'editWeapon';
@endphp

@extends('layouts.base')

@section('title', 'Rainbow Six Siege - Weapons')

@section('content')

    <div id="toggle-form" class="header row" data-toggle-form>
        <h1>Add Weapon</h1>
        <i class="fi-plus"></i>
    </div>

    @include('admin.forms.addWeaponForm')


    <div class="grid-x">
    @include('sections.weapons')
    </div>

@endsection