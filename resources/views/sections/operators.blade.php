@foreach ($operators as $operator)

<div class="operator_container default_ctu large-8 grid-x medium-10 small-12 border-top">

<div class="large-6 small-12">
    <img class="operator" src="{{ asset( 'images/operators/' . $operator->fullimage ) }}" />
</div>

<div class="large-6 small-12">
    <div class="header row">
        <h4> {{ $operator->name }}</h4>
    </div>
    <p>{{ $operator->description }}</p>

    <div class="button-group grid-x">

        <a class="button large-3" title="Operator Loadout" href="{{ route($operatorLoadoutRoute, $id = $operator->id ) }}">
            <h4>Loadout</h4>
            <span><i class="fi-wrench"></i></span>
        </a>

        <a class="button large-3" title="View Operator" href="{{ route($operatorPageRoute, $id = $operator->id ) }}">
            <h4>Info</h4>
            <span><i class="fi-arrow-right"></i></span>
        </a>

    </div>
    
</div>

</div>

@endforeach