@extends('layouts.app', ['ACTIVE_TITLE' => 'MENU', 'ACTIVE_LOGOUT' => 'LOGOUT', 'modalData' => $modalData])

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
    <div class="body-section">
        <div class="m-0 menu-section d-flex flex-column justify-content-center align-items-center">
            <p class="backoffice-title">WELCOME TO THE CLIENT PORTAL</p>
            <p class="backoffice-subtitle">PLEASE CHOOSE YOUR OPTION</p>
            <div class="row m-0 menu-body backoffice-body">
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">FUNCTION</p>
                                <p class="menu-detail">ONE</p>
                            </div>
                        </div>
                        <a class="back-unvisible navItemWrap-back" href="">
                            <div class="back-unvisible text-part d-flex flex-column justify-content-center">
                                <p class="menu-title">FUNCTION</p>
                                <p class="menu-detail">ONE</p>
                            </div>
                            <!-- <div class="back-unvisible go-to-page">
                                <a href="{{ route('book.index') }}">LEARN MORE</a>
                            </div> -->
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">FUNCTION</p>
                                <p class="menu-detail">TWO</p>
                            </div>
                        </div>
                        <a class="back-unvisible navItemWrap-back" href="">
                            <div class="back-unvisible text-part d-flex flex-column justify-content-center">
                                <p class="menu-title">FUNCTION</p>
                                <p class="menu-detail">TWO</p>
                            </div>
                            <!-- <div class="back-unvisible go-to-page">
                                <a href="{{ route('faq.index') }}">LEARN MORE</a>
                            </div> -->
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">FUNCTION</p>
                                <p class="menu-detail">THREE</p>
                            </div>
                        </div>
                        <a class="back-unvisible navItemWrap-back" href="">
                            <div class="back-unvisible text-part d-flex flex-column justify-content-center">
                                <p class="menu-title">FUNCTION</p>
                            </div>
                            <!-- <div class="back-unvisible go-to-page">
                                <a href="{{ route('contact.index') }}">LEARN MORE</a>
                            </div> -->
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">FUNCTION</p>
                                <p class="menu-detail">FOUR</p>
                            </div>
                        </div>
                        <a class="back-unvisible navItemWrap-back" href="">
                            <div class="back-unvisible text-part d-flex flex-column justify-content-center">
                                <p class="menu-title">FUNCTION</p>
                                <p class="menu-detail">FOUR</p>
                            </div>
                            <!-- <div class="back-unvisible go-to-page">
                                <a href="{{ route('contact.index') }}">LEARN MORE</a>
                            </div> -->
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">FUNCTION</p>
                                <p class="menu-detail">FIVE</p>
                            </div>
                        </div>
                        <a class="back-unvisible navItemWrap-back" href="">
                            <div class="back-unvisible text-part d-flex flex-column justify-content-center">
                                <p class="menu-title">FUNCTION</p>
                                <p class="menu-detail">FIVE</p>
                            </div>
                            <!-- <div class="back-unvisible go-to-page">
                                <a href="{{ route('ehealth.index') }}">LEARN MORE</a>
                            </div> -->
                        </a>
                    </div>
                </div>
                <div class="navItem" onclick="">
                    <div class="navItemWrap" onclick="">
                        <div
                            class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center">
                        </div>
                        <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                            <div class="h-100">
                                <div class="d-flex justify-content-center h-50 align-items-end">
                                    <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                                </div>
                                <p class="back-unvisible menu-title">FUNCTION</p>
                                <p class="menu-detail">SIX</p>
                            </div>
                        </div>
                        <a class="back-unvisible navItemWrap-back" href="">
                            <div class="back-unvisible text-part d-flex flex-column justify-content-center">
                                <p class="menu-title">FUNCTION</p>
                                <p class="menu-detail">SIX</p>
                            </div>
                            <!-- <div class="back-unvisible go-to-page">
                                <a href="{{ route('money.index') }}">LEARN MORE</a>
                            </div> -->
                        </a>
                    </div>
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
