<div class="headerSection">
    <nav class="navbar">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbarItem">
                @if(Auth::guard('admin')->check())
                    <a class="navbar-brand pl-1" href="{{ route('admin.dashboard.index') }}">
                @elseif(Auth::check())
                    <a class="navbar-brand pl-1" href="{{ route('dashboard.index') }}">
                @else
                    <a class="navbar-brand pl-1" href="{{ route('landing') }}">
                @endif
                        <img src="{{ asset('images/Logo/LogoOIS1.svg') }}" class="img-fluid logo-ois" />
                    </a>
                    <a class="locate-button" id="locate-button"> @if(cache()->has('lang')) {{strtoupper(cache()->get('lang'))}} @else EN @endif</a>
            </div>
            <div class="navbarItem text-center">
                @if (isset($ACTIVE_TITLE))
                    <span class="navbar-title">
                        {{ $ACTIVE_TITLE }}
                    </span>
                @endif
            </div>
            <div class="navbarItem d-flex justify-content-end">
                @if(Auth::guard('admin')->check())
                    <a id="menu-item" class="d-flex align-items-center navbar-menu-item">
                        <img class="menu-icon" src="{{ asset('images/IconMENU.svg') }}" alt="" />
                        <span>{{__('menu')}}</span>
                    </a>
                    <a href="{{ route('admin.logout') }}" class="d-flex align-items-center navbar-logout-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{ asset('images/IconLOGOUT.svg') }}" alt="Logout" class="logout" />
                        <span>{{__('logout')}}</span>
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @elseif(Auth::check())
                    <a id="menu-item" class="d-flex align-items-center navbar-menu-item">
                        <img class="menu-icon" src="{{ asset('images/IconMENU.svg') }}" alt="" />
                        <span>{{__('menu')}}</span>
                    </a>
                    <a href="{{ route('logout') }}" class="d-flex align-items-center navbar-logout-item"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{ asset('images/IconLOGOUT.svg') }}" alt="Logout" class="logout" />
                        <span>{{__('logout')}}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a id="menu-item" class="d-flex align-items-center navbar-menu-item">
                        <img class="menu-icon" src="{{ asset('images/IconMENU.svg') }}" alt="" />
                        <span>{{__('menu')}}</span>
                    </a>
                    @if (!isset($ACTIVE_LOGOUT))
                        <a href="{{ route('login') }}" class="d-flex align-items-center navbar-login-item">
                            <img class="login-icon" src="{{ asset('images/IconLOGIN.svg') }}" alt="" />
                            <span>{{__('login')}}</span>
                        </a>
                    @else
                        <a href="{{ route('logout') }}" class="d-flex align-items-center navbar-logout-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <img src="{{ asset('images/IconLOGOUT.svg') }}" alt="Logout" class="logout" />
                            <span>{{__('logout')}}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endif
                @endif
            </div>
        </div>
    </nav>
    <div class="left-menubar" id="left-menubar">
        <img class="close-icon" id="left-menu-close" src="{{ asset('images/Logo/IconCLOSE.svg') }}" alt="" />
        <div class="lang-section" id="menu-list">
            <div class="lang-item"><a class="item @if(cache()->has('lang') && cache()->get('lang') == 'ar') active @endif" value="AR">ARABIC</a></div>
            <div class="lang-item"><a class="item @if(cache()->has('lang') && cache()->get('lang') == 'cn') active @endif" value="CN">CHINESE</a></div>
            <div class="lang-item"><a class="item  @if(cache()->has('lang') && cache()->get('lang') == 'en') active @endif" value="EN">ENGLISH</a></div>
            <div class="lang-item"><a class="item @if(cache()->has('lang') && cache()->get('lang') == 'fr') active @endif" value="FR">FRENCH</a></div>
            <div class="lang-item"><a class="item @if(cache()->has('lang') && cache()->get('lang') == 'de') active @endif" value="DE">GERMAN</a></div>
            <div class="lang-item"><a class="item @if(cache()->has('lang') && cache()->get('lang') == 'it') active @endif" value="IT">ITALIAN</a></div>
            <div class="lang-item"><a class="item @if(cache()->has('lang') && cache()->get('lang') == 'tr') active @endif" value="TR">TURKSH</a></div>
            <div class="lang-item"><a class="item @if(cache()->has('lang') && cache()->get('lang') == 'es') active @endif" value="ES">SPANISH</a></div>
        </div>
    </div>

    <div class="right-menubar" id="right-menubar">
        <img class="close-icon" id="right-menu-close" src="{{ asset('images/Logo/IconCLOSE.svg') }}" alt="" />
        @if(Auth::guard('admin')->check())
            <div class="lang-section">
                <div class="lang-item"><a class="item" href="{{ route('admin.profile.index') }}">MY PROFILE</a></div>
                <div class="lang-item"><a class="item" href="{{ route('admin.manager.index') }}">ADMIN MANAGER</a></div>
                <div class="lang-item"><a class="item" href="{{ route('admin.client.index') }}">CLIENT MANAGER</a></div>
                <div class="lang-item"><a class="item" href="{{ route('admin.mail.index') }}">MAIL MANAGER</a></div>
            </div>
            <div class="lang-section">
                <div class="lang-item"><a class="item" href="{{ route('admin.content.index') }}">CONETNT EDITOR</a></div>
                <div class="lang-item"><a class="item" href="{{ route('admin.center.index') }}">CENTER EDITOR</a></div>
                <div class="lang-item"><a class="item" href="{{ route('admin.price.index') }}">PRICE EDITOR</a></div>
                <div class="lang-item"><a class="item" href="{{ route('admin.checklist.index') }}">CHECKLIST EDITOR</a></div>
            </div>
        @else
            <div class="lang-section">
                <div class="lang-item"><a class="item" href="{{ route('introduction.index') }}">{{__('about_ois')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('services.index') }}">{{__('services')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('innovation.index') }}">{{__('innovation')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('security.index') }}">{{__('security')}}</a></div>
            </div>
            <div class="lang-section">
                <div class="lang-item"><a class="item" href="{{ route('login') }}">{{__('client')}} {{__('portal')}}</a></div>
            </div>
            <div class="lang-section">
                <div class="lang-item"><a class="item" href="{{ route('login') }}">{{__('visa')}} {{__('application')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('login') }}">{{__('passport')}} {{__('application')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('login') }}">{{__('bvn')}} {{__('application')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('login') }}">{{__('nin')}} {{__('application')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('login') }}">{{__('track_visa')}} {{__('application')}}</a></div>
            </div>
            <div class="lang-section">
                <div class="lang-item"><a class="item" href="{{ route('ehealth.index') }}">{{__('e_health')}} {{__('portal')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('money.index') }}">{{__('money')}} {{__('portal')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('shopping.index') }}">{{__('shopping')}} {{__('portal')}}</a></div>
            </div>
            <div class="lang-section">
                <div class="lang-item"><a class="item" href="{{ route('offices.index') }}">{{__('customer_support')}}</a></div>
                <div class="lang-item"><a class="item" href="{{ route('contact.index') }}">{{__('ois_global_centers')}}</a></div>
            </div>
        @endif
        <div class="lang-section">
        </div>
    </div>
    <div class="dark-bg" id="dark-bg"></div>
