<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#003366" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BUDDIES') }} Terms of Use</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}" />

    <link href="{{ asset('css/bootstrap_4.1.3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="protection-body">
        <div class="scroll-body">
            <div class="main-body">
                {!!$data->content!!}
            </div>
        </div>
    </div>
</body>

</html>
