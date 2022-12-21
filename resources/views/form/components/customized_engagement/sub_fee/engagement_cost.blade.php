<!------------ CARD HEADER ------------>
<div class="card-header">
    <h5 class="card-title">Engagement Cost</h5>
</div>
<!------------ END CARD HEADER ------------>

<!------------ FORM BODY ------------>
@php
    $ecSales = 0;
    $ecReferral = 0;
    $ecEngagementManager = 0;
    $ecLeadConsultant = 0;
    $ecAnalyst = 0;
    $ecDesigner = 0;
    $ecCreators = 0;
    $ecLeadfaci = 0;
    $ecColeadfaci = 0;
    $ecAlCoach = 0;
    $ecCofaci = 0;
    $ecModerator = 0;
    $ecProducer = 0;
    $ecDocumentor = 0;
@endphp

<div class="form-body container">
    <section>
        <div class="table-responsive" id="no-more-tables">
            <table class="table table-bordered" id="ec_tableEngagementCost">

            <!------------------- TABLE HEAD ----------------------->
                <thead class="table-dark">
                    <tr class="text-center">
                        {{-- <th class="title-th" scope="col" width=20%></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-4" width=15% scope="col">HOURLY FEES</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF HOURS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT,
                            WEEKENDS HOLIDAYS *</th>
                        <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                        <th class="title-th" scope="col" width=15%>ROSTER</th>
                        <th class="title-th" scope="col" width=15%>NOTES</th> --}}
                        <th class="title-th" scope="col" width=10%></th>
                        <th class="title-middle px-1" scope="col" style="font-size: 0.8rem;" width=5%>NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-5" scope="col" style="font-size: 0.9rem;" width=10%>HOURLY FEES</th>
                        <th class="title-middle px-3" scope="col" style="font-size: 0.8rem;" width=5%>NUMBER OF HOURS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.8rem;" width=5%>NIGHT SHIFT,
                            WEEKENDS HOLIDAYS *</th>
                        <th class="title-th" scope="col" width=12%>TOTAL FEE</th>
                        <th class="title-th" scope="col" width=15%>ROSTER</th>
                        <th class="title-th" scope="col" width=15%>NOTES</th>
                        <td class="border border-white add-row"> </td>
                    </tr>
                </thead>
            <!------------------- END ----------------------->

            <!------------------- COMMISSION ----------------------->
                <tr class="table-light">
                    <th class="px-4 title text-dark font-weight-bold"><b>COMMISSION</b></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="total-td"></th>
                    <th class="total-td"></th>
                    <th class="total-td"></th>
                    <th class="border border-white add-row" style="display: none"> </th>
                </tr>

                <tbody id="tableSales">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Sales')
                            <tr class="table-warning" id="salesRow{{++$ecSales}}">
                                {{-- <td hidden class="ids">{{ $cost_types->id }}</td> --}}
                                <td class="title table-light">
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                    Sales (4% / 5% / 6% / 7%)
                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" readonly></td>
                                <td>
                                    {{-- @if ($ecSales === 1) --}}
                                    <fieldset class="dropdown-sales" id="dropdownSales">
                                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                            name="cost_hour_fee[]" id="sales" style="background-color:#ffcccc; color:red;"
                                            data-mytooltip-content="<i>
                                                    <b>Sales</b><br>
                                                    For large engagements, with EMs: <br>
                                                    4% - discounted <br>
                                                    6% - standard rates<br>
                                                    <br>
                                                    For regular engagements:<br>
                                                    5% - discounted<br>
                                                    7% - standard rates<br>
                                                    <br>
                                                    For Key Accounts, with EMs:<br>
                                                    4% - discounted<br>
                                                    5% - packaged rate</i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right" disabled>
                                            <option value="0%" {{ $cost_types->hour_fee == '0%' ? 'selected="selected"' : '' }}
                                                title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                                0%
                                            </option>
                                            <option value="4%" {{ $cost_types->hour_fee == '4%' ? 'selected="selected"' : '' }}
                                                title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                                4%
                                            </option>
                                            <option value="5%" {{ $cost_types->hour_fee == '5%' ? 'selected="selected"' : '' }}
                                                title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                                5%
                                            </option>
                                            <option value="6%" {{ $cost_types->hour_fee == '6%' ? 'selected="selected"' : '' }}
                                                title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                                6%
                                            </option>
                                            <option value="7%" {{ $cost_types->hour_fee == '7%' ? 'selected="selected"' : '' }}
                                                title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                                7%
                                            </option>
                                        </select>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                    <input type="text" class="form-control input-sales input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="inputSales"
                                        onblur="this.value = this.value.replace('%', '') + '%';"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="2" disabled>

                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->hour_num}}" name="cost_hour_num[]" readonly></td>
                                <td><input type="text" class="d-none" value="{{$cost_types->nswh}}" name="cost_nswh[]" readonly></td>
                                <td class="total-td tbl-engmt-cost table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                    <h5 class="text-center" id="salesTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="">
                                </td>
                                <td class="total-td table-light">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecSales === 1)
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn9" onclick="$('#salesTotal').html(0)"><i class="fa fa-plus"></i></a></td>
                                @else
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                                    {{-- <td>
                                        <a class="text-danger font-18 ce_delete" href="#" data-toggle="modal" data-target="#ce_delete" title="Remove">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>  --}}
                                @endif
                                <td hidden class="ids">{{ $cost_types->id }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="tableReferral">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Referral')
                            <tr class="table-warning" id="referralRow{{++$ecReferral}}">
                                <td class="title table-light">
                                    Referral (2% / 3%)
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td>
                                    <input type="text" class="d-none" value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" readonly>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-referral input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="inputReferral" style="display: none;"
                                        onblur="this.value = this.value.replace('%', '') + '%'"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                        maxlength="2" disabled>

                                    <fieldset class="dropdown-referral" id="dropdownReferral">
                                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                            name="cost_hour_fee[]" id="referral"
                                            data-mytooltip-content="<i>
                                                    Referral - 2% - repeat contracts from the same client<br>
                                                    3% - 1st contract with a new client, or with a 2-year dormant client<br>
                                                    <br>
                                                    When in doubt, check with Joi on who referror is.

                                                    </i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                            <option value="0%" {{ $cost_types->hour_fee == '0%' ? 'selected="selected"' : '' }}
                                                title="">
                                                0%
                                            </option>
                                            <option value="2%" {{ $cost_types->hour_fee == '2%' ? 'selected="selected"' : '' }}
                                                title="">
                                                2%
                                            </option>
                                            <option value="3%" {{ $cost_types->hour_fee == '3%' ? 'selected="selected"' : '' }}
                                                title="">
                                                3%
                                            </option>
                                        </select>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->hour_num}}" name="cost_hour_num[]" readonly></td>
                                <td><input type="text" class="d-none" value="{{$cost_types->nswh}}" name="cost_nswh[]" readonly></td>
                                <td class="total-td tbl-engmt-cost table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                    <h5 class="text-center" id="referralTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="">
                                </td>
                                <td class="total-td table-light">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecReferral === 1)
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-success font-18" title="Add"
                                        id="addBtn10"><i class="fa fa-plus"></i></a></td>
                                @else
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="tableEngagementmanager">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Engagement Manager')
                            <tr class="table-warning" id="engagementmanagerRow{{++$ecEngagementManager}}">
                                <td class="title fw-bold text-dark table-light">
                                    ENGAGEMENT MANAGER
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" readonly></td>
                                <td>
                                    <input type="text" class="form-control input-manager input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="inputManager" style="display: none;"
                                        onblur="this.value = this.value.replace('%', '') + '%';"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="2" disabled>

                                    <fieldset class="dropdown-manager" id="dropdownManager">
                                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                            name="cost_hour_fee[]" id="engagementManager"
                                            style="background-color:#ffcccc; color:red;"
                                            data-mytooltip-content="<i>
                                                    Engagement Manager - 4% - all Key Accounts and large engagements <br>
                                                    <br>
                                                    Large engagments: large scale consulting, or a series of at least 8 virtual sessions under 1 contract involving a roster of at least 2 people
                                                    </i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right">
                                            <option value="0%" {{ $cost_types->hour_fee == '0%' ? 'selected="selected"' : '' }}
                                                title="">
                                                0%
                                            </option>
                                            <option value="4%" {{ $cost_types->hour_fee == '4%' ? 'selected="selected"' : '' }}
                                                title="">
                                                4%
                                            </option>
                                        </select>
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->hour_num}}" name="cost_hour_num[]" readonly></td>
                                <td><input type="text" class="d-none" value="{{$cost_types->nswh}}" name="cost_nswh[]" readonly></td>
                                <td class="total-td tbl-engmt-cost table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                    <h5 class="text-center" id="engagementManagerTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="">
                                </td>
                                <td class="total-td table-light">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecEngagementManager === 1)
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-success font-18" title="Add"
                                            id="addBtn11"><i class="fa fa-plus"></i></a></td>
                                @else
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            <!------------------- END ----------------------->

            <!------------------- CONSULTING ----------------------->
                <tr class="table-light">
                    <th class="px-4 title text-dark">
                        <b>1. CONSULTING</b>
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="total-td"></th>
                    <th class="total-td"></th>
                    <th class="total-td"></th>
                    <th class="border border-white add-row invisible" style="display: none"></th>
                </tr>

                <tbody id="ec_tableLeadConsultant">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Lead Consultant')
                            <tr class="table-warning" id="ec_LeadConsultant{{++$ecLeadConsultant}}">
                                <td class="title table-light">
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]">
                                    Lead Consultant
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->consultant_num }}" name="cost_consultant_num[]" id="ec_LeadconsultantNoc{{$ecLeadConsultant}}" data-type="currency">
                                </td>
                                <td>
                                    <input type="text" class="commanumber text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror" value="{{ $cost_types->hour_fee }}" name="cost_hour_fee[]" id="ec_LeadconsultantHf{{$ecLeadConsultant}}" data-type="currency">
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_num }}" name="cost_hour_num[]" id="ec_LeadconsultantNoh{{$ecLeadConsultant}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->nswh }}" name="cost_nswh[]" id="ec_LeadconsultantNwh{{$ecLeadConsultant}}" data-type="currency">
                                </td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_LeadconsultantTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->rooster }}" name="cost_rooster[]" id="roster{{$ecLeadConsultant}}">
                                </td>
                                <td class="total-td table-light">
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                        name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecLeadConsultant === 1)
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="EcAddBtn">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                                @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecButton{{$ecLeadConsultant}}" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="ec_tableAnalyst">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Analyst')
                            <tr class="table-warning" id="ec_Analyst{{++$ecAnalyst}}">
                                <td class="title table-light">
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="hidden" value="{{$cost_types->type}}" name="cost_type[]">
                                    Analyst
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->consultant_num }}" name="cost_consultant_num[]" id="ec_AnalystNoc{{$ecAnalyst}}" data-type="currency">
                                </td>
                                <td>
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_fee }}" name="cost_hour_fee[]" id="ec_AnalystHf{{$ecAnalyst}}" data-type="currency">
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_num }}" name="cost_hour_num[]" id="ec_AnalystNoh{{$ecAnalyst}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->nswh }}" name="cost_nswh[]" id="ec_AnalystNwh{{$ecAnalyst}}" data-type="currency">
                                </td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_AnalystTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->rooster }}" name="cost_rooster[]" id="">
                                </td>
                                <td class="total-td table-light">
                                    <input class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="">{{$cost_types->notes}}</input>
                                </td>
                                @if ($ecAnalyst === 1)
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="EcAddBtn2">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                                @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tr class="table-secondary">
                    <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                        <h5 class="text-center" id="ec_SubtotalConsulting">-</h5>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>
            <!------------------- END ----------------------->

            <!------------------- DESIGN ----------------------->
                <tr class="table-light">
                    <th class="title px-4 text-dark">
                        <b>2. DESIGN</b>
                    </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible" style="display: none"> </td>
                </tr>

                <tbody id=ec_TableDesigner>
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Designer')
                            <tr class="table-warning" id="ec_DesignerRow{{++$ecDesigner}}">
                                <td class="title table-light">Designer
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->consultant_num }}" name="cost_consultant_num[]" id="ec_DesignerNoc{{$ecDesigner}}" data-type="currency">
                                </td>
                                <td>
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_fee }}" name="cost_hour_fee[]" id="ec_DesignerHf{{$ecDesigner}}" data-type="currency">
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_num }}" name="cost_hour_num[]" id="ec_DesignerNoh{{$ecDesigner}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->nswh }}" name="cost_nswh[]" id="ec_DesignerNwh{{$ecDesigner}}" data-type="currency">
                                </td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_DesignerTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->rooster }}" name="cost_rooster[]" id="roster2{{$ecDesigner}}">
                                </td>
                                <td class="total-td table-light">
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecDesigner === 1)
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="EcAddBtn3">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </td>
                                @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="ec_TableCreators">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Creators Fees')
                            <tr class="table-warning" id="ec_CreatorsRow{{++$ecCreators}}">
                                <td class="title table-light">
                                    Creators Fees
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="" name="cost_consultant_num[]" id="ec_CreatorsNoc{{$ecCreators}}" readonly hidden>
                                </td>
                                <td>
                                    <fieldset>
                                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                            name="cost_hour_fee[]" id="ec_CreatorsHf"
                                            data-mytooltip-content="<i>
                                                    Creators Fee - 0 - no creators fee<br><br>
                                                    500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                                    1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                            <option value="500" {{ $cost_types->hour_fee == '500' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;500
                                            </option>
                                            <option value="1000" {{ $cost_types->hour_fee == '1000' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;1,000
                                            </option>
                                        </select>
                                        @error('ef_customFee')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_CreatorsNoh{{$ecCreators}}" data-type="currency">
                                </td>
                                <td class="nwh"><input type="text" class="d-none" value="{{$cost_types->nswh}}" name="cost_nswh[]"></td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_CreatorsTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="">
                                </td>
                                <td class="total-td table-light">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->notes }}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecCreators === 1)
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtnCreators">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </td>
                                    @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tr class="table-secondary">
                    <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                        <h5 class="text-center" id="ec_DesignSubtotal">-</h5>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>
            <!------------------- END ----------------------->

            <!------------------- PROGRAM ----------------------->
                <tr class="table-light">
                    <th class="title px-4 text-dark">
                        <b>3. PROGRAM</b>
                    </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>

                <tbody id="ec_TableLeadfaci">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Lead Facilitator')
                            <tr class="table-warning" id="ec_LeadfaciRow{{++$ecLeadfaci}}">
                                <td class="title table-light">
                                    Lead Facilitator
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_LeadfacilitatorNoc{{$ecLeadfaci}}" data-type="currency">
                                </td>
                                <td>
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_LeadfacilitatorHf{{$ecLeadfaci}}" data-type="currency">
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_LeadfacilitatorNoh{{$ecLeadfaci}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_LeadfacilitatorNwh{{$ecLeadfaci}}" data-type="currency">
                                </td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_LeadfacilitatorTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster3{{$ecLeadfaci}}">
                                </td>
                                <td class="total-td table-light">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecLeadfaci === 1)
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="EcAddBtn4">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                                @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="ec_TableCoLeadfaci">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Co-Lead')
                            <tr class="table-warning" id="ec_CoLeadRow{{++$ecColeadfaci}}">
                                <td class="title table-light">
                                    Co-Lead
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_CoLeadfacilitatorNoc{{$ecColeadfaci}}" data-type="currency">
                                </td>
                                <td>
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_CoLeadfacilitatorHf{{$ecColeadfaci}}" data-type="currency">
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_CoLeadfacilitatorNoh{{$ecColeadfaci}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_CoLeadfacilitatorNwh{{$ecColeadfaci}}" data-type="currency">
                                </td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_CoLeadfacilitatorTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster4{{$ecColeadfaci}}">
                                </td>
                                <td class="total-td table-light">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                        name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecColeadfaci === 1)
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtnCoLead">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </td>
                                    @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="ec_TableAlCoach">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'AL Coach')
                            <tr class="table-warning" id="ec_AlCoachRow{{++$ecAlCoach}}">
                                <td class="title table-light">
                                    AL Coach
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_AlCoachNoc{{$ecAlCoach}}" data-type="currency">
                                </td>
                                <td>
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_AlCoachHf{{$ecAlCoach}}" data-type="currency">
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_AlCoachNoh{{$ecAlCoach}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_AlCoachNwh{{$ecAlCoach}}" data-type="currency">
                                </td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_AlCoachTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="">
                                </td>
                                <td class="total-td table-light">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                        name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecAlCoach === 1)
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtnAlCoach">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </td>
                                    @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="ec_TableCofaci">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Co-Facilitator / Resource Speaker')
                            <tr class="table-warning" id="ec_CofaciRow{{++$ecCofaci}}">
                                <td class="title table-light">
                                    Co-Facilitator / Resource Speaker
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]">
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_CofacilitatorNoc{{$ecCofaci}}" data-type="currency">
                                </td>
                                <td>
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_CofacilitatorHf{{$ecCofaci}}" data-type="currency">
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_CofacilitatorNoh{{$ecCofaci}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_CofacilitatorNwh{{$ecCofaci}}" data-type="currency">
                                </td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_CofacilitatorTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster5{{$ecCofaci}}">
                                </td>
                                <td class="total-td table-light">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                        name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecCofaci === 1)
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="EcAddBtn5">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                                @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="ec_TableModerator">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Moderator')
                            <tr class="table-warning" id="ec_ModeratorRow{{++$ecModerator}}">
                                <td class="title table-light">
                                    Moderator
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_ModeratorNoc{{$ecModerator}}" data-type="currency">
                                </td>
                                <td>
                                    <fieldset>
                                        <input type="text"
                                        class="text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="cost_hour_fee[]" id="ec_ModeratorHf{{$ecModerator}}" data-type="currency">
                                        {{-- <select
                                            class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select"
                                            name="cost_hour_fee[]" id="ec_ModeratorHf" style="background-color:#ffcccc; color:red;"
                                            data-mytooltip-content="<i>
                                                    <b>Moderator</b><br/>
                                                    P800  - Associates<br/>
                                                    P1,100 - Consultants<br/>
                                                    P1,350 - Senior Consultant</i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right">
                                            <option value="800" {{ $cost_types->hour_fee == '800' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;800
                                            </option>
                                            <option value="1100" {{ $cost_types->hour_fee == '1100' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;1,100
                                            </option>
                                            <option value="1350" {{ $cost_types->hour_fee == '1350' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;1,350
                                            </option>
                                        </select> --}}
                                        @error('ef_customFee')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_ModeratorNoh{{$ecModerator}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_ModeratorNwh{{$ecModerator}}" data-type="currency">
                                </td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_ModeratorTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster6{{$ecModerator}}">
                                </td>
                                <td class="total-td table-light">
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                        name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecModerator === 1)
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="EcAddBtn6">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                                @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="ec_TableProducer">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Producer')
                            <tr class="table-warning" id="ec_ProducerRow{{++$ecProducer}}">
                                <td class="title table-light">
                                    Producer
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_ProducerNoc{{$ecProducer}}" data-type="currency">
                                </td>
                                <td>
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_ProducerHf{{$ecProducer}}" data-type="currency">
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_ProducerNoh{{$ecProducer}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_ProducerNwh{{$ecProducer}}" data-type="currency">
                                </td>
                                <td class="total-td table-light">
                                    <h5 class="text-center lead" id="ec_ProducerTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster7{{$ecProducer}}">
                                </td>
                                <td class="total-td table-light">
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                        name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecProducer === 1)
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="EcAddBtn7">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </td>
                                    @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tr class="table-secondary">
                    <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h5 class="text-center" id="ec_ProgramSubtotal">-</h5>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>
            <!------------------- END ----------------------->

            <!------------------- OTHER ROLES ----------------------->
                <tr class="table-light">
                    <th class="title px-4 text-dark">
                        <b>4. OTHER ROLES</b>
                    </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>

                <tbody id="ec_TableDocumentor">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Documentor')
                            <tr class="table-warning" id="ec_DocumentorRow{{++$ecDocumentor}}">
                                <td class="title table-light">
                                    Documentor
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_DocumentorNoc{{$ecDocumentor}}" data-type="currency">
                                </td>
                                <td>
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_DocumentorHf" data-type="currency">
                                </td>
                                <td class="noh">
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_DocumentorNoh{{$ecDocumentor}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_DocumentorNwh{{$ecDocumentor}}" data-type="currency">
                                </td>
                                <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                    <h5 class="text-center" id="ec_DocumentorTotal">-</h5>
                                </td>
                                <td class="total-td table-light">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="">
                                </td>
                                <td class="total-td table-light">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                        name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecDocumentor === 1)
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="EcAddBtn8">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                                @else
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $cost_types->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            <!------------------- END ----------------------->

            <!------------------- OFF-PROGRAM ----------------------->
                <tr class="table-light">
                    <th class="title px-4 text-dark">
                        <b>5. OFF-PROGRAM</b>
                    </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>

                @foreach ($data3 as $key=>$cost_types )
                    @if ($cost_types->type === 'Off-Program fee')
                        <tr class="table-warning">
                            <td class="title table-light">
                                Off-Program fee
                                <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="text"
                                    class="commanumber input js-mytooltip text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_ProgramNoc" data-type="currency"
                                    data-mytooltip-content="<i>
                                            - For single or series of programs<br>
                                            - One time only<br>
                                            - Per person<br>
                                            </i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text"
                                    class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_ProgramHf" data-type="currency">
                            </td>
                            <td><input type="text" class="d-none" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                            <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                <h5 class="text-center" id="ec_ProgramTotal">-</h5>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->rooster}}" name="cost_rooster[]" id="">
                            </td>
                            <td class="total-td table-light">
                                {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                            </td>
                            <td class="border border-white add-row invisible"> </td>
                        </tr>
                    @endif
                @endforeach
            <!------------------- END ----------------------->

            <!------------------- MISCELANEOUS ----------------------->
                <tr class="table-light">
                    <th class="title px-4 text-dark">
                        <b>MISCELLANEOUS</b>
                    </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>

                @foreach ($data3 as $key=>$cost_types )
                    @if ($cost_types->type === 'Program Expenses')
                        <tr class="table-warning">
                            <td class="title table-light">
                                Program Expenses
                                <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                            </td>
                            <td><input type="text" class="d-none" name="cost_consultant_num[]" readonly></td>
                            <td>
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_Programexpense"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    maxlength="5">
                            </td>
                            <td><input type="text" class="d-none" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                            <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                <h5 class="text-center" id="ec_ProgramexpenseTotal">-</h5>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->rooster}}" name="cost_rooster[]" id="">
                            </td>
                            <td class="total-td table-light">
                                {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                            </td>
                            <td class="border border-white add-row invisible"> </td>
                        </tr>
                    @endif
                @endforeach
            <!------------------- END ----------------------->

            <!------------------- TOTAL ----------------------->
                <tr class="table-active">
                    <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">
                        <b>TOTAL</b>
                    </td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end">
                        <h5 class="text-center text-danger" id="ec_Total">-</h5>
                    </td>
                    <td class="overall-total-end"></td>
                    <td class="overall-total-end"></td>
                    <td class="border border-white add-row invisible"></td>
                </tr>
            <!------------------- END ----------------------->
            </table>
        </div>
    </section>
</div>
<!------------ END OF FORM BODY ------------>

<!------------ CE ENGAGEMENT COST SCRIPT ------------>
@include('form.components.customized_engagement.update.script.ce_update_cost')
