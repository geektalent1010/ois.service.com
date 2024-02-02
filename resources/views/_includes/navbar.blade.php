<div class="headerSection">
    <nav class="navbar">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbarItem">
                @guest
                    <a class="navbar-brand pl-1" href="{{ route('landing') }}">
                    @else
                        <a class="navbar-brand pl-1" href="{{ route('dashboard.index') }}">
                        @endguest
                        <img src="{{ asset('images/Logo/LogoOIS1.svg') }}" class="img-fluid logo-ois" />
                    </a>
                    <a class="locate-button" id="locate-button">EN</a>
            </div>
            <div class="navbarItem text-center">
                @if (isset($ACTIVE_TITLE))
                    <span class="navbar-title">
                        {{ $ACTIVE_TITLE }}
                    </span>
                @endif
            </div>
            <div class="navbarItem d-flex justify-content-end">
                @guest
                    <a id="menu-item" class="d-flex align-items-center navbar-menu-item">
                        <img class="menu-icon" src="{{ asset('images/IconMENU.svg') }}" alt="" />
                        MENU
                    </a>
                    @if (!isset($ACTIVE_LOGOUT))
                        <a href="{{ route('login') }}" class="d-flex align-items-center navbar-login-item">
                            <img class="login-icon" src="{{ asset('images/IconLOGIN.svg') }}" alt="" />
                            LOGIN
                        </a>
                    @else
                        <a href="{{ route('logout') }}" class="d-flex align-items-center navbar-logout-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <img src="{{ asset('images/IconLOGOUT.svg') }}" alt="Logout" class="logout" />
                            LOGOUT
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endif
                @else
                    <a id="menu-item" class="d-flex align-items-center navbar-menu-item">
                        <img class="menu-icon" src="{{ asset('images/IconMENU.svg') }}" alt="" />
                        MENU
                    </a>
                    <a href="{{ route('logout') }}" class="d-flex align-items-center navbar-logout-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{ asset('images/IconLOGOUT.svg') }}" alt="Logout" class="logout" />
                        LOGOUT
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </nav>
    <div class="left-menubar" id="left-menubar">
        <div class="lang-section" id="menu-list">
            <div class="lang-item"><a class="item">CHINESE</a></div>
            <div class="lang-item"><a class="item active">ENGLISH</a></div>
            <div class="lang-item"><a class="item">FRENCH</a></div>
            <div class="lang-item"><a class="item">GERMAN</a></div>
            <div class="lang-item"><a class="item">PORTUGUESE</a></div>
            <div class="lang-item"><a class="item">SPANISH</a></div>
        </div>
    </div>

    <div class="right-menubar" id="right-menubar">
        <div class="lang-section">
            <div class="lang-item"><a class="item" href="{{ route('introduction.index') }}">ABOUT OIS</a></div>
            <div class="lang-item"><a class="item" href="{{ route('services.index') }}">SERVICES</a></div>
            <div class="lang-item"><a class="item" href="{{ route('innovation.index') }}">INNOVATION</a></div>
            <div class="lang-item"><a class="item" href="{{ route('security.index') }}">SECURITY</a></div>
        </div>
        <div class="lang-section">
            <div class="lang-item"><a class="item" href="{{ route('login') }}">VISA APPLICATION</a></div>
            <div class="lang-item"><a class="item" href="{{ route('login') }}">PASSPORT APPLICATION</a></div>
            <div class="lang-item"><a class="item" href="{{ route('login') }}">BVN APPLICATION</a></div>
            <div class="lang-item"><a class="item" href="{{ route('login') }}">TRACK VISA APPLICATION</a></div>
        </div>
        <div class="lang-section">
            <div class="lang-item"><a class="item" href="{{ route('ehealth.index') }}">E-HEALTH PORTAL</a></div>
            <div class="lang-item"><a class="item" href="{{ route('money.index') }}">MONEY PORTAL</a></div>
            <div class="lang-item"><a class="item" href="{{ route('shopping.index') }}">SHOPPING PORTAL</a></div>
        </div>
        <div class="lang-section">
            <div class="lang-item"><a class="item" href="{{ route('contact.index') }}">CUSTOMER SUPPORT</a></div>
        </div>
        <div class="lang-section">
            <div class="lang-item"><a class="item" href="{{ route('login') }}">OIS GLOBAL CETERS</a></div>
        </div>
    </div>
    <div class="dark-bg" id="dark-bg"></div>
</div>

<script>
    // ------------------start left navbar script(author:YU)----------------------
    const leftMenuBar = document.getElementById('left-menubar');
    const rightMenuBar = document.getElementById('right-menubar');
    const locateButton = document.getElementById('locate-button');
    const menuList = document.getElementById('menu-list');
    const menuItems = leftMenuBar.getElementsByClassName('item');
    const darkBg = document.getElementById('dark-bg');
    locateButton.addEventListener('mouseover', () => {
        leftMenuBar.classList.add('open');
        rightMenuBar.classList.remove('open');
        darkBg.classList.add('block');
    });

    menuList.addEventListener('click', (event) => {
        const clickedMenuItem = event.target;
        if (clickedMenuItem.classList.contains('item')) {
            Array.from(menuItems).forEach((item) => {
                item.classList.remove('active');
            });
            clickedMenuItem.classList.add('active');
            leftMenuBar.classList.remove('open');
            darkBg.classList.remove('block');
            locateButton.textContent = clickedMenuItem.textContent.slice(0, 2);
        }
        event.stopPropagation();
    });

    darkBg.addEventListener('click', (event) => {
        leftMenuBar.classList.remove('open');
        darkBg.classList.remove('block');
    });



    const menuButton = document.getElementById('menu-item');
    const rightMenuItems = rightMenuBar.getElementsByClassName('item');
    menuButton.addEventListener('mouseover', () => {
        rightMenuBar.classList.add('open');
        leftMenuBar.classList.remove('open');
        darkBg.classList.add('block');
    });

    rightMenuBar.addEventListener('click', (event) => {
        const clickedItem = event.target;
        if (clickedItem.classList.contains('item')) {
            Array.from(rightMenuItems).forEach((item) => {
                item.classList.remove('active');
            });
            clickedItem.classList.add('active');
            rightMenuBar.classList.remove('open');
            darkBg.classList.remove('block');
        }
        event.stopPropagation();
    });

    darkBg.addEventListener('click', (event) => {
        rightMenuBar.classList.remove('open');
        darkBg.classList.remove('block');
    })

    // ------------------start right navbar script(author:YU)----------------------
</script>
