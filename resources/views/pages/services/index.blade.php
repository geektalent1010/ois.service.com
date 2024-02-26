@extends('layouts.app', ['ACTIVE_TITLE' => __('services'), 'modalData'=>$modalData])

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
        <div class="m-0 intro-section">
            <div class="title-section d-flex flex-column justify-content-center align-items-center">
                {!! $content[0] !!}
                <p class="more-info-text my-3 body-section">{{__('more_info')}}</p>
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
            <div class="content-section aos-init body-section">
                <div class="block-section">
                    <img src="{{ asset('images/IconFingerprint.svg') }}">
                    <div class="text-section d-flex justify-content-center">
                        <div class="description-section">
                            {!! $content[1] !!}
                            <div class="button-section d-flex justify-content-center">
                                <a href="{{ route('login') }}">{{__('apply_here')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-section">
                    <img src="{{ asset('images/IconSCAN.svg') }}">
                    <div class="text-section d-flex justify-content-center">
                        <div class="description-section">
                            {!! $content[2] !!}
                            <div class="button-section d-flex justify-content-center">
                                <a href="{{ route('login') }}">{{__('apply_here')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-section">
                    <img src="{{ asset('images/IconChatBot.svg') }}">
                    <div class="text-section d-flex justify-content-center">
                        <div class="description-section">
                            {!! $content[3] !!}
                            <div class="button-section d-flex justify-content-center">
                                <a href="{{ route('contact.index') }}">{{__('chat_here')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-section">
                    <img src="{{ asset('images/IconEHEALTH.svg') }}">
                    <div class="text-section d-flex justify-content-center">
                        <div class="description-section">
                            {!! $content[4] !!}

                            <div class="button-section d-flex justify-content-center">
                                <a href="{{ route('ehealth.index') }}">{{__('apply_here')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-section">
                    <img src="{{ asset('images/IconMONEYTRANSFER.svg') }}">
                    <div class="text-section d-flex justify-content-center">
                        <div class="description-section">
                            {!! $content[5] !!}
                            <div class="button-section justify-content-between">
                                <a href="{{ route('money.index') }}">{{__('transfer_here')}}</a>
                                <a href="{{ route('innovation.index') }}">{{__('go_to_innovation')}}</a>
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
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
