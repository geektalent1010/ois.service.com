@extends('layouts.app', ['ACTIVE_TITLE' => 'CONTACT'])

@section('PAGE_LEVEL_STYLES')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
    <div class="main-bg">
        <div class="container-section d-flex align-items-center justify-content-center">
            <video autoplay muted loop class="video-section" playsinline>
                <source type="video/mp4">
            </video>
            <video autoplay muted loop class="video-section-mobile" playsinline>
                <source type="video/mp4">
            </video>
            <img class="menu-bg" src="{{ asset('images/Image1H.png') }}">
            <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}">
            <div class="ehealth-section body-section">
                <img class="thanks-icon" src="{{ asset('images/ThankYou.svg') }}">
                <p class="reviewing-title">YOUR ENQUIRY<br>IS BEING PROCESSED</p>
                <p class="subtitle desktop-version">A member of our team will be in touch shortly</p>
                <p class="subtitle mobile-version">A member of our team<br>will be in touch shortly</p>
            </div>
        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
