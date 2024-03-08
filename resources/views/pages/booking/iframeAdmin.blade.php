@extends('layouts.app', ['ACTIVE_TITLE' => 'ADMIN', 'VIDEO_LOCK' => true, 'modalData' => $modalData])

@section('title', __('- BOOKING ADMIN'))

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
    <div class="booking-section body-section">
      <iframe width="100%" height="100%" frameborder="0" src="https://admin-app-ew2wz.ondigitalocean.app" id="iFrame1"></iframe>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
@endsection
