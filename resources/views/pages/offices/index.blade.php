@extends('layouts.app', ['ACTIVE_TITLE' => __('centers'), 'modalData' => $modalData])

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
        <div class="d-flex justify-content-center">
            <div class="center-section body-section">
                <div class="center-section-content">
                    <p class="page-title">{{__('find_a_center')}}</p>
                    <div class="info-container w-50 d-flex justify-content-center">
                        <div class="info-box office-box">
                            <div class="select-group">
                                <div class="type-select form-select-custom" id="type-select">
                                    <select class="" id="type_id" name="office" text="Country">
                                        <option value="0">Type</option>
                                        <option value="VISA_NIGERIA" data-data1="VISA">VISA</option>
                                        <!-- <option value="VISA" data-data1="VISA">VISA</option> -->
                                        <option value="BVN" data-data1="BVN">BVN</option>
                                        <option value="NIN" data-data1="NIN">NIN</option>
                                    </select>
                                </div>
                                <div class="select-button mt-3 d-none">
                                    <div class="button-detail">USA</div>
                                    <div class="button-detail">NIGERIA</div>
                                </div>
                            </div>
                            <div class="select-group">
                                <div class="center-select form-select-custom" id="center-select">
                                    <select class="" id="center_id" name="office" text="Country">
                                        <option value="0">Country + City</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="offices-body"></div>
                    </div>
                </div>
                @include('_includes.footer')
            </div>
        </div>

    </div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>

    <script>
        drawSelectForm(document.getElementById('center-select'));
        drawSelectForm(document.getElementById('type-select'));

    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click','#center-select .select-items>div', function() {
            showOffices();
        });

        $("#type-select .select-items>div").on('click', function() {
            const type = $("#type_id").val()
            $("#center-select").html('')
            $(".button-detail").removeClass('active')
            $(".select-button").addClass('d-none');
            $(".offices-body").html('')
            // if(type === "VISA") {
            //     $(".select-button").removeClass('d-none');
            //     return;
            // }
            selectType(type);
        })

        $(".button-detail").click(function() {
            $(".button-detail").removeClass('active')
            $(this).addClass("active")
            $("#center-select").html('')
            selectType('VISA_' + $(this).text())
            $(".offices-body").html('')
        })

        function selectType (type) {
            $.ajax({
                url: '{{route('offices.center.getCenters')}}',
                method: "POST",
                data: {'type': type},
                dataType: 'json',
                success:function(res) {
                    let html = `<select class="" id="center_id" name="office" text="Country">
                        <option value="0">Country + City</option>`

                    for(const key in res) {
                        const country = res[key]
                        for(const center of country) {
                            html += `
                                <option value="${center.id}"
                                    data-data1="${center.country}"
                                    data-data2="${center.city}"
                                    >
                                    ${center.country} - ${center.city}
                                </option>
                            `
                        }
                    }

                    html += `</select>`

                    $("#center-select").html(html);
                    drawSelectForm(document.getElementById('center-select'));
                }
            })
        }

        function showOffices() {
            var send_data = {};
            send_data['office_id'] = $("#center_id").val();
            $.ajax({
                url: '{{ route('offices.search') }}',
                method: "POST",
                data: send_data,
                success: function(result) {
                    let res;
                    if(result) res = result.offices;
                    if (res.length) {
                        var html = '';
                        for (var resIndex = 0; resIndex < res.length; resIndex++) {
                            html +=
                                '<div class="d-flex align-items-start mt-5 detail-section"><img class="country-flag" src="{{ asset('images/Flags') }}/' +
                                res[resIndex].flag + '">';
                            html += '<div><p class="country mb-0">' + res[resIndex].country + '</p>';

                            if (res[resIndex].address == 'COMING SOON') {
                                html += '<p class="mb-0">' + res[resIndex].city + '</p>';
                                html += '<p class="mb-0">' + res[resIndex].address + '</p>';
                            } else {
                                for (const add of res[resIndex].address.split(' && ')) {
                                    html += '<p class="mb-0">' + add + '</p>';
                                }

                                html += '<p class="mb-0">' + res[resIndex].city + '</p>';
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
                                html +=
                                    '<div class="contact-btn-section pt-3"><a href="{{ route('contact.index') }}" class="contact-btn office-contact-btn mt-4">CONTACT US</a></div>';
                            }
                        }
                        $('.offices-body').html(html);
                        $('.offices-body').show();
                    } else {
                        var html = '';
                        html += '<p class="country mt-5">No Office</p>';
                        $('.offices-body').html(html);
                        $('.offices-body').show();
                    }
                },
                error: function(err) {}
            });
        }
    </script>
@endsection
