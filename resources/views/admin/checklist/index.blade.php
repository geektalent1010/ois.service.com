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
            <div class="content-panel-part mt-30px">
                <a class="content-panel @if($type=='VISA_USA') active @endif" href="{{route('admin.checklist.index', ['type' => 'VISA_USA'])}}">USA</a>
                <a class="content-panel @if($type=='VISA_NIGERIA') active @endif" href="{{route('admin.checklist.index', ['type' => 'VISA_NIGERIA'])}}">NIGERIA</a>
            </div>
            <div class="select-group">
                <form class="select-form mt-30px" id="office-select-form">
                    @csrf
                    <input type="hidden" name="type" id="type" value={{$type}} />
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
                        @if($type == 'VISA_USA')
                            <label for="">TYPE OF SERVICE</label>
                            <div class="service-type-group">
                                <div class="d-flex">
                                    <input type="radio" name="edit-type" value="1" class="edit-type" checked />
                                    <div class="form-select-custom" id="type-select-div">
                                        <select name="type-select" id="type-select" class="">
                                            <option value="0">Type of Service</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <input type="radio" name="edit-type" class="edit-type" value="2" />
                                    <div class="info-value">
                                        <input type="text" name="type-input" id="type-input" text="Last Name"
                                            value="" placeholder="New type of Service" class="form-input-custom" disabled />
                                    </div>
                                </div>
                            </div>
                            @elseif($type == 'VISA_NIGERIA')
                            <label for="">SELECT PASSPORT TYPE</label>
                            <div class="form-select-custom" id="type-select-div">
                                <select name="type-select" id="type-select" class="">
                                    <option value="0">Passport Type</option>
                                    <option value="Diplomatic" data-data1="Diplomatic Passport"></option>
                                    <option value="Official" data-data1="Official Passport"></option>
                                    <option value="Standard" data-data1="Standard Passport"></option>
                                    <option value="UN" data-data1="UN Passport"></option>
                                </select>
                            </div>
                        @endif
                        
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
            <div class="editor-group">
                <div class="editor-but regular-text-but">T</div>
                <div class="editor-but bold-text-but bold">T</div>
            </div>
            <div class="editor-group">
                <div class="editor-but underline-text-but underline">T</div>
                <div class="editor-but bold-underline-text-but bold-underline">T</div>
            </div>
            <div class="editor-but add-table-but" id="add-table-button-right">ADD TABLE</div>
            <div class="editor-but remove-table-but" id="remove-table-button-right">REMOVE TABLE</div>
            <div class="editor-but add-row-but" id="add-row-button-right">ADD ROW</div>
            <div class="editor-but add-column-but" id="add-column-button-right">ADD COLUMN</div>
            <div class="editor-but remove-row-but" id="remove-row-button-right">REMOVE ROW</div>
            <div class="editor-but remove-column-but" id="remove-column-button-right">REMOVE COLUMN</div>
        </div>
    </div>
</div>
<input type="file" class="d-none" name="file" id="checklist-file" />
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
