@extends('layouts.app', ['ACTIVE_TITLE' => 'SOLUTIONS'])

@section('PAGE_LEVEL_STYLES')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
    <div class="main-bg">
        <div class="container-section solution-section body-solution">
            <video autoplay muted loop class="video-section" playsinline>
                <source type="video/mp4">
            </video>
            <video autoplay muted loop class="video-section-mobile" playsinline>
                <source type="video/mp4">
            </video>
            <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
            <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
            <div class="image-section first-image-section pc-version" id="first-image-section">
                <div class="w-50"></div>
                <div class="w-50 d-flex align-items-center">
                    <p class="intro-header" id="intro-header">FOR EVERY CHALLENGE<br>WE FIND A SOLUTION</p>
                </div>
            </div>
            <div class="image-section first-image-section mobile-version">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <p class="intro-header">FOR EVERY CHALLENGE<br>WE FIND A SOLUTION</p>
                </div>
            </div>
            <div class="pc-version">
                <div class="title-section d-flex align-items-center w-50 shown-title-section">
                    <p class="intro-title w-100 first-title">SOLUTIONS</p>
                </div>
                <div class="content-section">
                    <div class="d-flex">
                        <div class="w-50">
                            <p class="intro-content content-first">At OIS, we understand that identity verification and data
                                management are critical components of our services, including Visa and Passport processing,
                                Electronic Payment Transfers, BVN, and E-health services. However, the current systems may
                                be
                                prone to errors, fraud, and inefficiencies. Traditional identity verification processes are
                                time-consuming, costly, and require significant human intervention, leading to delays and
                                frustration for our customers. Moreover, data breaches, hacking, and identity theft have
                                become
                                increasingly common, posing a significant risk to data security and privacy.</p>
                        </div>
                        <div class="w-50 d-flex justify-content-center">
                            <img class="icon" src="{{ asset('images/IconIdea.svg') }}">
                        </div>
                    </div>
                    <div class="less-section-first d-none">
                        <div class="w-50">
                            <div
                                class="title-section d-flex align-items-center w-100 hidden-title-section first-hidden-title-section">
                                <p class="intro-title w-100 first-title">LET'S FACE SOME FACTS</p>
                            </div>
                            <p class="intro-content content-first strong-text"><strong>Consequences of Insecure or
                                    Inaccurate
                                    Identity Verification:</strong></p>
                            <p class="intro-content content-first">Inaccurate or insecure identity verification can have
                                serious
                                consequences, including financial losses, legal issues, and damage to reputation. Inaccurate
                                identity verification can lead to fraud, such as identity theft, which could be financially
                                damaging to our customers. In the context of E-health solutions, inaccurate identity
                                verification can lead to medical errors, jeopardize patient safety, and negatively impact
                                public
                                health outcomes. Additionally, inaccurate data management can compromise national security,
                                this
                                is why having a secure and efficient system in place is of critical importance.</p>
                        </div>
                        <div class="w-50 d-flex flex-column align-items-center">
                            <img class="icon hidden-icon-first" src="{{ asset('images/IconLock.svg') }}">
                        </div>
                    </div>
                    <button class="read-more-btn first-btn" id="pc-first-btn" onclick="showFirstDetail()">READ MORE</button>
                </div>
            </div>
            <div class="mobile-version">
                <div class="title-section d-flex align-items-center w-100 shown-title-section">
                    <p class="intro-title w-100 first-title">SOLUTIONS</p>
                </div>
                <div class="content-section">
                    <div class="d-flex justify-content-center">
                        <img class="icon" src="{{ asset('images/IconIdea.svg') }}">
                    </div>
                    <p class="intro-content content-first">At OIS, we understand that identity verification and data
                        management
                        are critical components of our services, including Visa and Passport processing, Electronic Payment
                        Transfers, BVN, and E-health services. However, the current systems may be prone to errors, fraud,
                        and
                        inefficiencies. Traditional identity verification processes are time-consuming, costly, and require
                        significant human intervention, leading to delays and frustration for our customers. Moreover, data
                        breaches, hacking, and identity theft have become increasingly common, posing a significant risk to
                        data
                        security and privacy.</p>
                    <div
                        class="less-section-first d-none title-section align-items-center w-100 hidden-title-section first-hidden-title-section first-hidden-title-section-mobile">
                        <p class="intro-title w-100 first-title">LET'S FACE SOME FACTS</p>
                    </div>
                    <div class="less-section-first d-none flex-column">
                        <div class="d-flex justify-content-center">
                            <img class="icon" src="{{ asset('images/IconLock.svg') }}">
                        </div>
                        <p class="intro-content content-first strong-text"><strong>Consequences of Insecure or Inaccurate
                                Identity Verification:</strong></p>
                    </div>
                    <div class="less-section-first d-none">
                        <p class="intro-content content-first">Inaccurate or insecure identity verification can have serious
                            consequences, including financial losses, legal issues, and damage to reputation. Inaccurate
                            identity verification can lead to fraud, such as identity theft, which could be financially
                            damaging
                            to our customers. In the context of E-health solutions, inaccurate identity verification can
                            lead to
                            medical errors, jeopardize patient safety, and negatively impact public health outcomes.
                            Additionally, inaccurate data management can compromise national security, this is why having a
                            secure and efficient system in place is of critical importance.</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="read-more-btn first-btn" id="mobile-first-btn" onclick="showFirstDetail()">READ
                            MORE</button>
                    </div>
                </div>
            </div>
            <div class="image-section second-image-section pc-version" id="second-image-section-pc">
                <div class="w-50 d-flex align-items-center">
                    <p class="intro-header">WEB3<br>DECENTRALIZED<br>TECHNOLOGIES</p>
                </div>
                <div class="w-50"></div>
            </div>
            <div class="image-section second-image-section mobile-version" id="second-image-section-mobile">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="intro-header">WEB3<br>DECENTRALIZED<br>TECHNOLOGIES</p>
                </div>
            </div>
            <div class="pc-version">
                <div class="d-flex">
                    <div class="w-50"></div>
                    <div class="w-50">
                        <div class="title-section d-flex align-items-center shown-title-section">
                            <p class="intro-title w-100 second-title">SECURE, TRANSPARENT, EFFICIENT</p>
                        </div>
                    </div>
                </div>
                <div class="content-section half-bottom">
                    <div class="d-flex">
                        <div class="w-50 d-flex justify-content-center">
                            <img class="icon-second" src="{{ asset('images/IconBlockchain.svg') }}">
                        </div>
                        <div class="w-50">
                            <p class="intro-content content-second strong-text"><strong>Revolutionizing Global Identity
                                    Verification and Data Management:</strong></p>
                            <p class="intro-content content-second mb-0">OIS is dedicated to revolutionizing global identity
                                verification and data management by leveraging advanced technologies such as AI, machine
                                learning, blockchain, and Web3. These technologies will enable us to provide secure,
                                transparent, and efficient solutions that empower individuals and organizations to easily
                                and
                                seamlessly verify their identities and access critical services in a trusted and
                                decentralized
                                ecosystem.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="w-50"></div>
                    <div class="w-50">
                        <div
                            class="title-section align-items-center less-header-second d-none hidden-title-section second-hidden-title-section">
                            <p class="intro-title w-100 second-title">WEB3 DECENTRALIZED SOLUTIONS</p>
                        </div>
                    </div>
                </div>
                <div class="content-section less-section-second d-none pb-0">
                    <div class="d-flex">
                        <div class="w-50 d-flex align-items-start justify-content-center">
                            <img class="icon-second cloud-icon" src="{{ asset('images/IconLock.svg') }}">
                        </div>
                        <div class="w-50">
                            <p class="intro-content content-second strong-text"><strong>Technologies to be leveraged for
                                    Secure
                                    and Decentralized Identity Verification Solutions:</strong></p>
                            <p class="intro-content content-second">We will use AI and machine learning to gain insights
                                from
                                data and develop models that can improve efficiency, accuracy, and customer experience.
                                Blockchain will provide a secure and transparent record of transactions, while Web3 will
                                enable
                                the creation of decentralized solutions.</p>
                            <p class="intro-content content-second strong-text"><strong>Leveraging Technology for Secure
                                    and
                                    Decentralized Financial Services:</strong></p>
                            <p class="intro-content content-second">OIS will leverage Blockchain and Web3 technologies to
                                create
                                secure and decentralized financial services. These technologies will enable us to create a
                                decentralized finance (DeFi) ecosystem that is transparent, efficient, and accessible to
                                all.
                                This ecosystem will enable our customers to transfer money seamlessly, with reduced
                                transaction
                                fees, improved efficiency, and enhanced security.</p>
                            <p class="intro-content content-second strong-text"><strong>Leveraging Technology for Secure
                                    and
                                    Decentralized E-health Solutions:</strong></p>
                            <p class="intro-content content-second">OIS will also leverage machine learning, blockchain,
                                and
                                Web3 technologies to create secure and decentralized E-health solutions. These solutions
                                will
                                enable patients to securely and easily access their medical records, receive remote
                                consultations, and connect with healthcare providers in a trusted and decentralized
                                ecosystem.
                            </p>
                            <p class="intro-content content-second strong-text"><strong>Overall Benefits of Our New
                                    Solution:</strong></p>
                            <p class="intro-content content-second">By leveraging these technologies, OIS aims to provide
                                secure, transparent, and efficient solutions that empower individuals and organizations to
                                easily and seamlessly verify their identities and access critical services in a trusted and
                                decentralized ecosystem. These solutions will reduce the risk of fraud and identity theft,
                                improve efficiency and accuracy, and provide users with full control over their data.</p>
                        </div>
                    </div>
                </div>
                <div class="content-section pt-0 d-flex">
                    <div class="w-50"></div>
                    <button class="read-more-btn second-btn" id="pc-second-btn" onclick="showSecondDetail()">READ
                        MORE</button>
                </div>
            </div>
            <div class="mobile-version">
                <div class="title-section d-flex align-items-center w-100 shown-title-section">
                    <p class="intro-title w-100 second-title">SECURE, TRANSPARENT, EFFICIENT</p>
                </div>
                <div class="content-section">
                    <div class="d-flex justify-content-center">
                        <img class="icon-second" src="{{ asset('images/IconBlockchain.svg') }}">
                    </div>
                    <p class="intro-content content-second strong-text"><strong>Revolutionizing Global Identity
                            Verification and
                            Data Management:</strong></p>
                    <p class="intro-content content-second mb-0">OIS is dedicated to revolutionizing global identity
                        verification and data management by leveraging advanced technologies such as AI, machine learning,
                        blockchain, and Web3. These technologies will enable us to provide secure, transparent, and
                        efficient
                        solutions that empower individuals and organizations to easily and seamlessly verify their
                        identities
                        and access critical services in a trusted and decentralized ecosystem.</p>
                </div>
                <div class="title-section w-100 align-items-center less-section-second d-none hidden-title-section">
                    <p class="intro-title w-100 second-title">WEB3 DECENTRALIZED SOLUTIONS</p>
                </div>
                <div class="content-section less-section-second d-none pb-0">
                    <div>
                        <div class="d-flex justify-content-center">
                            <img class="icon-second" src="{{ asset('images/IconLock.svg') }}">
                        </div>
                        <p class="intro-content content-second strong-text"><strong>Technologies to be leveraged for Secure
                                and
                                Decentralized Identity Verification Solutions:</strong></p>
                    </div>
                    <p class="intro-content content-second">We will use AI and machine learning to gain insights from data
                        and
                        develop models that can improve efficiency, accuracy, and customer experience. Blockchain will
                        provide a
                        secure and transparent record of transactions, while Web3 will enable the creation of decentralized
                        solutions.</p>
                    <p class="intro-content content-second strong-text"><strong>Leveraging Technology for Secure and
                            Decentralized Financial Services:</strong></p>
                    <p class="intro-content content-second">OIS will leverage Blockchain and Web3 technologies to create
                        secure
                        and decentralized financial services. These technologies will enable us to create a decentralized
                        finance (DeFi) ecosystem that is transparent, efficient, and accessible to all. This ecosystem will
                        enable our customers to transfer money seamlessly, with reduced transaction fees, improved
                        efficiency,
                        and enhanced security.</p>
                    <p class="intro-content content-second strong-text"><strong>Leveraging Technology for Secure and
                            Decentralized E-health Solutions:</strong></p>
                    <p class="intro-content content-second">OIS will also leverage machine learning, blockchain, and Web3
                        technologies to create secure and decentralized E-health solutions. These solutions will enable
                        patients
                        to securely and easily access their medical records, receive remote consultations, and connect with
                        healthcare providers in a trusted and decentralized ecosystem.</p>
                    <p class="intro-content content-second strong-text"><strong>Overall Benefits of Our New
                            Solution:</strong>
                    </p>
                    <p class="intro-content content-second">By leveraging these technologies, OIS aims to provide secure,
                        transparent, and efficient solutions that empower individuals and organizations to easily and
                        seamlessly
                        verify their identities and access critical services in a trusted and decentralized ecosystem. These
                        solutions will reduce the risk of fraud and identity theft, improve efficiency and accuracy, and
                        provide
                        users with full control over their data.</p>
                </div>
                <div class="content-section pt-0 d-flex justify-content-center">
                    <button class="read-more-btn second-btn" id="mobile-second-btn" onclick="showSecondDetail()">READ
                        MORE</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection



