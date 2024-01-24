@extends('layouts.app', ['ACTIVE_TITLE' => 'APPLICATION'], ['VIDEO_LOCK' => true])

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
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}" alt="">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}" alt="">
    <div class="m-0 checklists-section">
        <div class="main-title">
            CHECKLISTS
        </div>
        <div class="section-body body-section mt-30px">
            <form class="form-section">
                <div class="row mb-24px">
                    <div class="col-md-6 form-group">
                        <p class="form-label">SELECT COUNTRY + CITY APPLYING FROM</p>
                        <!-- <select class="form-control webkit-style country-select w-100" name="center" id="center">
                            <option value="">Country + City</option>
                            @foreach($centers as $center)
                                <option value="{{$center->id}}">{{$center['city']}}, {{$center['country']}}</option>
                            @endforeach
                        </select> -->
                        <div class="info-box">
                            <div class="search-field">
                                <input type="text" class="input-field office-input cursor-pointer" placeholder="Country + City" />
                                <img class="search-icon" src="{{ asset('images/select-arrows.svg') }}">
                            </div>
                            <div class="offices-menus d-none">
                                @foreach($offices as $country => $cities)
                                    @foreach($cities as $key => $office)
                                    <div class="d-flex office-menu-item" data-country="{{$office->country}} - {{$office->city}}" data-id="{{$office->id}}">
                                        <div class="office-country">@if ($key < 1){{ $country }}@endif</div>
                                        <div>- </div>
                                        <div class="pl-2">{{ $office->city }}</div>
                                    </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 form-group">
                        <p class="form-label">SELECT PASSPORT TYPE APPLYING WITH</p>
                        <select class="form-control webkit-style country-select w-100" name="visa_type" id="visaType">
                            <option value="">Pasport Type</option>
                            <option value="Diplomatic">Diplomatic Passport</option>
                            <option value="Official">Official Passport</option>
                            <option value="Standard">Standard Passport</option>
                            <option value="UN">UN Passport</option>
                        </select>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-7 form-group mt-19px mb-30px">
                        <div class="offices-body"></div>
                        <!-- <button type="button" class="btn btn-primary confirm-button button-submit">
                            {{ __('CONFIRM') }}
                        </button> -->
                    </div>
                </div>

                <div class="row mt-19px">
                    <div class="col-md-12 checklistsFilters">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript" src="{{asset('js/util.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var officeId = '';

   $('.office-input').click(function () {
      $(".offices-menus").removeClass('d-none');
   });

   function windowOnClick(event) {
      $('.offices-menus').addClass('d-none');
   }

   $(document).on('click', '.main-bg', function (event) {
      if(!$(event.target).hasClass('office-input')) {
         $('.offices-menus').addClass('d-none');
      }
   });

   $('.office-menu-item').click(function () {
      $('.input-field').val($(this).data('country'));
      officeId = $(this).data('id');
      showOffices();
   });

   function showOffices() {
      let country_name = $('.input-field').val();
      var send_data = {};
      send_data['office_id'] = officeId;
      $.ajax({
         url: '{{ route("offices.search") }}',
         method: "POST",
         data: send_data,
         success:function(res){
            if (res.length) {
               var html = '';
               for(var resIndex = 0; resIndex < res.length; resIndex++) {
                  html += '<div class="d-flex align-items-start"><img class="country-flag" src="{{ asset('images/Flags') }}/' + res[resIndex].flag +'">';
                  html += '<div><p class="country mb-0">' + res[resIndex].country + '</p>';
                  if (res[resIndex].address == 'COMING SOON….!') {
                     html += '<p class="mb-0">' + res[resIndex].city + '</p>';
                     html += '<p class="mb-0">' + res[resIndex].address + '</p>';
                  } else {
                     html += '<p class="mb-0">' + res[resIndex].address + '</p>';
                     html += '<p>' + res[resIndex].city + '</p>';
                     html += '<p class="country mt-4">Opening Hours</p>';
                     html += '<p class="mb-0">' + res[resIndex].working_days + ':</p>';
                     html += '<p class="mb-0">' + res[resIndex].working_time + '</p>';
                     html += '</div></div>';
                  }
               }
               $('.offices-body').html(html);
               $('.offices-body').show();
            }
            else {
               var html = '';
               html += '<p class="country mt-5">No Office</p>';
               $('.offices-body').html(html);
               $('.offices-body').show();
            }
         },
         error:function(err){
         }
      });
    }

    $('.button-submit').click(function () {
        checklistsFilters();
    });

    function checklistsFilters() {
        $.post('{{ route('checklists.filter') }}', $('.form-section').serialize(), function (response) {
            $('.checklistsFilters').html(response);
        })
    }
</script>
@endsection
