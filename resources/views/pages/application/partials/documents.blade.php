@if ($checklists->count())
    <div class="w-100 mb-3">
        <div class="accordion" id="document">
            @foreach ($checklists as $key => $item)

                <div class="card">
                    <div class="card-header" id="documentHead{{ $key }}">
                        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse" data-target="#document{{ $key }}" aria-expanded="true" aria-controls="document{{ $key }}">
                            {{ $item->title }}
                        </a>
                    </div>

                    <div id="document{{ $key }}" class="collapse" aria-labelledby="documentHead{{ $key }}" data-parent="#document">
                        <div class="card-body">
                            @php
                                echo $item->description;
                            @endphp
                            <div class="row justify-content-center">
                                <div class="col-md-6 form-group mt-5 mb-4">
                                    <a class="btn btn-primary confirm-button" href="https://visa.immigration.gov.ng" target="_blank">
                                        {{ __('APPLY HERE') }}
                                    </a>
                                </div>
                                <div class="col-md-6 form-group mt-5 mb-4">
                                    <a class="btn btn-primary confirm-button" href="{{ asset('documents/'.$item->center->name.'/'.$item->visa_type.'/'.$item->file_name) }}" download>
                                        {{ __('DOWNLOAD FILE') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
    <div class="no-documents main-title text-center">No checklists found</div>
@endif