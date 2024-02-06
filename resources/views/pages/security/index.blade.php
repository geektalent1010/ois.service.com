
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
    <div class="m-0 intro-section">
        <div class="title-section d-flex flex-column justify-content-center align-items-center">
            <p class="title body-section body-section">With OIS<br>your data is secure.</p>
            <p class="more-info-text my-3 body-section">MORE INFO</p>
            <div class="mouse_scroll body-section">
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
            <div class="block-section body-section">
                <img src="{{ asset('images/IconSECURITY.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        <p class="sub-title">Data Protection and Security</p>
                        <p class="description">OIS places a high priority on data protection and security for our customers. We have implemented a range of measures to ensure the security and accuracy of customer data, including robust encryption protocols, regular backups, and secure data storage solutions.</p>
                        <p class="description mt-4">In addition, we have established strict data access controls, ensuring that only authorized personnel have access to sensitive customer data. To maintain the accuracy of customer data, OIS employs automated data verification and cleansing processes, to ensure data is always accurate and up to date.</p>
                        <p class="description mt-4 mb-5">OIS obtains customer data through secure, consent-based processes and uses this data to inform the development of new products and services that deliver real value to customers.</p>
                        <div class="button-section">
                            <a onclick="togglePrivacy()">PRIVACY POLICY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('_includes.footer', ['VIDEO_BACKGROUND' => true])
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
