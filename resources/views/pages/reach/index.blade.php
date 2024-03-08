@extends('layouts.app', ['ACTIVE_TITLE' => 'OUR REACH', 'VIDEO_BACKGROUND' => true, 'modalData' => $modalData])

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
    <div class="m-0 intro-section body-section">
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
            @include('_includes.footer')
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script src="{{asset('js/util.js')}}"></script>

@endsection
