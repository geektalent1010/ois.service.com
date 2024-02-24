@extends('layouts.app', ['ACTIVE_TITLE' => __('support')])

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
        <img class="menu-bg" src="{{ asset('images/Image1H.png') }}">
        <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}">
        <div class="d-flex justify-content-center">
            <div class="contact-section">
                <div class="contact-section-content body-section">
                    <p class="page-title">{{__('send_a_message')}}</p>
                    <div class="info-container w-100 d-flex justify-content-center">
                        <div class="info-box">
                            <input type="text" class="input-field" placeholder="{{__('first_name')}}, {{__('last_name')}}" />
                            <input type="email" class="input-field" placeholder="{{__('email')}}" />
                            <input type="text" class="input-field" placeholder="{{__('phone')}}" />
                            <select class="country-select webkit-style">
                                <option value="-1">{{__('country')}} + {{__('subject')}}</option>
                            </select>
                            <select class="subject-select webkit-style">
                                <option value="-1">{{__('subject')}}</option>
                            </select>
                            <textarea type="text" class="input-field" placeholder="{{__('message')}}" rows="4"></textarea>
                            <div class="btn-section">
                                <a href="{{ route('contact.reviewing') }}" class="send-btn">{{__('send')}}</a>
                            </div>
                        </div>

                    </div>
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
