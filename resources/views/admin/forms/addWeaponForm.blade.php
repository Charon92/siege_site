{{ Form::open(array('id' => 'form', 'class' => 'grid-x column styled hidden', 'route' => 'addWeapons','enctype' => 'multipart/form-data')) }}
    {{ Form::token() }}

    <!-- if there are login errors, show them here -->
    <p class="large-12 small-12">
        {{ $errors->first('name') }}
        {{ $errors->first('fullname') }}
        {{ $errors->first('fullname') }}
        {{ $errors->first('position') }}
        {{ $errors->first('fullimage') }}
        {{ $errors->first('halfimage') }}
        {{ $errors->first('icon') }}
        {{ $errors->first('dob') }}
        {{ $errors->first('description') }}
        {{ $errors->first('ctu') }}
        {{ $errors->first('ability') }}
    </p>

    <p class="large-6 small-12">
        {{ Form::label('name', 'Weapon Name') }}
        {{ Form::text('name', $weaponName ) }}
    </p>

    <p class="large-6 upload-button small-12">
        {{ Form::label('image', 'Weapon Image') }}
        {{ Form::file('image', strval($weaponData['image']) ) }}
    </p>

    <p class="large-12 small-12">
        {{ Form::label('description', 'Weapon Description') }}
        {{ Form::textarea('description', strval($weaponData['description']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('damage', 'Weapon Damage') }}
        {{ Form::number('damage', strval($weaponData['damage']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('magazine', 'Weapon Magazine Size') }}
        {{ Form::number('magazine', strval($weaponData['magazine']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('rate-of-fire', 'Weapon Rate-of-fire') }}
        {{ Form::number('rate-of-fire', strval($weaponData['rateOfFire']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('mobility', 'Weapon Mobility') }}
        {{ Form::number('mobility', strval($weaponData['mobility']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('first-sight', 'Weapon First Sight') }}
        {{ Form::text('first-sight', strval($weaponData['first-sight']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('second-sight', 'Weapon Second Sight') }}
        {{ Form::text('second-sight', strval($weaponData['second-sight']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('third-sight', 'Weapon Third Sight') }}
        {{ Form::text('third-sight', strval($weaponData['third-sight']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('fourth-sight', 'Weapon Fourth Sight') }}
        {{ Form::text('fourth-sight', strval($weaponData['fourth-sight']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('first-barrel', 'Weapon First Barrel') }}
        {{ Form::text('first-barrel', strval($weaponData['first-barrel']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('second-barrel', 'Weapon Second Barrel') }}
        {{ Form::text('second-barrel', strval($weaponData['second-barrel']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('third-barrel', 'Weapon Third Barrel') }}
        {{ Form::text('third-barrel', strval($weaponData['third-barrel']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('fourth-barrel', 'Weapon Fourth Barrel') }}
        {{ Form::text('fourth-barrel', strval($weaponData['fourth-barrel']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('fifth-barrel', 'Weapon Fifth Barrel') }}
        {{ Form::text('fifth-barrel', strval($weaponData['fifth-barrel']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('first-grip', 'Weapon First Grip') }}
        {{ Form::text('first-grip', strval($weaponData['first-grip']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('second-grip', 'Weapon Second Grip') }}
        {{ Form::text('second-grip', strval($weaponData['second-grip']) ) }}
    </p>

    <p class="large-3 small-12">
        {{ Form::label('underbarrel', 'Weapon Underbarrel') }}
        {{ Form::text('underbarrel', strval($weaponData['underbarrel']) ) }}
    </p>

    <p class="large-12 small-12">{{ Form::submit('Submit') }}</p>
    {{ Form::close() }}