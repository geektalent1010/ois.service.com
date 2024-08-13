<div class="w-100">
    <div class="accordion" id="document">
        @if (isset($fees))
            @foreach($fees as $fee)
                <div class="card">
                    <div class="card-header" id="documentHead{{ $fee->id }}">
                        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse"
                            data-target="#document{{ $fee->id }}" aria-expanded="true"
                            aria-controls="document{{ $fee->id }}">
                            {{ $fee->title }}
                        </a>
                    </div>
                    <div id="document{{ $fee->id }}" class="collapse"
                        aria-labelledby="documentHead{{ $fee->id }}" data-parent="#document">
                        <div class="card-body">
                            @php
                                echo $fee->description;
                            @endphp
                            <div class="row flex-column justify-content-center align-items-center mt-3">
                                <div class="col-md-6 form-group mt-2">
                                    <a class="btn btn-primary confirm-button" href="{{ route('booking.iframe') }}"
                                        target="_blank">
                                        {{ __('BOOK APPOINTMENT') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        @if(isset($checklists))
            @foreach ($checklists as $key => $item)
                <div class="card">
                    <div class="card-header" id="documentHead{{ $item->id }}">
                        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse"
                            data-target="#document{{ $item->id }}" aria-expanded="true"
                            aria-controls="document{{ $item->id }}">
                            {{ $item->title }}
                        </a>
                    </div>

                    <div id="document{{ $item->id }}" class="collapse"
                        aria-labelledby="documentHead{{ $item->id }}" data-parent="#document">
                        <div class="card-body">
                            @php
                                echo $item->description;
                            @endphp
                            <div class="row flex-column justify-content-center align-items-center mt-3">
                                <div class="col-md-6 form-group mt-2">
                                    <a class="btn btn-primary confirm-button" href="https://visa.immigration.gov.ng"
                                        target="_blank">
                                        {{ __('APPLY HERE') }}
                                    </a>
                                </div>
                                <div class="col-md-6 form-group mt-2">
                                    <a class="btn btn-primary confirm-button"
                                        href="{{ asset('documents/' . $item->office->country . '_' . $item->office->city . '/' . $item->visa_type . '/' . $item->file_name) }}"
                                        download>
                                        {{ __('DOWNLOAD FILE') }}
                                    </a>
                                </div>
                                <div class="col-md-6 form-group mt-2">
                                    <a class="btn btn-primary confirm-button" href="{{ route('booking.iframe') }}"
                                        target="_blank">
                                        {{ __('BOOK APPOINTMENT') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<!-- <div class="no-documents main-title text-center">No checklists found</div> -->
