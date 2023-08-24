<div class="card-header">
    <h4 class="card-title" style="display: inline;">Engagement Fees</h4>
    <div style="float:right">
        <button class="btn btn-primary mx-0 js-btn-next" type="button" title="Next">Next</button>
        <button class="btn btn-success mx-0 js-btn-next" type="Submit" title="Submit">Save</button>  
    </div>
</div>

<div class="form-body">
    <section>   
        <div class="row mb-5" id="dcbe">            
            <div class="d-flex" id="dateRows1">
                <div class="flex-column mt-3">
                    <div>
                        <fieldset class="row" id="dateRows">

                            <div class="form-group row mb-1">
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group has-icon-left">
                                        <div class="text-left"><label class="fw-bold">Status</label></div>
                                        <div class="position-relative">
                                            <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                                name="status" id="status" value="{{ old('') }}" data-mytooltip-content="<i>Please Choose Status</i>"
                                                data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">                                                        
                                                <option value="Confirmed" selected> Confirmed </option>
                                                <option value="Trial" > Trial </option>
                                                <option value="In-progress" > In-progress </option>
                                                <option value="Completed" > Completed </option>
                                                <option value="Lost" > Lost </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-9">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold">Venue</label>
                                    <div class="position-relative">
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            value="" 
                                            placeholder="Enter Venue" 
                                            id="program_venue" 
                                            name="program_venue">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-location-arrow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3"></div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold">Date</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror"
                                            value="" placeholder="Enter Date" name="date" id="datepicker"
                                            size="30">
                                        <div class="form-control-icon">
                                            <i class="bi bi-calendar"></i>
                                        </div>
                                        @error('doe')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold">Start Time</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control start-time timepicker @error('program_start_time') is-invalid @enderror"
                                            value="" placeholder="Enter Time" id="program_start_time" name="program_start_time">
                                        <div class="form-control-icon">
                                            <i class="bi bi-clock"></i>
                                        </div>
                                        @error('program_start_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold">End Time</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control end-time timepicker @error('program_end_time') is-invalid @enderror"
                                            value="" placeholder="Enter Time" id="program_end_time" name="program_end_time">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-hourglass-end"></i>
                                        </div>
                                        @error('program_end_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold">Cluster</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control cluster" value="{{ old('cluster') }}" placeholder="Cluster" id="cluster" name="cluster" readonly>
                                            <div class="form-control-icon">
                                                <i class="fa-solid fa-diagram-project"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold">Intelligence</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <input type="text" class="form-control core_area" value="{{ old('core_area') }}" placeholder="Intelligence" id="core_area" name="core_area" readonly>
                                            <div class="form-control-icon">
                                                <i class="fa-solid fa-circle-nodes"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>                          

                        </fieldset>
                    </div>
                </div>

            </div>
        </div>   

        <div class="table-responsive-md" id="no-more-tables">
        <table class="table table-bordered " id="webinar-ef-table">
            <thead class="table">
                <tr class="text-center th-blue-grey">
                    <th class="title-th" scope="col" width=20%></th>
                    <th class="title-middle" scope="col" style="font-size: 0.9rem;">PACKAGE FEES, EXCL VAT</th>
                    <th class="title-middle px-4" width=15% scope="col">NUMBER OF SESSIONS</th>
                    <th class="title-middle total-td" scope="col" style="font-size: 0.9rem;border-right: 3px solid black">
                        NSWH
                        <input type="hidden" value="Night Shift, Weekends and Holidays" name="fee_type[]">
                        <input type="hidden" value="" name="fee_package[]">
                        <input type="hidden" value="" name="fee_num_sessions[]">
                        <input type="hidden" value="" name="fee_nswh[]">
                        <input type="hidden" value="" name="fee_notes[]">
                        <select class="js-mytooltip form-select engagement-fee nswh-percent @error('') is-invalid @enderror select bg-white" 
                        name="nswh_percent[]" id="nswh">
                            <option value="0.0" {{ old('') == '0.0' ? 'selected="selected"' : '' }} selected>
                                0%
                            </option>
                            <option value="0.1" {{ old('') == '0.1' ? 'selected="selected"' : '' }}>
                                10%
                            </option>
                            <option value="0.15" {{ old('') == '0.15' ? 'selected="selected"' : '' }}>
                                15%
                            </option>
                            <option value="0.2" {{ old('') == '0.2' ? 'selected="selected"' : '' }} selected>
                                20%
                            </option>
                            <option value="0.25" {{ old('') == '0.25' ? 'selected="selected"' : '' }}>
                                25%
                            </option>
                        </select>
                    </th>
                    <th class="title-middle" scope="col" style="font-size: 0.9rem;">TOTAL FEE</th>
                    <th class="title-middle total-td" scope="col" style="font-size: 0.9rem;border-top: 3px solid black" width=20%>NOTES</th>
                </tr>
            </thead>
            <tr class="th-blue-grey-lighten">
                <th class="px-4 title  ">1. CONSULTING/ DESIGN</th>
                <th></th>
                <th></th>
                <th></th>
                <th class="total-td"></th>
                <th class="total-td"></th>
            </tr>
            
            <tbody id="tablecustomFee">
                <tr class="th-blue-grey-lighten-2" id="customizationFee">
                    <td class="title">
                        <input type="text" class="d-none" value="Customization Fee" name="fee_type[]" readonly>
                        Customization Fee
                    </td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                name="fee_package[]"
                                id="ef_customFeePF1"
                                data-mytooltip-content="<i>P15,000 - with minimal design customization,
                                    or platform customization outside of Zoom/Goggle Meets/MS Teams.
                                    Up to 2 hours of works</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="right"
                                style="background-color:#ffcccc; color:red;">
                                <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} selected>
                                    &#8369;0
                                </option>
                                <option value="15000" {{ old('') == '15000' ? 'selected="selected"' : '' }} >
                                    &#8369;15,000
                                </option>
                            </select>
                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td data-title="# OF SESSIONS" >
                        <input type="number" class="input d-none input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}"
                            name="fee_num_sessions[]"
                            id="ef_customFeeNos"
                            title=""
                            max="100"
                            data-mytooltip-content="<i></i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS" >
                        <input type="number" class="input d-none input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}"
                            name="fee_nswh[]"
                            id="ef_customFeeNsw"
                            title=""
                            max="100"
                            data-mytooltip-content="<i></i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ef_customFeeTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="fee_notes[]" id="ef_customFeeNotes"></textarea>
                    </td>
                </tr>
            </tbody>

            <tr class="table-secondary" id="tablesubtotalCustomization">
                <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)"> 
                    <h4 class="text-center text-danger" id="subtotalConsultingDesign">-</h4>
                </td>
                <td class="total-td"></td>
            </tr>

            <tr class="th-blue-grey-lighten">
                <th class="title px-4 text-dark">2. PROGRAM</th>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td"></td>
                <td class="total-td"></td>
            </tr>
            <!------------------------------------------------Package, up to 30 pax (P31.5K, P35K, P40.5K, P45K)-------------------------->
            <tbody id="tableProgramPackage1">
                <tr class="th-blue-grey-lighten-2" id="package1">
                    <td class="title">
                        <input type="text" class="d-none" value="Package 1" name="fee_type[]" readonly>
                        Package, 51-100 pax (P58.5K, P65K)
                    </td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                name="fee_package[]"
                                id="ef_package1FeePf"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="right"
                                style="background-color:#ffcccc; color:red;">
                                <option value="58500" {{ old('') == '58500' ? 'selected="selected"' : '' }}>
                                    &#8369;58,800
                                </option>
                                <option value="65000" {{ old('') == '65000' ? 'selected="selected"' : '' }} selected>
                                    &#8369;65,000
                                </option>
                            </select>
                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td class="table-warning" data-title="# OF SESSIONS">
                        <input type="text" class="number_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                            value=""
                            name="fee_num_sessions[]"
                            id="ef_package1FeeNos"
                            title=""
                            max="100"
                            data-mytooltip-content="<i>Minimum is 1 session</i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td class="table-warning" data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                        <input type="text" class="number_input input  input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}"
                            name="fee_nswh[]"
                            id="ef_package1FeeNsw"
                            title=""
                            max="100"
                            data-mytooltip-content="<i></i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ef_package1FeeTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="fee_notes[]" id="ef_package1FeeNotes"></textarea>
                    </td>                    
                </tr>
            </tbody>

            <tbody id="tablepackage2">
                <tr class="th-blue-grey-lighten-2" id="package2">
                    <td class="title">
                        <input type="text" class="d-none" value="Package 2" name="fee_type[]" readonly>
                        Package, 101-200 pax (P67.5K, P75K)
                    </td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                name="fee_package[]"
                                id="ef_package2FeePf"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="right"
                                style="background-color:#ffcccc; color:red;">
                                <option value="67500" {{ old('') == '67500' ? 'selected="selected"' : '' }} >
                                    &#8369;67,500
                                </option>
                                <option value="75000" {{ old('') == '75000' ? 'selected="selected"' : '' }} selected>
                                    &#8369;75,000
                                </option>
                            </select>
                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td class="table-warning" data-title="# OF SESSIONS">
                        <input type="text" class="number_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}"
                            name="fee_num_sessions[]"
                            id="ef_package2FeeNos"
                            title=""
                            max="100"
                            data-mytooltip-content="<i>Minimum is 1 session</i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td class="table-warning" data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                        <input type="text" class="number_input input  input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}"
                            name="fee_nswh[]"
                            id="ef_package2FeeNsw"
                            title=""
                            max="100"
                            data-mytooltip-content="<i></i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ef_package2FeeTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="fee_notes[]" id="ef_package2Notes"></textarea>
                    </td>
                </tr>
            </tbody>

            <tbody id="tablepackage3">
                <tr class="th-blue-grey-lighten-2" id="package2">
                    <td class="title">
                        <input type="text" class="d-none" value="Package 3" name="fee_type[]" readonly>
                        Package, 201 pax and up (P76.5K, P85K)
                    </td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                name="fee_package[]"
                                id="ef_package3FeePf"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="right"
                                style="background-color:#ffcccc; color:red;">
                                <option value="76500" {{ old('') == '76500' ? 'selected="selected"' : '' }} >
                                    &#8369;76,500
                                </option>
                                <option value="85000" {{ old('') == '85000' ? 'selected="selected"' : '' }} selected>
                                    &#8369;85,000
                                </option>
                            </select>
                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td class="table-warning" data-title="# OF SESSIONS">
                        <input type="text" class="number_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}"
                            name="fee_num_sessions[]"
                            id="ef_package3FeeNos"
                            title=""
                            max="100"
                            data-mytooltip-content="<i>Minimum is 1 session</i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td class="table-warning" data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                        <input type="text" class="number_input input  input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}"
                            name="fee_nswh[]"
                            id="ef_package3FeeNsw"
                            title=""
                            max="100"
                            data-mytooltip-content="<i></i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ef_package3FeeTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="fee_notes[]" id="ef_package3Notes"></textarea>
                    </td>
                </tr>
            </tbody>

            <tbody id="tableproducer">
                <tr class="th-blue-grey-lighten-2" id="ef_producer">
                    <td class="title">
                        <input type="text" class="d-none" value="Producer" name="fee_type[]" readonly>
                        Producer (5K, 7.5K)
                    </td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                name="fee_package[]"
                                id="ef_producerFeePf"
                                data-mytooltip-content="<i>0 - client will provide the producer<br>
                                    P5,000 - 1.5-2 hour session<br>
                                    P7,500 - 2.5-3 hour session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="right"
                                style="background-color:#ffcccc; color:red;">
                                <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} selected>
                                    &#8369;0
                                </option>
                                <option value="5000" {{ old('') == '5000' ? 'selected="selected"' : '' }}>
                                    &#8369;5,000
                                </option>                                
                            </select>
                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td class="table-warning" data-title="# OF SESSIONS">
                        <input type="text" class="number_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                            value=""
                            name="fee_num_sessions[]"
                            id="ef_producerFeeNoc"
                            title=""
                            max="100"
                            data-mytooltip-content="<i>Minimum is 1 session</i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td class="table-warning" data-title="NIGHT SHIFT, WEEKENDS LIDAYS *">
                        <input type="text" class="number_input input  input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}"
                            name="fee_nswh[]"
                            id="ef_producerFeeNsw"
                            title=""
                            max="100"
                            data-mytooltip-content="<i></i>"
                            data-mytooltip-theme="dark"
                            data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ef_producerFeeTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="fee_notes[]" id="ef_producerNotes"></textarea>
                    </td>
                </tr>
            </tbody>

            <tr class="table-secondary" id="tableSubtotalProgram">
                <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                    <h4 class="text-center text-danger" id="subtotalProgram">-</h4>
                </td>
                <td class="total-td"></td>
            </tr>

            <tr class="table-active overall-total" id="tableStandardTotal">
                <td class="text-uppercase text-dark fst-italic fw-bold overall-total-start">TOTAL STANDARD FEES</td>
                <td class="overall-total-middle"></td>
                <td class="overall-total-middle"></td>
                <td class="overall-total-middle"></td>
                <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                    <h4 class="text-center fw-bold text-danger" id="standard_total">-</h4>
                </td>
                <td class="overall-total-end"></td>
            </tr>

            <tr class="table-active">
                <td class="fw-bold text-dark text-uppercase fst-italic overall-total-start">
                    discount given (if any)
                    <input type="hidden" value="Discount given" name="fee_type[]">
                </td>
                <td class="overall-total-middle" style="background-color: rgba(146, 146, 146, 0.727">
                    <input type="text" class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_package[]" id="inpt_dsct" readonly>
                </td>
                <td class="overall-total-middle"><input type="hidden" value="" name="fee_num_sessions[]"></td>
                <td class="overall-total-middle"><input type="hidden" value="" name="fee_nswh[]"></td>
                <td class="overall-total-end"></td>
                <td class="overall-total-end">
                    <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}"  name="fee_notes[]" id="mg_total_dsct"></textarea>
                </td>
            </tr>
            
            <tr class="table-active">
                <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">total package</td>
                <td class="overall-total-middle"></td>
                <td class="overall-total-middle"></td>
                <td class="overall-total-middle"></td>
                <td class="overall-total-end table-warning">
                    <input type="text" class="currency_input tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror"
                    value="{{ old('') }}" name="input_totalPackages" id="input_totalPackages" style="font-size: 20px;">
                </td>
                <td class="overall-total-end"></td>
            </tr>
        </table>
            <p> * TRAVEL DAYS/NIGHT SHIFT/WEEKENDS/HOLIDAYS - no double charging for the same day I.e. Saturday night travel is only charged one 20% surcharge</p>
        </div>
    </section>
