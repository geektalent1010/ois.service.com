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
                        <div class="info-box">
                            <input type="text" class="input-field" placeholder="{{__('first_name')}}, {{__('last_name')}}" />
                            <input type="email" class="input-field" placeholder="{{__('email_L')}}" />
                            <input type="text" class="input-field" placeholder="{{__('phone_L')}}" />
                            <div class="form-select-custom">
                                <select name="" id="country-select">
                                    <option value="0" >{{__('country')}}</option>
                                    @foreach ($countries as $country)
                                        <option value="" data-data1="{{$country->name}}"></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-select-custom">
                                <select name="" id="subject-select">
                                    <option value="0" >{{__('subject')}}</option>
                                    <option value="" data-data1="Subject 1"></option>
                                    <option value="" data-data1="Subject 2"></option>
                                    <option value="" data-data1="Subject 3"></option>
                                    <option value="" data-data1="Subject 4"></option>
                                </select>
                            </div>
                            <textarea type="text" class="input-field" placeholder="{{__('message_L')}}" rows="4"></textarea>
                            <div class="btn-section">
                                <a href="{{ route('contact.reviewing') }}" class="send-btn">{{__('send')}}</a>
                            </div>
                        </div>

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
    </script>
@endsection
