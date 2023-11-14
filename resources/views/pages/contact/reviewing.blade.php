@extends('layouts.app', ['ACTIVE_TITLE' => 'CONTACT'])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="container-section d-flex align-items-center justify-content-center"> 
    <video autoplay muted loop class="video-section" playsinline>
        <source type="video/mp4">
    </video>   
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source type="video/mp4">
    </video>  
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}">
    <div class="ehealth-section">
        <img class="thanks-icon" src="{{ asset('images/ThankYou.svg') }}">
        <p class="reviewing-title">YOUR ENQUIRY<br>IS BEING PROCESSED</p>
        <p class="subtitle desktop-version">A member of our team will be in touch shortly</p>
        <p class="subtitle mobile-version">A member of our team<br>will be in touch shortly</p>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript">

    let video = document.querySelector('.video-section');
    let video_mobile = document.querySelector('.video-section-mobile');
    function playVideo() {
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
        $('.stop').removeClass('d-none');
        $('.ehealth-section').addClass('d-none');
    }
    function stopVideo() {
        if (window.innerWidth > 769) {
            video.querySelector('source').src = '';
            video.load();
            video.muted = true;
        }
        else {
            video_mobile.querySelector('source').src = '';
            video_mobile.load();
            video_mobile.muted = true;
        }

        $('.stop').addClass('d-none');
        $('.play').removeClass('d-none');
        $('.ehealth-section').removeClass('d-none');
    }
</script>
@endsection