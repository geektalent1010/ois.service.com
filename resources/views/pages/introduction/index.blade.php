@extends('layouts.app', ['ACTIVE_TITLE' => __('about')], ['VIDEO_BACKGROUND' => true])

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
                    {!!$content[0]!!}
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
                <div class="body-section content-section aos-init">
                    <div class="conent-section-con">
                        <div class="block-section">
                            <img src="{{ asset('images/IconFingerprint.svg') }}">
                            <div class="text-section d-flex justify-content-center">
                                <div class="description-section">
                                    {!! $content[1] !!}
                                </div>
                            </div>
                        </div>
                        <div class="block-section">
                            <img src="{{ asset('images/IconMONEYTRANSFER.svg') }}">
                            <div class="text-section d-flex justify-content-center">
                                <div class="description-section">
                                    {!! $content[2] !!}
                                </div>
                            </div>
                        </div>
                        <div class="block-section">
                            <img src="{{ asset('images/IconEHEALTH.svg') }}">
                            <div class="text-section d-flex justify-content-center">
                                <div class="description-section">
                                    {!! $content[3] !!}
                                    <div class="button-section">
                                        <a href="{{ route('services.index') }}">{{__('go_to_services')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('_includes.footer', ['VIDEO_BACKGROUND' => true])
            </div>
        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection


@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
