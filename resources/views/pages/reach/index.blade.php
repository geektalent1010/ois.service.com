@extends('layouts.app', ['ACTIVE_TITLE' => 'OUR REACH'])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg">
    <video autoplay muted loop class="video-section" playsinline>
        <source src="{{ asset('Video/ReachHD.mp4') }}" type="video/mp4">
    </video>
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source src="{{ asset('Video/ReachVM.mp4') }}" type="video/mp4">
    </video>
    <div class="m-0 intro-section">
        <div class="title-section d-flex flex-column justify-content-center align-items-center">
            <p class="title">Tailored solutions<br>on a global scale.</p>
            <p class="more-info-text my-3">MORE INFO</p>
            <div class="mouse_scroll">
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
                <div>
                    <span class="m_scroll_arrows unu"></span>
                    <span class="m_scroll_arrows doi"></span>
                    <span class="m_scroll_arrows trei"></span>
                </div>
            </div>
        </div>
        <div class="content-section aos-init">
            <div class="block-section">
                <img class="reach-logo" src="{{ asset('images/LogoOIS.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Industries and Geographies</p>
                        <p class="description">OIS operates in various industries such as finance, healthcare, and government across 27 countries around the world. These countries include North America(USA, Dominica, Canada), Europe (France, Italy, Netherlands, Spain, Austria, Germany, Belgium, Ireland, Switzerland), Africa (Nigeria, Kenya, Morocco, Egypt, Mauritius), Asia (India, China, Malaysia, Japan, Turkey), Middle East (UAE, Saudi Arabia, Lebanon).</p>
                        <p class="description mt-4 mb-5">In each of these regions, OIS tailors its solutions to meet the unique needs of the industries and markets it serves. For example, in emerging markets like Nigeria and India, OIS's solutions can be used to verify the identities of individuals who lack traditional forms of identification, helping to bring them into the financial mainstream. In more developed markets like the Netherlands and the UK, OIS's solutions can help financial institutions meet regulatory compliance requirements.<br>Additionally, OIS's solutions can be adapted to meet local regulatory requirements, ensuring compliance with local laws and regulations.</p>
                        <div class="button-section">
                            <a href="{{ route('contact.index') }}">GET IN TOUCH</a>
                            <a href="{{ route('dashboard.index') }}">GO TO DASHBOARD</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-section desktop-version">
                <div class="d-flex justify-content-center align-items-center">
                    <p class="mb-0">OFFICES</p>
                    <a class="ml-2 mr-4" href="{{ route('offices.index') }}">Click here</a>
                    <p class="mb-0">SOCIAL</p>
                    <a href="https://bit.ly/3Gimqru" class="social-icon ml-2"><img src="{{ asset('images/Logo/LogoFacebook.svg') }}"/></a>
                    <a href="https://bit.ly/3Wn2oSx" class="social-icon ml-2"><img src="{{ asset('images/Logo/LogoLinkedin.svg') }}"/></a>
                    <a href="https://www.instagram.com/oisservices/"><img class="social-icon ml-2" src="{{ asset('images/Logo/LogoInsta.svg') }}"/></a>
                    <a href="https://twitter.com/oisservices"><img class="social-icon ml-2" src="{{ asset('images/Logo/LogoTwitter.svg') }}"/></a>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a onclick="showTerms()">Terms of Use</a>
                    <p class="mx-2 mb-0">|</p>
                    <a onclick="showPrivacy()">Privacy Policy</a>
                    <p class="mx-2 mb-0">|</p>
                    <a onclick="showData()">Data Protect Policy</a>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a class="company" href="https://brandfields.com">Powered by Brandfields.com</a>
                </div>
            </div>
            <div class="foot-section mobile-version">
                <div class="d-flex flex-column align-items-center">
                    <p class="mb-1">OFFICES</p>
                    <a href="{{ route('offices.index') }}">Click here</a>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <p class="mb-1 mt-4">SOCIAL</p>
                    <div>
                        <a href="https://bit.ly/3Gimqru" class="social-icon ml-3"><img src="{{ asset('images/Logo/LogoFacebook.svg') }}"/></a>
                        <a href="https://bit.ly/3Wn2oSx" class="social-icon ml-3"><img src="{{ asset('images/Logo/LogoLinkedin.svg') }}"/></a>
                        <a href="https://www.instagram.com/oisservices/"><img class="social-icon ml-3" src="{{ asset('images/Logo/LogoInsta.svg') }}"/></a>
                        <a href="https://twitter.com/oisservices"><img class="social-icon ml-3 mr-3" src="{{ asset('images/Logo/LogoTwitter.svg') }}"/></a>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center mt-4">
                    <a class="mb-1" onclick="showTerms()">Terms of Use</a>
                    <a class="mb-1" onclick="showPrivacy()">Privacy Policy</a>
                    <a class="mb-1" onclick="showData()">Data Protect Policy</a>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a class="company" href="https://brandfields.com">Powered by Brandfields.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript">
    const privacy = document.querySelector(".privacy-modal");
    function showPrivacy() {
        privacy.classList.toggle("show-modal");
    }
    const terms_use = document.querySelector(".terms-modal");
    function showTerms() {
        terms_use.classList.toggle("show-modal");
    }
    const data_policy = document.querySelector(".data-modal");
    function showData() {
        data_policy.classList.toggle("show-modal");
    }

	let video = document.querySelector('.video-section');
    let video_mobile = document.querySelector('.video-section-mobile');
    function playVideo() {
        if (window.innerWidth > 769) {
            video.querySelector('source').src = '/Video/OISH.mp4';
            video.load();
            video.play();
            video.muted = false;
        }
        else {
            video_mobile.querySelector('source').src = '/Video/OISV.mp4';
            video_mobile.load();
            video_mobile.play();
            video_mobile.muted = false;
        }

        $('.play').addClass('d-none');
        $('.stop').removeClass('d-none');
        $('.intro-section').addClass('d-none');
    }
    function stopVideo() {
        if (window.innerWidth > 769) {
            video.querySelector('source').src = '/Video/AboutHD.mp4';
            video.load();
            video.play();
            video.muted = true;
        }
        else {
            video_mobile.querySelector('source').src = '/Video/AboutVM.mp4';
            video_mobile.load();
            video_mobile.play();
            video_mobile.muted = true;
        }

        $('.stop').addClass('d-none');
        $('.play').removeClass('d-none');
        $('.intro-section').removeClass('d-none');
    }
</script>
@endsection
