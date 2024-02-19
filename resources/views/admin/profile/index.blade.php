@extends('layouts.app', ['ACTIVE_TITLE' => 'PROFILE'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section admin-profile-section">
        <div class="profile-body">
            <div class="main-title">MY PROFILE</div>
            <div class="my-profile-part mt-30px">
                <div class="info-details">
                    <div class="info-detail">
                        <div class="info-head">First Name</div>
                        <div class="info-value">
                            <input type="text" value="{{$user->profile->first_name}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Last Name</div>
                        <div class="info-value">
                            <input type="text" value="{{$user->profile->last_name}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Phone</div>
                        <div class="info-value">
                            <input type="text" value="{{$user->profile->phone_number}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">E-mail</div>
                        <div class="info-value">
                            <input type="text" value="{{$user->email}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Center</div>
                        <div class="info-value">
                            <input type="text" value="{{$user->profile->city}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Country</div>
                        <div class="info-value form-select-custom">
                            <select class="">
                                <option>select country</option>
                                <option>f</option>
                                <option>a</option>
                                <option>b</option>
                            </select>
                            <!-- <input type="text" value="john" class="form-input-custom" /> -->
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Role</div>
                        <div class="info-value">
                            <input type="text" value="Admin" disabled class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">User Name</div>
                        <div class="info-value">
                            <input type="text" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Password</div>
                        <div class="info-value">
                            <input type="text" value="" class="form-input-custom" />
                        </div>
                    </div>
                </div>
                <div class="info-button mt-35px">
                    <button>{{__('SAVE')}}</button>
                </div>
            </div>
            <div class="main-title mt-35px">MY ACCESS</div>
            <div class="my-access-part mt-30px">
                <div class="access-detail-group">
                    <div class="access-detail active">MY PROFILE</div>
                    <div class="access-detail">CONTENT EDITOR</div>
                </div>
                <div class="access-detail-group">
                    <div class="access-detail">ADMIN MANAGER</div>
                    <div class="access-detail active">CENTER EDITOR</div>
                </div>
                <div class="access-detail-group">
                    <div class="access-detail">CLIENT MANAGER</div>
                    <div class="access-detail">PRICE EDITOR</div>
                </div>
                <div class="access-detail-group">
                    <div class="access-detail">MAIL MANAGER</div>
                    <div class="access-detail">CHEKCLIST EDITOR</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<!-- <script>
    if (!getCookie('cookieNisVisaProcessing')) {
        $('.nis-visa-modal').addClass('show-modal');
    }

    $('.agree-button').on('click', function () {
        setCookie('cookieNisVisaProcessing', true, 365);
        $('.nis-visa-modal').addClass('d-none');
    })
</script> -->
@endsection