@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript">
        function showFirstDetail() {
            if ($(".less-section-first").hasClass('d-none')) {
                $(".less-section-first").removeClass('d-none');
                $(".less-section-first").addClass('d-flex');
                document.querySelector('#pc-first-btn').textContent = "READ LESS";
                document.querySelector('#mobile-first-btn').textContent = "READ LESS";
            } else {
                $(".less-section-first").addClass('d-none');
                $(".less-section-first").removeClass('d-flex');
                document.querySelector('#pc-first-btn').textContent = "READ MORE";
                document.querySelector('#mobile-first-btn').textContent = "READ MORE";
            }
        }

        function showSecondDetail() {
            if ($(".less-section-second").hasClass('d-none')) {
                $(".less-section-second").removeClass('d-none');
                $(".less-header-second").removeClass('d-none');
                $(".less-header-second").addClass('d-flex');
                document.querySelector('#pc-second-btn').textContent = "READ LESS";
                document.querySelector('#mobile-second-btn').textContent = "READ LESS";
            } else {
                $(".less-section-second").addClass('d-none');
                $(".less-header-second").addClass('d-none');
                $(".less-header-second").removeClass('d-flex');
                document.querySelector('#pc-second-btn').textContent = "READ MORE";
                document.querySelector('#mobile-second-btn').textContent = "READ MORE";
            }
        }

        // function scrollEvent() {
        // var element1 = document.getElementById('second-image-section-pc');
        // const rect1 = element1.getBoundingClientRect();
        // const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        // const position1 = rect1.top + scrollTop;
        // if (position1 < 80) {
        //     console.log(position1);
        //     element1.style.backgroundAttachment = 'fixed';
        // }
        // var element2 = document.getElementById('second-image-section-mobile');
        // const rect2 = element2.getBoundingClientRect();
        // const position2 = rect2.top + scrollTop;
        // if (position2 < 80) {
        //     element2.style.backgroundAttachment = 'fixed';
        //     // console.log(position2);
        // }
        // }
    </script>
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