</div>

<script>
    // ------------------start left navbar script(author:YU)----------------------
    const leftMenuBar = document.getElementById('left-menubar');
    const rightMenuBar = document.getElementById('right-menubar');
    const leftMenuCloseBut = document.getElementById('left-menu-close');
    const rightMenuCloseBut = document.getElementById('right-menu-close');
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
            const langCode = clickedMenuItem.getAttribute('value');
            clickedMenuItem.classList.add('active');
            leftMenuBar.classList.remove('open');
            darkBg.classList.remove('block');
            locateButton.textContent = langCode;
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.ajax({
                url: '{{ route('landing.locale') }}',
                method: 'POST',
                data: {'lang': langCode, '_token':csrfToken},
                success: function(res) {
                    location.href=("")
                    console.log(res);
                }
            });
        }
        event.stopPropagation();
    });

    darkBg.addEventListener('click', (event) => {
        leftMenuBar.classList.remove('open');
        darkBg.classList.remove('block');
    });

    leftMenuCloseBut.addEventListener('click', (event) => {
        leftMenuBar.classList.remove('open');
        darkBg.classList.remove('block');
    })

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

    rightMenuCloseBut.addEventListener('click', (event) => {
        rightMenuBar.classList.remove('open');
        darkBg.classList.remove('block');
    })

    // ------------------start right navbar script(author:YU)----------------------
</script>
