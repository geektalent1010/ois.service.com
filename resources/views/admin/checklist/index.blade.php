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
                                            data-data1="{{$country}}"
                                            data-data2="{{$city->city}}">
                                            {{$country}}-{{$city->city}}
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
                                <option value="Diplomatic" data-data1="Diplomatic Passport"></option>
                                <option value="Official" data-data1="Official Passport"></option>
                                <option value="Standard" data-data1="Standard Passport"></option>
                                <option value="UN" data-data1="UN Passport"></option>
                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <div class="price-button-section d-none info-button mt-35px" id="create-button-part"><button>ADD NEW CHECKLIST</button></div>
            <div class="list-group">

            </div>
        </div>
        <div class="manager-right-body">
            <div class="editor-but subtitle-but" id="subtitle-button-right">SUBTITLE</div>
            <div class="editor-but content-but" id="content-button-right">CONTENT</div>
            <div class="editor-but add-table-but" id="add-table-button-right">ADD TABLE</div>
            <div class="editor-but remove-table-but" id="remove-table-button-right">REMOVE TABLE</div>
            <div class="editor-but add-row-but" id="add-row-button-right">ADD ROW</div>
            <div class="editor-but remove-row-but" id="remove-row-button-right">REMOVE ROW</div>
            <div class="editor-but remove-column-but" id="remove-column-button-right">REMOVE COLUMN</div>
        </div>
    </div>
</div>
<form id="deleteChecklistForm">
    <input type="hidden" id="deleteOfficeId" name="deleteChecklistId">
</form>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin_checklist.js')}}"></script>
@endsection
