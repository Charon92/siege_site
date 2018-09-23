@php
    $postPageRoute = 'editPost';

    $categoryArray = [];

    foreach( $categories as $category) {
        $categoryArray[$category->id] -> $category->name
    }
@endphp

@extends('layouts.base')

@section('title', 'Rainbow Six Siege - Operators')

@section('content')

<div class="column container">
    <div id="toggle-form"  class="header row">
        <h1>Add Post</h1>
        <i class="fi-plus"></i>
    </div>

{{ Form::open(array('id' => 'form', 'class' => 'grid-x column styled hidden', 'route' => 'addPost','enctype' => 'multipart/form-data')) }}
    {{ Form::token() }}

    <!-- if there are login errors, show them here -->
    <p class="large-12 small-12">
        {{ $errors->first('title') }}
        {{ $errors->first('content') }}
        {{ $errors->first('slug') }}
        {{ $errors->first('image') }}
        {{ $errors->first('type') }}
        {{ $errors->first('category_id') }}
        {{ $errors->first('author_id') }}
    </p>

    <p class="large-12 small-12">
        {{ Form::label('title', 'Post Title') }}
        {{ Form::text('title') }}
    </p>

    <p class="large-12 small-12">
        {{ Form::label('content', 'Post Content') }}
        {{ Form::textarea('content') }}
    </p>

    <p class="large-12 small-12">
        {{ Form::label('slug', 'Post Slug') }}
        {{ Form::text('slug') }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('image', 'Post Image') }}
        {{ Form::file('image') }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('type', 'Post Type') }}
        {{ Form::text('type') }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('category_id', 'Post Category') }}
        {{ Form::select('category_id', $categoryArray, null, ['placeholder' => 'Pick a category...']) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('author_id', 'Post Author') }}
        {{ Form::text('author_id') }}
    </p>

    <p class="large-12 small-12">{{ Form::submit('Submit') }}</p>
    {{ Form::close() }}

</div>

<div class="column container">
    <div class="grid-x">
    @include('sections.posts')
    </div>
</div>

@endsection