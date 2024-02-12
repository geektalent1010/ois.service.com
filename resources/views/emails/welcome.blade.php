<div class="main-body">
    <div class="header-section" style="position:relative">
        <div class="navbar">
            <div class="header-body">
                <div class="brand-sec">
                    <a class="navbar-brand pl-1" href="{{ route('backoffice.index') }}">
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
                <div class="welcome-greet">
                    We would like to take the chance to welcome to the Portal.
                </div>
                <div class="welcome-greet">
                    OIS (Online Integrated Solutions) is a leading provider of innovative software solutions across
                    industries. We began our journey as a visa and passport application advisory and support
                    provider, and we have expanded our services to all of Nigeria's diplomatic missions worldwide.
                    Our success is driven by advanced technology, superior quality, scalability, and transferability
                    of our solutions. With 22 strategic locations globally, we offer seamless integration of global
                    applications.
                </div>
                <div class="welcome-greet">
                    In addition to our expertise in immigration services, we have a strong track record in banking
                    platforms. Acting as an intermediary between Nigerian banks, we provide essential services for
                    non-resident Nigerians and other nationals abroad looking to open or reactivate their Nigerian
                    bank accounts.
                </div>
                <div class="welcome-greet">
                    By logging into our portal, you will have the ability and access to navigate your VISA
                    Applications, BVN Applications, and many other services which will soon be launched.
                </div>
                <div class="welcome-greet">
                    You may proceed to login to your very own personalised Back Office, and do not hesitate to reach
                    out to us for assistance.
                </div>
                <div class="welcome-greet">
                    Your OIS Support Team
                </div>
            </div>
            <div class="visit-website">
                <a href="{{ route('landing') }}" class="btn btn-primary register-button button-submit">VISIT
                    WEBSITE</a>
            </div>
        </div>
        <div class="social-section">
            <table class="fir-table">
                <tr>
                    <td>OFFICES <a href="{{ route('offices.index') }}" style="margin-left: 15px">Click here</a></td>
                    <td>
                        <table>
                            <tr>
                                <td><span style="margin-right: 15px">SOCIAL</span></td>
                                <td>
                                    <a href="https://www.facebook.com"><img src="{{ asset('images/Face.png') }}" alt="facebook" /></a>
                                    <a href="https://www.linkedin.com/"><img src="{{ asset('images/Link.png') }}" alt="Linkedin" /></a>
                                    <a href="https://www.instagram.com"><img src="{{ asset('images/Insta.png') }}" alt="facebook" /></a>
                                    <a href="https://twitter.com"><img src="{{ asset('images/Twit.png') }}" alt="twitter" /></a>
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
