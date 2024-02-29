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
            <div class="main-title">MAIL EDITOR</div>
            <div class="content-edit-body">
                @foreach ($content as $con)
                    <form class="mail-editor-form mt-30px">
                        @csrf
                        <input type="hidden" name="content-id" value="{{$con->id}}" />
                        <textarea class="custom-textarea" name="content">{{$con->content}}</textarea>
                        <div class="info-button mt-35px">
                            <button>PUBLISH</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin_mail.js')}}"></script>
@endsection
