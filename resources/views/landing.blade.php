@extends('layouts.app', ['ACTIVE_TITLE' => __('welcome'), 'VIDEO_BACKGROUND' => true])

@section('PAGE_START')
@endsection

@include('_includes.introVideo')

@section('PAGE_CONTENT')
    <div class="main-bg">
        <div class="video-wrapper">
            <video class="video-section" id="landing-video" muted loop playsinline>
                <source src="{{ asset('Video/LandingHD.mp4') }}" type="video/mp4">
            </video>
            <video class="video-section-mobile" id="landing-video-mobile" muted loop playsinline>
                <source src="{{ asset('Video/LandingVM.mp4') }}" type="video/mp4">
            </video>
            <img class="cancel-video d-none" src="{{ asset('images/Stop.svg') }}" onclick="stopVideo_landing()">

        </div>

        <div class="landing-section body-section">
            <div class="row m-0 menu-body">
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('introduction.index') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <p class="back-unvisible menu-title">{{__('about_ois')}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('services.index') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <p class="back-unvisible menu-title">{{__('services')}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('innovation.index') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <p class="back-unvisible menu-title">{{__('innovation')}}</p>
                            </div>
                            <div class="h-100 flex-column d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title"></p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('security.index') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <p class="back-unvisible menu-title">{{__('security')}}</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('client')}}</p>
                                    <p class="menu-detail">{{__('portal')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('visa')}}</p>
                                    <p class="menu-detail">{{__('application')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('passport')}}</p>
                                    <p class="menu-detail">{{__('application')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('bvn')}}</p>
                                    <p class="menu-detail">{{__('application')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('nin')}}</p>
                                    <p class="menu-detail">{{__('application')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="https://my.oisservices.com/" target="_blank">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('track_visa')}}</p>
                                    <p class="menu-detail">{{__('application')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('ehealth.index') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('e_health')}}</p>
                                    <p class="menu-detail">{{__('portal')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('money.index') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('money')}}</p>
                                    <p class="menu-detail">{{__('portal')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('shopping.index') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('shopping')}}</p>
                                    <p class="menu-detail">{{__('portal')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem last-panel" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('offices.index') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('global')}}</p>
                                    <p class="menu-detail">{{__('centers')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem last-panel" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('contact.index') }}">
                            <div class="menu-detail">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                <div>
                                    <p class="back-unvisible menu-title">{{__('customer')}}</p>
                                    <p class="menu-detail">{{__('support')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('_includes.footer', [
            'FOOTER_UNABLE' => true,
            'VIDEO_BACKGROUND' => true,
            'VIDEO_PLAY_TEXT' => false,
        ])

    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript">
        $(document).ready(function() {
            const videoList = document.querySelectorAll("video")
            // mute all videos
            videoList.forEach(video => {
                if (video.className != 'intro-video') {
                    video.muted = true;
                }
            })
            // Play all videos in mute state
            videoList.forEach(video => {
                if (video.className != 'intro-video') {
                    video.play()
                }
            });
        });
    </script>
    <script src="{{ asset('js/util.js') }}"></script>
@endsection
