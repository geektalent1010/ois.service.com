@extends('layouts.app', ['ACTIVE_TITLE' => 'CLIENTS'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section client-manager-section">
        <div class="manager-body">
            <div class="main-title">CLIENT MANAGER</div>
            <div class="mt-30px custom-input-dropdown">
                <form class="search-input" id="search-manager">
                    @csrf
                    <input type="text" name="search" id="search" placeholder="Search Name, Email, Country" class="custom-input" />
                    <i class="fa fa-search"></i>
                </form>
                <div class="list-detail d-none">
                    @foreach ($users as $user)
                        <div class="detail">{{$user}}</div>
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
                        <div class="info-head">Street</div>
                        <div class="info-value">
                            <input type="text" id="data3" name="street" text="Street" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">House Nr</div>
                        <div class="info-value">
                            <input type="text" id="data4" name="houseNr" text="House Nr" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">city</div>
                        <div class="info-value">
                            <input type="text" id="data5" name="city" text="City" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Country</div>
                        <div class="info-value country-select form-select-custom">
                            <select class="" id="data6" name="country" text="Country">
                                <option value="0">select country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Phone</div>
                        <div class="info-value">
                            <div class="form-select-custom phone-code-select">
                                <select id="data7" name="phoneCode" text="Phone Code">
                                    <option value="0">select</option>
                                    @foreach($phoneCodes as $phoneCode)
                                        <option>+{{$phoneCode}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" id="data8" name="phoneNumber" text="Phone Number" value="" class="form-input-custom phone-code-input" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">E-mail</div>
                        <div class="info-value">
                            <input type="text" id="data9" name="email" text="Email" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">User Name</div>
                        <div class="info-value">
                            <input type="text" id="data10" name="username" text="User Name" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Password</div>
                        <div class="info-value">
                            <input type="password" id="data11" name="password" text="Password" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">User ID</div>
                        <div class="info-value">
                            <input type="text" id="data12" name="password" text="User ID" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Registration Date</div>
                        <div class="info-value">
                            <input type="text" id="data13" name="password" text="Registration Date" value="" class="form-input-custom" />
                        </div>
                    </div>
                </div>
                <div class="info-button mt-35px">
                    <button id="save-but">{{__('REMOVE USER')}}</button>
                    <button id="export-but">{{__('EXPORT USER')}}</button>
                    <button id="export-all-but">{{__('EXPORT ALL')}}</button>
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
<script type="text/javascript" src="{{asset('js/client_manager.js')}}"></script>
@endsection
