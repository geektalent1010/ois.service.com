@extends('layouts.app', ['ACTIVE_TITLE' => 'FORGOT PASSWORD'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section admin-forgot-section">
        <div class="manager-body">
            <form class="send-form" action="{{route('admin.forgot.send')}}" method="POST">
                @csrf
                <input id="email" type="email" class="form-control is-invalid" name="email" placeholder="Email" required  autofocus />
                <button type="submit" class="btn btn-primary send-button">
                    SEND
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script>
    @if (session('result') && session('result') == "success")
        customAlert('Success', "Successfully sent", "success");
        {{ session()->forget('result') }}
    @elseif (session('result') && session('result') == "nodata")
        customAlert('We are so sorry', "No registered Email", "error");
        {{ session()->forget('result') }}
    @endif
</script>
@endsection
