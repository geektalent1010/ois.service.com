@extends('layouts.app', ['ACTIVE_TITLE' => 'REGISTRATION'])

@section('title', __('- Log In'))

@section('PAGE_LEVEL_STYLES')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg-login d-flex align-items-center justify-content-center"> 
    <img class="login-bg" src="{{ asset('images/Image1H.png') }}">
    <img class="login-bg-mobile" src="{{ asset('images/Image1V.png') }}">
    <div class="register-section">
        <img class="icon" src="{{ asset('images/IconOIS3.svg') }}">
        <p class="title">This page<br>is under construction</p>
        <p class="subtitle">COMING SOON</p>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript">
    const play_icon = document.querySelector('.play-video');
    play_icon.src = '/images/IconLock.svg';
</script>
@endsection