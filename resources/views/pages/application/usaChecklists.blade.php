@extends('layouts.app', ['ACTIVE_TITLE' => 'APPLICATION', 'VIDEO_LOCK' => true, 'modalData' => $modalData])

@section('title', __('- CHECKLISTS'))

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
        <div class="m-0 checklists-section">
            <div class="checklists-section-content mb-3">
                <div class="checklists-section-body">
                    <div class="main-title">
                        {{__('usa_visa_checklist')}}
                    </div>
                    <div class="section-body body-section mt-30px">
                        <form class="form-section">
                            <div class="row mb-24px">
                                <div class="col-md-6 form-group">
                                    <p class="form-label">{{__('select_country')}} + {{__('city_applying_from')}}</p>
                                    <div class="info-box">
                                        <div class="center-select form-select-custom" id="center-select">
                                            <select class="" id="center_id" name="office" text="Country">
                                                <option value="0">Country + City</option>
                                                @foreach($offices as $country => $cities)
                                                    @foreach ($cities as $key => $office)
                                                        <option value="{{$office->id}}"
                                                            data-data1="{{$office->country}}"
                                                            data-data2="{{$office->city}}"
                                                            >
                                                            {{$office->country}} - {{$office->city}}
                                                        </option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <p class="form-label">{{__('select_passport_type_applying_with')}}</p>
                                    <div class="info-box">
                                        <div class="center-select form-select-custom" id="type-select">
                                            <select id="type_id" name="visa_type" text="">
                                                <option value="0">Passport Type</option>
                                                @if(isset($services))
                                                    @foreach($services as $service)
                                                        <option value="{{$service}}"
                                                            data-data1="{{$service}}"
                                                        >{{$service}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-7 form-group mt-19px mb-30px">
                                    <div class="offices-body"></div>
                                </div>
                            </div>

                            <div class="row mt-19px">
                                <div class="col-md-12 checklistsFilters" id="filter-content">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('_includes.footer')
        </div>
    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const selectCenterDom = document.getElementById('center-select');
        drawSelectForm(selectCenterDom);
        const selectTypeDom = document.getElementById('type-select');
        drawSelectForm(selectTypeDom);

        $("#center-select .select-items>div").click(function() {
            showOffices();
        });

        function showOffices() {
            let country_name = $('.input-field').val();
            var send_data = {};
            send_data['office_id'] =  $('#center_id').val();
            $.ajax({
                url: '{{ route('offices.search') }}',
                method: "POST",
                data: send_data,
                success: function(res) {
                    var html = '';
                    if (res.length) {
                        for (var resIndex = 0; resIndex < res.length; resIndex++) {
                            html +=
                                '<div class="d-flex align-items-start"><img class="country-flag" src="{{ asset('images/Flags') }}/' +
                                res[resIndex].flag + '">';
                            html += '<div><p class="country mb-0">' + res[resIndex].country + '</p>';
                            if (res[resIndex].address == 'COMING SOON') {
                                html += '<p class="mb-0">' + res[resIndex].city + '</p>';
                                for (const add of res[resIndex].address.split(' && ')) {
                                    html += '<p class="mb-0">' + add + '</p>';
                                }
                            } else {
                                for (const add of res[resIndex].address.split(' && ')) {
                                    html += '<p class="mb-0">' + add + '</p>'
                                }
                                html += '<p>' + res[resIndex].city + '</p>';
                                html += '<p class="country mt-4">Opening Hours</p>';

                                if (res[resIndex].working_days == 'N.A') {
                                    html += '<p class="mb-0">' + res[resIndex].working_days + '</p>';
                                } else {
                                    html += '<p class="mb-0">' + res[resIndex].working_days + ':</p>';
                                    const times = res[resIndex].working_time.split(' && ');
                                    times.forEach((element) => {
                                        html += '<p class="mb-0">' + element + '</p>';
                                    });
                                }

                                html += '</div></div>';
                            }
                        }
                        $('.offices-body').html(html);
                        $('.offices-body').show();

                    } else {
                        html += '<p class="country mt-5">No Office</p>';
                        $('.offices-body').html(html);
                        $('.offices-body').show();


                    }

                    drawSelectForm(document.getElementById('type-select'));
                    checklistsFilters();

                    $('#type-select .select-items>div').on('click', function() {
                        if ($('#type_id').val() && $('#center_id').val()) {
                            checklistsFilters();
                        }
                    });
                },
                error: function(err) {}
            });
        }

        $('.button-submit').click(function() {
            checklistsFilters();
        });

        function checklistsFilters() {
            $.post('{{ route('checklists.usafilter') }}', $('.form-section').serialize(), function(response) {
                $('.checklistsFilters').html(response);
                scrollToList();
            })
        }

        function scrollToList() {
            const section = document.getElementsByClassName('checklists-section-body')[0];
            const rect = section.getBoundingClientRect();
            const filter = document.getElementsByClassName('checklistsFilters')[0];
            const rectFilter = filter.getBoundingClientRect();
            const height = rectFilter.height;
            if(height > 0) {
                $('.checklists-section').animate({
                    scrollTop: rect.height - rectFilter.height
                }, 500, 'swing')
            }
        }
    </script>
@endsection
