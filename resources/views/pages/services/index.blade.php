@extends('layouts.app', ['ACTIVE_TITLE' => 'SERVICES'], ['VIDEO_BACKGROUND'=>true])

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
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
    <div class="m-0 intro-section body-section">
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
                        <p class="sub-title">VISA AND PASSPORT APPLICATION PROCESSING:</p>
                        <p class="description mb-0">At Online Integrated Solutions (OIS), we stand as a global trailblazer in revolutionary software solutions, dedicated to empowering businesses and individuals in overcoming intricate challenges. Our profound impact is particularly evident in the realm of VISA application processing, where we harness the power of advanced machine learning (ML) algorithms to enhance efficiency, accuracy, and scalability, ultimately elevating the overall customer experience. Here are key areas where our innovative approach to machine learning can bring about transformative improvements:</p>
                        <p class="description mt-0 mb-0 ml-4">• Data Processing and Validation.</p>
                        <p class="description mb-0 ml-4">• Fraud Detection.</p>
                        <p class="description mb-0 ml-4">• Biometric Identification.</p>
                        <p class="description mb-0 ml-4">• Application Status Tracking.</p>
                        <p class="description mb-5 mt-4">At OIS, we envision a future where technology not only meets but exceeds expectations, and our commitment to pushing the boundaries of innovation ensures that our clients and users benefit from the most advanced, efficient, and secure visa and passport application processing solutions available.</p>
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
                        <p class="sub-title">BANK VERIFICATION NUMBER (BVN) APPLICATION PROCESSING:</p>
                        <p class="description mb-0">In our relentless pursuit of seamless services, we recognize the transformative potential of machine learning, particularly in optimizing our Bank Verification Number (BVN) application process. We comprehend the paramount importance of swift and accessible BVN issuance for our customers, propelling us to continually refine and expedite this crucial procedure. Harnessing the capabilities of machine learning, we aim to elevate both the accuracy and efficiency of BVN registrations, concurrently mitigating the risks associated with errors and fraudulent activities. Here are key domains where our incorporation of machine learning promises a substantial impact:</p>
                        <p class="description mt-0 mb-0 ml-4">• Data Processing and Validation.</p>
                        <p class="description mt-0 mb-0 ml-4">• Predictive Analytics.</p>
                        <p class="description mt-0 mb-0 ml-4">• Fraud Detection.</p>
                        <p class="description mt-4 mb-5">At the heart of our commitment lies the dedication to providing our customers with an unparalleled BVN application experience—prompt, precise, and fortified against potential risks. Through the infusion of machine learning, we embark on a journey to redefine the standards of efficiency and security in BVN issuance.</p>
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
                        <p class="sub-title">ELEVATING SERVICE EXCELLENCE WITH AI-POWERED CHATBOTS:</p>
                        <p class="description">We are thrilled to unveil our latest innovation—the AI Chatbot—an instrumental advancement poised to transform customer service and support. This state-of-the-art Chatbot harnesses the power of machine learning algorithms, presenting customers with a personalized and efficient avenue for assistance. Our Chatbot is designed to revolutionize the customer experience by delivering prompt and precise responses to inquiries and resolving issues with minimal reliance on human intervention.</p>
                        <p class="description mt-4 mb-0">Key Features and Benefits:</p>
                        <p class="description mt-0 mb-0 ml-4">• Quick and Accurate Responses.</p>
                        <p class="description mt-0 mb-0 ml-4">• 24/7 Accessibility.</p>
                        <p class="description mt-0 mb-0 ml-4">• Elimination of Wait Times.</p>
                        <p class="description mt-0 mb-0 ml-4">• Versatile Inquiry Handling.</p>
                        <p class="description mt-4 mb-5">This AI Chatbot represents a commitment to redefining service standards, ensuring that our customers experience a seamless and efficient interaction with our brand. As technology continues to evolve, we remain at the forefront, leveraging innovative solutions to enhance your customer journey. Welcome to a new era of personalized and responsive customer support with our AI-powered Chatbot.</p>
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
                        <p class="sub-title">ELEVATING E-HEALTH AND WELLNESS THROUGH CUTTING-EDGE TECHNOLOGY</p>
                        <p class="description mb-0">Embarking on a journey of continuous improvement, we are committed to revolutionizing our E-health and Wellness Services through the integration of advanced technology. Explore the myriad ways in which these innovations can empower you to maintain optimal health and well-being:</p>
                        <p class="description mt-0 mb-0">1. Telemedicine Services:</p>
                        <p class="description mb-0 ml-4">• Immerse yourself in the future of healthcare with our advanced systems. Precision and personalization are at the forefront as our telemedicine services accurately diagnose health concerns and deliver bespoke treatment plans tailored to your unique needs.</p>
                        <p class="description mt-0 mb-0">2. Wellness Program:</p>
                        <p class="description mb-0 ml-4">• Embrace a holistic approach to well-being through our ground breaking wellness program. Leveraging the transformative potential of Blockchain and Web3 technology, our secure and decentralized platform offers personalized diet plans, tailored exercise regimes, and comprehensive mental health support. Step into a wellness journey that is as individual as you are.</p>
                        <p class="description mt-0 mb-0">3. Health Monitoring Devices:</p>
                        <p class="description mb-0 ml-4">• Unleash the power of AI with our health monitoring devices. These intelligent systems analyze data collected from a range of devices, providing you with personalized feedback and insightful recommendations. Transform the way you monitor your health, with technology that evolves with you.</p>
                        <p class="description mt-4 mb-5">At the intersection of innovation and health, we envision a future where technology enhances every facet of your well-being journey. Our commitment is to empower you with personalized, secure, and cutting-edge solutions that redefine the standards of E-health and Wellness. Welcome to a realm where your health is not just a priority—it's a personalized experience.</p>

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
                        <p class="sub-title">REVOLUTIONIZING ELECTRONIC MONEY TRANSFER WITH BLOCKCHAIN AND WEB3 TECHNOLOGIES</p>
                        <p class="description">OIS proudly announces a ground breaking enhancement to our Electronic Money Transfer service through the integration of cutting-edge Blockchain and Web3 technologies. This strategic evolution elevates the standard of our service, providing customers with an unprecedented level of transparency and security.</p>
                        <p class="description mt-4 mb-0">Key Advancements:</p>
                        <p class="description mt-0 mb-0 ml-4">• Immutable Ledger Recording.</p>
                        <p class="description mt-0 mb-0 ml-4">• Fast, Secure, and Low-Cost Options.</p>
                        <p class="description mt-0 mb-0 ml-4">• Enhanced Flexibility and Convenience.</p>
                        <p class="description mt-4 mb-5">At OIS, we are committed to redefining the landscape of electronic financial services. The integration of Blockchain and Web3 is a testament to our dedication to innovation, ensuring that our customers experience the utmost in security, transparency, and convenience when entrusting us with their financial transactions. Welcome to a new era of Electronic Money Transfer—where technology meets trust.</p>
                        <div class="button-section justify-content-between">
                            <a href="{{ route('money.index') }}">TRANSFER HERE</a>
                            <a href="{{ route('innovation.index') }}">GO TO INNOVATION</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('_includes.footer')
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
