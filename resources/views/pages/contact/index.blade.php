@extends('layouts.app', ['ACTIVE_TITLE' => __('support'), 'modalData'=>$modalData])

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
        <div class="d-flex justify-content-center">
            <div class="contact-section">
                <div class="contact-section-content body-section">
                    <p class="page-title">{{__('send_a_message')}}</p>
                    <div class="info-container w-100 d-flex justify-content-center">
                        <form class="info-box" id="support-form">
                            @csrf
                            <input type="text" class="input-field" name="name" id="name" placeholder="{{__('first_name')}}, {{__('last_name')}}" />
                            <input type="email" class="input-field" name="email" id="email" placeholder="{{__('email_L')}}" />
                            <input type="text" class="input-field" name="phone" id="phone" placeholder="{{__('phone_L')}}" />
                            <div class="form-select-custom">
                                <select id="country-select" name="country">
                                    <option value="0" >{{__('country')}}</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->name}}" data-data1="{{$country->name}}"></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-select-custom">
                                <select name="subject" id="subject-select">
                                    <option value="0" >{{__('subject')}}</option>
                                    <option value="Visa application" data-data1="Visa application"></option>
                                    <option value="Passport Application" data-data1="Passport Application"></option>
                                    <option value="NIN Enrolment" data-data1="NIN Enrolment"></option>
                                    <option value="BVN Entolment" data-data1="BVN Entolment"></option>
                                    <option value="Others" data-data1="Others"></option>
                                </select>
                            </div>
                            <textarea type="text" class="input-field" name="message" id="message" placeholder="{{__('message_L')}}" rows="4"></textarea>
                            <div class="btn-section">
                                <button class="send-btn">{{__('send')}}</button>
                            </div>
                        </form>

                    </div>
                </div>
                @include('_includes.footer')
            </div>
        </div>

    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
    <script>
        const selectDoms = document.getElementsByClassName('form-select-custom');
        console.log(selectDoms)
        for(const selectDom of selectDoms) {
            drawSelectForm(selectDom);
        }

        const nameRegex = /^[a-zA-Z\s\-]{1,50}$/;
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const phoneRegex = /^[0-9\s]{7,15}$/;


        $("#support-form").submit(function(e) {
            e.preventDefault();
            if(!$("#name").val()) {
                customAlert('We are so sorry', "The name field is required.", 'error');
                return;
            }
            if(!nameRegex.test($("#name").val())) {
                customAlert('We are so sorry', "The name field should contain only one to 50 letters, spaces, and hyphens.", 'error');
                return;
            }
            if(!$("#email").val()) {
                customAlert("We are so sorry", "Should input email field", "error");
                return;
            }
            if(!emailRegex.test($("#email").val())) {
                customAlert("We are so sorry", "Please enter a valid email address.", "error");
                return  
            }
            if(!$("#phone").val()) {
                customAlert("We are so sorry", "Should input phone field", "error");
                return;
            }
            if(!phoneRegex.test($("#phone").val())) {
                customAlert("We are so sorry", "The phone field should contain only 7-15 numeric characters and spaces.", "error");
                return
            }
            if(!$("#country-select").val()) {
                customAlert("We are so sorry", "Should select country field", "error");
            }
            if(!$("#subject-select").val()) {
                customAlert("We are so sorry", "Should select subject field", "error");
                return;
            }
            if(!$("#message").val()) {
                customAlert("We are so sorry", "Should input message field", "error");
                return;
            }
            if($("#message").val().length > 500) {
                customAlert("We are so sorry", "The message should be less than 500 characters.", "error");
                return
            }
            $("#name").val($("#name").val().replace(/[<>;]/g, ""))
            $("#message").val($("#message").val().replace(/[<>;]/g, ""))
            $.ajax({
                url: '/support-mail',
                type: 'post',
                data: $(this).serialize(),
                success:function(res) {
                    if(res) {
                        customAlert("Success", "Your support message has been successfully sent! Our team will review your inquiry and get back to you as soon as possible", "success");
                        $("#name").val("");
                        $("email").val("")
                        $("#message").val("")
                    }
                }
            })
        })
    </script>
@endsection
