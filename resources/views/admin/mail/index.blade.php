@extends('layouts.app', ['ACTIVE_TITLE' => 'MAIL'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section mail-manager-section">
        <div class="manager-body">
            <div class="demo-body">
                <img src="{{ asset('images/IconMAIL.svg') }}" alt="">
                <div class="main-title">MAIL MANAGER</div>
                <div class="sub-title">UNDEFINED</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
@endsection
