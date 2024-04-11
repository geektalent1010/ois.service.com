@extends('layouts.app', ['ACTIVE_TITLE' => 'CLIENTS'], ['VIDEO_LOCK' => true])

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="admin-bg">
    <div class="body-section client-manager-section">
        <div class="manager-body">
            <div class="main-title">CLIENT MANAGER</div>
            <div class="filter-section">
                <form class="filter-left-section" id="search-form">
                    <input type="text" placeholder="Search name, email" autofocus id="search-key" value="{{$searchKey}}" />
                </form>
                <div class="filter-right-section">
                    <div id="export-but" class="export-but">EXPORT</div>
                    <div id="export-all-but" class="export-but">EXPORT ALL</div>
                    <input type="hidden" value="{{$page}}" id="page">
                    <div>
                        @if ($skip != 0)
                            <i class="fa fa-angle-left" id="previous-page"></i>{{' '}}
                        @endif
                        <b>{{$skip + 1}}</b> - <b>{{$skip + $take > $count ? $count : $skip + $take}}</b> of <b>{{$count}}</b>{{' '}}
                        @if ($skip + $take < $count)
                            <i class="fa fa-angle-right" id="right-page"></i>
                        @endif
                    </div>
                </div>
            </div>
            <div class="table-section">
                <table class="manager-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>No</th>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>User Name</th>
                            <th>Register Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr value="{{$user->id}}">
                                <td><input type="checkbox" class="checked-client" value="{{$user->id}}"></td>
                                <td>{{$skip + $key + 1}}</td>
                                <td>{{$user->id}}</td>
                                <td>{{$user->profile->first_name}} {{$user->profile->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->profile->country->name}} {{$user->profile->country->city}} {{$user->profile->street}} {{$user->profile->house_number}}</td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript" src="{{asset('js/client_manager.js')}}"></script>
@endsection
