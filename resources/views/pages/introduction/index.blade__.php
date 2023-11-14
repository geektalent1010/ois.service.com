@extends('layouts.app', ['ACTIVE_TITLE' => 'ABOUT'])

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
    <div class="m-0 intro-section">
        <div class="title-section d-flex flex-column justify-content-center align-items-center">
            <p class="title desktop-version">Innovative software solutions<br>across industries</p>
            <p class="title mobile-version">Innovative<br>software solutions<br>across industries</p>
            <p class="more-info-text my-3">Scroll down for more info</p>
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
        <div class="content-section aos-init" data-aos="fade-up">
            <div class="block-section">
                <img class="icon-mobile d-none aos-init" data-aos="fade-left" data-aos-duration="3000" src="{{ asset('images/IconFingerprint.svg') }}">
                <div class="text-section">
                    <div class="sub-title-section">
                        <p class="sub-title">OIS (ONLINE INTEGRATED SOLUTIONS)</p>
                    </div>
                    <div class="description-section">
                        <p class="description">OIS (Online Integrated Solutions) is a leading provider of innovative software solutions across industries. We began our journey as a visa and passport application advisory and support provider, and we have expanded our services to all of Nigeria's diplomatic missions worldwide. Our success is driven by advanced technology, superior quality, scalability, and transferability of our solutions. With 22 strategic locations globally, we offer seamless integration of global applications.</p>
                        <p class="description mt-4">In addition to our expertise in immigration services, we have a strong track record in banking platforms. Acting as an intermediary between Nigerian banks, we provide essential services for non-resident Nigerians and other nationals abroad looking to open or reactivate their Nigerian bank accounts.</p>
                    </div>
                </div>
                <div class="icon-section">
                    <img class="aos-init" data-aos="fade-left" data-aos-duration="3000" src="{{ asset('images/IconFingerprint.svg') }}">
                </div>
            </div>
            <div class="block-section"> 
                <img class="icon-mobile d-none aos-init" data-aos="fade-right" data-aos-duration="3000"  src="{{ asset('images/IconWallet.svg') }}">               
                <div class="icon-section">
                    <img class="aos-init" data-aos="fade-right" data-aos-duration="3000" src="{{ asset('images/IconWallet.svg') }}">
                </div>
                <div class="text-section">
                    <div class="sub-title-section"></div>
                    <div class="description-section">
                        <p class="description">At OIS, we take pride in our exceptional service delivery and advanced technology. Our services extend beyond visa and passport solutions to include Education, Healthcare, and Banking platforms. We simplify the application process through our online portal, payment system, and real-time updates. We also offer efficient solutions for obtaining a Bank Verification Number (BVN) through our online application process and SMS delivery.</p>
                        <p class="description mt-4">With our Electronic Money Transfer services, you can securely and affordably send money online using various methods such as cash pick-up, crypto, bank transfer, mobile money, and airtime top-up.</p>
                    </div>
                </div>
            </div>
            <div class="block-section">
                <img class="icon-mobile d-none aos-init" data-aos="fade-left" data-aos-duration="3000"  src="{{ asset('images/IconHeart.svg') }}">       
                <div class="text-section">
                    <div class="sub-title-section"></div>
                    <div class="description-section">
                        <p class="description">We also prioritize the health and wellbeing of our clients through our E-health and Wellness services. Our telemedicine services connect you with healthcare professionals, offering virtual consultations, personalized diet plans, exercise routines, and mental health support. We provide health monitoring devices to track vital signs, and our wellness program integrates mental health support to promote overall wellbeing.</p>
                        <p class="description mt-4 mb-5">At OIS, we are dedicated to delivering cutting-edge software solutions that simplify processes and enhance experiences across industries.</p>
                        <div class="button-section">
                            <a href="{{ route('services.index') }}" class="mt-3">GO TO SERVICES</a>
                            <a href="{{ route('menu.index') }}" class="mt-3">BACK TO MENU</a>
                        </div>
                    </div>
                </div>
                <div class="icon-section">
                    <img class="aos-init" data-aos="fade-left" data-aos-duration="3000" src="{{ asset('images/IconHeart.svg') }}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection



<script type="text/javascript">
		

    function scrollEvent() {
        // var element1 = document.getElementsByClassName('content-section')[0];
        // const initialPosition = element1.offsetTop;
        // const rect1 = element1.getBoundingClientRect(); 
        // const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        // const position1 = rect1.top + scrollTop; 
        // console.log(initialPosition);
        // if (position1 < initialPosition) {
        //     console.log(position1);
        //     element1.style.backgroundAttachment = 'fixed';   
        // }
    };
</script>