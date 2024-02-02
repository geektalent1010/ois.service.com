@extends('layouts.app', ['ACTIVE_TITLE' => 'WELCOME'], ['FOOTER_UNABLE' => true], ['VIDEO_BACKGROUND' => true], ['VIDEO_PLAY_TEXT' => true])

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
            <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
            <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
            <img class="cancel-video d-none" src="{{ asset('images/Stop.svg') }}" onclick="stopVideo_landing()">

        </div>
        <div class="landing-section">
            <div class="row m-0 menu-body">
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('introduction.index') }}">
                            <div class="h-100 flex-column d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">ABOUT OIS</p>
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
                            <div class="h-100 flex-column d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">SERVICES</p>
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
                            <div class="h-100 flex-column d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">INNOVATION</p>
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
                            <div class="h-100 flex-column d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">SECURITY</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">CLIENT</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">VISA</p>
                                <p class="menu-detail">APPLICATION</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">PASSPORT</p>
                                <p class="menu-detail">APPLICATION</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">BVN</p>
                                <p class="menu-detail">APPLICATION</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">NIN</p>
                                <p class="menu-detail">APPLICATION</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">TRACK VISA</p>
                                <p class="menu-detail">APPLICATION</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">E-HEALTH</p>
                                <p class="menu-detail">PORTAL</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">MONEY</p>
                                <p class="menu-detail">PORTAL</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">SHOPPING</p>
                                <p class="menu-detail">PORTAL</p>
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
                            href="{{ route('login') }}">
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">GOLBAL</p>
                                <p class="menu-detail">CENTERS</p>
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
                            <div class="h-100 flex-column  d-flex justify-content-center align-items-center">
                                <p class="back-unvisible menu-title">CUSTOMER</p>
                                <p class="menu-detail">SUPPORT</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

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
