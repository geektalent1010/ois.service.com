<!doctype html>

<head>
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            font-family: "DinPro", sans-serif;
            background-color: #003366;
            color: white;
            margin: 0;
            width: 100%;
            background-color: white;
            font-size: 14px;
        }

        .main-body {
            width: 100%;
            max-width: 600px;
            margin: auto;
        }

        .header-section {
            position: relative;
            width: 100%;
            z-index: 99;
        }

        .navbar {
            height: 80px;
            background-color: #003366;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            padding: 0 0;
            width: 100%;
        }

        .header-body {
            padding: 0 20px;
            width: 100%;
            height: 100%;
            font-size: 18px;
            font-family: 'Montserrat Regular', sans-serif;
        }

        .header-body div {
            width: 33.3%;
        }

        .brand-sec {
            display: inline-block;
            float: left;
            padding-top: 17px;
        }

        .title-sec {
            padding-top: 30px;
            display: inline-block;
            float: left;
            text-align: center;
        }

        .navbar-brand img {
            width: 45px;
            height: 45px;
        }

        .login-section {
            display: inline-block;
            padding-top: 32px;
            float: left;
        }

        .login-section a {
            float: right;
        }

        .login-section img {
            width: 22px;
        }

        .welcome-body {
            background-color: #338dc9;
        }

        .welcome-body .welcome-bg {
            width: 100%;
            height: auto;
        }

        .welcome-body .welcome-section {
            padding-left: 5%;
            padding-right: 5%;
            width: 100%;
            padding-top: 30px;
            padding-bottom: 30px;
            text-align: center;
        }

        .greet-section {
            text-align: left;
        }

        .welcome-body .welcome-section .welcome-greet {
            padding: 15px 0;
        }

        .welcome-body .welcome-section .visit-website {
            width: 100%;
            margin: 30px auto 0 auto;
            padding: 0 auto;
            text-align: center;
        }

        .welcome-body .welcome-section .visit-website .register-button {
            width: 50%;
            padding-top: 15px;
            margin-left: 25%;
            height: 44px;
            display: block;
            text-transform: uppercase;
            border-radius: 10rem;
            font-family: "DinPro", sans-serif;
            background: #003366;
            color: #ffffff;
            border-color: #003366;
            cursor: pointer;
            text-decoration: none;
            outline: none;
            border: none;
            transition: 0.3s;
        }

        .welcome-body .welcome-section .visit-website .register-button:hover {
            color: #ffffff;
            background: #00a9ea;
            border: 0.1rem solid #00a9ea;
        }

        .welcome-body .welcome-section .visit-website .register-button:focus,
        .welcome-body .welcome-section .visit-website .register-button:active {
            background: #003366;
            color: #ffffff;
            border-color: #003366 !important;
            outline: none;
            box-shadow: none;
        }

        .welcome-body .welcome-section .visit-website .register-button.disabled,
        .welcome-body .welcome-section .visit-website .register-button:disabled,
        .welcome-body .welcome-section .visit-website .register-button[disabled] {
            opacity: 1 !important;
        }

        .welcome-body .welcome-section .visit-website .register-button span {
            font-family: "DinPro Bold", sans-serif;
        }

        .welcome-body .social-section {
            background-color: #005696;
            padding-top: 50px;
            padding-bottom: 50px;
            width: 100%;
            padding-left: 30px;
            padding-right: 30px;
            text-align: center;
        }

        .welcome-body .social-section span {
            color: white;
        }

        .welcome-body .social-section a {
            color: #338dc9;
            text-decoration: none;
        }

        .welcome-body .social-section img {
            width: 25px;
        }

        .welcome-body .social-section table {
            text-align: center;
            display: inline-block;
        }

        .sec-table tr td {
            padding: 5px 10px;
        }

        .welcome-body .social-section .contact-section {
            width: 100%;
            text-align: center;
            vertical-align: middle;
            margin-top: 20px;
        }

        .welcome-body .social-section .contact-section a:nth-child(odd) {
            color: #338dc9;
        }

        .welcome-body .social-section .contact-section a:nth-child(even) {
            color: #ffffff;
        }

        .welcome-body .footer-section {
            background-color: #003366;
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
            font-size: 12px;
        }

        .welcome-body .footer-section a {
            color: #338dc9;
            text-decoration: none;
        }

        .wp-0 {
            padding: 0 0 !important;
        }

        @media only screen and (max-width: 575.98px) {
            .welcome-body .welcome-section {
                padding-left: 20px;
                padding-right: 20px;
            }

            .welcome-body .welcome-section .visit-website .register-button {
                width: 100%;
            }

            .welcome-body .social-section {
                padding-left: 10px;
                padding-right: 10px;
            }

            .welcome-body .social-section .office-section {}

            .welcome-body .social-section .contact-section {}

            .welcome-body .social-section .contact-section a:nth-child(even) {
                display: none;
            }

            .welcome-body .footer-section {
                display: block;
                text-align: center;
                padding-left: 10px;
                padding-right: 10px;
            }
        }
    </style>
</head>

<body>
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
                    <div class="welcome-greet">
                        Welcome to OIS Services and thank your for creating a client account.
                    </div>
                    <div class="welcome-greet">
                        Since we protect our clients data and personal information, we kindly ask you to confirm your
                        email address by clicking the email confirmation button below.
                    </div>
                    <div class="welcome-greet">
                        Thank you for joining our community.
                    </div>
                    <div class="welcome-greet">
                        Your OIS Support Team
                    </div>
                </div>
                <div class="visit-website">
                    <a href="{{ route('backoffice.index') }}" class="btn btn-primary register-button button-submit">
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
</body>

</html>