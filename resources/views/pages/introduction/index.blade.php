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
        <div class="d-flex justify-content-center" style="height:100%">
            <div class="m-0 intro-section">
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
                    <div class="body-section conent-section-con">
                        <div class="block-section">
                            <img src="{{ asset('images/IconFingerprint.svg') }}">
                            <div class="text-section d-flex justify-content-center">
                                <div class="description-section">
                                    <p class="sub-title">OIS (Online Integrated Services)</p>
                                    <p class="description mt-4">OIS (Online Integrated Solutions) stands at the forefront of
                                        innovation as a leading provider of cutting-edge software solutions spanning various
                                        industries. Our journey began as a Visa Application Centre and Support Services
                                        Provider, and we have since evolved to extend our services to all of Nigeria's
                                        diplomatic missions worldwide. Our success is underpinned by advanced technology,
                                        unparalleled quality, scalability, and the seamless transferability of our solutions.
                                    </p>
                                    <p class="description mb-0 mt-4">What sets OIS apart is our global footprint, allowing for
                                        the effortless integration of applications on a worldwide scale. Our commitment to
                                        excellence extends beyond immigration services, as we boast a robust track record in
                                        banking platforms. Serving as a crucial intermediary for Nigerian banks, we deliver
                                        essential services to non-resident Nigerians and individuals of other nationalities
                                        abroad seeking to open or reactivate their Nigerian bank accounts.</p>
                                    <p class="description mb-0 mt-4">At OIS, we continually strive to redefine industry
                                        standards, offering a comprehensive suite of solutions that reflect our dedication to
                                        excellence and technological prowess. Join us on a journey of unparalleled service
                                        delivery and global connectivity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="block-section">
                            <img src="{{ asset('images/IconMONEYTRANSFER.svg') }}">
                            <div class="text-section d-flex justify-content-center">
                                <div class="description-section">
                                    <p class="description">At OIS, we take immense pride in our unwavering commitment to
                                        exceptional service delivery and cutting-edge technology. Our comprehensive range of
                                        services goes beyond visa and passport solutions, encompassing Education, Healthcare,
                                        and Banking platforms. We believe in simplifying processes, and to achieve this, we
                                        offer a streamlined application experience through our user-friendly online portal,
                                        seamless payment system, and real-time updates.</p>
                                    <p class="description mt-4 mb-0">For those seeking to obtain a Bank Verification Number
                                        (BVN), our online application process coupled with SMS delivery ensures an efficient and
                                        hassle-free experience.</p>
                                    <p class="description mt-4 mb-0">In the realm of financial services, our Electronic Money
                                        Transfer services stand out. We provide a secure and affordable means for online money
                                        transfers, supporting various methods such as cash pick-up, cryptocurrency transactions,
                                        bank transfers, mobile money transactions, and airtime top-ups. With OIS, experience the
                                        convenience of modern, secure, and flexible financial solutions tailored to meet your
                                        diverse needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="block-section">
                            <img src="{{ asset('images/IconEHEALTH.svg') }}">
                            <div class="text-section d-flex justify-content-center">
                                <div class="description-section">
                                    <p class="description mb-0">At OIS, the well-being of our clients takes center stage, and
                                        our commitment extends to delivering top-notch E-health and Wellness services. Immerse
                                        yourself in a comprehensive approach to health with our array of offerings:</p>
                                    <p class="description mt-0 mb-0"><b>Telemedicine Services:</b></p>
                                    <p class="description mt-0 mb-0 ml-4">• Experience healthcare on your terms with our
                                        telemedicine services. Connect seamlessly with healthcare professionals through virtual
                                        consultations, unlocking personalized diet plans, curated exercise routines, and
                                        invaluable mental health support. Your well-being is our priority, and our telemedicine
                                        services bring healthcare expertise directly to you.</p>
                                    <p class="description mt-0 mb-0"><b>Health Monitoring Devices:</b></p>
                                    <p class="description mt-0 mb-0 ml-4">• Stay informed and proactive about your health with
                                        our health monitoring devices. These cutting-edge tools allow you to track vital signs,
                                        providing valuable insights into your overall health. Empower yourself with data-driven
                                        decisions for a healthier lifestyle.</p>
                                    <p class="description mt-0 mb-0"><b>Integrated Wellness Program:</b></p>
                                    <p class="description mt-0 mb-0 ml-4">• Our wellness program is a holistic haven for health,
                                        seamlessly integrating mental health support into your well-being journey. Beyond
                                        physical health, we prioritize mental wellness, fostering a balanced and comprehensive
                                        approach to overall well-being.</p>
                                    <p class="description mt-0 mb-0">Our mission is to provide not only cutting-edge software
                                        solutions but also to be a trusted ally in your pursuit of health and wellness. By
                                        simplifying processes and enhancing experiences across industries, we are dedicated to
                                        making a positive impact on every facet of your life. Welcome to a world where
                                        innovation meets well-being.</p>
                                    <p class="description mt-4 mb-5">At OIS, our unwavering commitment is to pioneer
                                        cutting-edge software solutions that not only streamline processes but also simplify
                                        processes and elevate experiences across diverse industries.</p>
                                    <div class="button-section">
                                        <a href="{{ route('services.index') }}">GO TO SERVICES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('_includes.footer')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection


@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
