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
                                        <option value="{{$country->id}}" data-data1="{{$country->name}}"></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-select-custom">
                                <select name="subject" id="subject-select">
                                    <option value="0" >{{__('subject')}}</option>
                                    <option value="Subject 1" data-data1="Subject 1"></option>
                                    <option value="Subject 2" data-data1="Subject 2"></option>
                                    <option value="Subject 3" data-data1="Subject 3"></option>
                                    <option value="Subject 4" data-data1="Subject 4"></option>
                                </select>
                            </div>
                            <textarea type="text" class="input-field" name="message" id="message" placeholder="{{__('message_L')}}" rows="4"></textarea>
                            <div class="btn-section">
                                <button href="{{ route('contact.reviewing') }}" class="send-btn">{{__('send')}}</button>
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

        $("#support-form").submit(function(e) {
            e.preventDefault();
            if(!$("#name").val()) {
                customAlert('We are so sorry', "Should input name field", 'error');
                return;
            }
            if(!$("#email").val()) {
                customAlert("We are so sorry", "Should input email field", "error");
                return;
            }
            if(!$("#phone").val()) {
                customAlert("We are so sorry", "Should input phone field", "error");
                return;
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
            $.ajax({
                url: '/support',
                type: 'post',
                data: $(this).serialize(),
                success:function(res) {
                    if(res) {
                        customAlert("Success", "Successfully sent", "success");
                    }
                }
            })
        })
    </script>
@endsection
