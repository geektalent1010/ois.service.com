@extends('layouts.app', ['ACTIVE_TITLE' => __('application'), 'VIDEO_LOCK' => true, 'modalData' => $modalData])

@section('title', '- '.__('application'))

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
        <div class="application-section">
            <div class="application-section-content body-section">
                {{-- <div class="mb-4">{{__('i_want_to_apply_for_visa')}}</div>

                <button class="click-here-button" onclick="window.location.href='{{ route('checklists.index') }}'">
                    {{__('click_here_U')}}
                </button> --}}

                <div class="row visa-section">
                    <div class="col-md-6 visa-section-item">
                        <div class="mb-4 visa-section-item-label">{{ __('i_want_to_apply_for_usa_visa') }}</div>

                        <button class="click-here-button" onclick="window.location.href='{{ route('usaChecklists.index') }}'">
                            {{ __('click_here_U') }}
                        </button>
                    </div>

                    <div class="col-md-6 visa-section-item">
                        <div class="mb-4 visa-section-item-label">{{ __('i_want_to_apply_for_nigerian_visa') }}</div>

                        <button class="click-here-button" onclick="window.location.href='{{ route('nigerianChecklists.index') }}'">
                            {{ __('click_here_U') }}
                        </button>
                    </div>
                </div>

                <div class="mt-5 mb-4">{{__('i_want_to_book_an_appointment')}}</div>

                <!-- <a class="btn btn-primary click-here-button" href="https://user.staging-oisservices.com/" target="_blank">
                CLICK HERE
            </a> -->

                <button class="click-here-button" onclick="window.open('https://apt.oisservices.com/', '_blank')">
                    {{__('click_here_U')}}
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
