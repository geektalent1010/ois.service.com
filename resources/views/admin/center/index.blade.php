@extends('layouts.app', ['ACTIVE_TITLE' => 'CENTERS'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section center-manager-section">
        <div class="manager-body">
            <div class="main-title">CENTER EDITOR</div>
                <div class="content-panel-part mt-30px">
                    <a class="content-panel @if($type=='VISA_USA') active @endif" href="{{route('admin.center.index', ['type' => 'VISA_USA'])}}">VISA</a>
                    <a class="content-panel @if($type=='BVN') active @endif" href="{{route('admin.center.index', ['type' => 'BVN'])}}">BVN</a>
                    <a class="content-panel @if($type=='NIN') active @endif" href="{{route('admin.center.index', ['type' => 'NIN'])}}">NIN</a>
                </div>
                <div class="content-small-panel-part">
                    <a class="content-small-panel @if($type=='VISA_USA') active @endif" href="{{route('admin.center.index', ['type' => 'VISA_USA'])}}">USA</a>
                    <a class="content-small-panel @if($type=='VISA_NIGERIA') active @endif" href="{{route('admin.center.index', ['type' => 'VISA_NIGERIA'])}}">NIGERIA</a>
                </div>
                <form class="select-form form-select-custom mt-30px" id="country-select-form">
                    @csrf
                    <select name="officeId" id="country-select" class="">
                        <option value="0">Country + City</option>
                        @foreach ($offices as $country => $cities)
                            @foreach($cities as $key => $city)
                                <option value="{{$city->id}}"
                                    data-data1="{{$country}}"
                                    data-data2="{{$city->city}}">
                                    {{$country}} - {{$city->city}}
                                </option>
                            @endforeach
                        @endforeach
                    </select>
                </form>
                <form class="office-detail-form">
                    <input type="hidden" value="{{$type}}" name="type" id="type" />
                    <div class="office-detail mt-30px d-none"></div>
                    <div class="publish-button info-button mt-35px d-none">
                        <button>PUBLISH</button>
                    </div>
                </form>
                <div class="add-new-button info-button mt-30px">
                    <button>ADD NEW CENTER</button>
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
<script type="text/javascript" src="{{asset('js/admin_center.js')}}"></script>
@endsection
