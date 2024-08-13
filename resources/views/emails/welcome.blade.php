<body class="welcome-body">
    <table class="welcome-main-section">
        <td align="center">

            <table class="welcome-header" >
                <td class="welcome-logo" align="center">
                    <img src="{{ asset('images/Icon1.png') }}" alt="" />
                </td>
                <td class="welcome-text" align="center">
                    WELCOME
                </td>
                <td class="welcome-login-icon" align="center">
                    <a href="{{ route('login') }}" class="d-flex align-items-center">
                        <img class="login-icon" src="{{ asset('images/Icon2.png') }}" alt="" />
                    </a>
                </td>
            </table>

            <table class="welcome-main-bg" align="center">
                <td class="welcome-bg">
                    <img class="" src="{{ asset('images/Globe.png') }}" alt="">
                </td>
            </table>

            <table class="welcome-text-body" align="center">
                @foreach ($content as $con)
                    <tr>
                        <td class="welcome-greet">
                            {{$con->content}}
                        </td>
                    </tr>
                @endforeach
                <tr align="center">
                    <td>
                        <a class="welcome-confirm-email-button" href="{{ route('login', ['confirmId' => $userData['confirmId'], 'email'=> $userData['email']]) }}">CONFIRM YOUR EMAIL</a>
                    </td>
                </tr>
            </table>

            <div class="welcome-top-footer">
                <div class="welcome-footer-center">
                    <div class="center-text">OIS GLOBAL CENTERS</div>
                    <div class="center-click">
                        <a href="{{ route('offices.index') }}">Click here</a>
                    </div>
                </div>
                <div class="welcome-footer-social">
                    <div class="social-text">SOCIAL</div>
                    <div class="social-icons">
                        <a href="https://www.facebook.com"><img src="{{ asset('images/Face.png') }}"
                            alt="facebook" /></a>
                        <a href="https://www.linkedin.com/"><img src="{{ asset('images/Link.png') }}"
                                alt="Linkedin" /></a>
                        <a href="https://www.instagram.com"><img src="{{ asset('images/Insta.png') }}"
                                alt="facebook" /></a>
                        <a href="https://twitter.com"><img src="{{ asset('images/Twit.png') }}"
                                alt="twitter" /></a>
                    </div>
                </div>
                <div class="welcome-footer-modal">
                    <div>
                        <a href="{{route('terms.index')}}">Terms of Use</a>
                    </div>
                    <div>
                        <a href="{{route('policy.index')}}">Privacy Policy</a>
                    </div>
                    <div>
                        <a href="{{route('protection.index')}}">Data Protection Policy</a>
                    </div>
                </div>
            </div>

            <div class="welcome-bottom-footer">
                If you don’t wish to receive future community emails, click here : <a
                href="">&nbsp;unsubscribe</a>
            </div>
        </td>

    </table>

</body>
