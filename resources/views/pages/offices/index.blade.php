@extends('layouts.app', ['ACTIVE_TITLE' => 'OFFICES'])

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
    <img class="menu-bg" src="{{ asset('images/Image1H.png') }}">
    <img class="menu-bg-mobile" src="{{ asset('images/Image1V.png') }}">
    <div class="d-flex justify-content-center">
        <div class="contact-section body-section">
            <p class="page-title">FIND AN OFFICE IN YOUR COUNTRY</p>
            <div class="info-container w-100 d-flex justify-content-center">
               <div class="info-box">
                  <div class="search-field">
                     <input type="text" class="input-field" placeholder="Country"/>
                     <span class="search-circle"></span>
                     <img class="search-icon" src="{{ asset('images/IconSEARCH.svg') }}" onClick="showOffices()">
                  </div>
                  <div class="offices-body"></div>
               </div>

            </div>
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

   function showOffices() {
      let country_name = $('.input-field').val();
      var send_data = {};
      send_data['country_name'] = country_name;
      $.ajax({
         url: '{{ route("offices.search") }}',
         method: "POST",
         data: send_data,
         success:function(res){
            if (res.length) {
               var html = '';
               for(var resIndex = 0; resIndex < res.length; resIndex++) {
                  html += '<p class="country">' + res[resIndex].country + '</p>';
                  html += '<p class="mb-0">' + res[resIndex].city + '</p>';
                  html += '<p class="mb-0">' + res[resIndex].address + '</p>';
                  html += '<p>' + res[resIndex].country + '</p>';
                  html += '<div class="d-flex"><span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span><label class="mb-0">' + res[resIndex].phone + '</label></div>';
                  html += '<div class="contact-btn-section"><a href="{{ route('contact.index') }}" class="contact-btn">CONTACT US</a></div>';
               }
               $('.offices-body').html(html);
               $('.offices-body').show();
            }
            else {
               var html = '';
               html += '<p class="country mt-5">No Office in ' + country_name + '</p>';
               $('.offices-body').html(html);
               $('.offices-body').show();
            }
         },
         error:function(err){
         }
      });
   }
</script>

<script type="text/javascript" src="{{asset('js/util.js')}}"></script>

@endsection
