<!------------ CARD HEADER ------------>
    <div class="card-header">
        <h4 class="card-title">Information</h4>
    </div>
<!------------ END CARD HEADER ------------>

<!------------ FORM BODY ------------>
    <div class="form-body container">
        <!------------ DATE COVERED BY ENGAGEMENT ------------>
            {{-- <div class="row justify-content-center" id="dcbe">
                <h5 class="text-center fst-italic">Date Covered by Engagement</h5>
                <div class="d-flex justify-content-center" id="dateRows1">

                    <div class="flex-column mt-3">
                        <div>
                            <fieldset class="row justify-content-center" id="dateRows">
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group has-icon-left">
                                        <label class="fw-bold required">Date</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror"
                                                value="{{ old('doe') }}" placeholder="Enter Date" name="program_dates[]" id="datepicker"
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
                                        <label class="fw-bold required">Start Time</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control start-time timepicker @error('dot') is-invalid @enderror"
                                                value="{{ old('dot') }}" placeholder="Enter Time" id="program_start_time" name="program_start_time[]">
                                            <div class="form-control-icon">
                                                <i class="bi bi-clock"></i>
                                            </div>
                                            @error('dot')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group has-icon-left">
                                        <label class="fw-bold required">End Time</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control end-time timepicker @error('dot') is-invalid @enderror"
                                                value="{{ old('dot') }}" placeholder="Enter Time" id="program_end_time" name="program_end_time[]">
                                            <div class="form-control-icon">
                                                <i class="fa-solid fa-hourglass-end"></i>
                                            </div>
                                            @error('dot')
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
            </div> --}}
        <!------------------- END ----------------------->

        <!------------ STATUS ------------>
            <div class="form-group row mb-4 mt-5">
                <div class="col-md-2">
                    <label class="fw-bold required">Status: </label>
                </div>

                <div class="col-md-2" id="">
                    <select class="input js-mytooltip form-select @error('status') is-invalid @enderror"
                        name="status" id="status" value="{{ old('status') }}" data-mytooltip-content="<i>Please Choose Status</i>"
                        data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                        <option value="Trial" {{ old('status') == 'Trial' ? 'selected="selected"' : '' }}>
                            Trial
                        </option>
                        <option value="Confirmed" {{ old('status') == 'Confirmed' ? 'selected="selected"' : '' }} selected>
                            Confirmed
                        </option>
                        <option value="In-progress" {{ old('status') == 'In-progress' ? 'selected="selected"' : '' }}>
                            In-progress
                        </option>
                        <option value="Completed" {{ old('status') == 'Completed' ? 'selected="selected"' : '' }}>
                            Completed
                        </option>
                        <option value="Lost" {{ old('status') == 'Lost' ? 'selected="selected"' : '' }}>
                            Lost
                        </option>
                    </select>
                </div>
            </div>
        <!------------ END ------------>

        <!------------ BATCH NAME ------------>
            {{-- <div class="form-group row">
                <div class="col-md-2">
                    <label class="fw-bold required">Batch Name: </label>
                </div>
                <div class="col-md-3">
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                            <input type="text" class="form-control @error('batch_name') is-invalid @enderror" value="" name="batch_name" id="Batchname">
                            <div class="form-control-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </div>
                            <div class="invalid-feedback">
                            @error('batch_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        <!------------ END ------------>

        <!------------ CUSTOMIZED TYPE ------------>
            <div class="form-group row">
                <div class="col-md-2">
                    <label class="fw-bold required">Customized Type: </label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                            <select class="input js-mytooltip form-select customized-type @error('') is-invalid @enderror"
                                name="customized_type" id="" value="{{ old('customized_type') }}" data-mytooltip-content="<i>
                                    Please Choose
                                    </i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="right">
                                <option value="Hybrid" {{ old('customized_type') == 'Hybrid' ? 'selected="selected"' : '' }}>Hybrid
                                </option>
                                <option value="Virtual" {{ old('customized_type') == 'Virtual' ? 'selected="selected"' : '' }} selected>
                                    Virtual
                                </option>
                                <option value="G.A Hybrid" {{ old('customized_type') == 'G.A Hybrid' ? 'selected="selected"' : '' }}>
                                    G.A Hybrid
                                </option>
                                <option value="G.A Virtual" {{ old('customized_type') == 'G.A Virtual' ? 'selected="selected"' : '' }}>G.A
                                    Virtual
                                </option>
                                <option value="Team Journeys" {{ old('customized_type') == 'Team Journeys' ? 'selected="selected"' : '' }}>
                                    Team Journeys
                                </option>
                            </select>
                            <div class="form-control-icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-2" id="dropdown-ga" style="visibility: hidden;">
                    <select class="input js-mytooltip ga-only-dropdown form-select @error('') is-invalid @enderror"
                        name="ga_percent" id="ga-only-dropdown" value="{{ old('') }}" data-mytooltip-content="<i>
                            Please Choose 0% if not G.A
                            </i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                        <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} selected>
                            0%
                        </option>
                        <option value="10" {{ old('') == '10' ? 'selected="selected"' : '' }}>
                            10%
                        </option>
                        <option value="15" {{ old('') == '15' ? 'selected="selected"' : '' }}>
                            15%</option>
                        <option value="20" {{ old('') == '20' ? 'selected="selected"' : '' }}>
                            20%
                        </option>
                        <option value="25" {{ old('') == '25' ? 'selected="selected"' : '' }}>
                            25%
                        </option>
                    </select>
                </div>
            </div>
        <!------------ END ------------>

        <!------------ CLIENT NAME ------------>
            {{-- @if(isset($companyList)) --}}
            <div class="form-group row">
                <div class="col-md-2">
                    <label class="fw-bold required">Client: </label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                            <select class="input form-select select2-hidden-accessible @error('client_id') is-invalid @enderror"
                            id="client_id"
                            name="client_id"
                            style="width: 100%;"
                            tabindex="-1"
                            aria-hidden="true">
                                <option value="Select">-- Select --</option>
                                @foreach ($companyList as $key=>$client)
                                    <option value="{{ $client->id }}"
                                        data-first_eng={{ $client->first_eng }}>
                                        {{ $client->company_name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="form-control-icon">
                                <i class="fa-solid fa-clients"></i>
                            </div>
                            @error('client_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
        <!------------ END ------------>

        <!------------ ENGAGEMENT TITLE AND NUMBER OF PAX ------------>
            <div class="form-group row">
                <div class="col-md-2">
                    <label class="fw-bold required">Engagement Title: </label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                            <input type="text" class="form-control @error('engagement_title') is-invalid @enderror" value="{{ old('engagement_title') }}"
                                name="engagement_title" id="engagement_title">
                            <div class="form-control-icon">
                                <i class="fa-solid fa-t"></i>
                            </div>
                            @error('engagement_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-2 g-2">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Pilot</label>
                    </div>
                </div> --}}
            </div>

            <div class="form-group row">
                <div class="col-md-2">
                    <label class="fw-bold required">Number of pax </label>
                </div>

                <div class="col-md-3">
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                            <input type="number" class="form-control @error('pax_number') is-invalid @enderror"
                                value="{{ old('pax_number') }}" name="pax_number" id="pax_number" placeholder="Enter # of Pax" min="0"
                                oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                            <div class="form-control-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            @error('pax_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        <!------------ END ------------>

        <!------------ NUMBER OF BATCHES AND SESSION ------------>
            <div class="form-group row">
                <div class="col-md-2">
                    <label class="fw-bold required">Number of Batches </label>
                </div>

                <div class="col-md-3">
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                            <input type="number" class="form-control @error('batch_number') is-invalid @enderror"
                                value="{{ old('batch_number') }}" name="batch_number" id="BatchNumber" placeholder="Enter # of Batches" min="0"
                                oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                            <div class="form-control-icon">
                                <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            @error('batch_number')
                                <span class="invalid-feedback" role="alert">
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-5">
                <div class="col-md-2">
                    <label class="fw-bold required">Number of Session </label>
                </div>

                <div class="col-md-3">
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                            <input type="number" class="form-control @error('session_number') is-invalid @enderror"
                                value="{{ old('session_number') }}" name="session_number" id="SessionNumber" placeholder="Enter # of Session" min="0"
                                oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                            <div class="form-control-icon">
                                <i class="fa-solid fa-clock-rotate-left"></i>
                            </div>
                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        <!------------ END ------------>

        <!------------ TO BE ANNOUNCE ------------>
            {{-- <div class="row mb-5">
                <div class="col-md-2">
                    <label class="fw-bold required">Date </label>
                </div>

                <div class="col-md-2">
                    <div class="form-check form-switch mt-1">
                        <input class="form-check-input" type="checkbox" role="switch" id="dcbeCheck">
                        <label class="form-check-label" for="dcbeCheck">To Be Announced</label>
                    </div>
                </div>
            </div> --}}
        <!------------ END ------------>

        <!------------ DATE COVERED BY ENGAGEMENT ------------>
            {{-- <div class="row justify-content-center" id="dcbe">
                <h5 class="text-center fst-italic">Date Covered by Engagement</h5>
                <div class="d-flex justify-content-center" id="dateRows1">

                    <div class="flex-column mt-3">
                        <div>
                            <fieldset class="row justify-content-center" id="dateRows">
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group has-icon-left">
                                        <label class="fw-bold required">Date</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror"
                                                value="{{ old('doe') }}" placeholder="Enter Date" name="program_dates[]" id="datepicker"
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
                                        <label class="fw-bold required">Start Time</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control start-time timepicker @error('dot') is-invalid @enderror"
                                                value="{{ old('dot') }}" placeholder="Enter Time" id="program_start_time" name="program_start_time[]">
                                            <div class="form-control-icon">
                                                <i class="bi bi-clock"></i>
                                            </div>
                                            @error('dot')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group has-icon-left">
                                        <label class="fw-bold required">End Time</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control end-time timepicker @error('dot') is-invalid @enderror"
                                                value="{{ old('dot') }}" placeholder="Enter Time" id="program_end_time" name="program_end_time[]">
                                            <div class="form-control-icon">
                                                <i class="fa-solid fa-hourglass-end"></i>
                                            </div>
                                            @error('dot')
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
            </div> --}}
        <!------------------- END ----------------------->

    </div>
<!------------ END OF FORM BODY ------------>
<script>
    //DYNAMIC BATCH
    $(document).ready(function() {
        //DROPDOWN WITH SEARCH INPUT FUNCTION
        $('.select2-hidden-accessible').select2({
            theme: 'bootstrap',
            width: 'resolve',
        });

        //BATCH NUMBER AND SESSION
        var batch = 1;
        $("#addBatch").on("click", function() {
            // Adding a row inside the tbody.
            $("#batch").append(`
            <div class="form-group row justify-content-center batches" id="batches${batch}">
                <div class="col-md-3">
                    <label class="mb-1" for="formGroupClientInput">Client Name</label>
                    <select class="input form-select form-control @error('client_id') is-invalid @enderror"
                        id="client_id"
                        name="client_id"
                        style="width: 100%;"
                        tabindex="-1"
                        aria-hidden="true">
                        <option value="Select">-- Select --</option>
                        @foreach ($companyList as $key=>$client)
                            <option value="{{ $client->id }}"
                                data-first_eng={{ $client->first_eng }}>
                                {{ $client->company_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('client_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="formGroupBatchInput">Batch Name</label>
                    <input type="text" class="form-control" id="formGroupBatchInput">
                </div>

                <div class="col-md-3">
                    <label for="formGroupSessionInput">Session</label>
                    <input type="text" class="form-control" id="formGroupSessionInput">
                </div>

                <div class="col-lg-1 col-md-1">
                    <div class="px-0">
                        <label class="fw-bold invisible overflow-hidden mb-4">Add</label>
                        <a href="javascript:void(0)" class="text-danger font-18 remove px-0" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </div>
                </div
            </div>
            `);
            $('.select2-hidden-accessibles').select2({
                theme: 'bootstrap',
                width: 'resolve'
            });
        });
        //DELETE ROW FUNCTION
        $("#batch").on("click", ".remove", function () {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest('.batches').nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(8));

                // Modifying row id.
                $(this).attr("id", `batches${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest('.batches').remove();

            // Decreasing total number of rows by 1.
            batch--;
        });
    });

    //DYNAMIC PROGRAM DATES
    $(document).ready(function() {
        //DATE OF ENGAGEMENT
        var dates = 1;
        $("#addDates").on("click", function() {
            // Adding a row inside the tbody.
            $("#dcbe").append(`
            <fieldset class="d-flex justify-content-center mt-4" id="dateRows${++dates}">
                <div class="flex-column">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-lg-1 col-md-1">
                                <div class="px-0">
                                    <label class="fw-bold invisible overflow-hidden mb-4">Add</label>
                                    <a href="javascript:void(0)" class="text-danger font-18 remove px-0" title="Remove">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold required">Date</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror"
                                            value="{{ old('doe') }}" placeholder="Enter Date" name="program_dates[]" id="datepicker${dates}"
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
                                    <label class="fw-bold required">Start Time</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control start-time timepicker @error('dot') is-invalid @enderror"
                                            value="{{ old('dot') }}" placeholder="Enter Time" id="program_start_time" name="program_start_time[]">
                                        <div class="form-control-icon">
                                            <i class="bi bi-clock"></i>
                                        </div>
                                        @error('dot')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold required">End Time</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control end-time timepicker @error('dot') is-invalid @enderror"
                                            value="{{ old('dot') }}" placeholder="Enter Time" id="program_end_time" name="program_end_time[]">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-hourglass-end"></i>
                                        </div>
                                        @error('dot')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @include('form.components.reference.append_cluster')
                        </div>
                    </div>

                </div>


            </fieldset>`);
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
        });

        $("#dcbe").on("click", ".remove", function () {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest('.d-flex').nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .noh, .nwh class.
                // var noc = $(this).children(".noc").children("input");
                // var noh = $(this).children(".noh").children("input");
                // var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(8));

                // Modifying row id.
                $(this).attr("id", `dateRows${dig - 1}`);

                // Modifying row index.
                // noc.attr("id", `ec_LeadfacilitatorNoc${dig - 1}`);
                // noh.attr("id", `ec_LeadfacilitatorNoh${dig - 1}`);
                // nwh.attr("id", `ec_LeadfacilitatorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest('.d-flex').remove();

            // Decreasing total number of rows by 1.
            dates--;
        });

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
    });
</script>
