<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#003366" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'BUDDIES') }} WELCOME</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}" />

  <link href="{{ asset('css/bootstrap_4.1.3.min.css') }}" rel="stylesheet">
  <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap_4.1.3.min.js') }}"></script>
</head>

<body>
  <div class="headerSection" style="position:relative">
    <nav class="navbar">
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbarItem">
          <a class="navbar-brand pl-1" href="{{ route('landing') }}">
            <img src="{{ asset('images/Logo/LogoOIS1.svg') }}" class="img-fluid logo-ois" alt="" />
          </a>
        </div>
        <div class="navbarItem text-center">
          <span class="navbar-title">
            WELCOME
          </span>
        </div>
        <div class="navbarItem d-flex justify-content-end">
          <a href="{{ route('login') }}" class="d-flex align-items-center">
            <img class="login-icon" src="{{ asset('images/IconLOGIN.svg') }}" alt="" />
          </a>
        </div>
      </div>
    </nav>
  </div>

  <div class="main-bg welcome-body">
    <img class="welcome-bg" src="{{ asset('images/Globe.png') }}" alt="">
    <img class="welcome-bg-mobile" src="{{ asset('images/Globe.png') }}" alt="">
    <div class="welcome-section">
      <div class="welcome-greet">Hi Name</div>
      <div class="welcome-greet">We are very happy to welcome you to the OIS community.</div>
      <div class="welcome-greet">Text</div>
      <div class="visit-website">
        <button class="btn btn-primary register-button button-submit">VISIT WEBSITE</button>
      </div>
    </div>
    <div class="social-section">
      <div class="office-section">
        <div class="office-left-sec">
          <span>OFFICES</span>
          <a href="">Click here</a>
        </div>
        <div class="office-right-sec">
          <span>SOCIAL</span>
          <a href=""><img src="{{asset('images/Facebook.svg')}}" alt="facebook" /></a>
          <a href=""><img src="{{asset('images/Linkedin.svg')}}" alt="facebook" /></a>
          <a href=""><img src="{{asset('images/Insta.svg')}}" alt="facebook" /></a>
          <a href=""><img src="{{asset('images/Twitter.svg')}}" alt="twitter" /></a>
        </div>
      </div>
      <div class="contact-section">
        <a href="">Terms of Use</a> <a>|</a> <a href="">Privacy Policy</a> <a>|</a> <a href="">Data Protection Policy</a>
      </div>
    </div>
    <div class="footer-section">If you don’t wish to receive future community emails, click here : <a href="">&nbsp;unsubscribe</a></div>
  </div>

  <script type="text/javascript" src="{{asset('js/util.js')}}"></script>

</body>

</html>
