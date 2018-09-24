@foreach ($weapons as $weapon)
<div class="weapon_container large-8 grid-x medium-10 small-12 border-top">
    <div class="large-6 small-12 weapon_image">
        <img class="operator" src="{{ asset( 'images/operators/weapons/' . $weapon->image ) }}" />
    </div>

    <div class="large-6 small-12 weapon_info">
        <div class="header row">
            <h4> {{ $weapon->name }}</h4>
        </div>

        <div class="button-group grid-x">
        
            <a class="button large-3" title="View Operator" href="{{ route($weaponPageRoute, $id = $weapon->id ) }}">
                    @if (Route::current()->getName() === 'admin')
                        <h4>Edit</h4>
                    @else 
                        <h4>Info</h4>
                    @endif
                <span><i class="fi-arrow-right"></i></span>
            </a>
        </div>
    </div>   
</div>
@endforeach