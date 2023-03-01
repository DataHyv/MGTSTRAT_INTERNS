<div class="card-header">
    <h4 class="card-title">Information</h4>
</div>

<div class="form-body container">
    <!------------ STATUS ------------>
    <div class="form-group row mb-4">
        <div class="col-md-2">
            <label class="fw-bold required">Status: </label>
        </div>

        <div class="col-md-2" id="">
            <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="status" id="status"
                value="{{ old('') }}" data-mytooltip-content="<i>Please Choose Status</i>"
                data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                <option value="Trial" {{ old('') == 'Trial' ? 'selected="selected"' : '' }}>
                    Trial
                </option>
                <option value="Confirmed" {{ old('') == 'Confirmed' ? 'selected="selected"' : '' }} selected>
                    Confirmed
                </option>
                <option value="In-progress" {{ old('') == 'In-progress' ? 'selected="selected"' : '' }}>
                    In-progress
                </option>
                <option value="Completed" {{ old('') == 'Completed' ? 'selected="selected"' : '' }}>
                    Completed
                </option>
                <option value="Lost" {{ old('') == 'Lost' ? 'selected="selected"' : '' }}>
                    Lost
                </option>
            </select>
        </div>
    </div>

    <!------------ CUSTOMIZED TYPE ------------>
    <div class="form-group row">
        <div class="col-md-2">
            <label class="fw-bold required">Customized Type: </label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <select class="input js-mytooltip form-select f2f-customized-type @error('') is-invalid @enderror"
                        name="customized_type" id="" value="{{ old('customized_type') }}"
                        data-mytooltip-content="<i>
                                    Please Choose
                                    </i>"
                        data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                        <option value="Hybrid" {{ old('') == 'Hybrid' ? 'selected="selected"' : '' }}>Hybrid
                        </option>
                        <option value="Virtual" {{ old('') == 'Virtual' ? 'selected="selected"' : '' }} selected>
                            Virtual
                        </option>
                        <option value="G.A Hybrid" {{ old('') == 'G.A Hybrid' ? 'selected="selected"' : '' }}>
                            G.A Hybrid</option>
                        <option value="G.A Virtual" {{ old('') == 'G.A Virtual' ? 'selected="selected"' : '' }}>G.A
                            Virtual
                        </option>
                        <option value="Team Journeys" {{ old('') == 'Team Journeys' ? 'selected="selected"' : '' }}>
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
        <div class="col-md-2" id="f2f-dropdown-ga" style="visibility: hidden;">
            <select class="input js-mytooltip ga-only-dropdown form-select @error('') is-invalid @enderror"
                name="ga_percent" id="ga-only-dropdown" value="{{ old('') }}"
                data-mytooltip-content="<i>
                            Please Choose 0% if not G.A
                            </i>"
                data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
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

    <!------------ CLIENT NAME ------------>
    <div class="form-group row">
        <div class="col-md-2">
            <label class="fw-bold required">Client: </label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <select class="select select2s-hidden-accessible" style="width: 100%;" tabindex="-1"
                        aria-hidden="true" id="client" name="client_id">
                        <option value="Select">-- Select --</option>
                        @foreach ($companyList as $key => $clients)
                            <option value="{{ $clients->id }}" data-first_eng={{ $clients->first_eng }}>
                                {{ $clients->company_name }}</option>
                        @endforeach
                    </select>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-clients"></i>
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
    
    <!------------ ENGAGEMENT TITLE AND NUMBER OF PAX ------------>
    <div class="form-group row">
        <div class="col-md-2">
            <label class="fw-bold required">Engagement Title: </label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="engagement_title" id="">
                    <div class="form-control-icon">
                        <i class="fa-solid fa-t"></i>
                    </div>
                    @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-2 g-2">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Pilot</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label class="fw-bold required">Number of pax </label>
        </div>

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="number" class="form-control @error('pax_number') is-invalid @enderror"
                        value="{{ old('pax_number') }}" name="pax_number" id="pax_number" min="0"
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

    <!------------ TO BE ANNOUNCE ------------>
    <div class="row">
        <div class="col-md-2">
            <label class="fw-bold required">Date </label>
        </div>

        <div class="col-md-2">
            <div class="form-check form-switch mt-1">
                <input class="form-check-input" type="checkbox" role="switch" id="dcbeCheck">
                <label class="form-check-label" for="dcbeCheck">To Be Announced</label>
            </div>
        </div>
    </div>

    <!------------ DATE COVERED BY ENGAGEMENT ------------>
    <div class="row justify-content-center mt-3" id="dcbe">
        <h5 class="text-center mt-5 fst-italic">Date Covered by Engagement</h5>
        <div class="d-flex justify-content-center mt-4" id="dateRows1">

            <div class="flex-column">
                <div>
                    <fieldset class="row justify-content-center" id="dateRows">
                        {{-- <div class="col-lg-1 col-md-1">
                            <div class="px-0">
                                    <label class="fw-bold invisible overflow-hidden mb-4">Add</label>
                                    <a href="javascript:void(0)" class="text-success font-18 px-0" title="Add"
                                    id="addDates"><i class="fa fa-plus"></i></a>
                            </div>
                        </div> --}}

                        <div class="col-lg-2 col-md-2">
                            <div class="form-group has-icon-left">
                                <label class="fw-bold required">Date</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror"
                                        value="{{ old('doe') }}" placeholder="Enter Date" name="program_dates" id="datepicker"
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
                                        value="{{ old('dot') }}" placeholder="Enter Time" id="program_start_time" name="program_start_time">
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
                                        value="{{ old('dot') }}" placeholder="Enter Time" id="program_end_time" name="program_end_time">
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
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2s-hidden-accessible').select2({
            // closeOnSelect: false
            placeholder: 'Enter Client',
            tags: true,
        });
    });

    //INFORMATION
    $('document').ready(function() {
        /*************************************STATUS**************************************/
        //DEFAULT COLOR
        $('#status').css('background-color', '#007bff')
        $('#status').css('color', 'white')
        $('#status option').css('background-color', 'white')
        $('#status option').css('color', 'black')

        //ASSIGN EVENT LISTENER IN STATUS
        document.getElementById("status").addEventListener("change", status);

        //EVENT OF STATUS
        function status() {
            var status = document.getElementById("status").value;
            if(status == "Confirmed"){
                $('#status').css('background-color', '#007bff')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            } else if(status == "In-progress"){
                $('#status').css('background-color', '#ffc107')
                $('#status').css('color', 'black')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            } else if(status == "Completed"){
                $('#status').css('background-color', '#28a745')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            } else if(status == "Lost"){
                $('#status').css('background-color', '#dc3545')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            } else if(status == "Trial"){
                $('#status').css('background-color', '#17a2b8')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            }
        };
    });

    //DATE OF ENGAGEMENT
    $('document').ready(function() {
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
                                    <label class="fw-bold invisible mb-4">Add</label>
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
