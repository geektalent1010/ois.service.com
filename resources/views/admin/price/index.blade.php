@extends('layouts.app', ['ACTIVE_TITLE' => 'PRICING'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section price-manager-section">
        <div class="manager-body">
            <div class="main-title">PRICE EDITOR</div>
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
            <form class="edit-form d-none">
                @csrf
                <input type="hidden" id="edit-id" name="edit-id" value="0">
                <div class="card-custom mt-30px">
                    <div class="card-header-custom editable" contenteditable="true">Center Fees</div>
                    <div class="card-body-custom collapse show editable" contenteditable="true"><div>Please input here</div></div>
                </div>
                <div class="price-button-section info-button mt-35px">
                    <button>PUBLISH</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="editor-panel info-button">
    <button class="editor-but subtitle-but">subtitle</button>
    <button class="editor-but content-but">content</button>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin_price.js')}}"></script>
@endsection
