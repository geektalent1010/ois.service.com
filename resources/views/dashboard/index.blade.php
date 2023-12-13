@extends('layouts.app', ['ACTIVE_TITLE' => 'DASHBOARD'], ['VIDEO_LOCK' => true])

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
    <div class="m-0 menu-section body-section dashboard-section">
        <p class="dashboard-title my-0">WELCOME TO THE CLIENT PORTAL</p>
        <div class="row m-0 menu-body">
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{ route('booking.index') }}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">VISA</p>
                            <p class="menu-detail">APPLICATION</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{ route('booking.index') }}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">PASSPORT</p>
                            <p class="menu-detail">APPLICATION</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{ route('booking.index') }}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">BVN</p>
                            <p class="menu-detail">APPLICATION</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{ route('booking.index') }}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">TRACK VISA</p>
                            <p class="menu-detail">APPLICATION</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{ route('profile.index') }}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/IconProfile.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">PROFILE</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{route('calendar.index')}}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/IconCalendar.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">CALENDAR</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{route('files.index')}}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/IconFiles.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">FILES</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{route('news.index')}}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/IconNews.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">NEWS</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
@endsection
