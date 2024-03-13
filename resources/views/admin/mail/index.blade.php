@extends('layouts.app', ['ACTIVE_TITLE' => 'MAIL'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section mail-manager-section">
        <div class="manager-body">
            <div class="main-title">MAIL MANAGER</div>
            <div class="content-panel-part mt-30px">
                <div class="content-panel active" value="1">MAIL 1</div>
                <div class="content-panel" value="2">MAIL 2</div>
                <div class="content-panel">MAIL 3</div>
                <div class="content-panel">MAIL 4</div>
            </div>
            <div class="content-edit-body">
                @csrf
                <div class="mail-header">
                    <div class="mail-header-logo">
                        <img src="{{ asset('images/Logo/LogoOIS1.svg') }}" alt="">
                    </div>
                    <div class="mail-header-title">WELCOME</div>
                    <div class="mail-header-logout">
                        <img src="{{ asset('images/Icon2.png') }}" alt="">
                    </div>
                </div>
                <div class="mail-back">
                    <img src="{{ asset('images/Globe.png') }}" alt="" />
                </div>
                <div class="mail-edit-text">
                    <div class="mail-text mail-text1">
                        @foreach ($content1 as $key => $item)
                            <div class="mail-text-para"><span contentId="{{$item->id}}" contenteditable="true">{{$item->content}}</span> {{$key == 0 ? '***' : ''}}</div>
                        @endforeach
                    </div>
                    <div class="mail-text mail-text2 d-none">
                        @foreach ($content2 as $key => $item)
                            <div class="mail-text-para">
                                <span contentId="{{$item->id}}" contenteditable="true">{{$item->content}}</span>
                                {{$key == 0 ? '***' : ''}}
                                @if ($key == 4)
                                    <a style="color: white" href="https://ois.brandfields.com/admin/login">OIS - CMS Log In</a>
                                @endif
                                {{$key == 5 ? '***' : ''}}
                                {{$key == 6 ? '***' : ''}}
                            </div>

                        @endforeach
                    </div>
                    <div class="mail-confirm-button">
                        <button>CONFIRM YOUR EMAIL</button>
                    </div>
                </div>
                <div class="mail-footer">
                    <div class="mail-footer-first">
                        <div class="mail-footer-top-left">
                            <div class="mail-center">OIS GLOBAL CENTERS</div>
                            <div class="mail-click">Click here</div>
                        </div>
                        <div class="mail-footer-top-right">
                            <div class="mail-social">SOCIAL</div>
                            <div class="mail-social-icons">
                                <div class="mail-social-icon"><img src="{{ asset('images/Face.png') }}" alt=""></div>
                                <div class="mail-social-icon"><img src="{{ asset('images/Link.png') }}" alt=""></div>
                                <div class="mail-social-icon"><img src="{{ asset('images/Insta.png') }}" alt=""></div>
                                <div class="mail-social-icon"><img src="{{ asset('images/Twit.png') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="mail-footer-second">
                        <div class="mail-terms-text">Terms of Use</div>
                        <div class="">|</div>
                        <div class="mail-terms-text">Privacy Policy</div>
                        <div class="">|</div>
                        <div class="mail-terms-text">Data Protection Policy</div>
                    </div>
                </div>
                <div class="mail-bottom-bar">
                    If you don't wish to receive future community emails, click here: <a> unsubscribe</a>
                </div>
            </div>
            <div class="info-button mt-35px">
                <button id="save-but">UPDATE</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin_mail.js')}}"></script>
@endsection
