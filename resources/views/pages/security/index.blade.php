
@extends('layouts.app', ['ACTIVE_TITLE' => 'SECURITY'], ['VIDEO_BACKGROUND' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg">
    <video autoplay muted loop class="video-section" playsinline>
        <source src="{{ asset('Video/SecurityHD.mp4') }}" type="video/mp4">
    </video>
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source src="{{ asset('Video/SecurityVM.mp4') }}" type="video/mp4">
    </video>
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
    <div class="m-0 intro-section body-section">
        <div class="title-section d-flex flex-column justify-content-center align-items-center">
            <p class="title">With OIS<br>your data is secure.</p>
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
                <img src="{{ asset('images/IconSECURITY.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Data Protection and Security</p>
                        <p class="description">OIS places a high priority on data protection and security for our customers. We have implemented a range of measures to ensure the security and accuracy of customer data, including robust encryption protocols, regular backups, and secure data storage solutions.</p>
                        <p class="description mt-4">In addition, we have established strict data access controls, ensuring that only authorized personnel have access to sensitive customer data. To maintain the accuracy of customer data, OIS employs automated data verification and cleansing processes, to ensure data is always accurate and up to date.</p>
                        <p class="description mt-4 mb-5">OIS obtains customer data through secure, consent-based processes and uses this data to inform the development of new products and services that deliver real value to customers.</p>
                        <div class="button-section">
                            <a onclick="showPrivacy()">PRIVACY POLICY</a>
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
                    <a onclick="toggleTerms()">Terms of Use</a>
                    <p class="mx-2 mb-0">|</p>
                    <a onclick="togglePrivacy()">Privacy Policy</a>
                    <p class="mx-2 mb-0">|</p>
                    <a onclick="toggleData()">Data Protect Policy</a>
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
                    <a class="mb-1" onclick="toggleTerms()">Terms of Use</a>
                    <a class="mb-1" onclick="togglePrivacy()">Privacy Policy</a>
                    <a class="mb-1" onclick="toggleData()">Data Protect Policy</a>
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
    function togglePrivacy() {
        privacy.classList.toggle("show-modal");
    }
    const terms_use = document.querySelector(".terms-modal");
    function toggleTerms() {
        terms_use.classList.toggle("show-modal");
    }
    const data_policy = document.querySelector(".data-modal");
    function toggleData() {
        data_policy.classList.toggle("show-modal");
    }

</script>

<script type="text/javascript" src="{{asset('js/util.js')}}"></script>

@endsection
