@extends('layouts.app', ['ACTIVE_TITLE' => 'BOOK NOW'], ['VIDEO_LOCK' => true])

@section('title', __('- BOOKING'))

@section('PAGE_LEVEL_STYLES')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
    <div class="main-bg">
        <video autoplay muted loop class="video-section" playsinline>
            <source type="video/mp4">
        </video>
        <video autoplay muted loop class="video-section-mobile" playsinline>
            <source type="video/mp4">
        </video>
        <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
        <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
        <div class="booking-section">
            <iframe style=" min-height: calc(100vh - 125px)" class=" body-section" width="100%" height="100%"
                frameborder="0" src="https://sea-turtle-app-e6m4o.ondigitalocean.app" id="iFrame1"></iframe>
            @include('_includes.footer')
        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
