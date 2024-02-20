@extends('layouts.app', ['ACTIVE_TITLE' => 'ADMIN'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section admin-manager-section">
        <div class="manager-body">
            <div class="main-title">ADMIN MANAGER</div>
            <div class="search-part mt-30px">
                <input type="text" placeholder="Search Name, Center" class="custom-input" />
                <i class="fa fa-search"></i>
            </div>
            <div class="button-part mt-30px">
                <button>CREATE NEW USER</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<!-- <script>
    if (!getCookie('cookieNisVisaProcessing')) {
        $('.nis-visa-modal').addClass('show-modal');
    }

    $('.agree-button').on('click', function () {
        setCookie('cookieNisVisaProcessing', true, 365);
        $('.nis-visa-modal').addClass('d-none');
    })
</script> -->
<script>
</script>
@endsection
