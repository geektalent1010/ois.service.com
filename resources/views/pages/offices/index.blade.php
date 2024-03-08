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
            <div class="contact-section body-section">
                <div class="contact-section-content">
                    <p class="page-title">{{__('find_a_center')}}</p>
                    <div class="info-container w-100 d-flex justify-content-center">
                        <div class="info-box office-box">
                            <div class="search-field office-search">
                                <input type="text" class="input-field office-input cursor-default"
                                    placeholder="{{__('country')}} + {{__('city_L')}}" />
                                <img class="search-icon cursor-default" src="{{ asset('images/select-arrows.svg') }}">
                            </div>
                            <div class="offices-menus d-none">
                                @foreach ($offices as $country => $cities)
                                    @foreach ($cities as $key => $office)
                                        <div class="d-flex office-menu-item"
                                            data-country="{{ $office->country }} - {{ $office->city }}"
                                            data-id="{{ $office->id }}">
                                            <div class="office-country">
                                                @if ($key < 1)
                                                    {{ $country }}
                                                @endif
                                            </div>
                                            <div>- </div>
                                            <div class="pl-2">{{ $office->city }}</div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="offices-body"></div>
                        </div>
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
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var officeId = '';

        $('.office-input').click(function() {
            $(".offices-menus").removeClass('d-none');
        });

        $('.search-icon').click(function() {
            $(".offices-menus").removeClass('d-none');
        });

        function windowOnClick(event) {
            $('.offices-menus').addClass('d-none');
        }

        $(document).on('click', '.main-bg', function(event) {
            if (!$(event.target).hasClass('office-input') && !$(event.target).hasClass('search-icon')) {
                $('.offices-menus').addClass('d-none');
            }
        });

        $('.office-menu-item').click(function() {
            $('.input-field').val($(this).data('country'));
            officeId = $(this).data('id');
            showOffices();
        });

        function showOffices() {
            let country_name = $('.input-field').val();
            var send_data = {};
            send_data['office_id'] = officeId;
            $.ajax({
                url: '{{ route('offices.search') }}',
                method: "POST",
                data: send_data,
                success: function(res) {
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

    <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
@endsection
