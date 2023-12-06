@extends('layouts.app', ['ACTIVE_TITLE' => 'WELCOME'])

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
    <img class="cancel-video d-none" src="{{ asset('images/Stop.svg') }}" onclick="stopVideo()">
    <div class="content">
        <div id="text-container">
            <div class="landing-text text-center">Everyone thinks of changing the world,</br> here at OIS, we do!</div>
            <div class="landing-text text-center">We don't predict the future,</br>we create it!</div>
            <div class="landing-text text-center">Service is not a department,</br>it's our entire company.</div>
        </div>
        <div class="w-100 d-flex flex-column justify-content-center align-items-center">
            <p class="continue-text text-center">GO TO Dashboard</p>
            <a href="{{ route('dashboard.index') }}">
                <img class="go-to-menu" src="{{ asset('images/IconMENU.svg') }}"/>
            </a>
            <p class="continue-text text-center">GO TO LOGIN</p>
            <a href="{{ route('login') }}">
                <img class="go-to-login" src="{{ asset('images/IconLOGIN.svg') }}"/>
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
        })
    });

    $('.play-video-text').removeClass('d-none');

    // let video;
    // const intro_video_modal = document.querySelector(".video-modal");
    let video = document.querySelector('.video-section');
    let video_mobile = document.querySelector('.video-section-mobile');
    function playVideo() {
        // intro_video_modal.classList.toggle("show-modal");
        // video = document.querySelector(".intro-video");
        // video.play();
        // intro_video_modal.style.backgroundColor = "rgba(0, 60, 113, 0.7)";
        if (window.innerWidth > 769) {
            video.querySelector('source').src = '/Video/OISH.mp4';
            video.load();
            video.play();
            video.muted = false;
        }
        else {
            video_mobile.querySelector('source').src = '/Video/OISV.mp4';
            video_mobile.load();
            video_mobile.play();
            video_mobile.muted = false;
        }

        $('.play').addClass('d-none');
        $('.play-video-text').addClass('d-none');
        $('.stop').removeClass('d-none');
        $('.content').addClass('d-none');
    }
    function stopVideo() {
        if (window.innerWidth > 769) {
            video.querySelector('source').src = '/Video/LandingHD.mp4';
            video.load();
            video.play();
            video.muted = true;
        }
        else {
            video_mobile.querySelector('source').src = '/Video/LandingVM.mp4';
            video_mobile.load();
            video_mobile.play();
            video_mobile.muted = true;
        }

        $('.stop').addClass('d-none');
        $('.play').removeClass('d-none');
        $('.content').removeClass('d-none');
        $('.play-video-text').removeClass('d-none');
    }
</script>
@endsection
