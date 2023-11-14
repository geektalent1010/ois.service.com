<div class="modal office-modal">
    <div class="office-modal-content d-flex">
        <div class="logo-section">
            <p class="country-name">united kingdom</p>
            <img class="logo-white" src="{{ asset('images/Logo/LogoOISwhite.svg') }}">
        </div>
        <div class="office-info-section d-flex">
            <div class="arrow-section d-flex justify-content-center">
                <img class="left-arrow" src="{{ asset('images/ArrowRight.svg') }}">
            </div>
            <div class="information-section">
                <div class="main-info-section">
                </div>
                <div class="contact-btn">
                    <a href="{{ route('contact.index') }}">CONTACT US</a>
                </div>
            </div>
            
            <div class="arrow-section d-flex flex-column align-items-center justify-content-center">
                <img class="cancel" src="{{ asset('images/cancel.svg') }}" onclick="hideModal()">
                <img class="right-arrow" src="{{ asset('images/ArrowRight.svg') }}">
            </div>
        </div>
    </div>
</div>