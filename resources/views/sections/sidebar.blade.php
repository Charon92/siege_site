<div class="nav large-2 small-12 column sidebar">
    {{--<div class="menu-toggle" data-menu-toggle>
        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDM4NC45NyAzODQuOTciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDM4NC45NyAzODQuOTc7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxnIGlkPSJNZW51XzFfIj4KCQk8cGF0aCBkPSJNMTIuMDMsMTIwLjMwM2gzNjAuOTA5YzYuNjQxLDAsMTIuMDMtNS4zOSwxMi4wMy0xMi4wM2MwLTYuNjQxLTUuMzktMTIuMDMtMTIuMDMtMTIuMDNIMTIuMDMgICAgYy02LjY0MSwwLTEyLjAzLDUuMzktMTIuMDMsMTIuMDNDMCwxMTQuOTEzLDUuMzksMTIwLjMwMywxMi4wMywxMjAuMzAzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCTxwYXRoIGQ9Ik0zNzIuOTM5LDE4MC40NTVIMTIuMDNjLTYuNjQxLDAtMTIuMDMsNS4zOS0xMi4wMywxMi4wM3M1LjM5LDEyLjAzLDEyLjAzLDEyLjAzaDM2MC45MDljNi42NDEsMCwxMi4wMy01LjM5LDEyLjAzLTEyLjAzICAgIFMzNzkuNTgsMTgwLjQ1NSwzNzIuOTM5LDE4MC40NTV6IiBmaWxsPSIjRkZGRkZGIi8+CgkJPHBhdGggZD0iTTM3Mi45MzksMjY0LjY2N0gxMzIuMzMzYy02LjY0MSwwLTEyLjAzLDUuMzktMTIuMDMsMTIuMDNjMCw2LjY0MSw1LjM5LDEyLjAzLDEyLjAzLDEyLjAzaDI0MC42MDYgICAgYzYuNjQxLDAsMTIuMDMtNS4zOSwxMi4wMy0xMi4wM0MzODQuOTcsMjcwLjA1NiwzNzkuNTgsMjY0LjY2NywzNzIuOTM5LDI2NC42Njd6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+Cgk8Zz4KCTwvZz4KCTxnPgoJPC9nPgoJPGc+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
    </div>--}}
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