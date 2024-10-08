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
            <div class="info-details-part d-none">
                @foreach ($adminUsers as $user)
                    <div class="info-detail-item" value="{{$user->id}}">
                        <div class="info-email">{{$user->email}}</div>
                    </div>
                @endforeach
            </div>
            <div class="button-part mt-30px">
            </div>
            <form class="my-profile-part" id="create-user-form">
                @csrf
                <input type="hidden" id="userid" name="userid" value="{{count($adminUsers) > 0 ? $adminUsers[0]->id : null}}" />
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
                    <div class="info-detail center-select-part">
                        <div class="info-head">Center</div>
                        <div class="info-value">
                            <div class="form-select-custom select-left-icon" id="center-select">
                                <select class="" id="data6" name="" text="Center">
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
                    <div class="center-part">
                    </div>

                </div>
                <div class="roles-section">
                    <div class="main-title mt-35px">MY ACCESS</div>
                    <div class="my-access-part mt-30px">
                        <div class="access-detail-group">
                            <div class="access-detail active disabled" id="profile-edit-button">MY PROFILE</div>
                            <div class="access-detail disabled only-super" id="content-edit-button">CONTENT EDITOR</div>
                        </div>
                        <div class="access-detail-group">
                            <div class="access-detail disabled only-super" id="admin-man-button">ADMIN MANAGER</div>
                            <div class="access-detail" id="center-edit-button">CENTER EDITOR</div>
                        </div>
                        <div class="access-detail-group">
                            <div class="access-detail" id="client-man-button">CLIENT MANAGER</div>
                            <div class="access-detail" id="price-edit-button">PRICE EDITOR</div>
                        </div>
                        <div class="access-detail-group">
                            <div class="access-detail disabled only-super" id="mail-man-button">MAIL MANAGER</div>
                            <div class="access-detail" id="checklist-edit-button">CHECKLIST EDITOR</div>
                        </div>
                    </div>
                </div>

                <div class="info-button mt-35px">
                    <button id="save-but">{{__('PUBLISH')}}</button>
                    <input type="button" id="delete-but" value="DELETE">
                    <input type="button" id="create-user-button" value="CREATE NEW USER">
                    <input type="button" id="log-button" value="ADMIN LOG">
                </div>
            </form>
            <div class="arrow-body d-none">
                <div id="arrow-back-button"><i class="fa fa-long-arrow-left"></i>Back</div>
                <div id="arrow-next-button">Next<i class="fa fa-long-arrow-right"></i></div>
            </div>
            <div class="admin-log-body d-none">
            </div>
            <div class="arrow-index-body">
                <div id="arrow-index-back-button"><i class="fa fa-long-arrow-left"></i>Back</div>
                <div id="arrow-index-next-button">Next<i class="fa fa-long-arrow-right"></i></div>
            </div>
        </div>

        <div class="manager-right-body">
            <div class="right-button" id="create-button-right">CREATE ADMIN</div>
            <div class="right-button" id="update-button-right">UPDATE ADMIN</div>
            <div class="right-button" id="delete-button-right">DELETE ADMIN</div>
            <div class="right-button" id="log-button-right">ADMIN LOG</div>
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
