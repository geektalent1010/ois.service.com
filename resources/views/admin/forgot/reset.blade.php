@extends('layouts.app', ['ACTIVE_TITLE' => 'PASSWORD RESET'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section admin-forgot-reset-section">
        <div class="manager-body">
            <form class="reset-form" action="{{route('admin.forgot.resetPost')}}" method="POST">
                @csrf
                <input type="hidden" id="confirmId" name="confirmId" value="{{$confirmId}}" />
                <input id="email" type="email" class="form-control is-invalid" name="email" placeholder="Email" />
                <input id="password" type="password" class="form-control is-invalid" name="password" placeholder="Password" />
                <button type="submit" class="btn btn-primary send-button">
                    RESET
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
    $(".reset-form").submit(function(e) {
        e.preventDefault();
        const email = $("#email").val();
        const password = $("#password").val();
        if(!email || !password) {
            customAlert("We are so sorry", "Please input all fields.", "error");
            return;
        }
        $.ajax({
            url: '/admin/forgotResetPassword',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success:function(res) {
                if(res.status == "noUser") {
                    customAlert("We are so sorry", "This email is not exist", "error");
                } else if(res.status == "noConfirmId") {
                    customAlert("We are so sorry", "Your confirm Id is not correct. Please check your mail.", 'error');
                } else if(res.status == "success") {
                    customAlert("Success", "Your password is resetted successfully.", "success");
                }
            }
        })
    })
</script>
@endsection
