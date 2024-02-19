@extends('layouts.app', ['ACTIVE_TITLE' => 'MENU'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg main-bg">
    <div class="m-0 menu-section body-section dashboard-section">
        <p class="dashboard-title my-0">WELCOME TO THE CMS PORTAL</p>
        <div class="row m-0 menu-body">
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{ route('profile.index') }}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/IconProfile.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">MY</p>
                            <p class="menu-detail">PROFILE</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center cursor-pointer" href="{{route('roles.index')}}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">ADMIN</p>
                            <p class="menu-detail">MANAGER</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{ route('client.index') }}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">CLIENT</p>
                            <p class="menu-detail">MANAGER</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="{{ route('application.bvn') }}">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Email.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">MAIL</p>
                            <p class="menu-detail">MANAGER</p>
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
                                <img src="{{ asset('images/Studio.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">CONTENT</p>
                            <p class="menu-detail">EDITOR</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">CENTER</p>
                            <p class="menu-detail">EDITOR</p>
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
                            <p class="back-unvisible menu-title">PRICE</p>
                            <p class="menu-detail">EDITOR</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navItem" onclick="">
                <div class="navItemWrap" onclick="">
                    <div class="back-unvisible navItemWrap-front d-flex flex-column justify-content-center align-items-center"></div>
                    <a class="menu-item navItemWrap-front d-flex justify-content-center align-items-center" href="">
                        <div class="h-100">
                            <div class="d-flex justify-content-center h-50 align-items-end">
                                <img src="{{ asset('images/Logo/OISIcon.svg') }}" alt="">
                            </div>
                            <p class="back-unvisible menu-title">CHECKLIST</p>
                            <p class="menu-detail">EDITOR</p>
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
<!-- <script>
    if (!getCookie('cookieNisVisaProcessing')) {
        $('.nis-visa-modal').addClass('show-modal');
    }

    $('.agree-button').on('click', function () {
        setCookie('cookieNisVisaProcessing', true, 365);
        $('.nis-visa-modal').addClass('d-none');
    })
</script> -->
@endsection
