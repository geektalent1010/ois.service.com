@extends('layouts.app', ['ACTIVE_TITLE' => __('login')], ['VIDEO_LOCK' => true])

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
    <div class="row justify-content-center m-0 p-0">
        <div class="login-page body-section d-flex flex-column align-items-center">
            <div class="login-title text-center">
                <p>{{__('secure_client_portal')}}</p>
                <span>{{__('for_registered_clients_only')}}</span>
            </div>

            <form method="POST" class="mt-3" action="{{ route('login', ['id' => $id]) }}">
                @csrf
                <div class="form-group row justify-content-center">
                    <div class="col-12">
                        <input id="email" type="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{__('email_L')}}" required autocomplete="email" autofocus />

                        @error('email')
                            <input type="hidden" class="error-input"  value="{{$message}}"/>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="col-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{__('password_L')}}" required autocomplete="current-password">

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
                            <span class="checkbox-name">{{ __('remember_me') }}</span>
                        </label>
                    </div>
                </div>

                <div class="form-group row justify-content-center mb-0">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary login-button">
                            {{ __('login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-white" href="{{route('forgot.index')}}">
                                {{ __('forgot_your_password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
            <div class="register-group">
                <div class="form-group row justify-content-center">
                            <div class="col-12 text-center mt-4">
                        <button class="login-button" onclick="window.location.href='{{ route('register') }}'">
                            {{ __('register') }}
                        </button>
                        <div class="login-title text-center mb-0 mt-2">
                            <span>{{__('for_new_clients')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('_includes.footer', ['FOOTER_UNABLE' => true])
    </div>
</div>
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script>
    if($('.error-input').val()) {
        customAlert('We are so sorry', $('.error-input').val(), 'error');
    } else {
        @if(isset($id) && $id > 0)
            customAlert('Congratulations', 'Your email address is confirmed and you now have access to the client portal.', 'success');
        @endif
    }

</script>
@endsection
