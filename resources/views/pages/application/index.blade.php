@extends('layouts.app', ['ACTIVE_TITLE' => 'APPLICATION'], ['VIDEO_LOCK' => true])

@section('title', __('- APPLICATION'))

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
        <div class="application-section body-section">
            <div class="application-section-content">
                <div class="mb-4">I WANT TO APPLY FOR VISA</div>

                <button class="click-here-button" onclick="window.location.href='{{ route('checklists.index') }}'">
                    CLICK HERE
                </button>

                <div class="mt-5 mb-4">I WANT TO BOOK AN APPOINTMENT</div>

                <!-- <a class="btn btn-primary click-here-button" href="https://user.staging-oisservices.com/" target="_blank">
                CLICK HERE
            </a> -->

                <button class="click-here-button" onclick="window.location.href='{{ route('booking.iframe') }}'">
                    CLICK HERE
                </button>
            </div>
            @include('_includes.footer')
        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
