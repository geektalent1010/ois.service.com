@extends('layouts.app', ['ACTIVE_TITLE' => __('booking'), 'VIDEO_LOCK' => true, 'modalData' => $modalData])

@section('title', __('booking'))

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
        <div class="booking-section">
            <div class="body-section"
                style=" min-height: calc(100vh - 120px); display:flex; flex-direction:column;align-items:center;justify-content:center">
                <div>{{__('start_booking_screen')}}</div>
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
