@extends('layouts.app', ['ACTIVE_TITLE' => 'MENU'])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg">
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}">
    <div class="m-0 menu-section">
        <div class="row m-0 menu-body">
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">BOOKING</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="{{ route('book.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">BOOKING</p>
                            <p class="menu-detail">Your portal to</br>control appointments</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('book.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">MONEY</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="{{ route('money.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">MONEY</p>
                            <p class="menu-detail">Your portal to</br>easy money transfers</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('money.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">SHOPPING</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="{{ route('shopping.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">SHOPPING</p>
                            <p class="menu-detail">Your portal to</br>amazing deals</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('shopping.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">E-HEALTH</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="{{ route('ehealth.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">E-HEALTH</p>
                            <p class="menu-detail">Your portal to</br>better health</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('ehealth.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">ABOUT OIS</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back fall-back" href="{{ route('introduction.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">ABOUT US</p>
                            <p class="menu-detail">A leading provider</br>of software solutions</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('introduction.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">SERVICES</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="{{ route('services.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">SERVICES</p>
                            <p class="menu-detail">Service is what</br>we stand for</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('services.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">INNOVATION</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="{{ route('innovation.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">INNOVATION</p>
                            <p class="menu-detail">The future of virtual</br>reality is here</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('innovation.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">SECURITY</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="{{ route('security.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">SECURITY</p>
                            <p class="menu-detail">With OIS your data</br>is secure</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('security.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">OUR REACH</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="{{ route('reach.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">OUR REACH</p>
                            <p class="menu-detail">Industries<br>and Geographies</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('reach.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">FAQ</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="{{ route('faq.index') }}">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">FAQ</p>
                            <p class="menu-detail">All your questions<br>answered</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="{{ route('faq.index') }}">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem last-panel" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/Logo/ContactIcon.svg') }}">
                            </div>
                            <p class="back-unvisible menu-title">CONTACT US</p>
                        </div>
                    </div>
                    <a class="back-unvisible navItemWrap-back" href="">
                        <div class = "back-unvisible text-part d-flex flex-column justify-content-center">
                            <p class="menu-title">CONTACT US</p>
                            <p class="menu-detail">The fastest way</br>to get in touch</p>
                        </div>
                        <!-- <div class="back-unvisible go-to-page">
                            <a href="">LEARN MORE</a>
                        </div> -->
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <div class="menu-item navItemWrap-front d-flex justify-content-center align-items-center">
                    </div>
                    <div class="back-unvisible navItemWrap-back">
                        <div class = "back-unvisible empty-part">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection
