@extends('layouts.app', ['ACTIVE_TITLE' => 'BOOKING'], ['VIDEO_BACKGROUND' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')

<div class="container-section">
    <video autoplay muted loop class="video-section" playsinline>
        <source src="{{ asset('Video/TechPlexusDesk.mp4') }}" type="video/mp4">
    </video>
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source src="{{ asset('Video/TechPlexusPhone.mp4') }}" type="video/mp4">
    </video>
    <div class="book-section body-section">
        <img class="finger-icon" src="{{ asset('images/IconFingerprintBlue.svg') }}">
        <p class="page-title desktop-version">welcome to the ois booking portal</p>
        <p class="page-title mobile-version">welcome to the<br>ois booking portal</p>
        <div class="w-100 dropdown-section">
            <div class="dropdown">
                <p class="dropdown-title">select appointment</p>
                <div class="selected-item" onclick="openAppointmentOptions()">
                    <p class="selected-text appointment-selected-text">new</p>
                    <img class="img-down appointment-img-down" src=" {{asset('images/ArrowDown.svg')}} ">
                    <img class="img-up d-none appointment-img-up" src=" {{asset('images/ArrowUp.svg')}} ">
                </div>
                <div class="option-box w-100 d-none appointment-option-box">
                    <div class="option-item first-item" onclick="selectAppointment('new')">new</div>
                    <div class="option-item" onclick="selectAppointment('reschedule')">reschedule</div>
                    <div class="option-item" onclick="selectAppointment('cancel')">cancel</div>
                </div>
            </div>
            <div class="dropdown">
                <p class="dropdown-title select-dropdown-title">select service</p>
                <div class="selected-item" onclick="openServiceOptions()">
                    <p class="selected-text service-selected-text">visa</p>
                    <img class="img-down service-img-down" src=" {{asset('images/ArrowDown.svg')}} ">
                    <img class="img-up d-none service-img-up" src=" {{asset('images/ArrowUp.svg')}} ">
                </div>
                <div class="option-box w-100 d-none service-option-box">
                    <div class="option-item first-item" onclick="selectService('bvn enrollment')">bvn enrollment</div>
                    <div class="option-item" onclick="selectService('passport service')">passport service</div>
                    <div class="option-item" onclick="selectService('premium lounge (dla)')">premium lounge (dla)</div>
                    <div class="option-item" onclick="selectService('visa')">visa</div>
                    <div class="option-item last-item" onclick="selectService('nin enrollment')">nin enrollment</div>
                </div>
            </div>
        </div>
        <div class="info-section w-100">
            <div class="info-box">
                <p class="info-text application-text">application id*</p>
                <input type="text" class="input-field" placeholder="0123456789" />
            </div>
            <div class="info-box">
                <p class="info-text date-text">date of birth <span class="date-format">(dd/mm/yyyy)*</span></p>
                <input type="text" class="input-field" placeholder="dd/mm/yyyy" />
            </div>
        </div>
        <button class="continue-btn">CONTINUE</button>
        <p class="page-footer desktop-version">If you have not completed your visa application, Plesae <a
                href="https://portal.immigration.gov.ng/visa/freshVisa" class="visit" target="_blank">VISIT</a> to
            complete your application,<br>before returning to OIS to book your appointment</p>
        <p class="page-footer mobile-version">If you have not completed your visa application,<br>Plesae <a
                href="https://portal.immigration.gov.ng/visa/freshVisa" class="visit" target="_blank">VISIT</a> to
            complete your application,<br>before returning to OIS to book your appointment</p>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript">
    function selectAppointment(str) {
        document.querySelector('.appointment-selected-text').textContent = str;
        $(".appointment-option-box").addClass('d-none');
        $(".appointment-img-up").addClass('d-none');
        $(".appointment-img-down").removeClass('d-none');
    }
    function openAppointmentOptions() {
        if ($(".appointment-option-box").hasClass('d-none')) {
            $(".appointment-option-box").removeClass('d-none');
            $(".appointment-img-up").removeClass('d-none');
            $(".appointment-img-down").addClass('d-none');
        }
        else {
            $(".appointment-option-box").addClass('d-none');
            $(".appointment-img-up").addClass('d-none');
            $(".appointment-img-down").removeClass('d-none');
        }
    }

    function selectService(str) {
        document.querySelector('.service-selected-text').textContent = str;
        $(".service-option-box").addClass('d-none');
        $(".service-img-up").addClass('d-none');
        $(".service-img-down").removeClass('d-none');
    }
    function openServiceOptions() {
        if ($(".service-option-box").hasClass('d-none')) {
            $(".service-option-box").removeClass('d-none');
            $(".service-img-up").removeClass('d-none');
            $(".service-img-down").addClass('d-none');
        }
        else {
            $(".service-option-box").addClass('d-none');
            $(".service-img-up").addClass('d-none');
            $(".service-img-down").removeClass('d-none');
        }
    }
</script>
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
    @endsection
