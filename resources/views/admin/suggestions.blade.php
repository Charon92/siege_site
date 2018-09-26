@extends('layouts.base')

@section('title', 'Rainbow Six Siege - User Suggestions')

@section('content')

<div class="header row">
    <h1>Suggestions</h1>
</div>

<div class="grid-x">
  @include('sections.suggestions')
</div>

@endsection