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

                            @include('form.components.reference.cluster')                        

                        </fieldset>
                    </div>
                </div>

            </div>
        </div>   

        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered " id="coaching-ef-table">
                <thead class="table">
                    <tr class="text-center th-blue-grey">
                        <th class="title-th" scope="col" width=20%></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;"># OF COACHES</th>
                        <th class="title-middle px-4" width=15% scope="col">DAILY FEES</th>
                        <th class="title-middle px-4" width=15% scope="col"># OF SESSIONS (AL # OF HALF-DAYS)</th>
                        <th class="title-middle " scope="col" style="font-size: 0.9rem;border-right: 3px solid black;">
                            NSWH
                            <input type="hidden" value="Night Shift, Weekends and Holidays" name="fee_type[]">
                            <input type="hidden" value="" name="coach_num[]">
                            <input type="hidden" value="" name="fee_daily[]">
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
                    <th></th>
                    <th class="total-td"></th>
                    <th class="total-td"></th>
                </tr>
                
                <tbody id="tableConsultingDesign">
                    <tr class="th-blue-grey-lighten-2" id="consultingDesign">
                        <td class="title">
                            <input type="text" class="d-none" value="Consulting and/or Design" name="fee_type[]" readonly>
                            Consulting and/or Design (P5k /  P6.25K)
                        </td>
                        <td class="table-warning">
                            <input type="text" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror number_input"
                                value=""
                                name="coach_num[]"
                                id="ef_consultingDesign_cn"
                                title=""
                                max="100">
                        </td>
                        <td class="table-danger">
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_daily[]"
                                    id="ef_consultingDesign_fd"
                                    data-mytooltip-content=""
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="5000" {{ old('') == '5000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;5,000
                                    </option>
                                    <option value="6250" {{ old('') == '6250' ? 'selected="selected"' : '' }} >
                                        &#8369;6,250
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
                            <input type="text" class="input number_input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="fee_num_sessions[]"
                                id="ef_consultingDesign_ns"
                                title=""
                                max="100"
                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text" class="number_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="fee_nswh[]"
                                id="fee_consultingDesign_nswh"
                                title=""
                                max="100">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ef_consultingDesign_total">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="ef_consultingDesign_notes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <tr class="table-secondary" id="tablesubtotalCustomization">
                    <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)"> 
                        <h4 class="text-center text-danger" id="subtotalConsultingDesign">-</h4>
                    </td>
                    <td class="total-td"></td>
                </tr>

                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">2. COACHING</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                </tr>
                <!------------------------------------------------Package, up to 30 pax (P31.5K, P35K, P40.5K, P45K)-------------------------->
                <tbody id="tableExecutiveCoaching">
                    <tr class="th-blue-grey-lighten-2" id="executiveCoaching">
                        <td class="title">
                            <input type="text" class="d-none" value="Executive Coaching" name="fee_type[]" readonly>
                            Executive Coaching
                        </td>
                        <td class="table-warning">
                            <input type="text" class="input number_input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="coach_num[]"
                                id="ef_executiveCoaching_cn"
                                title=""
                                max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text" class="currency_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="fee_daily[]"
                                id="ef_executiveCoaching_fd"
                                title=""
                                max="100">
                        </td>
                        <td class="table-warning" data-title="">
                            <input type="text" class="input number_input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="fee_num_sessions[]"
                                id="ef_executiveCoaching_ns"
                                title=""
                                max="100"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning" data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                            <input type="text" class="input number_input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_nswh[]"
                                id="ef_executiveCoaching_nswh"
                                title=""
                                max="100"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ef_executiveCoaching_total">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="ef_executiveCoaching_notes"></textarea>
                        </td>                    
                    </tr>
                </tbody>

                <tbody id="tablePerformanceDevCoaching">
                    <tr class="th-blue-grey-lighten-2" id="perfDevCoaching">
                        <td class="title">
                            <input type="text" class="d-none" value="Performance Development Coaching" name="fee_type[]" readonly>
                            Performance Development Coaching
                        </td>
                        <td class="table-warning">
                            <input type="text" class="input number_input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="coach_num[]"
                                id="ef_perfDevCoaching_cn"
                                title=""
                                max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text" class="currency_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="fee_daily[]"
                                id="ef_perfDevCoaching_fd"
                                title=""
                                max="100" >
                        </td>
                        <td class="table-warning" data-title="">
                            <input type="text" class="input number_input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_num_sessions[]"
                                id="ef_perfDevCoaching_ns"
                                title=""
                                max="100"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning" data-title="">
                            <input type="text" class="input number_input input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_nswh[]"
                                id="ef_perfDevCoaching_nswh"
                                title=""
                                max="100"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ef_perfDevCoaching_total">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="ef_perfDevCoaching_notes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <tbody id="tableGallupStrenghtCoach">
                    <tr class="th-blue-grey-lighten-2" id="gallupStrenghtCoach">
                        <td class="title">
                            <input type="text" class="d-none" value="Gallup Strengths Coaching" name="fee_type[]" readonly>
                            Gallup Strengths Coaching
                        </td>
                        <td class="table-warning">
                            <input type="text" class="input number_input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="coach_num[]"
                                id="ef_gallupStrenghtCoach_cn"
                                title=""
                                max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text" class="currency_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="fee_daily[]"
                                id="ef_gallupStrenghtCoach_fd"
                                title=""
                                max="100">
                        </td>
                        <td class="table-warning" data-title="">
                            <input type="text" class="input number_input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_num_sessions[]"
                                id="ef_gallupStrenghtCoach_ns"
                                title=""
                                max="100"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning" data-title="">
                            <input type="text" class="input number_input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_nswh[]"
                                id="ef_gallupStrenghtCoach_nswh"
                                title=""
                                max="100"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ef_gallupStrenghtCoach_total">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="ef_gallupStrenghtCoach_notes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <tbody id="tableWialActLearnTeamCoach">
                    <tr class="th-blue-grey-lighten-2" id="wialALTC">
                        <td class="title">
                            <input type="text" class="d-none" value="WIAL Action Learning Team Coaching" name="fee_type[]" readonly>
                            WIAL Action Learning Team Coaching
                        </td>
                        <td class="table-warning">
                            <input type="text" class="input number_input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="coach_num[]"
                                id="ef_wialALTC_cn"
                                title=""
                                max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text" class="currency_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="fee_daily[]"
                                id="ef_wialALTC_fd"
                                title=""
                                max="100">
                        </td>
                        <td class="table-warning" data-title="">
                            <input type="text" class="input number_input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_num_sessions[]"
                                id="ef_wialALTC_ns"
                                title=""
                                max="100"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning" data-title="">
                            <input type="text" class="input number_input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_nswh[]"
                                id="ef_wialALTC_nswh"
                                title=""
                                max="100"
                                data-mytooltip-content=""
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ef_wialALTC_total">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="ef_wialALTC_notes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <tr class="table-secondary" id="tableSubtotalProgram">
                    <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                    <td></td>
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
                            value="{{ old('') }}" name="coach_num[]" id="inpt_dsct" readonly>
                    </td>
                    <td class="overall-total-middle"><input type="hidden" value="" name="fee_daily[]"></td>
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

            @if($fee->type == 'Consulting and/or Design')                
                document.getElementById('ef_consultingDesign_cn').value = '{{ $fee->coach_number }}';
                document.getElementById('ef_consultingDesign_fd').value = '{{ ($fee->daily_fees) ? $fee->daily_fees : "5000" }}';                
                document.getElementById('ef_consultingDesign_ns').value = '{{ $fee->session_num }}';                
                document.getElementById('fee_consultingDesign_nswh').value = '{{ $fee->nswh }}';
                document.getElementById('ef_consultingDesign_notes').value = '{{ $fee->notes }}';              

            @endif

            @if($fee->type == 'Executive Coaching')                
                document.getElementById('ef_executiveCoaching_cn').value = '{{ $fee->coach_number }}';
                document.getElementById('ef_executiveCoaching_fd').value = '{{ $fee->daily_fees }}';                
                document.getElementById('ef_executiveCoaching_ns').value = '{{ $fee->session_num }}';                
                document.getElementById('ef_executiveCoaching_nswh').value = '{{ $fee->nswh }}';
                document.getElementById('ef_executiveCoaching_notes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Performance Development Coaching')                
                document.getElementById('ef_perfDevCoaching_cn').value = '{{ $fee->coach_number }}';
                document.getElementById('ef_perfDevCoaching_fd').value = '{{ $fee->daily_fees }}';                
                document.getElementById('ef_perfDevCoaching_ns').value = '{{ $fee->session_num }}';                
                document.getElementById('ef_perfDevCoaching_nswh').value = '{{ $fee->nswh }}';
                document.getElementById('ef_perfDevCoaching_notes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Gallup Strengths Coaching')                
                document.getElementById('ef_gallupStrenghtCoach_cn').value = '{{ $fee->coach_number }}';
                document.getElementById('ef_gallupStrenghtCoach_fd').value = '{{ $fee->daily_fees }}';                
                document.getElementById('ef_gallupStrenghtCoach_ns').value = '{{ $fee->session_num }}';                
                document.getElementById('ef_gallupStrenghtCoach_nswh').value = '{{ $fee->nswh }}';
                document.getElementById('ef_gallupStrenghtCoach_notes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'WIAL Action Learning Team Coaching')                
                document.getElementById('ef_wialALTC_cn').value = '{{ $fee->coach_number }}';
                document.getElementById('ef_wialALTC_fd').value = '{{ $fee->daily_fees }}';                
                document.getElementById('ef_wialALTC_ns').value = '{{ $fee->session_num }}';                
                document.getElementById('ef_wialALTC_nswh').value = '{{ $fee->nswh }}';
                document.getElementById('ef_wialALTC_notes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Discount given')
                document.getElementById('inpt_dsct').value = '{{ $fee->coach_number }}';
                document.getElementById('mg_total_dsct').value = '{{ $fee->notes }}';
            @endif
            
        @endforeach

        document.getElementById('status').value = '{{ $subInfoList[0]->status }}';
        document.getElementById('program_venue').value = '{{ $subInfoList[0]->venue }}';
        document.getElementById('datepicker').value = '{{ $subInfoList[0]->date }}';
        document.getElementById('program_start_time').value = '{{ $subInfoList[0]->start_time }}';
        document.getElementById('program_end_time').value = '{{ $subInfoList[0]->end_time }}';
        document.getElementById('cluster-dropdown1').value = '{{ $subInfoList[0]->cluster }}';
        document.getElementById('core-valueInput1').value = '{{ $subInfoList[0]->core_area }}'; 

        $(document).ready(function () {     
            $('#coaching-ef-table input').blur();
            document.getElementById("input_totalPackages").value = '{{ $subInfoList[0]->sub_fees_total }}'; 
            $('#input_totalPackages').keyup();
        });

    </script>
@endif