@extends('layouts.app', ['ACTIVE_TITLE' => 'PASSWORD'], ['VIDEO_LOCK' => true])

@section('title', __('- Log In'))

@section('PAGE_LEVEL_STYLES')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg-login d-flex justify-content-center align-items-center">
    <video autoplay muted loop class="video-section" playsinline>
        <source type="video/mp4">
    </video>
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source type="video/mp4">
    </video>
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}">
    <div class="row justify-content-center m-0 p-0">
        <div class="login-page body-section">

            <form method="POST" action="{{ route('password') }}">
                @csrf

                <div class="form-group row justify-content-center">
                    <div class="col-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center mb-0">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary login-button">
                            {{ __('Enter') }}
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
@endsection
