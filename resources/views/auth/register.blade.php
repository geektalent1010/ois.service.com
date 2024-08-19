@extends('layouts.app', ['ACTIVE_TITLE' => __('registration')], ['VIDEO_LOCK' => true])

@section('title', __('- Registration'))

@section('PAGE_LEVEL_STYLES')
@endsection

@section('PAGE_CONTENT')
    <div class="main-bg-login d-flex justify-content-center">
        <video autoplay muted loop class="video-section" playsinline>
            <source type="video/mp4">
        </video>
        <video autoplay muted loop class="video-section-mobile" playsinline>
            <source type="video/mp4">
        </video>
        <div class="register-section body-section w-100">
            <p class="title">{{__('my_details')}}</p>
            <form class="form-section" data-form="register" autocomplete="off" method="POST"
                action="{{ route('register') }}">

                @if ($errors->any())
                    <input type="hidden" id="error-input" value="
                        @foreach ($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    " />
                @endif

                @csrf

                <div class="row mb-24px">
                    <div class="col-md-12">
                        <p class="form-label">{{__('as_stated_in_your_passport')}} <span color="red">*</span></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="first_name" class="form-control" id="first-name"
                            placeholder="{{__('first_name')}}" tabindex="1" value="{{ old('first_name') }}">
                        <label id="first-name-error" class="has-error" for="first-name" style="display: none "></label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" name="last_name" class="form-control" id="last-name" placeholder="{{__('last_name')}}"
                            tabindex="1" value="{{ old('last_name') }}">
                        <label id="last-name-error" class="has-error" for="last-name" style="display: none"></label>
                    </div>
                </div>

                <div class="row mb-24px">
                    <div class="col-md-6 form-group birthday-group">
                        <p class="form-label">{{__('date_of_birth')}} <span color="red">*</span></p>
                        <input type="text" id="birthday" data-format="DD-MM-YYYY" data-template="DD MMM YYYY"
                            name="birthday" value="{{ old('birthday') }}" hidden>
                        <label id="birthday-error" class="has-error" for="birthday" style="display: none"></label>
                    </div>
                    <div class="col-md-6 form-group d-flex flex-column">
                        <p class="form-label">{{__('gender')}}</p>
                        <div class="d-flex h-100 pl-30px">
                            <label class="checkbox-container">
                                <input type="radio" name="gender" id="gender-female" checked value="f" />
                                <span class="checkbox-circle"></span>
                                <span class="checkbox-name">{{ __('female') }}</span>
                            </label>
                            <label class="checkbox-container pl-5">
                                <input type="radio" name="gender" id="gender-male" value="m" />
                                <span class="checkbox-circle"></span>
                                <span class="checkbox-name">{{ __('male') }}</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-24px">
                    <div class="col-md-6 form-group d-flex flex-column">
                        <p class="form-label">{{__('phone_number')}} <span color="red">*</span></p>
                        <div class="d-flex">
                            <select class="form-control phone-select webkit-style small" id="pre-phone" name="pre_phone">
                                @foreach ($phoneCodes as $code)
                                    @if (old('pre_phone') == $code)
                                        <option selected value="+{{ $code }}">+{{ $code }}</option>
                                    @else
                                        <option value="+{{ $code }}">+{{ $code }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="{{__('phone_number_L')}}" tabindex="6" value="{{ old('phone') }}">
                        </div>
                        <label id="phone-error" class="has-error" for="phone-name" style="display: none"></label>
                    </div>
                    <div class="col-md-6 form-group">
                        <p class="form-label">{{__('email')}} <span color="red">*</span></p>
                        <input type="text" name="email" class="form-control" id="email" placeholder="{{__('email_L')}}"
                            tabindex="1" value="{{ old('email') }}">
                        <label id="email-error" class="has-error" for="email" style="display: none"></label>
                    </div>
                </div>

                <div class="row mb-24px">
                    <div class="col-md-12">
                        <p class="form-label">{{__('address')}} <span color="red">*</span></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" id="street" name="street" class="form-control" placeholder="{{__('street')}}"
                            value="{{ old('street') }}">
                        <label id="street-error" class="has-error" for="street" style="display: none"></label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" id="house-number" name="house_number" class="form-control"
                            placeholder="{{__('house_number')}}" value="{{ old('house_number') }}">
                        <label id="house-number-error" class="has-error" for="house-number"
                            style="display: none"></label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" id="postal-code" name="postal_code" class="form-control"
                            placeholder="{{__('postal_code')}}" value="{{ old('postal_code') }}">
                        <label id="postal-code-error" class="has-error" for="postal-code" style="display: none"></label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" id="city" name="city" class="form-control" placeholder="{{__('city_L')}}"
                            value="{{ old('city') }}">
                        <label id="city-error" class="has-error" for="city" style="display: none"></label>
                    </div>
                    <div class="col-md-6 form-group">
                        <select class="form-control webkit-style country-select w-100" name="country" id="country">
                            <option value="0">{{__('country')}}</option>
                            @foreach ($countries as $country)
                                @if (old('country') == $country->id)
                                    <option selected value="{{ $country->id }}">{{ $country['name'] }}</option>
                                @else
                                    <option value="{{ $country->id }}">{{ $country['name'] }}</option>
                                @endif
                            @endforeach
                        </select>
                        <label id="country-error" class="has-error" for="country" style="display: none"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p class="form-label">{{__('login_details')}} <span color="red">*</span></p>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" id="login-email" name="login_email" class="form-control"
                            placeholder="{{__('email_L')}}" value="{{ old('login_email') }}">
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="{{__('password_L')}}" value="{{ old('password') }}">
                        <label id="password-error" class="has-error" for="password" style="display: none"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="terms-of-service">
                            <input type="checkbox" id="terms-of-service" />
                            I have read and agree to the terms of service
                        </label>
                        | <a href="{{route('terms.index')}}" class="modalhref" target="_blank">Terms of use</a>
                        | <a href="{{route('policy.index')}}" class="modalhref" target="_blank">Privacy policies</a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 form-group mt-19px mb-30px">
                        <button class="btn btn-primary register-button button-submit d-none" data-button="submit" id="register-but">
                            {{ __('save') }}
                        </button>
                        <div class="btn btn-primary register-button" disabled id="register-but-disabled">
                            {{ __('save') }}
                        </div>
                    </div>
                </div>
            </form>
            @include('_includes.footer', ['FOOTER_UNABLE' => true])
        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/register.js') }}"></script>

    <script>
        if($('#error-input').val()) {
            customAlert('We are so sorry', $('#error-input').val(), 'error');
        }
    </script>

@endsection
