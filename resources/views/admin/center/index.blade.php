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
                <div class="select-form form-select-custom mt-30px">
                    <select name="" id="" class="">
                        <option value="0">Country + City</option>
                        @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="info-button mt-35px">
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
