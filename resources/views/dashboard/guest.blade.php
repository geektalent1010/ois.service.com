@extends('layouts.app', ['ACTIVE_TITLE' => 'DASHBOARD'])

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
        <div class="m-0 menu-section body-section">
            <div class="row m-0 menu-body">
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">VISA</p>
                                <p class="menu-detail">APPLICATION</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">PASSPORT</p>
                                <p class="menu-detail">APPLICATION</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">BVN</p>
                                <p class="menu-detail">APPLICATION</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">TRACK VISA</p>
                                <p class="menu-detail">APPLICATION</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('introduction.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">ABOUT OIS</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('services.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">SERVICES</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('innovation.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">INNOVATION</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('security.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">SECURITY</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('ehealth.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">E-HEALTH</p>
                                <p class="menu-detail">PORTAL</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('money.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">MONEY</p>
                                <p class="menu-detail">PORTAL</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('shopping.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">SHOPPING</p>
                                <p class="menu-detail">PORTAL</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="navItem last-panel" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center"
                            href="{{ route('reach.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">OUR REACH</p>
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
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
