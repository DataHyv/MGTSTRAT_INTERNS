<!------------ CARD HEADER ------------>
<div class="card-header">
    <h5 class="card-title" style="display: inline">Engagement Cost</h5>
    <div style="float: right">
        <button class="btn btn-secondary mx-0 js-btn-prev" type="button" title="Prev">Prev</button>
        <button class="btn btn-success mx-0 s-btn-next submit" type="submit" title="Submit" sub-id="{{$data->id}}">Save</button>
    </div>
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
    $ecOffProgram = 0;
@endphp

<div class="form-body">
    <section>
        <div class="table-responsive" id="no-more-tables">
            <table class="table table-bordered" id="ec_tableEngagementCost">

            <!------------------- TABLE HEAD ----------------------->
                <thead class="th-blue-grey">
                    <tr class="text-center">                        
                        <th class="title-th" scope="col" width=15%></th>
                        <th class="title-middle px-1" scope="col" style="font-size: 0.8rem;" width="8%">NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-5" scope="col" style="font-size: 0.9rem;" width="15%">HOURLY FEES</th>
                        <th class="title-middle px-3" scope="col" style="font-size: 0.8rem;" width="8%">NUMBER OF HOURS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.8rem;" width="8%">NSWH</th>
                        <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                        <th class="title-th" scope="col" width=15%>ROSTER</th>
                        <th class="title-th" scope="col" width=14%>NOTES</th>
                        <td class="border border-white add-row" width="2%"> </td>
                    </tr>
                </thead>
            <!------------------- END ----------------------->

            <!------------------- COMMISSION ----------------------->
                <tr class="th-blue-grey-lighten">
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
                            <tr class="th-blue-grey-lighten-2" id="salesRow{{++$ecSales}}">
                                <td class="title ">
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                    Sales (4% / 5% / 6% / 7%)
                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" readonly></td>
                                <td class="table-danger">
                                    @if ($ecSales >= 1)
                                    <input type="text" class="form-control input-sales input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="inputSales{{ ($ecSales > 1) ? $ecSales : ''; }}"
                                        onblur="this.value = this.value.replace('%', '') + '%';"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="2" disabled>
                                    @endif

                                    @if ($ecSales == 1)
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
                                    @endif
                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->hour_num}}" name="cost_hour_num[]" readonly></td>
                                <td><input type="text" class="d-none" value="{{$cost_types->nswh}}" name="cost_nswh[]" readonly></td>
                                <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                                    <h5 class="text-center lead" id="salesTotal">-</h5>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster20{{$ecSales}}"
                                        oninput="filterConsultant(`roster20{{$ecSales}}`, ``);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{$cost_types->consultant_id}}" name="cost_rooster_id[]" id="id_roster20{{$ecSales}}">
                                </td>
                                <td class="total-td">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecSales === 1)
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn9" onclick="$('#salesTotal').html(0)"><i class="fa fa-plus"></i></a></td>
                                @else
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-danger font-18 remove" data-id="{{ $cost_types->id }}" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                                @endif
                                {{-- <td hidden class="ids">{{ $cost_types->id }}</td> --}}
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="tableReferral">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Referral')
                            <tr class="th-blue-grey-lighten-2" id="referralRow{{++$ecReferral}}">
                                <td class="title">
                                    Referral (2% / 3%)
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td>
                                    <input type="text" class="d-none" value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" readonly>
                                </td>
                                <td class="table-danger">
                                    @if ($ecReferral >= 1)
                                    <input type="text" class="form-control input-referral input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="inputReferral{{ ($ecReferral > 1) ? $ecReferral : ''; }}" style="display: none;"
                                        onblur="this.value = this.value.replace('%', '') + '%'"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                        maxlength="2" disabled>
                                    @endif

                                    @if ($ecReferral == 1)
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
                                    @endif
                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->hour_num}}" name="cost_hour_num[]" readonly></td>
                                <td><input type="text" class="d-none" value="{{$cost_types->nswh}}" name="cost_nswh[]" readonly></td>
                                <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                                    <h5 class="text-center lead" id="referralTotal">-</h5>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster21{{$ecReferral}}"
                                        oninput="filterConsultant(`roster21{{$ecReferral}}`, ``);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{$cost_types->consultant_id}}" name="cost_rooster_id[]" id="id_roster21{{$ecReferral}}">
                                </td>
                                <td class="total-td">
                                    {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecReferral === 1)
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-success font-18" title="Add"
                                        id="addBtn10"><i class="fa fa-plus"></i></a></td>
                                @else
                                    <td class="border border-white add-row">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" data-id="{{ $cost_types->id }}" title="Remove">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>

                <tbody id="tableEngagementmanager">
                    @foreach ($data3 as $key=>$cost_types )
                        @if ($cost_types->type === 'Engagement Manager')
                            <tr class="th-blue-grey-lighten-2" id="engagementmanagerRow{{++$ecEngagementManager}}">
                                <td class="title fw-bold text-dark ">
                                    ENGAGEMENT MANAGER
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" readonly></td>
                                <td class="table-danger">
                                    @if ($ecEngagementManager >= 1)
                                    <input type="text" class="form-control input-manager input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="inputManager{{ ($ecEngagementManager > 1) ? $ecEngagementManager : ''; }}" style="display: none;"
                                    onblur="this.value = this.value.replace('%', '') + '%';"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    maxlength="2" disabled>
                                    @endif

                                    @if ($ecEngagementManager == 1)
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
                                    @endif

                                </td>
                                <td><input type="text" class="d-none" value="{{$cost_types->hour_num}}" name="cost_hour_num[]" readonly></td>
                                <td><input type="text" class="d-none" value="{{$cost_types->nswh}}" name="cost_nswh[]" readonly></td>
                                <td class="total-td tbl-engmt-cost " style="background-color: rgba(146, 146, 146, 0.727">
                                    <h5 class="text-center lead" id="engagementManagerTotal">-</h5>
                                </td>
                                <td class="total-td ">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster22{{$ecEngagementManager}}" 
                                        oninput="filterConsultant(`roster22{{$ecEngagementManager}}`, ``);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{$cost_types->consultant_id}}" name="cost_rooster_id[]" id="id_roster22{{$ecEngagementManager}}">
                                </td>
                                <td class="total-td ">
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                                </td>
                                @if ($ecEngagementManager === 1)
                                    <td class="border border-white add-row"><a href="javascript:void(0)" class="text-success font-18" title="Add"
                                            id="addBtn11"><i class="fa fa-plus"></i></a></td>
                                @else
                                    <td class="border border-white add-row">
                                        <a href="javascript:void(0)" class="text-danger font-18 remove" data-id="{{ $cost_types->id }}" title="Remove">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            <!------------------- END ----------------------->

            <!------------------- CONSULTING ----------------------->
                <tr class="th-blue-grey-lighten">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_LeadConsultant{{++$ecLeadConsultant}}">
                                <td class="title">
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]">
                                    Lead Consultant
                                </td>
                                <td class="noc mgt-td-dark-bg ">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->consultant_num }}" name="cost_consultant_num[]" id="ec_LeadconsultantNoc{{$ecLeadConsultant}}" data-type="currency">
                                </td>
                                <td class="mgt-td-dark-bg ">
                                    <input type="text" class="commanumber text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{ $cost_types->hour_fee }}" name="cost_hour_fee[]" id="ec_LeadconsultantHf{{$ecLeadConsultant}}" data-type="currency">
                                </td>
                                <td class="noh mgt-td-dark-bg ">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_num }}" name="cost_hour_num[]" id="ec_LeadconsultantNoh{{$ecLeadConsultant}}" data-type="currency">
                                </td>
                                <td class="nwh mgt-td-dark-bg ">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->nswh }}" name="cost_nswh[]" id="ec_LeadconsultantNwh{{$ecLeadConsultant}}" data-type="currency">
                                </td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_LeadconsultantTotal">-</h5>
                                </td>
                                <td class="total-td table-warning">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->rooster }}" name="cost_rooster[]" id="roster{{$ecLeadConsultant}}"
                                        oninput="filterConsultant(`roster{{$ecLeadConsultant}}`, `ec_LeadconsultantHf{{$ecLeadConsultant}}`, `leadConsultant`);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{ $cost_types->consultant_id }}" name="cost_rooster_id[]" id="id_roster{{$ecLeadConsultant}}">
                                </td>
                                <td class="total-td">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_Analyst{{++$ecAnalyst}}">
                                <td class="title">
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="hidden" value="{{$cost_types->type}}" name="cost_type[]">
                                    Analyst
                                </td>
                                <td class="noc mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->consultant_num }}" name="cost_consultant_num[]" id="ec_AnalystNoc{{$ecAnalyst}}" data-type="currency">
                                </td>
                                <td class="bg-white">
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_fee }}" name="cost_hour_fee[]" id="ec_AnalystHf{{$ecAnalyst}}" data-type="currency">
                                </td>
                                <td class="noh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_num }}" name="cost_hour_num[]" id="ec_AnalystNoh{{$ecAnalyst}}" data-type="currency">
                                </td>
                                <td class="nwh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->nswh }}" name="cost_nswh[]" id="ec_AnalystNwh{{$ecAnalyst}}" data-type="currency">
                                </td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_AnalystTotal">-</h5>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->rooster }}" name="cost_rooster[]" id="roster23{{$ecAnalyst}}" 
                                        oninput="filterConsultant(`roster23{{$ecAnalyst}}`, ``, ``);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{ $cost_types->consultant_id }}" name="cost_rooster_id[]" id="id_roster23{{$ecAnalyst}}">
                                </td>
                                <td class="total-td">
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
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
                        <h5 class="text-center lead" id="ec_SubtotalConsulting">-</h5>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>
            <!------------------- END ----------------------->

            <!------------------- DESIGN ----------------------->
                <tr class="th-blue-grey-lighten">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_DesignerRow{{++$ecDesigner}}">
                                <td class="title ">Designer
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->consultant_num }}" name="cost_consultant_num[]" id="ec_DesignerNoc{{$ecDesigner}}" data-type="currency">
                                </td>
                                <td class="mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_fee }}" name="cost_hour_fee[]" id="ec_DesignerHf{{$ecDesigner}}" data-type="currency">
                                </td>
                                <td class="noh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->hour_num }}" name="cost_hour_num[]" id="ec_DesignerNoh{{$ecDesigner}}" data-type="currency">
                                </td>
                                <td class="nwh">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror d-none"
                                        value="{{ $cost_types->nswh }}" name="cost_nswh[]" id="ec_DesignerNwh{{$ecDesigner}}" data-type="currency">
                                </td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_DesignerTotal">-</h5>
                                </td>
                                <td class="total-td table-warning">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_types->rooster }}" name="cost_rooster[]" id="roster2{{$ecDesigner}}"
                                        oninput="filterConsultant(`roster2{{$ecDesigner}}`, `ec_DesignerHf{{$ecDesigner}}`, `designer`);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{ $cost_types->consultant_id }}" name="cost_rooster_id[]" id="id_roster2{{$ecDesigner}}">
                                </td>
                                <td class="total-td">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_CreatorsRow{{++$ecCreators}}">
                                <td class="title">
                                    Creators Fees
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="" name="cost_consultant_num[]" id="ec_CreatorsNoc{{$ecCreators}}" readonly hidden>
                                </td>
                                <td class="table-danger">
                                    <fieldset>
                                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                            name="cost_hour_fee[]" id="ec_CreatorsHf1"
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
                                            <option value="2000" {{ $cost_types->hour_fee == '2000' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;2,000
                                            </option>
                                        </select>
                                        @error('ef_customFee')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </td>
                                <td class="noh table-warning">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_CreatorsNoh{{$ecCreators}}" data-type="currency">
                                </td>
                                <td class="nwh"><input type="text" class="d-none" value="{{$cost_types->nswh}}" name="cost_nswh[]"></td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_CreatorsTotal">-</h5>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster24{{$ecCreators}}"  
                                        oninput="filterConsultant(`roster24{{$ecCreators}}`, ``, ``);" 
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster24{{$ecCreators}}">
                                </td>
                                <td class="total-td">
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
                        <h5 class="text-center lead" id="ec_DesignSubtotal">-</h5>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>
            <!------------------- END ----------------------->

            <!------------------- PROGRAM ----------------------->
                <tr class="th-blue-grey-lighten">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_LeadfaciRow{{++$ecLeadfaci}}">
                                <td class="title">
                                    Lead Facilitator
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                </td>
                                <td class="noc mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_LeadfacilitatorNoc{{$ecLeadfaci}}" data-type="currency">
                                </td>
                                <td class="mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_LeadfacilitatorHf{{$ecLeadfaci}}" data-type="currency">
                                </td>
                                <td class="noh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_LeadfacilitatorNoh{{$ecLeadfaci}}" data-type="currency">
                                </td>
                                <td class="nwh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_LeadfacilitatorNwh{{$ecLeadfaci}}" data-type="currency">
                                </td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_LeadfacilitatorTotal">-</h5>
                                </td>
                                <td class="total-td table-warning">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster3{{$ecLeadfaci}}"
                                        oninput="filterConsultant(`roster3{{$ecLeadfaci}}`, `ec_LeadfacilitatorHf{{$ecLeadfaci}}`, `leadFacilitator`);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{$cost_types->consultant_id}}" name="cost_rooster_id[]" id="id_roster3{{$ecLeadfaci}}">
                                </td>
                                <td class="total-td">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_CoLeadRow{{++$ecColeadfaci}}">
                                <td class="title">
                                    Co-Lead
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_CoLeadfacilitatorNoc{{$ecColeadfaci}}" data-type="currency">
                                </td>
                                <td class="mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_CoLeadfacilitatorHf{{$ecColeadfaci}}" data-type="currency">
                                </td>
                                <td class="noh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_CoLeadfacilitatorNoh{{$ecColeadfaci}}" data-type="currency">
                                </td>
                                <td class="nwh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_CoLeadfacilitatorNwh{{$ecColeadfaci}}" data-type="currency">
                                </td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_CoLeadfacilitatorTotal">-</h5>
                                </td>
                                <td class="total-td table-warning">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster4{{$ecColeadfaci}}"
                                        oninput="filterConsultant(`roster4{{$ecColeadfaci}}`, `ec_CoLeadfacilitatorHf{{$ecColeadfaci}}`, `coLead`);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster4{{$ecColeadfaci}}">
                                </td>
                                <td class="total-td">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_AlCoachRow{{++$ecAlCoach}}">
                                <td class="title">
                                    AL Coach
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_AlCoachNoc{{$ecAlCoach}}" data-type="currency">
                                </td>
                                <td class="mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_AlCoachHf{{$ecAlCoach}}" data-type="currency">
                                </td>
                                <td class="noh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_AlCoachNoh{{$ecAlCoach}}" data-type="currency">
                                </td>
                                <td class="nwh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_AlCoachNwh{{$ecAlCoach}}" data-type="currency">
                                </td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_AlCoachTotal">-</h5>
                                </td>
                                <td class="total-td table-warning">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster10{{$ecAlCoach}}"
                                        oninput="filterConsultant(`roster10{{$ecAlCoach}}`, `ec_AlCoachHf{{$ecAlCoach}}`, `alCoach`);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{$cost_types->consultant_id}}" name="cost_rooster_id[]" id="id_roster10{{$ecAlCoach}}">
                                </td>
                                <td class="total-td">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_CofaciRow{{++$ecCofaci}}">
                                <td class="title">
                                    Co-Facilitator / Resource Speaker
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]">
                                </td>
                                <td class="noc mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_CofacilitatorNoc{{$ecCofaci}}" data-type="currency">
                                </td>
                                <td class="mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_CofacilitatorHf{{$ecCofaci}}" data-type="currency">
                                </td>
                                <td class="noh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_CofacilitatorNoh{{$ecCofaci}}" data-type="currency">
                                </td>
                                <td class="nwh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_CofacilitatorNwh{{$ecCofaci}}" data-type="currency">
                                </td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_CofacilitatorTotal">-</h5>
                                </td>
                                <td class="total-td table-warning">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster5{{$ecCofaci}}"
                                        oninput="filterConsultant(`roster5{{$ecCofaci}}`, `ec_CofacilitatorHf{{$ecCofaci}}`, `coFaci`);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{$cost_types->consultant_id}}" name="cost_rooster_id[]" id="id_roster5{{$ecCofaci}}">
                                </td>
                                <td class="total-td">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_ModeratorRow{{++$ecModerator}}">
                                <td class="title">
                                    Moderator
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_ModeratorNoc{{$ecModerator}}" data-type="currency">
                                </td>
                                <td class="mgt-td-dark-bg">
                                    <fieldset>
                                        <input type="text"
                                        class="text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_ModeratorHf{{$ecModerator}}" data-type="currency">
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
                                <td class="noh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_ModeratorNoh{{$ecModerator}}" data-type="currency">
                                </td>
                                <td class="nwh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_ModeratorNwh{{$ecModerator}}" data-type="currency">
                                </td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_ModeratorTotal">-</h5>
                                </td>
                                <td class="total-td table-warning">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster6{{$ecModerator}}"
                                        oninput="filterConsultant(`roster6{{$ecModerator}}`, `ec_ModeratorHf{{$ecModerator}}`, `moderator`);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                        <input  type="hidden" value="{{$cost_types->consultant_id}}" name="cost_rooster_id[]" id="id_roster6{{$ecModerator}}">
                                </td>
                                <td class="total-td">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_ProducerRow{{++$ecProducer}}">
                                <td class="title">
                                    Producer
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_ProducerNoc{{$ecProducer}}" data-type="currency">
                                </td>
                                <td class="mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_ProducerHf{{$ecProducer}}" data-type="currency">
                                </td>
                                <td class="noh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_ProducerNoh{{$ecProducer}}" data-type="currency">
                                </td>
                                <td class="nwh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_ProducerNwh{{$ecProducer}}" data-type="currency">
                                </td>
                                <td class="total-td">
                                    <h5 class="text-center lead" id="ec_ProducerTotal">-</h5>
                                </td>
                                <td class="total-td table-warning">
                                    <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" id="roster7{{$ecProducer}}" 
                                        oninput="filterConsultant(`roster7{{$ecProducer}}`, `ec_ProducerHf{{$ecProducer}}`, `producer`);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                        <input  type="hidden" value="{{$cost_types->consultant_id}}" name="cost_rooster_id[]" id="id_roster7{{$ecProducer}}">
                                </td>
                                <td class="total-td">
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
                        <h5 class="text-center lead" id="ec_ProgramSubtotal">-</h5>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="border border-white add-row invisible"> </td>
                </tr>
            <!------------------- END ----------------------->

            <!------------------- OTHER ROLES ----------------------->
                <tr class="th-blue-grey-lighten">
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
                            <tr class="th-blue-grey-lighten-2" id="ec_DocumentorRow{{++$ecDocumentor}}">
                                <td class="title">
                                    Documentor
                                    <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                    <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                                </td>
                                <td class="noc mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_DocumentorNoc{{$ecDocumentor}}" data-type="currency">
                                </td>
                                <td class="bg-white">
                                    <input type="text"
                                        class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_DocumentorHf1" data-type="currency">
                                </td>
                                <td class="noh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->hour_num}}" name="cost_hour_num[]" id="ec_DocumentorNoh{{$ecDocumentor}}" data-type="currency">
                                </td>
                                <td class="nwh mgt-td-dark-bg">
                                    <input type="text"
                                        class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->nswh}}" name="cost_nswh[]" id="ec_DocumentorNwh{{$ecDocumentor}}" data-type="currency">
                                </td>
                                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                    <h5 class="text-center lead" id="ec_DocumentorTotal">-</h5>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{$cost_types->rooster}}" name="cost_rooster[]" 
                                        id="roster25{{$ecDocumentor}}" 
                                        oninput="filterConsultant(`roster25{{$ecDocumentor}}`, ``, ``);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off">
                                    <input  type="hidden" value="{{$cost_types->consultant_id}}" name="cost_rooster_id[]" id="id_roster25{{$ecDocumentor}}">
                                </td>
                                <td class="total-td">
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
                <tr class="th-blue-grey-lighten">
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

                <tbody id="ec_TblOffProgram">
                @foreach ($data3 as $key=>$cost_types )
                    @if ($cost_types->type === 'Off-Program fee')
                        <tr class="th-blue-grey-lighten-2" id="ec_TblOffProgram{{ ++$ecOffProgram }}">
                            <td class="title">
                                Off-Program fee
                                <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                            </td>
                            <td class="table-warning">
                                <input type="text"
                                    class="commanumber input js-mytooltip text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->consultant_num}}" name="cost_consultant_num[]" id="ec_ProgramNoc{{ $ecOffProgram }}" data-type="currency"
                                    data-mytooltip-content="<i>
                                            - For single or series of programs<br>
                                            - One time only<br>
                                            - Per person<br>
                                            </i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td class="bg-white">
                                <input type="text"
                                    class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_ProgramHf1" data-type="currency">
                            </td>
                            <td><input type="text" class="d-none" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h5 class="text-center lead" id="ec_ProgramTotal">-</h5>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->rooster}}" name="cost_rooster[]"
                                    id="roster26{{ $ecOffProgram }}" 
                                    oninput="filterConsultant(`roster26{{ $ecOffProgram }}`, ``, ``);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                    <input  type="hidden" value="{{$cost_types->consultant_id}}" name="op_rooster_id[]" id="id_roster26{{ $ecOffProgram }}">
                            </td>
                            <td class="total-td">
                                {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                            </td>
                            @if ($ecOffProgram === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn9">
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

            <!------------------- MISCELANEOUS ----------------------->
                <tr class="th-blue-grey-lighten">
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
                        <tr class="th-blue-grey-lighten-2">
                            <td class="title ">
                                Program Expenses
                                <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                                <input type="text" class="d-none" value="{{$cost_types->type}}" name="cost_type[]" readonly>
                            </td>
                            <td><input type="text" class="d-none" name="cost_consultant_num[]" readonly></td>
                            <td class="bg-white">
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->hour_fee}}" name="cost_hour_fee[]" id="ec_Programexpense"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    maxlength="5">
                            </td>
                            <td><input type="text" class="d-none" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h5 class="text-center lead" id="ec_ProgramexpenseTotal">-</h5>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror d-none"
                                    value="{{$cost_types->rooster}}" name="cost_rooster[]" id="">
                            </td>
                            <td class="total-td">
                                {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{$cost_types->notes}}" name="cost_notes[]" id=""> --}}
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55">{{$cost_types->notes}}</textarea>
                            </td>
                            <td class="border border-white add-row invisible"> </td>
                        </tr>
                    @endif
                @endforeach

                @foreach ($data3 as $key=>$cost_types )
                    @if ($cost_types->type === 'Culture Invigoration')
                    <tr class="th-blue-grey-lighten-2">
                        <td class="title">
                            Culture Invigoration
                            <input type="hidden" name="cost_id[]" value="{{$cost_types->id }}">
                            <input type="text" class="d-none" value="Culture Invigoration" name="cost_type[]" readonly>
                        </td>
                        <td><input type="text" class="d-none" name="cost_consultant_num[]" readonly></td>
                        <td class="table-danger">
                            <fieldset>
                                    <select 
                                        class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" 
                                        id="ec_cultureInvigoration" 
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0%" {{ $cost_types->hour_fee == '0%' ? 'selected="selected"' : '' }} title="">
                                            0%
                                        </option>
                                        <option value=".015%" {{ $cost_types->hour_fee == '.015%' ? 'selected="selected"' : '' }} title="">
                                            .015%
                                        </option>
                                    </select>
                                </fieldset>
                        </td>
                        <td><input type="text" class="d-none" name="cost_hour_num[]" readonly></td>
                        <td><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_cultureInvigorationTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror d-none"
                                value="{{ old('') }}" name="cost_rooster[]" id="">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="">
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
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
        <!-- AUTO COMPLETE -->
        <template id="all_consultant_list">
            @foreach ($consultantFee as $key => $feeData)
                <option 
                    value="{{ strtoupper($feeData->first_name) }} {{ strtoupper($feeData->last_name) }}" 
                    data-id="{{$feeData->id}}"
                    data-feeleadfaci="{{$feeData->lead_faci}}"
                    data-cofaci="{{$feeData->co_faci}}",
                    data-marshal="{{$feeData->marshal}}",
                    data-leadconsultant="{{$feeData->lead_consultant}}",
                    data-consulting="{{$feeData->consulting}}",
                    data-designer="{{$feeData->designer}}",
                    data-moderator="{{$feeData->moderator}}",
                    data-producer="{{$feeData->producer}}",
                    data-colead="{{$feeData->co_lead}}",
                    data-coleadf2f="{{$feeData->co_lead_f2f}}"
                    >
                    {{ strtoupper($feeData->first_name) }} {{ strtoupper($feeData->last_name) }}
                </option>
            @endforeach
        </template>
        <datalist id="filtered_consultant_list"></datalist>
        <!-- END AUTO COMPLETE -->
    </section>
