@extends('layouts.app', ['ACTIVE_TITLE' => 'SERVICES'])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg">
    <video autoplay muted loop class="video-section" playsinline>
        <source src="{{ asset('Video/ServicesHD.mp4') }}" type="video/mp4">
    </video>
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source src="{{ asset('Video/ServicesVM.mp4') }}" type="video/mp4">
    </video>
    <div class="m-0 intro-section">
        <div class="title-section d-flex flex-column justify-content-center align-items-center">
            <p class="title desktop-version">Helping businesses and individuals<br>overcome complex challenges.</p>
            <p class="title mobile-version">Helping businesses and<br>individuals overcome<br>complex challenges.</p>
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
                        <p class="sub-title">Visa and Passport Application Processing</p>
                        <p class="description">As a world-leading provider of ground-breaking software solutions, Online Integrated Solutions (OIS) is committed to helping businesses and individuals overcome complex challenges. One key area of significant impact is in the VISA application processing, by the use of advanced machine learning (ML) algorithms, we believe we can improve the efficiency, accuracy, and scalability of the VISA application process and improve the overall customer experience. Here are some of the specific areas where we believe machine learning can make a difference:</p>
                        <p class="description mt-4 mb-0">- Data Processing and Validation</p>
                        <p class="description mb-0">- Fraud Detection</p>
                        <p class="description mb-0">- Biometric Identification</p>
                        <p class="description mb-5">- Application Status Tracking</p>
                        <div class="button-section d-flex justify-content-center">
                            <a href="{{ route('login') }}">APPLY HERE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconSCAN.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">BVN Application Processing</p>
                        <p class="description">One of the areas where we believe machine learning can have a significant impact is in our Bank Verification Number (BVN) process. We understand how important it is for our customers to have quick and easy access to their BVN numbers, so we always seek for ways to streamline the process.</p>
                        <p class="description mt-4">By leveraging machine learning, we can improve the accuracy and speed of the BVN registration process, while also reducing the risk of errors and fraud. Here are some of the specific areas where we believe machine learning can make a difference:</p>
                        <p class="description mt-4 mb-0">- Data Processing and Validation</p>
                        <p class="description mb-0">- Predictive Analytics</p>
                        <p class="description mb-5">- Fraud Detection</p>
                        <div class="button-section d-flex justify-content-center">
                            <a href="{{ route('login') }}">APPLY HERE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconChatBot.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">AI Chatbots for Improved Service Delivery and Customer Support</p>
                        <p class="description">We are excited to introduce our new AI Chatbot. This Chabot is a revolutionary tool that utilizes machine learning algorithms to provide customers with personalized support and assistance. With our Chatbot, customers can get quick and accurate responses to their inquiries and resolve issues without the need for human intervention. This reduces wait times, eliminates the need for customers to navigate complex phone menus, and allows them to access help 24/7.</p>
                        <p class="description mt-4 mb-5">The Chabot is trained on a vast dataset of customer queries and is designed to provide accurate and timely responses to a wide range of inquiries, including inquiries about our services, billing and payments, and technical support.</p>
                        <div class="button-section d-flex justify-content-center">
                            <a href="{{ route('contact.index') }}">CHAT HERE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconEHEALTH.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Improved E-health and Wellness</p>
                        <p class="description">We are exploring innovative ways to improve our E-health and Wellness Services by deploying advanced technology. Below are some practical ways this can help you stay healthy and well:</p>
                        <div class="d-flex">
                            <p class="description mr-2">- </p>
                            <p class="description">Telemedicine Services: Our advanced systems can accurately diagnose and provide personalized solutions and treatment plans.</p>
                        </div>
                        <div class="d-flex">
                            <p class="description mr-2">- </p>
                            <p class="description">Wellness Program: Our wellness program is designed to leverage the power of Blockchain and Web3 technology to provide a secure, decentralized platform that offers personalized diet plans, exercise regimes, and mental health support.</p>
                        </div>
                        <div class="d-flex">
                            <p class="description mr-2">- </p>
                            <p class="description mb-5">Health Monitoring Devices: Our AI-powered systems can analyze the data collected from these devices to provide personalized feedback and recommendations.</p>
                        </div>
                        <div class="button-section d-flex justify-content-center">
                            <a href="{{ route('ehealth.index') }}">APPLY HERE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img src="{{ asset('images/IconMONEYTRANSFER.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Electronic Money Transfer</p>
                        <p class="description">OIS is excited to announce the incorporation of Blockchain and Web3 technologies to our Electronic Money Transfer service. With the use of blockchain technology, we can ensure that every transaction is recorded in an immutable ledger, providing complete transparency and security for our customers.</p>
                        <p class="description mt-4 mb-5">Our Electronic Money Transfer service already offers a range of fast, secure, and low-cost options for sending money online, including cash pick-up, bank transfer, mobile money, airtime top-up, and now, with the integration of blockchain and Web3, our customers will have even more flexibility and convenience when it comes to sending money.range of inquiries, including inquiries about our services, billing and payments, and technical support.</p>
                        <div class="button-section">
                            <a href="{{ route('money.index') }}">TRANSFER HERE</a>
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
