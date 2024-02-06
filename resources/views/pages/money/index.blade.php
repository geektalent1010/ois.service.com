@extends('layouts.app', ['ACTIVE_TITLE' => 'MONEY'], ['VIDEO_STATUS' => true])

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
            <div class="money-section body-section">
                <div class="money-section-content">
                    <img class="icon" src="{{ asset('images/IconMONEYTRANSFER.svg') }}">
                    <p class="title">Your portal<br>to easy money transfers</p>
                    <p class="subtitle">COMING SOON</p>
                </div>
                @include('_includes.footer')
            </div>
        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
