<div class="title-bar large-12" data-responsive-toggle="toggle-nav">
    <a href="{{ route('home') }}"><img class="logo" src="{{ asset('images/header_logo.png') }}" alt="Rainbox Six Siege logo"/></a>
    <button id="menu-toggle" class="menu-icon" data-toggle="toggle-nav"></button>
</div>

<div id="toggle-nav" class="grid-x large-2 sidebar-container right">

    <div class="nav column sidebar">
        <div class="fixed">
            <a href="{{ route('home') }}"><img class="logo" src="{{ asset('images/header_logo.png') }}" alt="Rainbox Six Siege logo"/></a>
            <div class="menu-container">
                @if (Auth::check())
                <ul class="vertical menu">

                    <li class="{{ Route::currentRouteName() == 'admin' ? 'active' : '' }}">
                        <a href="{{ route( 'admin' ) }}">Admin</a>
                    </li>

                    <li class="{{ Route::currentRouteName() == 'operators' ? 'active' : '' }}">
                        <a href="{{ route( 'operators' ) }}">Operators</a>
                    </li>

                    <li class="{{ Route::currentRouteName() == 'weapons' ? 'active' : '' }}">
                        <a href="{{ route( 'weapons' ) }}">Weapons</a>
                    </li>

                </ul>
                <ul class="vertical menu">
                    <!-- Authentication Links -->
                    <li>
                        <a href="#" role="button" >
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                    <li> 
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                @else
                <ul class="vertical menu">

                    <li class="{{ Route::currentRouteName() == 'operators' ? 'active' : '' }}">
                        <a href="{{ route( 'allOperators' ) }}">Operators</a>
                    </li>

                    <li class="{{ Route::currentRouteName() == 'weapons' ? 'active' : '' }}">
                        <a href="{{ route( 'allWeapons' ) }}">Weapons</a>
                    </li>

                    <li class="{{ Route::currentRouteName() == 'weapons' ? 'active' : '' }}">
                        <a href="{{ route( 'allMaps' ) }}">Maps</a>
                    </li>

                </ul>
                @endif
            </div>
        </div>
    </div>

</div>