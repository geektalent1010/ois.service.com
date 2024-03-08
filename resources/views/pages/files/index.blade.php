@extends('layouts.app', ['ACTIVE_TITLE' => 'FILES', 'modalData' => $modalData])

@section('title', __('- FILES'))

@section('PAGE_LEVEL_STYLES')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
    <div class="main-bg">
        <video autoplay muted loop class="video-section" playsinline>
            <source type="video/mp4">
        </video>
        <video autoplay muted loop class="video-section-mobile" playsinline>
            <source type="video/mp4">
        </video>
        <div class="files-section">
            <div class=" body-section" style=" min-height: calc(100vh - 120px); display:flex; flex-direction:column;align-items:center;justify-content:center">
                <div>{{__('files_page')}}</div>
            </div>

            @include('_includes.footer')

        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
