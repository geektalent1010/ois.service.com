@extends('layouts.app', ['ACTIVE_TITLE' => 'ADMIN'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section admin-manager-section">
        <div class="manager-body">
            <div class="main-title">ADMIN MANAGER</div>
            <div class="mt-30px custom-input-dropdown">
                <form class="search-input" id="search-manager">
                    @csrf
                    <input type="text" name="search" id="search" placeholder="Search Name, Center" class="custom-input" />
                    <i class="fa fa-search"></i>
                </form>
                <div class="list-detail d-none">
                    @foreach ($adminUsers as $adminUser)
                        <div class="detail" value="{{$adminUser->email}}">{{$adminUser->email}} <span class="d-none">{{$adminUser->profile->first_name}} {{$adminUser->profile->last_name}}</span><span class="d-none">{{$adminUser->profile->city}}</span></div>
                    @endforeach
                </div>
            </div>
            <div class="button-part mt-30px">
                <button id="create-user-button">CREATE NEW USER</button>
            </div>
            <form class="my-profile-part d-none" id="create-user-form">
                @csrf
                <input type="hidden" id="userid" name="userid" />
                <div class="info-details">
                    <div class="info-detail">
                        <div class="info-head">First Name</div>
                        <div class="info-value">
                            <input type="text" id="data1" name="firstName" text="First Name" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Last Name</div>
                        <div class="info-value">
                            <input type="text" id="data2" name="lastName" text="Last Name" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Phone</div>
                        <div class="info-value">
                            <div class="form-select-custom phone-code-select select-left-icon" id="phone-code-select">
                                <select id="data3" name="phoneCode" text="Phone Code">
                                    <option value="0">Code</option>
                                    @foreach($phoneCodes as $phoneCode)
                                        <option data-data1="+{{$phoneCode}}">+{{$phoneCode}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" id="data4" name="phoneNumber" text="Phone Number" value="" class="form-input-custom phone-code-input" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">E-mail</div>
                        <div class="info-value">
                            <input type="text" id="data5" name="email" text="Email" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Center</div>
                        <div class="info-value">
                            <div class="form-select-custom select-left-icon" id="center-select">
                                <select class="" id="data6" name="center" text="Center">
                                    <option value="0">Country + Center</option>
                                    @foreach($offices as $country => $cities)
                                        @foreach ($cities as $key => $office)
                                            <option value="{{$office->id}}"
                                                data-data1="{{$office->country}}"
                                                data-data2="{{$office->city}}">
                                                {{$office->country}} - {{$office->city}}
                                            </option>
                                        @endforeach

                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Role</div>
                        <div class="info-value">
                            <div class="form-select-custom role-select select-left-icon" id="role-select">
                                <select id="data7" name="role" text="Role">
                                    <option value="0">Role</option>
                                    <option value="2" data-data1="Super Admin"></option>
                                    <option value="1" data-data1="Center Head"></option>
                                    <option value="0" data-data1="Customer Executive"></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">User Name</div>
                        <div class="info-value">
                            <input type="text" id="data8" name="username" text="User Name" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Password</div>
                        <div class="info-value">
                            <input type="password" id="data9" name="password" text="Password" value="" class="form-input-custom" />
                        </div>
                    </div>
                </div>
                <div class="roles-section">
                    <div class="main-title mt-35px">MY ACCESS</div>
                    <div class="my-access-part mt-30px">
                        <div class="access-detail-group">
                            <div class="access-detail active disabled">MY PROFILE</div>
                            <div class="access-detail disabled only-super">CONTENT EDITOR</div>
                        </div>
                        <div class="access-detail-group">
                            <div class="access-detail disabled only-super">ADMIN MANAGER</div>
                            <div class="access-detail" id="center-edit-button">CENTER EDITOR</div>
                        </div>
                        <div class="access-detail-group">
                            <div class="access-detail" id="client-man-button">CLIENT MANAGER</div>
                            <div class="access-detail" id="price-edit-button">PRICE EDITOR</div>
                        </div>
                        <div class="access-detail-group">
                            <div class="access-detail disabled only-super">MAIL MANAGER</div>
                            <div class="access-detail" id="checklist-edit-button">CHECKLIST EDITOR</div>
                        </div>
                    </div>
                </div>

                <div class="info-button mt-35px mb-35px">
                    <button id="save-but">{{__('PUBLISH')}}</button>
                    <input type="button" id="delete-but" value="DELETE">
                </div>
            </form>
        </div>
        <div class="manager-right-body">
            <div class="right-button" id="create-button-right">CREATE ADMIN</div>
            <div class="right-button disabled" id="update-button-right">UPDATE ADMIN</div>
            <div class="right-button disabled" id="delete-button-right">DELETE ADMIN</div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin_manager.js')}}"></script>
@endsection
