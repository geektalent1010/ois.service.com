@extends('layouts.app', ['ACTIVE_TITLE' => __('innovation'), 'VIDEO_BACKGROUND' => true, 'modalData'=>$modalData])

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
        <div class="content-section aos-init">
            <div class="block-section body-section">
                <img src="{{ asset('images/IconAi.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        {!! $content[1] !!}
                    </div>
                </div>
            </div>
            <div class="block-section body-section">
                <img src="{{ asset('images/IconSECURITY.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        {!! $content[2] !!}
                    </div>
                </div>
            </div>
            <div class="block-section body-section">
                <img src="{{ asset('images/IconBlockchain.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        {!! $content[3] !!}
                    </div>
                </div>
            </div>
            <div class="block-section body-section">
                <img src="{{ asset('images/IconWeb3.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        {!! $content[4] !!}
                    </div>
                </div>
            </div>
            <div class="block-section body-section">
                <img src="{{ asset('images/IconResearch.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        {!! $content[5] !!}
                    </div>
                </div>
            </div>
            <div class="block-section body-section">
                <img src="{{ asset('images/IconVR.svg') }}">
                <div class="text-section d-flex justify-content-center">
                    <div class="description-section">
                        {!! $content[6] !!}
                        <div class="button-section justify-content-between mt-5">
                            <a href="{{ route('contact.index') }}">{{__('apply_here')}}</a>
                            <a href="{{ route('security.index') }}">{{__('go_to_security')}}</a>
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
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
@endsection
