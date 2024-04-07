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
                        <div class="detail" value="{{$user->email}}">
                            {{$user->email}}
                            <span class="d-none">
                                {{$user->profile->first_name}}
                                {{$user->profile->last_name}}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="info-details-part d-none">
                @foreach ($users as $user)
                    <div class="info-detail-item" value="{{$user->id}}">
                        <div class="info-email">{{$user->email}}</div>
                    </div>
                @endforeach
            </div>
            @if ($isSuperAdmin)
                <div class="button-part mt-30px">
                    <button id="create-user-button">CREATE NEW USER</button>
                </div>
            @endif
            <form class="my-profile-part" id="create-user-form">
                @csrf
                <input type="hidden" id="userid" name="userid" value="{{count($users) > 0 ? $users[0]->id : null}}" />
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
                        <div class="info-head">City</div>
                        <div class="info-value">
                            <input type="text" id="data5" name="city" text="City" value="" class="form-input-custom" />
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
                                            data-data1="{{$country->name}}">{{$country->name}}</option>
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
                                        <option data-data1="+{{$phoneCode}}">+{{$phoneCode}}</option>
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
                            <input type="text" id="data12" name="" text="User ID" value="" class="form-input-custom" />
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="info-head">Registration Date</div>
                        <div class="info-value">
                            <input type="text" id="data13" name="" text="Registration Date" value="" class="form-input-custom" />
                        </div>
                    </div>
                </div>
                <div class="info-button mt-35px">
                    <button id="publish-but">{{__('PUBLISH')}}</button>
                    <button id="remove-but">{{__('REMOVE USER')}}</button>
                    <button id="export-but">{{__('EXPORT USER')}}</button>
                    <button id="export-all-but">{{__('EXPORT ALL')}}</button>
                </div>
            </form>
            <div class="arrow-body d-none">
                <div id="arrow-back-button"><i class="fa fa-long-arrow-left"></i>Back</div>
                <div id="arrow-next-button">Next<i class="fa fa-long-arrow-right"></i></div>
            </div>
            <div class="arrow-index-body d-none">
                <div id="arrow-index-back-button"><i class="fa fa-long-arrow-left"></i>Back</div>
                <div id="arrow-index-next-button">Next<i class="fa fa-long-arrow-right"></i></div>
            </div>
        </div>
        <div class="manager-right-body">
            <div class="right-button" id="create-button-right">CREATE CLIENT</div>
            <div class="right-button" id="update-button-right">UPDATE CLIENT</div>
            <div class="right-button" id="delete-button-right">DELETE CLIENT</div>
            <div class="right-button" id="export-button-right">EXPORT CLIENT</div>
            <div class="right-button" id="export-all-button-right">EXPORT ALL</div>
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
