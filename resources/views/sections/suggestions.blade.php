@foreach ($suggestions as $suggestion)
<div class="weapon_container large-8 grid-x medium-10 small-12 border-top">
    <div class="large-6 small-12 weapon_image">
        <img class="operator" src="{{ asset( 'images/operators/weapons/' . $suggestion->image ) }}" />
    </div>

    <div class="large-6 small-12 weapon_info">
        <div class="header row">
            <h4> {{ $suggestion->name }}</h4>
            <p>Email: {{ $suggestion->email }}</p>
        </div>

        <p>{{ $suggestion->suggestion }}</p>

        <div class="button-group grid-x">
        
        </div>
    </div>   
</div>
@endforeach