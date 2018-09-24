<div class="header row border-bottom">
  <h2>Got a suggestion? Send it with the form below</h2>
</div>
{{ Form::open(array('id' => 'form', 'class' => 'grid-x column styled visible', 'route' => 'addWeapons','enctype' => 'multipart/form-data')) }}
    {{ Form::token() }}

    <p class="large-12 small-12">
      {{ $errors->first('name') }}
      {{ $errors->first('email') }}
      {{ $errors->first('suggestion') }}
  </p>

  <p class="large-6 small-12">
      {{ Form::label('name', 'Your Name') }}
      {{ Form::text( 'name' ) }}
  </p>

  <p class="large-6 upload-button small-12">
      {{ Form::label('email', 'Your Email') }}
      {{ Form::email('email' ) }}
  </p>

  <p class="large-12 small-12">
      {{ Form::label('suggestion', 'Your Suggestion') }}
      {{ Form::textarea('suggestion' ) }}
  </p>

    <p class="large-12 small-12">{{ Form::submit('Submit') }}</p>
{{ Form::close() }}