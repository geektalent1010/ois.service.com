@extends('layouts.app', ['ACTIVE_TITLE' => __('nin'), 'VIDEO_STATUS' => true, 'modalData'=>$modalData])

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
            <div class="nin-section body-section">
                <div class="nin-section-content">
                    <img class="icon" src="{{ asset('images/Logo/OISIcon.svg') }}" alt="" />
                    <p class="title">{{__('nin')}} {{__('application_L')}}</p>
                    <p class="subtitle">{{__('coming_soon')}}</p>
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
