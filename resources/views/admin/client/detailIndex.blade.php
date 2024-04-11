@extends('layouts.app', ['ACTIVE_TITLE' => 'CLIENTS'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section client-manager-detail">
        <div class="manager-body">
            <div class="main-title">CLIENT MANAGER</div>
            <form class="my-profile-part" id="create-user-form">
                @csrf
                <input type="hidden" id="userid" name="userid" value="{{$id}}" />
                <div class="info-details">
                    <div class="info-detail">
                        <div class="info-head">First Name</div>
                        <div class="info-value">
                            <input type="text" id="data1" name="firstName" text="First Name" value="{{$user ? $user->profile->first_name : ""}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Last Name</div>
                        <div class="info-value">
                            <input type="text" id="data2" name="lastName" text="Last Name" value="{{$user ? $user->profile->last_name : ""}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Street</div>
                        <div class="info-value">
                            <input type="text" id="data3" name="street" text="Street" value="{{$user ? $user->profile->street : ""}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">House Nr</div>
                        <div class="info-value">
                            <input type="text" id="data4" name="houseNr" text="House Nr" value="{{$user ? $user->profile->house_number : ""}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">City</div>
                        <div class="info-value">
                            <input type="text" id="data5" name="city" text="City" value="{{$user ? $user->profile->city : ""}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Country</div>
                        <div class="info-value" >
                            <div class="country-select form-select-custom select-left-icon" id="country-select">
                                <select class="" id="data6" name="country" text="Country">
                                    <option value="0">select country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}"
                                            data-data1="{{$country->name}}"
                                            @if ($user && $country->id == $user->profile->country_id )
                                                selected
                                            @endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Phone</div>
                        <div class="info-value">
                            <div class="form-select-custom phone-code-select select-left-icon" id="phone-code-select">
                                <select id="data7" name="phoneCode" text="Phone Code">
                                    <option value="0">select</option>
                                    @foreach($phoneCodes as $phoneCode)
                                        <option data-data1="+{{$phoneCode}}"
                                        @if ($user && $phoneCode == explode(' ', $user->profile->phone_number)[0])
                                            selected
                                        @endif
                                        >+{{$phoneCode}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" id="data8" name="phoneNumber" text="Phone Number" value="{{$user ? explode(' ', $user->profile->phone_number)[1] : ""}}" class="form-input-custom phone-code-input" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">E-mail</div>
                        <div class="info-value">
                            <input type="text" id="data9" name="email" text="Email" value="{{$user ? $user->email : ""}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">User Name</div>
                        <div class="info-value">
                            <input type="text" id="data10" name="username" text="User Name" value="{{$user ? $user->username : ""}}" class="form-input-custom" />
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
                            <input type="text" disabled id="data12" name="" text="User ID" value="{{$user ? $user->id : ""}}" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Registration Date</div>
                        <div class="info-value">
                            <input type="text" id="data13" name="" disabled text="Registration Date" value="{{$user ? $user->created_at : ""}}" class="form-input-custom" />
                        </div>
                    </div>
                </div>
                <div class="info-button mt-35px">
                    <button id="publish-but">{{__('UPDATE CLIENT')}}</button>
                    <button id="remove-but">{{__('REMOVE CLIENT')}}</button>
                    <button id="export-but">{{__('EXPORT CLIENT')}}</button>
                </div>
            </form>
        </div>
        <div class="manager-right-body">
            <div class="right-button" id="update-button-right">UPDATE CLIENT</div>
            <div class="right-button" id="delete-button-right">DELETE CLIENT</div>
            <div class="right-button" id="export-button-right">EXPORT CLIENT</div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/client_detail_manager.js')}}"></script>
@endsection
