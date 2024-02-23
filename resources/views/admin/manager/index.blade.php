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
                        <div class="detail">{{$adminUser}}</div>
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
                            <div class="form-select-custom phone-code-select" id="phone-code-select">
                                <select id="data3" name="phoneCode" text="Phone Code">
                                    <option value="0">select</option>
                                    @foreach($phoneCodes as $phoneCode)
                                        <option>+{{$phoneCode}}</option>
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
                            <input type="text" id="data6" name="city" text="Center" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Country</div>
                        <div class="info-value country-select form-select-custom" id="country-select">
                            <select class="" id="data7" name="country" text="Country">
                                <option value="0">select country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Role</div>
                        <div class="info-value">
                            <input type="text" id="data8" name="role" text="Role" value="Admin" disabled class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">User Name</div>
                        <div class="info-value">
                            <input type="text" id="data9" name="username" text="User Name" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Password</div>
                        <div class="info-value">
                            <input type="password" id="data10" name="password" text="Password" value="" class="form-input-custom" />
                        </div>
                    </div>
                </div>
                <div class="roles-section">
                    <div class="main-title mt-35px">MY ACCESS</div>
                    <div class="my-access-part mt-30px">
                        <div class="access-detail-group">
                            <div class="access-detail">MY PROFILE</div>
                            <div class="access-detail">CONTENT EDITOR</div>
                        </div>
                        <div class="access-detail-group">
                            <div class="access-detail">ADMIN MANAGER</div>
                            <div class="access-detail">CENTER EDITOR</div>
                        </div>
                        <div class="access-detail-group">
                            <div class="access-detail">CLIENT MANAGER</div>
                            <div class="access-detail">PRICE EDITOR</div>
                        </div>
                        <div class="access-detail-group">
                            <div class="access-detail">MAIL MANAGER</div>
                            <div class="access-detail">CHECKLIST EDITOR</div>
                        </div>
                    </div>
                </div>

                <div class="info-button mt-35px">
                    <button id="save-but">{{__('PUBLISH')}}</button>
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
<script type="text/javascript" src="{{asset('js/admin_manager.js')}}"></script>
@endsection
