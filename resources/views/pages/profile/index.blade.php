@extends('layouts.app', ['ACTIVE_TITLE' => 'PROFILE'])

@section('title', __('- PROFILE'))

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
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
    <div class="m-0 profile-section">
        <div class="main-title">
            MY DETAILS
        </div>
        <div class="section-body mt-30px">
            <form class="form-section" data-form="register" autocomplete="off" method="POST" action="{{route('profile.update')}}">

            @if ($errors->any())
                <div class="alert">
                <div class="alert-body-back"></div>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br/>
                @endforeach
                </div>
            @endif

            @csrf

            <div class="row mb-24px">
            <div class="col-md-12">
                <p class="form-label">AS STATED IN YOUR PASSPORT</p>
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="first_name" class="form-control" id="first-name" placeholder="First Name"
                tabindex="1" value="{{$user->profile->first_name}}">
                <label id="first-name-error" class="has-error" for="first-name" style="display: none "></label>
            </div>
            <div class="col-md-6 form-group">
                <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Last Name" tabindex="1"
                value="{{$user->profile->last_name}}">
                <label id="last-name-error" class="has-error" for="last-name" style="display: none"></label>
            </div>
            </div>

            <div class="row mb-24px">
            <div class="col-md-6 form-group birthday-group">
                <p class="form-label">DATE OF BIRTH</p>
                <input type="text" id="birthday" data-format="YYYY-MM-DD" data-template="D MMM YYYY" name="birthday" value="{{$user->profile->birthday}}" hidden>
                <label id="birthday-error" class="has-error" for="birthday" style="display: none"></label>
            </div>
            <div class="col-md-6 form-group d-flex flex-column">
                <p class="form-label">GENDER</p>
                <div class="d-flex h-100 pl-30px">
                <label class="checkbox-container">
                    <input type="radio" name="gender" id="gender-female" value="f" {{ $user->profile->gender == 'f' ? 'checked': '' }} />
                    <span class="checkbox-circle"></span>
                    <span class="checkbox-name">{{ __('FEMALE') }}</span>
                </label>
                <label class="checkbox-container pl-5">
                    <input type="radio" name="gender" id="gender-male" value="m" {{ $user->profile->gender == 'm' ? 'checked': '' }} />
                    <span class="checkbox-circle"></span>
                    <span class="checkbox-name">{{ __('MALE') }}</span>
                </label>
                </div>
            </div>
            </div>

            <div class="row mb-24px">
            <div class="col-md-6 form-group d-flex flex-column">
                <p class="form-label">PHONE NUMBER</p>
                <div class="d-flex">
                    @php
                        $firstNumber = (explode(" ", $user->profile->phone_number))[0];
                        $lastNumber = (explode(" ", $user->profile->phone_number))[1];
                    @endphp
                    <select class="form-control phone-select webkit-style small" id="pre-phone" name="pre_phone">
                        @foreach ($phoneCodes as $code)
                        @if($firstNumber == $code)
                            <option selected value="+{{$code}}">+{{$code}}</option>
                        @else
                            <option value="+{{$code}}">+{{$code}}</option>
                        @endif

                        @endforeach
                    </select>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" tabindex="6" value="{{$lastNumber}}">
                </div>
                <label id="phone-error" class="has-error" for="phone-name" style="display: none"></label>
            </div>
            <div class="col-md-6 form-group">
                <p class="form-label">EMAIL</p>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" tabindex="1" value="{{$user->email}}">
                <label id="email-error" class="has-error" for="email" style="display: none"></label>
            </div>
            </div>

            <div class="row mb-24px">
            <div class="col-md-12">
                <p class="form-label">ADDRESS</p>
            </div>
            <div class="col-md-6 form-group">
                <input type="text" id="street" name="street" class="form-control" placeholder="Street" value="{{$user->profile->street}}">
                <label id="street-error" class="has-error" for="street" style="display: none"></label>
            </div>
            <div class="col-md-6 form-group">
                <input type="text" id="house-number" name="house_number" class="form-control" placeholder="House Number" value="{{$user->profile->house_number}}">
                <label id="house-number-error" class="has-error" for="house-number" style="display: none"></label>
            </div>
            <div class="col-md-6 form-group">
                <input type="text" id="postal-code" name="postal_code" class="form-control" placeholder="Postal Code" value="{{$user->profile->postal_code}}">
                <label id="postal-code-error" class="has-error" for="postal-code" style="display: none"></label>
            </div>
            <div class="col-md-6 form-group">
                <input type="text" id="city" name="city" class="form-control" placeholder="City" value="{{$user->profile->city}}">
                <label id="city-error" class="has-error" for="city" style="display: none"></label>
            </div>
            <div class="col-md-6 form-group">
                <select class="form-control webkit-style country-select w-100" name="country" id="country">
                    <option value="0">Country</option>
                    @foreach($countries as $country)
                        @if($user->profile->country_id == $country->id)
                        <option selected value="{{$country->id}}">{{$country['name']}}</option>
                        @else
                        <option value="{{$country->id}}">{{$country['name']}}</option>
                        @endif
                    @endforeach
                </select>
                <label id="country-error" class="has-error" for="country" style="display: none"></label>
            </div>
            </div>

            <div class="row">
            <div class="col-md-12">
                <p class="form-label">LOGIN DETAILS</p>
            </div>
            <div class="col-md-6 form-group">
                <input type="text" id="login-email" name="login_email" class="form-control" placeholder="Email" readonly value="{{$user->email}}">
            </div>
            <div class="col-md-6 form-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="">
                <label id="password-error" class="has-error" for="password" style="display: none"></label>
            </div>
            </div>

            <div class="row justify-content-center">
            <div class="col-md-6 form-group mt-19px mb-30px">
                <button class="btn btn-primary register-button button-submit" data-button="submit">
                {{ __('SAVE') }}
                </button>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/profile.js')}}"></script>
@endsection
