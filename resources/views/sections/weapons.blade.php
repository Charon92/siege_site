@foreach ($weapons as $weapon)
<div class="weapon_container large-3 small-6">
    <img class="operator" src="{{ asset( 'images/operators/weapons/' . $weapon->image ) }}" />
    <a href="{{ route($weaponPageRoute, $id = $weapon->id ) }}">
        <div class='overlay'>
        <h4> {{ $weapon->name }}</h4>
        </div>
    </a>
</div>
@endforeach