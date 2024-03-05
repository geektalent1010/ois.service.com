@extends('layouts.app', ['ACTIVE_TITLE' => 'CONTENT'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section content-manager-section">
        <div class="manager-body">
            <div class="main-titles">CONTENT EDITOR</div>
            <form id="title-form">
                @csrf
                <input type="hidden" value="{{$lang}}" id="langCode" name="langCode" />
                <input type="hidden" value="" id="titleId" name="title" />
                <input type="hidden" value="0" id="type" name="type">
            </form>
            <div class="content-panel-part mt-30px">
                @foreach ($contents as $key => $content)
                    <div class="content-panel"
                        @if ($key >= 0 && $key < 4)
                            data-value="1"
                        @elseif ($key >= 4 && $key < 8)
                            data-value="2"
                        @endif
                    contentId="{{$content->order_num}}">{{$content->title}}</div>
                @endforeach
            </div>
            <div class="content-edit-body">

            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin_content.js')}}"></script>
@endsection
