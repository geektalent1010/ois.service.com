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
        this.firstNameInput.on(
            "keyup",
            function () {
                this.validateFirstNameInput();
            }.bind(this)
        );
        this.lastNameInput.on(
            "keyup",
            function () {
                this.validateLastNameInput();
            }.bind(this)
        );
        this.phoneInput.on(
            "keyup",
            function () {
                this.validatePhoneInput();
            }.bind(this)
        );
        this.emailInput.on(
            "keyup",
            function () {
                this.validateEmailInput();
            }.bind(this)
        );
        this.streetInput.on(
            "keyup",
            function () {
                this.validateStreetInput();
            }.bind(this)
        );
        this.houseNumberInput.on(
            "keyup",
            function () {
                this.validateHouseNumberInput();
            }.bind(this)
        );
        this.postalCodeInput.on(
            "keyup",
            function () {
                this.validatePostalCodeInput();
            }.bind(this)
        );
        this.cityInput.on(
            "keyup",
            function () {
                this.validateCityInput();
            }.bind(this)
        );
        this.countrySelect.on(
            "change",
            function () {
                this.validateCountrySelect();
            }.bind(this)
        );
        this.passwordInput.on(
            "keyup",
            function () {
                this.validatePasswordInput();
            }.bind(this)
        );
        this.birthdayInput.on(
            "change",
            function () {
                this.validateBirthdayInput();
            }.bind(this)
        );
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
            validationMessage = "Now, that's a good name.\n";
            this.firstNameError.addClass("valid");
            this.firstNameError.hide();
        } else if (value === "") {
            validationMessage = "The name field is required.";
            this.firstNameError.removeClass("valid");
            this.firstNameError.show();
        } else {
            validationMessage =
                "The name must contain only letter and be minimum of 2 characters.";
            this.firstNameError.removeClass("valid");
            this.firstNameError.show();
        }
        this.firstNameError.html(validationMessage);
        this.scrollToError = this.firstNameInput;
        return (
            /^[a-zA-Z\-0-9 ]{2,50}$/.test(value) ||
            /^[\p{L}\d\- ]{2,50}$/u.test(value)
        );
    },
    validateLastNameInput: function () {
        let validationMessage = "";
        let value = this.lastNameInput.val();
        if (
            /^[a-zA-Z\-0-9 ]{2,50}$/.test(value) ||
            /^[\p{L}\d\- ]{2,50}$/u.test(value)
        ) {
            validationMessage = "Now, that's a good last name.\n";
            this.lastNameError.addClass("valid");
            this.lastNameError.hide();
        } else if (value === "") {
            validationMessage = "The last name field is required.";
            this.lastNameError.removeClass("valid");
            this.lastNameError.show();
        } else {
            validationMessage =
                "The last name must contain only letter and be minimum of 2 characters.";
            this.lastNameError.removeClass("valid");
            this.lastNameError.show();
        }
        this.lastNameError.html(validationMessage);
        this.scrollToError = this.lastNameInput;
        return (
            /^[a-zA-Z\-0-9 ]{2,50}$/.test(value) ||
            /^[\p{L}\d\- ]{2,50}$/u.test(value)
        );
    },
    validatePhoneInput: function () {
        let validationMessage = "";
        let value = this.phoneInput.val();
        if (
            /^[0-9 ]{7,50}$/.test(value.trim()) ||
            /^(\+)?[0-9 ]{6,50}$/.test(value.trim())
        ) {
            validationMessage = "Now, that's a good phone number.\n";
            this.phoneError.addClass("valid");
            this.phoneError.hide();
        } else if (value === "") {
            validationMessage = "The phone number field is required.";
            this.phoneError.removeClass("valid");
            this.phoneError.show();
        } else {
            validationMessage = "Minimum 7 digits.";
            this.phoneError.removeClass("valid");
            this.phoneError.show();
        }
        this.phoneError.html(validationMessage);
        this.scrollToError = this.phoneInput;
        return (
            /^[0-9 ]{7,50}$/.test(value.trim()) ||
            /^(\+)?[0-9 ]{6,50}$/.test(value.trim())
        );
    },
    validateEmailInput: function () {
        let validationMessage = "";
        let value = this.emailInput.val();
        if (
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
                value
            )
        ) {
            validationMessage = "Now, that's a good email.\n";
            this.emailError.addClass("valid");
            this.emailError.hide();
        } else if (value === "") {
            validationMessage = "The email field is required.";
            this.emailError.removeClass("valid");
            this.emailError.show();
        } else {
            validationMessage = "Email is not valid.";
            this.emailError.removeClass("valid");
            this.emailError.show();
        }
        this.emailError.html(validationMessage);
        this.scrollToError = this.emailInput;
        this.loginEmailInput.val(this.emailInput.val());
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
            value
        );
    },
    validateStreetInput: function () {
        let validationMessage = "";
        let value = this.streetInput.val();
        if (
            /^[a-zA-Z\-0-9 ]{3,50}$/.test(value) ||
            /^[\p{L}\d\- ]{3,50}$/u.test(value)
        ) {
            validationMessage = "Now, that's a good street name.\n";
            this.streetError.addClass("valid");
            this.streetError.hide();
        } else if (value === "") {
            validationMessage = "Street name is required.";
            this.streetError.removeClass("valid");
            this.streetError.show();
        } else {
            validationMessage =
                "The street name must contain letter and number and be minimum of 3 characters.";
            this.streetError.removeClass("valid");
            this.streetError.show();
        }
        this.streetError.html(validationMessage);
        this.scrollToError = this.streetInput;
        return (
            /^[a-zA-Z\-0-9 ]{3,50}$/.test(value) ||
            /^[\p{L}\d\- ]{3,50}$/u.test(value)
        );
    },
    validateHouseNumberInput: function () {
        let validationMessage = "";
        let value = this.houseNumberInput.val();
        if (/^.{1,50}$/.test(value)) {
            validationMessage = "Now, that's a good house number.\n";
            this.houseNumberError.addClass("valid");
            this.houseNumberError.hide();
        } else if (value === "") {
            validationMessage = "House number is required";
            this.houseNumberError.removeClass("valid");
            this.houseNumberError.show();
        } else {
            validationMessage =
                "The house number must contain letter and number and be minimum of 3 characters.";
            this.houseNumberError.removeClass("valid");
            this.houseNumberError.show();
        }
        this.houseNumberError.html(validationMessage);
        this.scrollToError = this.houseNumberInput;
        return /^.{1,50}$/.test(value);
    },
    validatePostalCodeInput: function () {
        let validationMessage = "";
        let value = this.postalCodeInput.val();
        if (/^.{3,50}$/.test(value)) {
            validationMessage = "Now, that' a good zip code.\n";
            this.postalCodeError.addClass("valid");
            this.postalCodeError.hide();
        } else if (value === "") {
            validationMessage = "Zip code is required";
            this.postalCodeError.removeClass("valid");
            this.postalCodeError.show();
        } else {
            validationMessage = "Minimum 3 characters / digits.";
            this.postalCodeError.removeClass("valid");
            this.postalCodeError.show();
        }
        this.postalCodeError.html(validationMessage);
        this.scrollToError = this.postalCodeInput;
        return /^.{3,50}$/.test(value);
    },
    validateCityInput: function () {
        let validationMessage = "";
        let value = this.cityInput.val();
        if (
            /^[a-zA-Z\-0-9 ]{3,50}$/.test(value) ||
            /^[\p{L}\d\- ]{3,50}$/u.test(value)
        ) {
            validationMessage = "Now, that's a good city name.\n";
            this.cityError.addClass("valid");
            this.cityError.hide();
        } else if (value === "") {
            validationMessage = "The city name is required";
            this.cityError.removeClass("valid");
            this.cityError.show();
        } else {
            validationMessage =
                "The city name must contain letter and number and be minimum of 3 characters.";
            this.cityError.removeClass("valid");
            this.cityError.show();
        }
        this.cityError.html(validationMessage);
        this.scrollToError = this.cityInput;
        return (
            /^[a-zA-Z\-0-9 ]{3,50}$/.test(value) ||
            /^[\p{L}\d\- ]{3,50}$/u.test(value)
        );
    },
    validateCountrySelect: function () {
        let validationMessage = "";
        let value = this.countrySelect.val();
        if (value != 0) {
            validationMessage = "Now, that's a good country name.\n";
            this.countryError.addClass("valid");
            this.countryError.hide();
        } else {
            validationMessage = "The country name is required";
            this.countryError.removeClass("valid");
            this.countryError.show();
        }
        this.countryError.html(validationMessage);
        this.scrollToError = this.countrySelect;
        return value != 0;
    },
    validatePasswordInput: function () {
        let validationMessage = "";
        let value = this.passwordInput.val();
        if (
            /\d/.test(value) &&
            /[a-zA-Z]/.test(value) &&
            /^.{7,}$/.test(value)
        ) {
            validationMessage = "Now, that's a secure password.\n";
            this.passwordError.addClass("valid");
            this.passwordError.hide();
        } else if (/\d/.test(value) && /[a-zA-Z]/.test(value)) {
            validationMessage =
                "Password must contain a <strong><del>letter</del></strong> and a <strong><del>number</del></strong>, and be minimum of <strong>7 characters</strong>.";
            this.passwordError.removeClass("valid");
            this.passwordError.show();
        } else if (/^.{7,}$/.test(value) && /[a-zA-Z]/.test(value)) {
            validationMessage =
                "Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong><del>7 characters</del></strong>.";
            this.passwordError.removeClass("valid");
            this.passwordError.show();
        } else if (/^.{7,}$/.test(value) && /\d/.test(value)) {
            validationMessage =
                "Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong><del>7 characters</del></strong>.";
            this.passwordError.removeClass("valid");
            this.passwordError.show();
        } else if (/^.{7,}$/.test(value)) {
            validationMessage =
                "Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong><del>7 characters</del></strong>.";
            this.passwordError.removeClass("valid");
            this.passwordError.show();
        } else if (/\d/.test(value)) {
            validationMessage =
                "Password must contain a <strong>letter</strong> and a <strong><del>number</del></strong>, and be minimum of <strong>7 characters</strong>.";
            this.passwordError.removeClass("valid");
            this.passwordError.show();
        } else if (/[a-zA-Z]/.test(value)) {
            validationMessage =
                "Password must contain a <strong><del>letter</del></strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.";
            this.passwordError.removeClass("valid");
            this.passwordError.show();
        } else if (value === "") {
            validationMessage =
                "Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.";
            this.passwordError.removeClass("valid");
            this.passwordError.show();
        } else {
            validationMessage =
                "Password must contain a <strong>letter</strong> and a <strong>number</strong>, and be minimum of <strong>7 characters</strong>.";
            this.passwordError.removeClass("valid");
            this.passwordError.show();
        }
        this.passwordError.html(validationMessage);
        this.scrollToError = this.passwordInput;
        return (
            /\d/.test(value) && /[a-zA-Z]/.test(value) && /^.{7,}$/.test(value)
        );
    },
    validateBirthdayInput: function () {
        let validationMessage = "";
        let value = this.birthdayInput.val();
        console.log(value)
        if (/^(\d{2})-(\d{2})-(\d{4})$/.test(value)) {
            validationMessage = "Now, that's a birthday.";
            this.birthdayInput.val(
                value.split('-')[2] + '-' +
                value.split('-')[1] + '-' +
                value.split('-')[0]
            );
            value = this.birthdayInput.val();
            this.birthdayError.addClass("valid");
            this.birthdayError.hide();
        } else if(/^(\d{4})-(\d{2})-(\d{2})$/.test(value)) {
            validationMessage = "Now, that's a birthday.";
            value = this.birthdayInput.val();
            this.birthdayError.addClass("valid");
            this.birthdayError.hide();
        } else {
            validationMessage = "The birthday is required.\n";
            this.birthdayError.removeClass("valid");
            this.birthdayError.show();
        }
        this.birthdayError.html(validationMessage);
        this.scrollToError = this.birthdayInput;
        return /^(\d{4})-(\d{2})-(\d{2})$/.test(value);
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
