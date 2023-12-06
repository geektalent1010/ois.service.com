@extends('layouts.app', ['ACTIVE_TITLE' => 'REGISTRATION'])

@section('title', __('- Registration'))

@section('PAGE_LEVEL_STYLES')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg-login d-flex justify-content-center">
  <img class="login-bg" src="{{ asset('images/Image1H.png') }}" alt="">
  <img class="login-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
  <div class="register-section w-100">
    <p class="title">MY DETAILS</p>
    <form class="form-section" data-form="register" autocomplete="off" method="POST" action="{{route('register')}}">

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
            tabindex="1" value="{{old('first_name')}}">
          <label id="first-name-error" class="has-error" for="first-name" style="display: none "></label>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Last Name" tabindex="1"
            value="{{old('last_name')}}">
          <label id="last-name-error" class="has-error" for="last-name" style="display: none"></label>
        </div>
      </div>

      <div class="row mb-24px">
        <div class="col-md-6 form-group">
          <p class="form-label">DATE OF BIRTH</p>
          <input type="text" id="birthday" data-format="DD-MM-YYYY" data-template="D MMM YYYY" name="birthday" value="{{old('birthday')}}" hidden>
          <label id="birthday-error" class="has-error" for="birthday" style="display: none"></label>
        </div>
        <div class="col-md-6 form-group d-flex flex-column">
          <p class="form-label">GENDER</p>
          <div class="d-flex h-100 pl-30px">
            <label class="checkbox-container">
              <input type="radio" name="gender" id="gender-female" checked value="f" />
              <span class="checkbox-circle"></span>
              <span class="checkbox-name">{{ __('FEMALE') }}</span>
            </label>
            <label class="checkbox-container pl-5">
              <input type="radio" name="gender" id="gender-male" value="m" />
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
            <input type="text" id="real-phone" name="real_phone" placeholder="Phone Number" hidden>
            <select class="form-control phone-select webkit-style small" id="pre-phone" name="pre_phone">
              @foreach ($phoneCodes as $code)
                @if(old('pre_phone') == $code)
                  <option selected value="+{{$code}}">+{{$code}}</option>
                @else
                  <option value="+{{$code}}">+{{$code}}</option>
                @endif

              @endforeach
            </select>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" tabindex="6" value="{{old('phone')}}">
          </div>
          <label id="phone-error" class="has-error" for="phone-name" style="display: none"></label>
        </div>
        <div class="col-md-6 form-group">
          <p class="form-label">EMAIL</p>
          <input type="text" name="email" class="form-control" id="email" placeholder="Email" tabindex="1" value="{{old('email')}}">
          <label id="email-error" class="has-error" for="email" style="display: none"></label>
        </div>
      </div>

      <div class="row mb-24px">
        <div class="col-md-12">
          <p class="form-label">ADDRESS</p>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" id="street" name="street" class="form-control" placeholder="Street" value="{{old('street')}}">
          <label id="street-error" class="has-error" for="street" style="display: none"></label>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" id="house-number" name="house_number" class="form-control" placeholder="House Number" value="{{old('house_number')}}">
          <label id="house-number-error" class="has-error" for="house-number" style="display: none"></label>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" id="postal-code" name="postal_code" class="form-control" placeholder="Postal Code" value="{{old('postal_code')}}">
          <label id="postal-code-error" class="has-error" for="postal-code" style="display: none"></label>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" id="city" name="city" class="form-control" placeholder="City" value="{{old('city')}}">
          <label id="city-error" class="has-error" for="city" style="display: none"></label>
        </div>
        <div class="col-md-6 form-group">
          <select class="form-control webkit-style country-select w-100" name="country" id="country">
            <option value="0">Country</option>
            @foreach($countries as $country)
              @if(old('country') == $country->id)
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
          <input type="text" id="login-email" name="login_email" class="form-control" placeholder="Email" readonly value="{{old('login_email')}}">
        </div>
        <div class="col-md-6 form-group">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}">
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
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript">

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  let emailTimer = null;

  const register = {
    init: function () {
      this.variables();
      this.addEventListeners();
      this.firstInputFocus();
    },
    variables: function () {
      this.form = $('[data-form="register"]');
      this.submitButton = $("[data-button='submit']");
      this.firstNameInput = $("#first-name");
      this.firstNameError = $("#first-name-error");
      this.lastNameInput = $("#last-name");
      this.lastNameError = $("#last-name-error");
      this.birthdayInput = $("#birthday");
      this.birthdayError = $("#birthday-error");
      this.phoneInput = $("#phone");
      this.phoneError = $("#phone-error");
      this.emailInput = $("#email");
      this.loginEmailInput = $("#login-email")
      this.emailError = $("#email-error");
      this.streetInput = $("#street");
      this.streetError = $("#street-error");
      this.houseNumberInput = $("#house-number");
      this.houseNumberError = $("#house-number-error");
      this.postalCodeInput = $("#postal-code");
      this.postalCodeError = $("#postal-code-error");
      this.cityInput = $("#city");
      this.cityError = $("#city-error");
      this.countrySelect = $("#country");
      this.countryError = $("#country-error");
      this.passwordInput = $("#password");
      this.passwordError = $("#password-error");
      this.scrollToError = "";
    },
    addEventListeners: function () {
      this.firstNameInput.on("keyup", function () {
        this.validateFirstNameInput();
      }.bind(this));
      this.lastNameInput.on('keyup', function () {
        this.validateLastNameInput();
      }.bind(this));
      this.phoneInput.on('keyup', function () {
        this.validatePhoneInput();
      }.bind(this));
      this.emailInput.on('keyup', function () {
        this.validateEmailInput();
      }.bind(this));
      this.streetInput.on('keyup', function () {
        this.validateStreetInput();
      }.bind(this));
      this.houseNumberInput.on('keyup', function () {
        this.validateHouseNumberInput();
      }.bind(this));
      this.postalCodeInput.on('keyup', function () {
        this.validatePostalCodeInput();
      }.bind(this));
      this.cityInput.on('keyup', function () {
        this.validateCityInput();
      }.bind(this));
      this.countrySelect.on('change', function () {
        this.validateCountrySelect();
      }.bind(this));
      this.passwordInput.on('keyup', function () {
        this.validatePasswordInput();
      }.bind(this));
      this.birthdayInput.on('change', function() {
        this.validateBirthdayInput();
      }.bind(this));
      this.form.on('submit', function (event) {
        if ((this.validateFirstNameInput() &&
          this.validateLastNameInput() &&
          this.validatePhoneInput() &&
          this.validateEmailInput() &&
          this.validateStreetInput() &&
          this.validateHouseNumberInput() &&
          this.validatePostalCodeInput() &&
          this.validateCityInput() &&
          this.validateCountrySelect() &&
          this.validatePasswordInput() &&
          this.validateBirthdayInput())
        ) {
          $('.button-submit').attr('disabled', true);
          return true;
        } else {
          event.preventDefault();
          this.scrollToElement(this.scrollToError);
          this.scrollToError.focus();
        }
      }.bind(this));
    },
    scrollToElement: function (element) {
      $('body, html').animate({
        scrollTop: element.offset().top - 80
      }, 500);
    },
    firstInputFocus: function () {
      setTimeout(function () {
        this.firstNameInput.focus();
      }.bind(this), 300);
    },
    validateFirstNameInput: function () {
      var validationMessage = '';
      var value = this.firstNameInput.val();
      if ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)) || (/^[\p{L}\d\- ]{2,50}$/u.test(value))) {
        validationMessage = 'Now, that\'s a good name.\n';
        this.firstNameError.addClass('valid');
        this.firstNameError.hide();
      } else if (value === '') {
        validationMessage = 'The name field is required.';
        this.firstNameError.removeClass('valid');
        this.firstNameError.show();
      } else {
        validationMessage = 'The name must contain only letter and be minimum of 2 characters.';
        this.firstNameError.removeClass('valid');
        this.firstNameError.show();
      }
      this.firstNameError.html(validationMessage);
      this.scrollToError = this.firstNameInput;
      return ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)) || (/^[\p{L}\d\- ]{2,50}$/u.test(value)));
    },
    validateLastNameInput: function () {
      var validationMessage = '';
      var value = this.lastNameInput.val();
      if ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)) || (/^[\p{L}\d\- ]{2,50}$/u.test(value))) {
        validationMessage = 'Now, that\'s a good last name.\n';
        this.lastNameError.addClass('valid');
        this.lastNameError.hide();
      } else if (value === '') {
        validationMessage = 'The last name field is required.';
        this.lastNameError.removeClass('valid');
        this.lastNameError.show();
      } else {
        validationMessage = 'The last name must contain only letter and be minimum of 2 characters.';
        this.lastNameError.removeClass('valid');
        this.lastNameError.show();
      }
      this.lastNameError.html(validationMessage);
      this.scrollToError = this.lastNameInput;
      return ((/^[a-zA-Z\-0-9 ]{2,50}$/.test(value)) || (/^[\p{L}\d\- ]{2,50}$/u.test(value)));
    },
    validatePhoneInput: function () {
      var validationMessage = '';
      var value = this.phoneInput.val();
      if ((/^[0-9 ]{7,50}$/.test(value.trim())) || (/^(\+)?[0-9 ]{6,50}$/.test(value.trim()))) {
        validationMessage = 'Now, that\'s a good phone number.\n';
        this.phoneError.addClass('valid');
        this.phoneError.hide();
      } else if (value === '') {
        validationMessage = 'The phone number field is required.';
        this.phoneError.removeClass('valid');
        this.phoneError.show();
      } else {
        validationMessage = 'Minimum 7 digits.';
        this.phoneError.removeClass('valid');
        this.phoneError.show();
      }
      this.phoneError.html(validationMessage);
      this.scrollToError = this.phoneInput;
      return ((/^[0-9 ]{7,50}$/.test(value.trim())) || (/^(\+)?[0-9 ]{6,50}$/.test(value.trim())));
    },
    validateEmailInput: function () {
      var validationMessage = '';
      var value = this.emailInput.val();
      if ((/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value))) {
        validationMessage = 'Now, that\'s a good email.\n';
        this.emailError.addClass('valid');
        this.emailError.hide();
      } else if(value === '') {
        validationMessage = 'The email field is required.';
        this.emailError.removeClass('valid');
        this.emailError.show();
      } else {
        validationMessage = 'Email is not valid.';
        this.emailError.removeClass('valid');
        this.emailError.show();
      }
      this.emailError.html(validationMessage);
      this.scrollToError = this.emailInput;
      this.loginEmailInput.val(this.emailInput.val());
      return ((/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value)));
    },
    validateStreetInput: function() {
      var validationMessage = '';
      var value = this.streetInput.val();
      if((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)) || (/^[\p{L}\d\- ]{3,50}$/u.test(value))) {
        validationMessage = 'Now, that\'s a good street name.\n';
        this.streetError.addClass('valid');
        this.streetError.hide();
      } else if(value === '') {
        validationMessage = 'Street name is required.';
        this.streetError.removeClass('valid');
        this.streetError.show();
      } else {
        validationMessage = 'The street name must contain letter and number and be minimum of 3 characters.';
        this.streetError.removeClass('valid');
        this.streetError.show();
      }
      this.streetError.html(validationMessage);
      this.scrollToError = this.streetInput;
      return (/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)) || (/^[\p{L}\d\- ]{3,50}$/u.test(value));
    },
    validateHouseNumberInput: function() {
      var validationMessage = '';
      var value = this.houseNumberInput.val();
      if((/^.{1,50}$/.test(value))) {
        validationMessage = 'Now, that\'s a good house number.\n';
        this.houseNumberError.addClass('valid');
        this.houseNumberError.hide();
      } else if(value === '') {
        validationMessage = 'House number is required';
        this.houseNumberError.removeClass('valid');
        this.houseNumberError.show();
      } else {
        validationMessage = 'The house number must contain letter and number and be minimum of 3 characters.';
        this.houseNumberError.removeClass('valid');
        this.houseNumberError.show();
      }
      this.houseNumberError.html(validationMessage);
      this.scrollToError = this.houseNumberInput;
      return ((/^.{1,50}$/.test(value)));
    },
    validatePostalCodeInput: function() {
      var validationMessage = '';
      var value = this.postalCodeInput.val();
      if((/^.{3,50}$/.test(value))) {
        validationMessage = 'Now, that\' a good zip code.\n';
        this.postalCodeError.addClass('valid');
        this.postalCodeError.hide();
      } else if (value === '') {
        validationMessage = 'Zip code is required';
        this.postalCodeError.removeClass('valid');
        this.postalCodeError.show();
      } else {
        validationMessage = 'Minimum 3 characters / digits.';
        this.postalCodeError.removeClass('valid');
        this.postalCodeError.show();
      }
      this.postalCodeError.html(validationMessage);
      this.scrollToError = this.postalCodeInput;
      return (/^.{3,50}$/.test(value));
    },
    validateCityInput: function() {
      var validationMessage = '';
      var value = this.cityInput.val();
      if((/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)) || (/^[\p{L}\d\- ]{3,50}$/u.test(value))) {
        validationMessage = 'Now, that\'s a good city name.\n';
        this.cityError.addClass('valid');
        this.cityError.hide();
      } else if(value === '') {
        validationMessage = 'The city name is required';
        this.cityError.removeClass('valid');
        this.cityError.show();
      } else {
        validationMessage = 'The city name must contain letter and number and be minimum of 3 characters.';
        this.cityError.removeClass('valid');
        this.cityError.show();
      }
      this.cityError.html(validationMessage);
      this.scrollToError = this.cityInput;
      return (/^[a-zA-Z\-0-9 ]{3,50}$/.test(value)) || (/^[\p{L}\d\- ]{3,50}$/u.test(value));
    },
    validateCountrySelect: function() {
      var validationMessage = '';
      var value = this.countrySelect.val();
      if(value != 0) {
        validationMessage = 'Now, that\'s a good country name.\n';
        this.countryError.addClass('valid');
        this.countryError.hide();
      } else {
        validationMessage = 'The country name is required';
        this.countryError.removeClass('valid');
        this.countryError.show();
      }
      this.countryError.html(validationMessage);
      this.scrollToError = this.countrySelect;
      return (value != 0);
    },
    validatePasswordInput: function() {
      var validationMessage = '';
      var value = this.passwordInput.val();
      if ((/\d/.test(value)) && (/[a-zA-Z]/.test(value)) && (/^.{7,}$/.test(value))) {
        validationMessage = 'Now, that\'s a secure password.\n';
        this.passwordError.addClass('valid');
        this.passwordError.hide();
      } else if ((/\d/.test(value)) && (/[a-zA-Z]/.test(value))) {
        validationMessage = 'Password must contain a <strong><del>letter</del></strong> and a <strong><del>number</del></strong>, and be minimum of <strong>7 characters</strong>.';
        this.passwordError.removeClass('valid');
        this.passwordError.show();
      } else if ((/^.{7,}$/.test(value)) && (/[a-zA-Z]/.test(value))) {
        validationMessage = 'Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong><del>7 characters</del></strong>.';
        this.passwordError.removeClass('valid');
        this.passwordError.show();
      } else if ((/^.{7,}$/.test(value)) && (/\d/.test(value))) {
        validationMessage = 'Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong><del>7 characters</del></strong>.';
        this.passwordError.removeClass('valid');
        this.passwordError.show();
      } else if ((/^.{7,}$/.test(value))) {
        validationMessage = 'Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong><del>7 characters</del></strong>.';
        this.passwordError.removeClass('valid');
        this.passwordError.show();
      } else if ((/\d/.test(value))) {
        validationMessage = 'Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong>7 characters</strong>.';
        this.passwordError.removeClass('valid');
        this.passwordError.show();
      } else if ((/[a-zA-Z]/.test(value))) {
        validationMessage = 'Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.';
        this.passwordError.removeClass('valid');
        this.passwordError.show();
      } else if (value === '') {
        validationMessage = 'Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.';
        this.passwordError.removeClass('valid');
        this.passwordError.show();
      } else {
        validationMessage = 'Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.';
        this.passwordError.removeClass('valid');
        this.passwordError.show();
      }
      this.passwordError.html(validationMessage);
      this.scrollToError = this.passwordInput;
      return (/\d/.test(value)) && (/[a-zA-Z]/.test(value)) && (/^.{7,}$/.test(value));
    },
    validateBirthdayInput: function() {
      var validationMessage = '';
      var value = this.birthdayInput.val();
      if((/^(\d{2})-(\d{2})-(\d{4})$/).test(value)) {
        validationMessage = 'Now, that\'s a birthday.';
        this.birthdayError.addClass('valid');
        this.birthdayError.hide();
      } else {
        validationMessage = 'The birthday is required.\n';
        this.birthdayError.removeClass('valid');
        this.birthdayError.show();
      }
      this.birthdayError.html(validationMessage);
      this.scrollToError = this.birthdayInput;
      return (/^(\d{2})-(\d{2})-(\d{4})$/).test(value);
    }
  }

  $(document).ready(function () {
    register.init();
    const currentDate = new Date();
    $('#birthday').val(`${$('#birthday').val().split("-")[2]}-${$('#birthday').val().split("-")[1]}-${$('#birthday').val().split("-")[0]}`);
    $('#birthday').combodate({
      minYear: 1900,
      maxYear: currentDate.getFullY
    });
    $('select.day').addClass('webkit-style');
    $('select.month').addClass('webkit-style');
    $('select.year').addClass('webkit-style');

    $('select.day').addClass('editable');
    $('select.month').addClass('editable');
    $('select.year').addClass('editable');

  });

    const play_icon = document.querySelector('.play-video');
    play_icon.src = '/images/IconLock.svg';
</script>
@endsection
