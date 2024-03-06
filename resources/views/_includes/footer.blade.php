
@if (!isset($FOOTER_UNABLE) || $FOOTER_UNABLE == false)
    <div class="foot-section desktop-version">
        <div class="d-flex justify-content-center align-items-center">
            <p class="mb-0">{{__('ois_global_centers')}}</p>
            <a class="ml-2 mr-4" href="{{ route('offices.index') }}">{{__('click_here')}}</a>
            <p class="mb-0">{{__('social')}}</p>
            <a href="https://bit.ly/3Gimqru" class="social-icon ml-2"><img
                    src="{{ asset('images/Logo/LogoFacebook.svg') }}" /></a>
            <a href="https://bit.ly/3Wn2oSx" class="social-icon ml-2"><img
                    src="{{ asset('images/Logo/LogoLinkedin.svg') }}" /></a>
            <a href="https://www.instagram.com/oisservices/"><img class="social-icon ml-2"
                    src="{{ asset('images/Logo/LogoInsta.svg') }}" /></a>
            <a href="https://twitter.com/oisservices"><img class="social-icon ml-2"
                    src="{{ asset('images/Logo/LogoTwitter.svg') }}" /></a>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <a onclick="toggleDisclaimer()">{{__('disclaimer')}}</a>
            <p class="mx-2 mb-0">|</p>
            <a onclick="toggleTerms()">{{__('terms_of_use')}}</a>
            <p class="mx-2 mb-0">|</p>
            <a onclick="togglePrivacy()">{{__('privacy_policy')}}</a>
            <p class="mx-2 mb-0">|</p>
            <a onclick="toggleData()">{{__('data_protect_policy')}}</a>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <a class="company" href="https://brandfields.com">{{__('powered_by')}}</a>
        </div>
    </div>
    <div class="foot-section mobile-version">
        <div class="d-flex flex-column align-items-center">
            <p class="mb-1">{{__('ois_global_centers')}}</p>
            <a href="{{ route('offices.index') }}">{{__('click_here')}}</a>
        </div>
        <div class="d-flex flex-column align-items-center">
            <p class="mb-1 mt-4">{{__('social')}}</p>
            <div>
                <a href="https://bit.ly/3Gimqru" class="social-icon ml-3"><img
                        src="{{ asset('images/Logo/LogoFacebook.svg') }}" /></a>
                <a href="https://bit.ly/3Wn2oSx" class="social-icon ml-3"><img
                        src="{{ asset('images/Logo/LogoLinkedin.svg') }}" /></a>
                <a href="https://www.instagram.com/oisservices/"><img class="social-icon ml-3"
                        src="{{ asset('images/Logo/LogoInsta.svg') }}" /></a>
                <a href="https://twitter.com/oisservices"><img class="social-icon ml-3 mr-3"
                        src="{{ asset('images/Logo/LogoTwitter.svg') }}" /></a>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center mt-4">
            <a class="mb-1" onclick="toggleDisclaimer()">{{__('disclaimer')}}</a>
            <a class="mb-1" onclick="toggleTerms()">{{__('terms_of_use')}}</a>
            <a class="mb-1" onclick="togglePrivacy()">{{__('privacy_policy')}}</a>
            <a class="mb-1" onclick="toggleData()">{{__('data_protect_policy')}}</a>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <a class="company" href="https://brandfields.com">{{__('powered_by')}}</a>
        </div>
    </div>
@endif
