@extends('layouts.app', ['ACTIVE_TITLE' => 'ADMIN'], ['VIDEO_LOCK' => true])

@section('title', __('- CMS Log In'))

@section('PAGE_LEVEL_STYLES')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg main-bg-login d-flex justify-content-center align-items-center">
    <div class="row justify-content-center m-0 p-0 login-section">
        <div class="login-page body-section d-flex flex-column align-items-center">
            <div class="login-title text-center">
                <p>Admin Portal</p>
                <span>FOR ADMIN ONLY</span>
            </div>
            <form method="POST" class="mt-3" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group row justify-content-center">
                    <div class="col-12">
                        <input id="email" type="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus />

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
        </div>
        @include('_includes.footer', ['FOOTER_UNABLE' => true])
    </div>
</div>
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
@endsection
