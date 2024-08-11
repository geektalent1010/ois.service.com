<div class="w-100">
    <div class="accordion" id="document">
        @if ($apptype != 'nin')
            @if ($fees)
                <div class="card">
                    <div class="card-header" id="documentHead{{ $fees->id }}">
                        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse"
                            data-target="#document{{ $fees->id }}" aria-expanded="true"
                            aria-controls="document{{ $fees->id }}">
                            {{ $fees->title }}
                        </a>
                    </div>
                    <div id="document{{ $fees->id }}" class="collapse"
                        aria-labelledby="documentHead{{ $fees->id }}" data-parent="#document">
                        <div class="card-body">
                            @php
                                echo $fees->description;
                            @endphp
                        </div>
                    </div>
                </div>
            @else
                @if (isset($checklists) && count($checklists) > 0)
                    <div class="card">
                        <div class="card-header" id="documentHead-empty-fees">
                            <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse"
                                data-target="#document-empty-fees" aria-expanded="true"
                                aria-controls="document-empty-fees">
                                Center Fees
                            </a>
                        </div>
                        <div id="document-empty-fees" class="collapse" aria-labelledby="documentHead-empty-fees"
                            data-parent="#document">
                            <div class="card-body">
                                coming soon!
                            </div>
                        </div>
                    </div>
                @endif

            @endif
        @else
            <div class="card" id="reqCard">
                <div class="card-header" id="documentHead1">
                    <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse"
                        data-target="#document1" aria-expanded="true" aria-controls="document1">
                        NIN Requirements
                    </a>
                </div>
                <div id="document1" class="collapse" aria-labelledby="documentHead1" data-parent="#document">
                    <div class="card-body">
                        <div class="">
                            <table class="custom-edit-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="">No</div>
                                        </td>
                                        <td>
                                            <div class="">Description</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">1</div>
                                        </td>
                                        <td>
                                            <div class=""><br></div>
                                            <div class="">
                                                You MUST fill your pre-enrolment application
                                                on NIMC`s website at <a
                                                    href="https://diaspora.nimc.gov.ng/loginForm.tpl.htmlphp">Diaspora-NIMC-LoginForm</a><br /><br />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">2</div>
                                        </td>
                                        <td>
                                            <div class=""><br></div>
                                            <div class="">
                                                Ensure you have one of the following
                                                documents;<br />
                                                <div class="" style="margin-left: 1rem">
                                                    -Nigerian Birth Certificate<br />
                                                    -Valid Nigerian International
                                                    Passport<br />
                                                    -Authentication letter from the Nigerian
                                                    Embassy/Mission in your Country of
                                                    residence where you do not have a
                                                    Nigerian Passport.<br /><br />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="">3</div>
                                        </td>
                                        <td>
                                            <div class=""><br></div>
                                            <div class="">
                                                Kindly note that applicants with <b>Bank
                                                    Verification Number (BVN)</b> should
                                                have their number available when they attend
                                                their appointment.
                                                <br /><br />
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @if ($office->location == 0)
                <div class="card" id="allCountryFeeInfo">
                    <div class="card-header" id="documentHead2">
                        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse"
                            data-target="#document2" aria-expanded="true" aria-controls="document2">
                            NIN Premium Enrolment Service Fees
                        </a>
                    </div>
                    <div id="document2" class="collapse" aria-labelledby="documentHead2" data-parent="#document">
                        <div class="card-body">
                            <div class="">
                                <table class="custom-edit-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="">No</div>
                                            </td>
                                            <td>
                                                <div class="">SERVICE DISCRIPTION</div>
                                            </td>
                                            <td>
                                                <div class="">FEES CHARGEBLE (USD)</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">1</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    ENROLMENT & NIN ISSUANCE: PERSONS 16 YEARS
                                                    OF AGE AND ABOVE<br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$70.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">2</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    ENROLMENT & NIN ISSUANCE: PERSONS BELOW 16
                                                    YEARS OF AGE<br /><br />
                                                </div>
                                                {{-- </div> --}}
                                            </td>
                                            <td>
                                                <div class="">$50.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">3</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    NIN SLIP RE-ISSUE
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$10.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">4</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    NIN VALIDATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$15.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">5</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    NIN & DEMOGRAPHIC DATA VERIFICATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$20.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">6</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    NIN & BIOMETRIC DATA VERIFICATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$30.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">7</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    MODIFICATION OF ALL FIELDS OTHER THAN DATE OF BIRTH
                                                    (DAY/MONTH/YEAR)
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$15.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">8</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    CORRECTION OF DATE OF BIRTH (DAY/MONTH/YEAR)
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$45.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">9</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    GMPCARD ISSUANCE/RE-ISSUANCE & ACTIVATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$35.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">10</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    GMPCARD NUMBER AUTHENTICATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$20.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">11</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    RE- ISSUANCE OF PIN FOR ISSUED CARD ON PAPER
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$5.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">12</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    Request for written Certification/Confirmation of
                                                    Identity (inclusive of delivery by registered courier)
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$75.00</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if ($office->location == 1)
                <div class="card" id="africaFeeInfo">
                    <div class="card-header" id="documentHead3">
                        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse"
                            data-target="#document3" aria-expanded="true" aria-controls="document3">
                            NIN Premium Enrolment Service Fees
                        </a>
                    </div>
                    <div id="document3" class="collapse" aria-labelledby="documentHead3" data-parent="#document">
                        <div class="card-body">
                            <div class="">
                                <table class="custom-edit-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="">No</div>
                                            </td>
                                            <td>
                                                <div class="">SERVICE DISCRIPTION</div>
                                            </td>
                                            <td>
                                                <div class="">FEES CHARGEBLE (USD)</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">1</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    ENROLMENT & NIN ISSUANCE: PERSONS 16 YEARS
                                                    OF AGE AND ABOVE<br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$40.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">2</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    ENROLMENT & NIN ISSUANCE: PERSONS BELOW 16
                                                    YEARS OF AGE<br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$25.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">3</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    NIN SLIP RE-ISSUE
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$5.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">4</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    NIN VALIDATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$10.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">5</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    NIN & DEMOGRAPHIC DATA VERIFICATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$10.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">6</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    NIN & BIOMETRIC DATA VERIFICATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$15.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">7</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    MODIFICATION OF ALL FIELDS OTHER THAN DATE OF BIRTH
                                                    (DAY/MONTH/YEAR)
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">15.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">8</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    CORRECTION OF DATE OF BIRTH (DAY/MONTH/YEAR)
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$40.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">9</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    GMPCARD ISSUANCE/RE-ISSUANCE & ACTIVATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$40.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">10</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    GMPCARD NUMBER AUTHENTICATION
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$40.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">11</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    RE- ISSUANCE OF PIN FOR ISSUED CARD ON PAPER
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$40.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">12</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    Request for written Certification/Confirmation of
                                                    Identity (inclusive of delivery by registered courier)
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">$75.00</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if ($office->location == 2)
                <div class="card" id="nigeriaFeeInfo">
                    <div class="card-header" id="documentHead4">
                        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse"
                            data-target="#document4" aria-expanded="true" aria-controls="document4">
                            NIN Premium Enrolment Service Fees
                        </a>
                    </div>
                    <div id="document4" class="collapse" aria-labelledby="documentHead4" data-parent="#document">
                        <div class="card-body">
                            <div class="">
                                <table class="custom-edit-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="">No</div>
                                            </td>
                                            <td>
                                                <div class="">SERVICE DISCRIPTION</div>
                                            </td>
                                            <td>
                                                <div class="">FEES CHARGEBLE (NAIRA)</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">1</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    Enrolment (Data Capture)<br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">₦ 3,000.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">2</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    PRE-ENROLMENT VERIFICATION<br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">₦ 100.00</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="nigeriaVerifyFeeInfo">
                    <div class="card-header" id="documentHead5">
                        <a href="#" class="btn btn-header-link member-item collapsed" data-toggle="collapse"
                            data-target="#document5" aria-expanded="true" aria-controls="document5">
                            NIN Premium Enrolment Verification Service Fees
                        </a>
                    </div>
                    <div id="document5" class="collapse" aria-labelledby="documentHead5" data-parent="#document">
                        <div class="card-body">
                            <div class="">
                                <table class="custom-edit-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="">No</div>
                                            </td>
                                            <td>
                                                <div class="">ACCESS LEVEL</div>
                                            </td>
                                            <td>
                                                <div class="">FEES CHARGEBLE (NAIRA)</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">1</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    VERIFICATION SERVICE L1 - (Last, middle & first names)<br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">₦ 50.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">2</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    VERIFICATION SERVICE L2 - Picture, names (last, middle & first
                                                    names)<br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">₦ 100.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">3</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    VERIFICATION SERVICE L3 - Picture, signature, names (last, middle &
                                                    first names), address.
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">₦ 150.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">4</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    VERIFICATION SERVICE L4 - Picture, signature, names, (last, middle &
                                                    first names), DOB, gender, address & phone number.
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">₦ 500.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">5</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    VERIFICATION SERVICE L5 - Picture, signature, names, (last, middle &
                                                    first names) DOB, gender, NIN, phone number & all modifications
                                                    carried
                                                    out as at the date of verification
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">₦ 1000.00</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">6</div>
                                            </td>
                                            <td>
                                                <div class=""><br></div>
                                                <div class="">
                                                    CARD NUMBER AUTHENTICATION - Names & NIN
                                                    <br /><br />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">₦ 50.00</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif

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
    </div>
</div>
<!-- <div class="no-documents main-title text-center">No checklists found</div> -->
