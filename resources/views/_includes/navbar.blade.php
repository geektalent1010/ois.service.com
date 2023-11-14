<div class="headerSection">
    <nav class="navbar">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbarItem">
                <a class="navbar-brand pl-1" href="{{ route('landing') }}">
                    <img src="{{ asset('images/Logo/LogoOIS1.svg') }}" class="img-fluid logo-ois"/>
                </a>
            </div>
            <div class="navbarItem text-center">
                @if (isset($ACTIVE_TITLE))
                <span class="navbar-title">
                    {{ $ACTIVE_TITLE }}
                </span>
                @endif
            </div>
            <div class="navbarItem d-flex justify-content-end">
                <a href="{{ route('menu.index') }}" class="d-flex align-items-center">
                    <img class="menu-icon" src="{{ asset('images/IconMENU.svg') }}"/>
                </a>
                @if (!isset($ACTIVE_LOGOUT))
                <a href="{{ route('login') }}" class="d-flex align-items-center">
                    <img class="login-icon" src="{{ asset('images/IconLOGIN.svg') }}"/>
                </a>
                @else                    
                    <a href="{{ route('logout') }}" class="d-flex align-items-center"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{ asset('images/IconLOGOUT.svg') }}" alt="Logout" class="logout"/>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
            </div>
        </div>
    </nav>
</div>