</div>

@if($parentData)
    <script>
        @foreach($subFeeList as $fee)

            @if($fee->type == 'Night Shift, Weekends and Holidays')
                document.getElementById('nswh').value = '{{ $fee->nswh_percent }}';
            @endif

            @if($fee->type == 'Customization Fee')                
                document.getElementById('ef_customFeePF1').value = '{{ $fee->package_fees_excl_vat }}';
                document.getElementById('ef_customFeeNos').value = '{{ $fee->session_num }}';                
                document.getElementById('ef_customFeeNsw').value = '{{ $fee->nswh }}';
                document.getElementById('ef_customFeeNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Package 1')                
                document.getElementById('ef_package1FeePf').value = '{{ $fee->package_fees_excl_vat }}';
                document.getElementById('ef_package1FeeNos').value = '{{ $fee->session_num }}';                
                document.getElementById('ef_package1FeeNsw').value = '{{ $fee->nswh }}';
                document.getElementById('ef_package1FeeNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Package 2')
                document.getElementById('ef_package2FeePf').value = '{{ $fee->package_fees_excl_vat }}';
                document.getElementById('ef_package2FeeNos').value = '{{ $fee->session_num }}';                
                document.getElementById('ef_package2FeeNsw').value = '{{ $fee->nswh }}';
                document.getElementById('ef_package2Notes').value = '{{ $fee->notes }}';
            @endif
            
            @if($fee->type == 'Package 3')
                document.getElementById('ef_package3FeePf').value = '{{ $fee->package_fees_excl_vat }}';
                document.getElementById('ef_package3FeeNos').value = '{{ $fee->session_num }}';                
                document.getElementById('ef_package3FeeNsw').value = '{{ $fee->nswh }}';
                document.getElementById('ef_package3Notes').value = '{{ $fee->notes }}';
            @endif  

            @if($fee->type == 'Producer')                
                document.getElementById('ef_producerFeePf').value = '{{ $fee->package_fees_excl_vat }}';
                document.getElementById('ef_producerFeeNoc').value = '{{ $fee->session_num }}';                
                document.getElementById('ef_producerFeeNsw').value = '{{ $fee->nswh }}';
                document.getElementById('ef_producerNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Discount given')
                document.getElementById('inpt_dsct').value = '{{ $fee->session_num }}';
                document.getElementById('mg_total_dsct').value = '{{ $fee->notes }}';
            @endif
            
        @endforeach

        document.getElementById("input_totalPackages").value = '{{ $subInfoList[0]->sub_fees_total }}';   

        document.getElementById('status').value = '{{ $subInfoList[0]->status }}';
        document.getElementById('program_venue').value = '{{ $subInfoList[0]->venue }}';
        document.getElementById('datepicker').value = '{{ $subInfoList[0]->date }}';
        document.getElementById('program_start_time').value = '{{ $subInfoList[0]->start_time }}';
        document.getElementById('program_end_time').value = '{{ $subInfoList[0]->end_time }}';
        document.getElementById('cluster').value = '{{ $subInfoList[0]->cluster }}'.replaceAll('amp;','');
        document.getElementById('core_area').value = '{{ $subInfoList[0]->intelligence }}'.replaceAll('amp;',''); 

        $(document).ready(function () {   
            $('.timepicker').timepicker({
                timeFormat: 'h:mm p',
                interval: 30,
                minTime: '06',
                maxTime: '10:00pm',
                // defaultTime: '06',
                startTime: '06:00',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });

            $('#webinar-ef-table input').blur();
            document.getElementById("input_totalPackages").value = '{{ $subInfoList[0]->sub_fees_total }}';   
            $('#input_totalPackages').keyup();
        });

    </script>
@endif