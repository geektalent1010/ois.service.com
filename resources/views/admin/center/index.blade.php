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
                <form class="select-form form-select-custom mt-30px" id="country-select-form">
                    @csrf
                    <select name="officeId" id="country-select" class="">
                        <option value="0">Country + City</option>
                        @foreach ($offices as $country => $cities)
                            @foreach($cities as $key => $city)
                                <option value="{{$city->id}}"
                                    data-country="{{$country}}">
                                    {{$country}} - {{$city->city}}
                                </option>
                            @endforeach
                        @endforeach
                    </select>
                </form>
                <form class="office-detail-form">
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
