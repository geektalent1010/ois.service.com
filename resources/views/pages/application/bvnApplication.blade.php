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
    <div class="m-0 checklists-section">
        <div class="main-title mt-2">
            BVN CHECKLIST
        </div>
        <div class="section-body body-section mt-30px">
            <div class="form-section">
                <div class="row justify-content-center">
                    <div class="col-md-8 form-group">
                        <div>
                            <div class="mb-4">You will be required to present the following:</div>
                            <div class="pl-4">Valid ID(any of the following):</div>
                            <div>a) <span class="pl-2">Nigerian International Passport</span></div>
                            <div>b) <span class="pl-2">Nigerian National ID Card</span></div>
                            <div>c) <span class="pl-2">Nigerian Drivers License</span></div>
                            <div>d) <span class="pl-2">International Passport (Non Nigerian)</span></div>
                            <div class="pl-4">One recent passport photograph</div>
                            <div class="pl-4">BVN Enrolment form which will be provided at our center</div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-30px mb-30px">
                    <div class="col-md-6 form-group">
                        <div class="prefix-label mb-4 text-center">I WANT TO BOOK AN APPOINTMENT</div>
                        <!-- <a class="btn btn-primary confirm-button" href="https://sea-turtle-app-e6m4o.ondigitalocean.app/" target="_blank">
                            CLICK HERE
                        </a> -->

                        <button class="confirm-button" onclick="window.location.href='{{ route('booking.iframe') }}'">
                            CLICK HERE
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('_includes.footer')
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
@endsection
