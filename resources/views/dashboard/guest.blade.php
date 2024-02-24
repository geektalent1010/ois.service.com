@extends('layouts.app', ['ACTIVE_TITLE' => __('dashboard')])

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
                            href="{{ route('introduction.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">{{__('about_ois')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('passport')}}</p>
                                <p class="menu-detail">{{__('application')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('bvn')}}</p>
                                <p class="menu-detail">{{__('application')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('track_visa')}}</p>
                                <p class="menu-detail">{{__('application')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('visa')}}</p>
                                <p class="menu-detail">{{__('application')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('services')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('innovation')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('security')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('e_health')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('money')}}</p>
                                <p class="menu-detail">{{__('portal')}}</p>
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
                                <p class="back-unvisible menu-title">{{__('shopping')}}</p>
                                <p class="menu-detail">{{__('portal')}}</p>
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
                            href="{{ route('contact.index') }}">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">{{__('customer')}}</p>
                                <p class="menu-detail">{{__('support')}}</p>
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
