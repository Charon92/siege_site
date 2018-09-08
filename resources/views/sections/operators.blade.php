@foreach ($operators as $operator)

@switch ($operator->ctu)
  @case('707th SMB')
  <div class="korea operator_container large-3 small-6">
  @break

  @case('GROM')
  <div class="poland operator_container large-3 small-6">
  @break

  @case('S.D.U')
  <div class="hongkong operator_container large-3 small-6">
  @break

  @case('G.E.O')
  <div class="spain operator_container large-3 small-6">
  @break

  @case('S.D.F')
  <div class="japan operator_container large-3 small-6">
  @break

  @case('BOPE')
  <div class="brazil operator_container large-3 small-6">
  @break

  @case('Navy Seals')
  <div class="seals operator_container large-3 small-6">
  @break

  @case('JTF')
  <div class="canada operator_container large-3 small-6">
  @break

  @case('S.A.S')
  <div class="british operator_container large-3 small-6">
  @break

  @case('Spetsnaz')
  <div class="russian operator_container large-3 small-6">
  @break

  @case('SWAT')
  <div class="swat operator_container large-3 small-6">
  @break

  @default
  <div class="operator_container default_ctu large-3 small-6">

@endswitch

    <img class="operator" src="{{ asset( 'images/operators/' . $operator->fullimage ) }}" />
    <a href="{{ route($operatorPageRoute, $id = $operator->id ) }}">
        <div class='overlay'>
        <h4> {{ $operator->name }}</h4>
        </div>
    </a>
</div>

@endforeach