@extends('layouts.app', ['ACTIVE_TITLE' => 'WELCOME'], ['VIDEO_BACKGROUND' => true], ['VIDEO_PLAY_TEXT' => true])

@section('PAGE_START')
@endsection

@include('_includes.introVideo')

@section('PAGE_CONTENT')
    <div class="video-wrapper">
        <video class="video-section" id="landing-video" muted loop playsinline>
            <source src="{{ asset('Video/LandingHD.mp4') }}" type="video/mp4">
        </video>
        <video class="video-section-mobile" id="landing-video-mobile" muted loop playsinline>
            <source src="{{ asset('Video/LandingVM.mp4') }}" type="video/mp4">
        </video>
        <img class="menu-bg d-none" src="{{ asset('images/Image1H.png') }}" alt="">
        <img class="menu-bg-mobile d-none" src="{{ asset('images/Image1V.png') }}" alt="">
        <img class="cancel-video d-none" src="{{ asset('images/Stop.svg') }}" onclick="stopVideo_landing()">
        <div class="content">
            <div id="text-container">
                <div class="landing-text text-center">Everyone thinks of changing the world,</br> here at OIS, we do!</div>
                <div class="landing-text text-center">We don't predict the future,</br>we create it!</div>
                <div class="landing-text text-center">Service is not a department,</br>it's our entire company.</div>
            </div>
            <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                <p class="continue-text text-center">GO TO DASHBOARD</p>
                <a href="{{ route('dashboard.index') }}">
                    <img class="go-to-menu" src="{{ asset('images/IconMENU.svg') }}" />
                </a>
                <p class="continue-text text-center">GO TO LOGIN</p>
                <a href="{{ route('login') }}">
                    <img class="go-to-login" src="{{ asset('images/IconLOGIN.svg') }}" />
                </a>
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
