<div class="main-body">

    <div class="header-section" style="position:relative">
        <div class="navbar">
            <div class="header-body">
                <div class="brand-sec">
                    <a class="navbar-brand pl-1" href="{{ route('landing') }}">
                        <img src="{{ asset('images/Icon1.png') }}" alt="" />
                    </a>
                </div>
                <div class="title-sec">
                    <span class="navbar-title">
                        WELCOME
                    </span>
                </div>
                <div class="login-section">
                    <a href="{{ route('login') }}" class="d-flex align-items-center">
                        <img class="login-icon" src="{{ asset('images/Icon2.png') }}" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-bg welcome-body">
        <img class="welcome-bg" src="{{ asset('images/Globe.png') }}" alt="">
        <div class="welcome-section">
            <div class="greet-section">
                <div class="welcome-greet">Hi {{ $userData['first_name'] }} {{ $userData['last_name'] }}</div>
                <div class="welcome-greet">We are very happy to welcome you to the OIS community.</div>
                <div class="welcome-greet">Text</div>
            </div>
            <div class="visit-website">
                <a href="{{ route('landing') }}" class="btn btn-primary register-button button-submit">VISIT
                    WEBSITE</a>
            </div>
        </div>
        <div class="social-section">
            <table class="fir-table">
                <tr>
                    <td>OFFICES <a href="" style="margin-left: 15px">Click here</a></td>
                    <td>
                        <table>
                            <tr>
                                <td><span style="margin-right: 15px">SOCIAL</span></td>
                                <td>
                                    <a href=""><img src="{{ asset('images/Face.png') }}" alt="facebook" /></a>
                                    <a href=""><img src="{{ asset('images/Link.png') }}" alt="Linkedin" /></a>
                                    <a href=""><img src="{{ asset('images/Insta.png') }}" alt="facebook" /></a>
                                    <a href=""><img src="{{ asset('images/Twit.png') }}" alt="twitter" /></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table class="sec-table">
                            <tr>
                                <td><a href="">Terms of Use</a></td>
                                <td class="wp-0">|</td>
                                <td><a href="">Privacy Policy</a></td>
                                <td class="wp-0">|</td>
                                <td><a href="">Data Protection Policy</a></td>
                            </tr>
                        </table>
                    </td>

                </tr>
            </table>
        </div>
        <div class="footer-section">If you don’t wish to receive future community emails, click here : <a
                href="">&nbsp;unsubscribe</a></div>
    </div>
</div>
