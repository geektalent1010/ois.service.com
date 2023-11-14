@extends('layouts.app', ['ACTIVE_TITLE' => 'LOGIN'])

@section('title', __('- Log In'))

@section('PAGE_LEVEL_STYLES')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg-login d-flex justify-content-center align-items-center">
    <img class="login-bg" src="{{ asset('images/Image1H.png') }}">
    <img class="login-bg-mobile" src="{{ asset('images/Image1V.png') }}">
    <div class="row justify-content-center">
        <div class="login-page">
            <div class="login-title text-center">
                <p>SECURE CLIENT PORTAL</p>
                <span>FOR REGISTERED CLIENTS ONLY</span>
            </div>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row justify-content-center">
                    <div class="col-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

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

                <div class="form-group row justify-content-start">
                    <div class="col-10">
                        <label class="checkbox-container ml-3">
                            <input type="checkbox" class="autoplacement-submit" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                            <span class="checkbox-circle"></span>
                            <span class="checkbox-name">{{ __('REMEMBER ME') }}</span>
                        </label>
                    </div>
                </div>

                <div class="form-group row justify-content-center mb-0">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary login-button">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-white" href="javascript:;">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
            <div class="form-group row justify-content-center">
                <div class="col-12 text-center mt-4">
                    <button class="login-button" onclick="window.location.href='{{ route('register') }}'">
                        {{ __('REGISTER') }}
                    </button>
                    <div class="login-title text-center mb-0 mt-2">
                        <span>FOR NEW CLIENTS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script>
    const play_icon = document.querySelector('.play-video');
    play_icon.src = '/images/IconLock.svg';
</script>
@endsection