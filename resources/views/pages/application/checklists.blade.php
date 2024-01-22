@extends('layouts.app', ['ACTIVE_TITLE' => 'APPLICATION'], ['VIDEO_LOCK' => true])

@section('title', __('- CHECKLISTS'))

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
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
    <div class="m-0 checklists-section">
        <div class="main-title">
            CHECKLISTS
        </div>
        <div class="section-body body-section mt-30px">
            <form class="form-section">
                <div class="row mb-24px">
                    <div class="col-md-6 form-group">
                        <p class="form-label">SELECT COUNTRY</p>
                        <select class="form-control webkit-style country-select w-100" name="center" id="center">
                            <option value="">Country</option>
                            @foreach($centers as $center)
                                <option value="{{$center->id}}">{{$center['city']}}, {{$center['country']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <p class="form-label">SELECT VISA TYPE</p>
                        <select class="form-control webkit-style country-select w-100" name="visa_type" id="visaType">
                            <option value="">Type</option>
                            <option value="Diplomatic">Diplomatic Passport</option>
                            <option value="Official">Official Passport</option>
                            <option value="Standard">Standard Passport</option>
                            <option value="UN">UN Passport</option>
                        </select>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 form-group mt-19px mb-30px">
                        <button type="button" class="btn btn-primary confirm-button button-submit">
                            {{ __('CONFIRM') }}
                        </button>
                    </div>
                </div>

                <div class="row mt-19px">
                    <div class="col-md-12 checklistsFilters">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.button-submit').click(function () {
        checklistsFilters();
    });

    function checklistsFilters() {
        $.post('{{ route('checklists.filter') }}', $('.form-section').serialize(), function (response) {
            $('.checklistsFilters').html(response);
        })
    }
</script>
@endsection
