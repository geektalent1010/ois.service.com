@extends('layouts.app', ['ACTIVE_TITLE' => 'ABOUT'], ['VIDEO_BACKGROUND' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg">
    <video autoplay muted loop class="video-section" playsinline>
        <source src="{{ asset('Video/AboutHD.mp4') }}" type="video/mp4">
    </video>
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source src="{{ asset('Video/AboutVM.mp4') }}" type="video/mp4">
    </video>
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
    <div class="m-0 intro-section body-section">
        <div class="title-section d-flex flex-column justify-content-center align-items-center">
            <p class="title desktop-version">Innovative software solutions<br>across industries.</p>
            <p class="title mobile-version">Innovative<br>software solutions<br>across industries.</p>
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
                <img src="{{ asset('images/IconFingerprint.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">OIS (Online Integrated Services)</p>
                        <p class="description mt-4">OIS (Online Integrated Solutions) is a leading provider of innovative software solutions across industries. We began our journey as a visa and passport application advisory and support provider, and we have expanded our services to all of Nigeria's diplomatic missions worldwide. Our success is driven by advanced technology, superior quality, scalability, and transferability of our solutions. With 22 strategic locations globally, we offer seamless integration of global applications.</p>
                        <p class="description mb-0 mt-4">In addition to our expertise in immigration services, we have a strong track record in banking platforms. Acting as an intermediary between Nigerian banks, we provide essential services for non-resident Nigerians and other nationals abroad looking to open or reactivate their Nigerian bank accounts.</p>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconMONEYTRANSFER.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="description">At OIS, we take pride in our exceptional service delivery and advanced technology. Our services extend beyond visa and passport solutions to include Education, Healthcare, and Banking platforms. We simplify the application process through our online portal, payment system, and real-time updates. We also offer efficient solutions for obtaining a Bank Verification Number (BVN) through our online application process and SMS delivery</p>
                        <p class="description mt-4 mb-0">With our Electronic Money Transfer services, you can securely and affordably send money online using various methods such as cash pick-up, crypto, bank transfer, mobile money, and airtime top-up.</p>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconEHEALTH.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="description">We also prioritize the health and wellbeing of our clients through our E-health and Wellness services. Our telemedicine services connect you with healthcare professionals, offering virtual consultations, personalized diet plans, exercise routines, and mental health support. We provide health monitoring devices to track vital signs, and our wellness program integrates mental health support to promote overall wellbeing.</p>
                        <p class="description mt-4 mb-5">At OIS, we are dedicated to delivering cutting-edge software solutions that simplify processes and enhance experiences across industries.</p>
                        <div class="button-section">
                            <a href="{{ route('services.index') }}">GO TO SERVICES</a>
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
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
@endsection
