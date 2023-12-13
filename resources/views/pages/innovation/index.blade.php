@extends('layouts.app', ['ACTIVE_TITLE' => 'INNOVATION'], ['VIDEO_BACKGROUND' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg">
    <video autoplay muted loop class="video-section" playsinline>
        <source src="{{ asset('Video/InnovationHD.mp4') }}" type="video/mp4">
    </video>
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source src="{{ asset('Video/InnovationVM.mp4') }}" type="video/mp4">
    </video>
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
    <div class="m-0 intro-section body-section">
        <div class="title-section d-flex flex-column justify-content-center align-items-center">
            <p class="title desktop-version">The future of virtual reality<br>is here.</p>
            <p class="title mobile-version">The future of<br>virtual reality is here.</p>
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
                <img src="{{ asset('images/IconAi.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">AI-powered Personalization</p>
                        <p class="description">We use AI algorithms to personalize our services to each individual customer's needs. By analyzing customer data and behavior patterns, we can tailor our solutions to meet specific requirements and preferences.</p>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconSECURITY.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Machine Learning for Fraud Detection</p>
                        <p class="description">Our machine learning algorithms analyze customer behaviour, transactional data, suspicious activities, and prevents fraudulent transactions across all our services.</p>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconBlockchain.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Blockchain-based Security</p>
                        <p class="description">Our new technology direction is Blockchain and Web3, which provides increased security and transparency for our customers' data and transactions. We implement blockchain technology to ensure the immutability and traceability of our data, as well as enhanced security against data breaches and hacks.</p>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconWeb3.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Web3-based Decentralization</p>
                        <p class="description">Our Web3-based solutions provide greater decentralization and democratization of services. By using Web3 protocols, we can reduce the dependence on centralized intermediaries, lower transaction fees, and improve accessibility and inclusivity for our customers.</p>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconResearch.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Research and Development</p>
                        <p class="description">To stay ahead of the competition, we are investing in research and development of new technologies and their potential applications. We collaborate with startups, academia, and research institutions to accelerate innovation and bring advanced solutions to our customers.</p>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconVR.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Virtual Reality-based Training</p>
                        <p class="description mb-5">We provide virtual reality-based training for our healthcare professionals and customer support teams to enhance their skills and provide better service. Our VR-based training programs simulate real-world scenarios, providing a safe and immersive learning experience.</p>
                        <div class="button-section">
                            <a href="{{ route('contact.index') }}">APPLY HERE</a>
                            <a href="{{ route('dashboard.index') }}">GO TO MENU</a>
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
<script type="text/javascript" src="{{asset('js/util.js')}}">
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

</script>
@endsection