</div>
<!------------ END OF FORM BODY ------------>
<script>
var results = document.querySelector('#filtered_consultant_list');
var templateContent = document.querySelector('#all_consultant_list').content;

function filterConsultant(rosterFieldID, hourlyFeeID = '', costType = '') {
    var search = document.querySelector('#' + rosterFieldID);

    while (results.children.length) {
        results.removeChild(results.firstChild);
    }
    var inputVal = new RegExp('^'+search.value.trim(), 'i');
    var clonedOptions = templateContent.cloneNode(true);
    var set = Array.prototype.reduce.call(clonedOptions.children, 
        function searchFilter(frag, el) {
          if (inputVal.test(el.textContent.trim()) && frag.children.length < 10) { 
            frag.appendChild(el)
        };
        return frag;
        }
    , document.createDocumentFragment());
    results.appendChild(set);

    getFee(rosterFieldID, hourlyFeeID, costType);
}

function getFee(rosterFieldID, hourlyFeeID = '', costType = '') {
    var rosterValue = document.querySelector('#' + rosterFieldID);
    var getFee = $('#filtered_consultant_list option[value="' + rosterValue.value.toUpperCase() + '"]');
    var customizedType = $('#customized_type').val();
    $('#id_' + rosterFieldID).val(getFee.data('id'));
    if (customizedType == 'Virtual' && hourlyFeeID != '') {
        switch(costType) {
            case 'leadConsultant':
                $('#' + hourlyFeeID).val(getFee.data('leadconsultant'));
                break; 
            case 'designer':
                $('#' + hourlyFeeID).val(getFee.data('designer'));
                break; 
            case 'leadFacilitator':
                $('#' + hourlyFeeID).val(getFee.data('feeleadfaci'));
                break; 
            case 'coLead':
                $('#' + hourlyFeeID).val(getFee.data('colead'));
                break; 
            case 'alCoach':
                break;
            case 'coFaci':
                $('#' + hourlyFeeID).val(getFee.data('cofaci'));
                break; 
            case 'moderator':
                $('#' + hourlyFeeID).val(getFee.data('moderator'));
                break; 
            case 'producer':
                $('#' + hourlyFeeID).val(getFee.data('producer'));
                break; 
            default: 
                break;
            ;
        }
    } 
}
</script>

<!------------ CE ENGAGEMENT COST SCRIPT ------------>
@include('form.components.customized_engagement.update.script.ce_update_cost')
