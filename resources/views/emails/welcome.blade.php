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
                @foreach ($content as $con)
                    <div class="welcome-greet">{{$con->content}}</div>
                @endforeach
            </div>
            <div class="visit-website">
                <a href="{{ route('login', ['id' => $userData['id']]) }}" class="btn btn-primary register-button button-submit">
                    CONFIRM YOUR EMAIL
                </a>
            </div>
        </div>
        <div class="social-section">
            <table class="fir-table">
                <tr>
                    <td>OIS GLOBAL CENTERS <a href="{{ route('offices.index') }}" style="margin-left: 15px">Click
                            here</a></td>
                    <td>
                        <table>
                            <tr>
                                <td><span style="margin-right: 15px">SOCIAL</span></td>
                                <td>
                                    <a href="https://www.facebook.com"><img src="{{ asset('images/Face.png') }}"
                                            alt="facebook" /></a>
                                    <a href="https://www.linkedin.com/"><img src="{{ asset('images/Link.png') }}"
                                            alt="Linkedin" /></a>
                                    <a href="https://www.instagram.com"><img src="{{ asset('images/Insta.png') }}"
                                            alt="facebook" /></a>
                                    <a href="https://twitter.com"><img src="{{ asset('images/Twit.png') }}"
                                            alt="twitter" /></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table class="sec-table">
                            <tr>
                                <td><a href="{{route('terms.index')}}">Terms of Use</a></td>
                                <td class="wp-0">|</td>
                                <td><a href="{{route('policy.index')}}">Privacy Policy</a></td>
                                <td class="wp-0">|</td>
                                <td><a href="{{route('protection.index')}}">Data Protection Policy</a></td>
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
