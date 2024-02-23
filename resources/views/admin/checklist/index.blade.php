@extends('layouts.app', ['ACTIVE_TITLE' => 'CHECKLIST'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section checklist-manager-section">
        <div class="manager-body">
            <div class="main-title">CHECKLIST EDITOR</div>
            <div class="select-group">
                <form class="select-form mt-30px" id="office-select-form">
                    @csrf
                    <div>
                        <label for="">SELECT CENTER</label>
                        <div class="form-select-custom" id="office-select-div">
                            <select name="officeId" id="office-select" class="">
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
                        </div>
                    </div>
                    <div>
                        <label for="">SELECT PASSPORT TYPE</label>
                        <div class="form-select-custom" id="type-select-div">
                            <select name="type" id="type-select" class="">
                                <option value="0">Passport Type</option>
                                <option value="Diplomatic">Diplomatic Passport</option>
                                <option value="Official">Official Passport</option>
                                <option value="Standard">Standard Passport</option>
                                <option value="UN">UN Passport</option>
                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <div class="price-button-section info-button mt-35px" id="create-button-part"><button>ADD NEW CHECKLIST</button></div>
            <div class="list-group">

            </div>
        </div>
    </div>
</div>
<div class="editor-panel info-button">
    <button class="editor-but subtitle-but">SubTitle</button>
    <button class="editor-but content-but">Content</button>
    <button class="editor-but mt10-but">mt-10px</button>
    <button class="editor-but mt20-but">mt-20px</button>
    <button class="editor-but mt30-but">mt-30px</button>
    <button class="editor-but mb10-but">mb-10px</button>
    <button class="editor-but mb20-but">mb-20px</button>
    <button class="editor-but mb30-but">mb-30px</button>
    <button class="editor-but reset-but">Reset Style</button>
    <button class="editor-but add-table-but">Add Table</button>
    <button class="editor-but remove-table-but">Remove Table</button>
    <button class="editor-but add-row-but">Add Row</button>
    <button class="editor-but add-column-but">Add Column</button>
    <button class="editor-but">Reset</button>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin_checklist.js')}}"></script>
@endsection
