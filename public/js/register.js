$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
let emailTimer = null;

$("#email").on("input", function (e) {
    $("#login-email").val($(this).val());
});

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
                    this.validateFirstNameInput() &&
                    this.validateLastNameInput() &&
                    this.validatePhoneInput() &&
                    this.validateEmailInput() &&
                    this.validateStreetInput() &&
                    this.validateHouseNumberInput() &&
                    this.validateCityInput() &&
                    this.validateCountrySelect() &&
                    this.validatePasswordInput() &&
                    this.validateBirthdayInput()
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
        const namePattern = /^[\p{L}\s\-]{2,50}$/u;

        if (namePattern.test(value)) {
            return true;
        } else if (value === "") {
            validationMessage = "The name field is required.";
        } else {
            validationMessage =
                "First name should contain only letters, spaces, and hyphens. Please enter between 2 and 50 characters.";
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
        }
        this.scrollToError = this.firstNameInput;
        return false;
    },
    validateLastNameInput: function () {
        let validationMessage = "";
        let value = this.lastNameInput.val();
        const namePattern = /^[\p{L}\s\-]{2,50}$/u;

        if (namePattern.test(value)) {
            return true;
        } else if (value === "") {
            validationMessage = "The last name field is required.";
        } else {
            validationMessage =
                "Last name should contain only letters, spaces, and hyphens. Please enter between 2 and 50 characters.";
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
        }

        this.scrollToError = this.lastNameInput;
        return false;
    },
    validatePhoneInput: function () {
        let validationMessage = "";
        let value = this.phoneInput.val().trim();
        const phonePattern = /^(\+?\d[\d\s]{6,49}\d)$/;
        if (phonePattern.test(value)) {
            return true;
        } else if (value === "") {
            validationMessage = "The phone number field is required.";
        } else {
            validationMessage =
                "Phone number must contain between 7 and 50 digits, with optional spaces and a leading +.";
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
        }

        this.scrollToError = this.phoneInput;
        return false;
    },
    validateEmailInput: function () {
        let validationMessage = "";
        let value = this.emailInput.val().trim();
        const emailPattern =
            /^[a-zA-Z0-9._-]{1,100}@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (value.length < 5 || value.length > 100) {
            validationMessage = "Email must be between 5 and 100 characters.";
        } else if (!emailPattern.test(value)) {
            validationMessage = "Please enter a valid email address.";
        } else {
            this.loginEmailInput.val(this.emailInput.val());
            return true;
        }

        if (value === "") {
            validationMessage = "The email field is required.";
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
        }

        this.scrollToError = this.emailInput;
        return false;
    },
    validateStreetInput: function () {
        let validationMessage = "";
        let value = this.streetInput.val().trim();

        const streetPattern = /^[a-zA-Z0-9.,'\- ]{1,100}$/;

        if (value.length < 1 || value.length > 100) {
            validationMessage =
                "Street address should be between 1 and 100 characters.";
        } else if (!streetPattern.test(value)) {
            validationMessage =
                "Street address should contain only letters, numbers, and common address symbols (.,-',).";
        } else {
            return true;
        }

        if (value === "") {
            validationMessage = "Street name is required.";
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
        }

        this.scrollToError = this.streetInput;
        return false;
    },
    validateHouseNumberInput: function () {
        let validationMessage = "";
        let value = this.houseNumberInput.val().trim();

        const houseNumberPattern = /^[0-9A-Za-z]{1,10}$/;

        if (value.length < 1 || value.length > 10) {
            validationMessage =
                "House number should be between 1 and 10 characters.";
        } else if (!houseNumberPattern.test(value)) {
            validationMessage =
                "House number should be numeric and may include letters. Please enter between 1 and 10 characters.";
        } else {
            return true;
        }

        if (value === "") {
            validationMessage = "House number is required.";
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
        }

        this.scrollToError = this.houseNumberInput;
        return false;
    },
    validatePostalCodeInput: function () {
        let validationMessage = "";
        let value = this.postalCodeInput.val().trim();

        const postalCodePattern = /^[A-Za-z0-9]{3,10}$/;

        if (value.length < 3 || value.length > 10) {
            validationMessage =
                "Please enter a valid postal code, up to 10 characters.";
        } else if (!postalCodePattern.test(value)) {
            validationMessage =
                "Please enter a valid postal code, up to 10 characters.";
        } else {
            return true;
        }

        if (value === "") {
            return true;
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
        }

        this.scrollToError = this.postalCodeInput;
        return false;
    },
    validateCityInput: function () {
        let validationMessage = "";
        let value = this.cityInput.val().trim();
        const cityNamePattern = /^[A-Za-z\s\-]{1,50}$/;

        if (value.length < 1 || value.length > 50) {
            validationMessage =
                "City name should contain only letters, spaces, and hyphens. Please enter between 1 and 50 characters.";
        } else if (!cityNamePattern.test(value)) {
            validationMessage =
                "City name should contain only letters, spaces, and hyphens. Please enter between 1 and 50 characters.";
        } else {
            return true;
        }

        if (value === "") {
            validationMessage = "The city name is required.";
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
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
        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
        }
        this.scrollToError = this.countrySelect;
        return false;
    },
    validatePasswordInput: function () {
        let validationMessage = "";
        let value = this.passwordInput.val();

        const minLengthPattern = /^.{8,64}$/;
        const uppercasePattern = /[A-Z]/;
        const lowercasePattern = /[a-z]/;
        const numberPattern = /\d/;
        const specialCharPattern = /[!@#$%^&*(),.?":{}|<>]/;
        const disallowSemicolonPattern = /;/;

        if (
            minLengthPattern.test(value) &&
            uppercasePattern.test(value) &&
            lowercasePattern.test(value) &&
            numberPattern.test(value) &&
            specialCharPattern.test(value)&&
            !disallowSemicolonPattern.test(value)
        ) {
            return true;
        }

        if (!minLengthPattern.test(value)) {
            validationMessage =
                "Password must be between 8 and 64 characters long.";
        } else if (!uppercasePattern.test(value)) {
            validationMessage =
                "Password must contain at least one uppercase letter.";
        } else if (!lowercasePattern.test(value)) {
            validationMessage =
                "Password must contain at least one lowercase letter.";
        } else if (!numberPattern.test(value)) {
            validationMessage = "Password must contain at least one number.";
        } else if (!specialCharPattern.test(value)) {
            validationMessage =
                "Password must contain at least one special character (e.g., !, @, #, $, etc.).";
        } else if (disallowSemicolonPattern.test(value)) {
            validationMessage = "Password cannot contain a semicolon (;).";
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
        }

        this.scrollToError = this.passwordInput;
        return false;
    },
    validateBirthdayInput: function () {
        let validationMessage = "";
        let value = this.birthdayInput.val();

        const datePattern = /^(\d{2})-(\d{2})-(\d{4})$/;

        const standardDatePattern = /^(\d{4})-(\d{2})-(\d{2})$/;

        if (datePattern.test(value)) {
            const parts = value.split("-");
            this.birthdayInput.val(parts[2] + "-" + parts[1] + "-" + parts[0]);
            return true;
        } else if (standardDatePattern.test(value)) {
            return true;
        } else if (value === "") {
            validationMessage = "The birthday is required.";
        } else {
            validationMessage = "The birthday must be selected.";
        }

        if (validationMessage) {
            customAlert("We are so sorry", validationMessage, "error");
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
    if (/^(\d{4})-(\d{2})-(\d{2})$/.test(date)) {
        $(".birthday-group select.day").val(date.split("-")[2]);
        $(".birthday-group select.month").val(date.split("-")[1] - 1);
        $(".birthday-group select.year").val(date.split("-")[0]);
    }
    $(".birthday-group select.day").addClass("webkit-style");
    $(".birthday-group select.month").addClass("webkit-style");
    $(".birthday-group select.year").addClass("webkit-style");

    $(".birthday-group select.day").addClass("editable");
    $(".birthday-group select.month").addClass("editable");
    $(".birthday-group select.year").addClass("editable");
});

$("#terms-of-service").change(function () {
    if ($(this).is(":checked")) {
        $("#register-but").removeClass("d-none");
        $("#register-but-disabled").addClass("d-none");
    } else {
        $("#register-but").addClass("d-none");
        $("#register-but-disabled").removeClass("d-none");
    }
});

$("#register-but-disabled").click(function () {
    customAlert(
        "We are so sorry",
        "You should agree the terms of service",
        "error"
    );
});
