<div class="card-header">
    <h4 class="card-title">Engagement Cost</h4>
</div>

<div class="form-body container">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered" id="engagementCost">
                <!-------------- HEADINGS -------------->
                    <thead class="table">
                        <tr class="text-center th-blue-grey">
                            <th class="title-th" scope="col" width=20%></th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">HOURLY FEES</th>
                            <th class="title-middle px-4" scope="col">NUMBER OF HOUR</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">NIGHT SHIFT, <br>WEEKENDS <br>HOLIDAYS *</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">TOTAL FEE</th>
                            <th class="title-middle" scope="col" width=20% style="font-size: 0.9rem;" width=10%>ROSTER</th>
                            {{-- <th class="title-middle" scope="col" width=20% style="font-size: 0.9rem;" width=10%>NOTES</th> --}}
                        </tr>
                    </thead>
                <!-------------- HEADINGS END -------------->

                <!-------------- COMMISSION -------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title  ">COMMISSION</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>

                    <tbody id="commission">
                        <tr class="th-blue-grey-lighten-2 sum" id="customizationFee">
                            <td class="title">Sales (4% / 5% / 6% / 7%)</td>

                            <td>
                                <fieldset>
                                    <select class="input js-mytooltip package-fees form-select @error('') is-invalid @enderror"
                                        name="ef_customizationFeePfv"
                                        id="ef_LeadconsultantHf"
                                        data-mytooltip-content="<i>if referred or sold by a reseller <br><br>

                                            For large engagements, with EMs:<br>
                                            4% - discounted<br>
                                            6% - standard rates<br>
                                            <br>
                                            For regular engagements:<br>
                                            5% - discounted<br>
                                            7% - standard rates<br>
                                            <br>
                                            For Key Accounts, with EMs:</i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus"
                                        data-mytooltip-direction="bottom"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} selected>
                                            0%
                                        </option>
                                        <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }} >
                                            4%
                                        </option>
                                        <option value="5" {{ old('') == '5' ? 'selected="selected"' : '' }} >
                                            5%
                                        </option>
                                        <option value="6" {{ old('') == '6' ? 'selected="selected"' : '' }} >
                                            6%
                                        </option>
                                        <option value="7" {{ old('') == '7' ? 'selected="selected"' : '' }} >
                                            7%
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>

                            <td data-title="# OF HOURS">
                                {{-- <input type="text" class="number-session input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id=""> --}}
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                                {{-- <input type="text" class="nswh input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id=""> --}}
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="commission">
                        <tr class="th-blue-grey-lighten-2 sum" id="customizationFee">
                            <td class="title">Referral (2% / 3% / 10%)</td>

                            <td>
                                <fieldset>
                                    <select class="input js-mytooltip package-fees form-select @error('') is-invalid @enderror"
                                        name="ef_customizationFeePfv"
                                        id="ef_LeadconsultantHf"
                                        data-mytooltip-content="<i>Referral - 2% - repeat contracts from the same client <br>
                                            3% - 1st contract with a new client, or with a 2-year dormant client<br>
                                            10% - if referred/sold by a reseller<br><br>
                                            When in doubt, check with Joi on who referror is.
                                        </i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus"
                                        data-mytooltip-direction="bottom"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} selected>
                                            0%
                                        </option>
                                        <option value="2" {{ old('') == '2' ? 'selected="selected"' : '' }} >
                                            2%
                                        </option>
                                        <option value="3" {{ old('') == '3' ? 'selected="selected"' : '' }} >
                                            3%
                                        </option>
                                        <option value="10" {{ old('') == '10' ? 'selected="selected"' : '' }} >
                                            10%
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>

                            <td data-title="# OF HOURS">
                                {{-- <input type="text" class="number-session input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id=""> --}}
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                                {{-- <input type="text" class="nswh input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id=""> --}}
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}"name="" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="commission">
                        <tr class="th-blue-grey-lighten-2 sum" id="customizationFee">
                            <td class="title text-uppercase fw-bold">Engagement Manager (4%)</td>

                            <td>
                                <fieldset>
                                    <select class="input js-mytooltip package-fees form-select @error('') is-invalid @enderror"
                                        name=""
                                        id=""
                                        data-mytooltip-content="<i>
                                            Engagement Manager - 4% - all Key Accounts and large engagements <br><br>

                                            Large engagments: large scale consulting, or a series of at least 8 virtual sessions under 1 contract involving a roster of at least 2 people
                                        </i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus"
                                        data-mytooltip-direction="bottom"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} selected>
                                            0%
                                        </option>
                                        <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }} >
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

                            <td data-title="# OF HOURS">
                                {{-- <input type="text" class="number-session input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id=""> --}}
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                                {{-- <input type="text" class="nswh input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id=""> --}}
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}"name="" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    {{-- SUBTOTAL --}}
                    <tr class="commission">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center subtotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="" id="">
                        </td>
                        <td class="border border-white"></td>
                    </tr>
                <!-------------- COMMISSION END -------------->


                <!-------------- CONSULTING/DESIGN -------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title text-uppercase fw-bold">1. consulting/design</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>

                    <tbody class="consulting" id="">
                        <tr class="th-blue-grey-lighten-2 sum" id="">
                            <td class="title">Customization Fee</td>

                            <td>
                                <input type="text" class="package-fees input input-table form-control @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name=""
                                id=""
                                data-type="currency"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                            </td>

                            <td data-title="# OF HOURS">
                                <fieldset>
                                    <select class="input js-mytooltip number-session form-select @error('') is-invalid @enderror"
                                        name="ef_customizationFeePfv"
                                        id="ef_LeadconsultantHf"
                                        data-mytooltip-content="<i># of Hours - 0 - no customization <br><br> 2 - automatic when we charge customization fee</i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus"
                                        data-mytooltip-direction="bottom"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} selected>
                                            -
                                        </option>
                                        <option value="2" {{ old('') == '2' ? 'selected="selected"' : '' }} >
                                            2
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                                {{-- <input type="text" class="nswh input js-mytooltip input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id=""> --}}
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}"name="" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody class="consulting" id="">
                        <tr class="th-blue-grey-lighten-2 sum" id="">
                            <td class="title">Creators Fees (&#8369;0, &#8369;500, &#8369;1K)</td>

                            <td>
                                <fieldset>
                                    <select class="package-fees input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="ef_customizationFeePfv"
                                        id="ef_LeadconsultantHf"
                                        data-mytooltip-content="<i># of Hours - 0 - no customization <br><br> 2 - automatic when we charge customization fee</i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus"
                                        data-mytooltip-direction="bottom"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} selected>
                                            &#8369;0
                                        </option>
                                        <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }} >
                                            &#8369;500
                                        </option>
                                        <option value="1000" {{ old('') == '1000' ? 'selected="selected"' : '' }} >
                                            &#8369;1,000
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>

                            <td data-title="# OF HOURS">
                                <input type="text" class="number-session input input-table form-control @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name=""
                                id=""
                                data-type="currency"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                                <input type="text" class="nswh input js-mytooltip input-table form-control invisible @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" disabled>
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>

                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}"name="" id="">
                            </td>

                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    {{-- SUBTOTAL --}}
                    <tr class="consulting">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center subtotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="" id="">
                        </td>
                        <td class="border border-white"></td>
                    </tr>
                <!-------------- CONSULTING/DESIGN END -------------->

                <!-------------- PROGRAM -------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title text-uppercase fw-bold">2. PROGRAM</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>

                    <tbody class="program" id="">
                        <tr class="th-blue-grey-lighten-2 sum" id="">
                            <td class="title">Lead Facilitator</td>

                            <td>
                                <input type="text" class="package-fees input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td data-title="# OF HOURS">
                                <input type="text" class="number-session input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                                <input type="text" class="nswh input js-mytooltip input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}"name="" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody class="program" id="">
                        <tr class="th-blue-grey-lighten-2 sum" id="">
                            <td class="title">Moderator</td>

                            <td>
                                <input type="text" class="package-fees input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td data-title="# OF HOURS">
                                <input type="text" class="number-session input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                                <input type="text" class="nswh input js-mytooltip input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}"name="" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody class="program" id="">
                        <tr class="th-blue-grey-lighten-2 sum" id="">
                            <td class="title">Producer</td>

                            <td>
                                <input type="text" class="package-fees input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td data-title="# OF HOURS">
                                <input type="text" class="number-session input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                                <input type="text" class="nswh input js-mytooltip input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}"name="" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    {{-- SUBTOTAL --}}
                    <tr class="program">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center subtotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="" id="">
                        </td>
                        <td class="border border-white"></td>
                    </tr>
                <!-------------- PROGRAM END -------------->

                <!-------------- OFF PROGRAM -------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title text-uppercase fw-bold">3. OFF PROGRAM</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>

                    <tbody class="off-program" id="">
                        <tr class="th-blue-grey-lighten-2 sum" id="">
                            <td class="title">Off Program Fee</td>

                            <td>
                                <input type="text" class="package-fees input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td data-title="# OF HOURS">
                                <input type="text" class="number-session input input-table form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="" data-type="currency">
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}"name="" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>
                <!-------------- END OFF PROGRAM -------------->

                <!-------------- MISCELLANEOUS -------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title text-uppercase fw-bold">Miscellaneous</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>

                    <tbody class="miscellaneous" id="">
                        <tr class="th-blue-grey-lighten-2 sum" id="">
                            <td class="title">Program Expenses</td>

                            <td>
                                <input type="text" class="package-fees text-center input input-table form-control @error('') is-invalid @enderror" value="2%" name="" id="" readonly>
                            </td>

                            <td data-title="# OF HOURS">
                            </td>

                            <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}"name="" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>
                <!-------------- END OFF PROGRAM -------------->

                <!-------------- TOTAL -------------->
                    <tr class="table-active">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">total package</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end table-warning">
                            <input type="text" class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="mg_input_totalPackages" style="font-size: 20px;">
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                <!-------------- END TOTAL -------------->

                </table>

            <center>
                <p>  * NIGHT SHIFT/WEEKENDS/HOLIDAYS - no double charging for the same day <br>I.e. Saturday night travel is only charged one 20% surcharge</p>
            </center>

        </div>
    </section>
</div>

<script>
$('input[type="number"]').on('input', function () {
    this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null
});

$('input[type="number"]').attr('min', '0');

</script>
