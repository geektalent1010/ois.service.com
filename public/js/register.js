$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
let emailTimer = null;

const register = {
    init: function () {
        this.letiables();
        this.addEventListeners();
        this.firstInputFocus();
    },
    letiables: function () {
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
        this.loginEmailInput = $("#login-email");
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
        this.form.on(
            "submit",
            function (event) {
                if (
                    (this.validateFirstNameInput() &&
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
                    $(".button-submit").attr("disabled", true);
                    return true;
                } else {
                    event.preventDefault();
                    this.scrollToElement(this.scrollToError);
                    this.scrollToError.focus();
                }
            }.bind(this)
        );
    },
    scrollToElement: function (element) {
        $("body, html").animate(
            {
                scrollTop: element.offset().top - 80,
            },
            500
        );
    },
    firstInputFocus: function () {
        setTimeout(
            function () {
                this.firstNameInput.focus();
            }.bind(this),
            300
        );
    },
    validateFirstNameInput: function () {
        let validationMessage = "";
        let value = this.firstNameInput.val();
        if (
            /^[a-zA-Z\-0-9 ]{2,50}$/.test(value) ||
            /^[\p{L}\d\- ]{2,50}$/u.test(value)
        ) {
            return true;
        } else if (value === "") {
            validationMessage = "The name field is required.";
        } else {
            validationMessage =
                "The name must contain only letter and be minimum of 2 characters.";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.firstNameInput;
        return false;
    },
    validateLastNameInput: function () {
        let validationMessage = "";
        let value = this.lastNameInput.val();
        if (
            /^[a-zA-Z\-0-9 ]{2,50}$/.test(value) ||
            /^[\p{L}\d\- ]{2,50}$/u.test(value)
        ) {
            return true;
        } else if (value === "") {
            validationMessage = "The last name field is required.";
        } else {
            validationMessage =
                "The last name must contain only letter and be minimum of 2 characters.";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.lastNameInput;
        return false;
    },
    validatePhoneInput: function () {
        let validationMessage = "";
        let value = this.phoneInput.val();
        if (
            /^[0-9 ]{7,50}$/.test(value.trim()) ||
            /^(\+)?[0-9 ]{6,50}$/.test(value.trim())
        ) {
            return true;
        } else if (value === "") {
            validationMessage = "The phone number field is required.";
        } else {
            validationMessage = "Minimum 7 digits.";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.phoneInput;
        return false;
    },
    validateEmailInput: function () {
        let validationMessage = "";
        let value = this.emailInput.val();
        if (
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
                value
            )
        ) {
            this.loginEmailInput.val(this.emailInput.val());
            return true;
        } else if (value === "") {
            validationMessage = "The email field is required.";
        } else {
            validationMessage = "Email is not valid.";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.emailInput;
        return false;
    },
    validateStreetInput: function () {
        let validationMessage = "";
        let value = this.streetInput.val();
        if (
            /^[a-zA-Z\-0-9 ]{3,50}$/.test(value) ||
            /^[\p{L}\d\- ]{3,50}$/u.test(value)
        ) {
            return true;
        } else if (value === "") {
            validationMessage = "Street name is required.";
        } else {
            validationMessage =
                "The street name must contain letter and number and be minimum of 3 characters.";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.streetInput;
        return false;
    },
    validateHouseNumberInput: function () {
        let validationMessage = "";
        let value = this.houseNumberInput.val();
        if (/^.{1,50}$/.test(value)) {
            return true;
        } else if (value === "") {
            validationMessage = "House number is required";
        } else {
            validationMessage =
                "The house number must contain letter and number and be minimum of 3 characters.";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.houseNumberInput;
        return false;
    },
    validatePostalCodeInput: function () {
        let validationMessage = "";
        let value = this.postalCodeInput.val();
        if (/^.{3,50}$/.test(value)) {
            return true;
        } else if (value === "") {
            validationMessage = "Zip code is required";
        } else {
            validationMessage = "Minimum 3 characters / digits.";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.postalCodeInput;
        return false;
    },
    validateCityInput: function () {
        let validationMessage = "";
        let value = this.cityInput.val();
        if (
            /^[a-zA-Z\-0-9 ]{3,50}$/.test(value) ||
            /^[\p{L}\d\- ]{3,50}$/u.test(value)
        ) {
            return true;
        } else if (value === "") {
            validationMessage = "The city name is required";
        } else {
            validationMessage =
                "The city name must contain letter and number and be minimum of 3 characters.";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.cityInput;
        return false;
    },
    validateCountrySelect: function () {
        let validationMessage = "";
        let value = this.countrySelect.val();
        if (value != 0) {
            return true;
        } else {
            validationMessage = "The country name is required";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.countrySelect;
        return false;
    },
    validatePasswordInput: function () {
        let validationMessage = "";
        let value = this.passwordInput.val();
        if (
            /\d/.test(value) &&
            /[a-zA-Z]/.test(value) &&
            /^.{7,}$/.test(value)
        ) {
            return true;
        } else if (/\d/.test(value) && /[a-zA-Z]/.test(value)) {
            validationMessage =
                "Password must contain a <strong><del>letter</del></strong> and a <strong><del>number</del></strong>, and be minimum of <strong>7 characters</strong>.";
        } else if (/^.{7,}$/.test(value) && /[a-zA-Z]/.test(value)) {
            validationMessage =
                "Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong><del>7 characters</del></strong>.";
        } else if (/^.{7,}$/.test(value) && /\d/.test(value)) {
            validationMessage =
                "Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong><del>7 characters</del></strong>.";
        } else if (/^.{7,}$/.test(value)) {
            validationMessage =
                "Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong><del>7 characters</del></strong>.";
        } else if (/\d/.test(value)) {
            validationMessage =
                "Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong>7 characters</strong>.";
        } else if (/[a-zA-Z]/.test(value)) {
            validationMessage =
                "Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.";
        } else {
            validationMessage =
                "Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.passwordInput;
        return false;
    },
    validateBirthdayInput: function () {
        let validationMessage = "";
        let value = this.birthdayInput.val();
        if (/^(\d{2})-(\d{2})-(\d{4})$/.test(value)) {
            this.birthdayInput.val(
                value.split('-')[2] + '-' +
                value.split('-')[1] + '-' +
                value.split('-')[0]
            );
            return true;
        } else if(/^(\d{4})-(\d{2})-(\d{2})$/.test(value)) {
            validationMessage = "Now, that's a birthday.";
        } else {
            validationMessage = "The birthday is required.\n";
        }
        if(validationMessage) {
            customAlert('We are so sorry', validationMessage, 'error');
        }
        this.scrollToError = this.birthdayInput;
        return false;
    },
};

$(document).ready(function () {
    register.init();
    const currentDate = new Date();
    $("#birthday").combodate({
        minYear: 1900,
        maxYear: currentDate.getFullY,
    });
    var date = $("#birthday").val();
    if(/^(\d{4})-(\d{2})-(\d{2})$/.test(date)) {
        $(".birthday-group select.day").val(date.split('-')[2]);
        $(".birthday-group select.month").val(date.split('-')[1] - 1);
        $(".birthday-group select.year").val(date.split('-')[0]);
    }
    $(".birthday-group select.day").addClass("webkit-style");
    $(".birthday-group select.month").addClass("webkit-style");
    $(".birthday-group select.year").addClass("webkit-style");

    $(".birthday-group select.day").addClass("editable");
    $(".birthday-group select.month").addClass("editable");
    $(".birthday-group select.year").addClass("editable");
});
