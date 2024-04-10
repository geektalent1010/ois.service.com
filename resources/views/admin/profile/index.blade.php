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
            <form class="my-profile-part mt-30px" id="profile-edit-form">
                @csrf
                <input type="hidden" name="userid" value="{{$user->id}}"/>
                <div class="info-details">
                    <div class="info-detail">
                        <div class="info-head">First Name</div>
                        <div class="info-value">
                            <input type="text" id="data1" name="firstName" text="First Name" value="{{$user->profile->first_name}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Last Name</div>
                        <div class="info-value">
                            <input type="text" id="data2" name="lastName" text="Last Name" value="{{$user->profile->last_name}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Phone</div>
                        <div class="info-value">
                            <div class="form-select-custom phone-code-select select-left-icon" id="phone-code-select">
                                <select id="data3" name="phoneCode" text="Phone Code">
                                    <option value="0">select</option>
                                    @foreach($phoneCodes as $phoneCode)
                                        @if('+'.$phoneCode == explode(' ', $user->profile->phone_number)[0])
                                            <option selected
                                                data-data1="{{$phoneCode}}">+{{$phoneCode}}</option>
                                        @else
                                            <option
                                                data-data1="{{$phoneCode}}">+{{$phoneCode}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" id="data4" name="phoneNumber" text="Phone Number" value="{{explode(' ', $user->profile->phone_number)[1]}}" class="form-input-custom phone-code-input" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">E-mail</div>
                        <div class="info-value">
                            <input type="text" id="data5" name="email" text="Email" value="{{$user->email}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Role</div>
                        <div class="info-value">
                            <input type="text" id="data7" name="role" text="Role" value="Admin" disabled class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">User Name</div>
                        <div class="info-value">
                            <input type="text" id="data8" name="username" text="User Name" value="{{$user->username}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Password</div>
                        <div class="info-value">
                            <input type="password" id="data9" name="password" text="Password" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="center-part">
                        @if ($myCenters)
                            @foreach ($myCenters as $key => $center)
                                <div class="info-detail center-part-${item.id}">
                                    <div class="info-head">
                                        @if ($key == 0) Center @endif
                                    </div>
                                    <div class="info-value">
                                        <div>{{$center->country}} - {{$center->city}}</div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="info-detail center-part-${item.id}">
                                <div class="info-head">
                                    Center
                                </div>
                                <div class="info-value">
                                    <div>No centers for you</div>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>
                <div class="info-button mt-35px">
                    <button id="save-but">{{__('SAVE')}}</button>
                </div>
            </form>
            <div class="main-title mt-35px">MY ACCESS</div>
            <div class="my-access-part mt-30px">
                <div class="access-detail-group">
                    <div class="access-detail active">MY PROFILE</div>
                    <div class="access-detail @if($roles['contentEditor']) active @endif">CONTENT EDITOR</div>
                </div>
                <div class="access-detail-group">
                    <div class="access-detail @if($roles['adminManager']) active @endif">ADMIN MANAGER</div>
                    <div class="access-detail @if($roles['centerEditor']) active @endif">CENTER EDITOR</div>
                </div>
                <div class="access-detail-group">
                    <div class="access-detail @if($roles['clientManager']) active @endif">CLIENT MANAGER</div>
                    <div class="access-detail @if($roles['priceEditor']) active @endif">PRICE EDITOR</div>
                </div>
                <div class="access-detail-group">
                    <div class="access-detail @if($roles['mailManager']) active @endif">MAIL MANAGER</div>
                    <div class="access-detail @if($roles['checklistEditor']) active @endif">CHECKLIST EDITOR</div>
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
<script type="text/javascript" src="{{asset('js/admin_profile.js')}}"></script>
@endsection
