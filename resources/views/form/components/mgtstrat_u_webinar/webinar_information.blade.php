<div class="card-header">
    <h4 class="card-title" style="display: inline;">Information</h4>
    <div style="float:right">
        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
        @if($parentInfoList)                                                    
            <button class="btn btn-success mx-0 js-btn-next" type="button" title="Submit" onclick="validate_required_field();">Save</button>   
        @else
            <button class="btn btn-success mx-0 js-btn-next" type="button" title="Submit" onclick="validate_required_field()">Submit</button>
        @endif
    </div>
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
            <label class="fw-bold required">Engagement Type: </label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <select class="form-select" name="customized_type" id="customized_type">
                        @foreach ($coreArea as $coreArea_data)                                                            
                            <option>{{$coreArea_data->core_area_name}}</option>
                        @endforeach
                        <option value="Virtual"> Virtual </option>
                        <option value="Hybrid">Hybrid </option>
                        <option value="FACE-TO-FACE"> FACE-TO-FACE </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-2" id="webinar-dropdown-ga" style="visibility: hidden;">
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
                        aria-hidden="true" id="client_id" name="client_id" required>
                        <option value="">-- Select --</option>
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
                    <span class="invalid-feedback" id="invalid-feedback-custom" role="alert"></span>
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
                    <!-- <input type="text" class="form-control @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="engagement_title" id="engagement_title" required> -->
                    <select class="input js-mytooltip form-select f2f-customized-type @error('') is-invalid @enderror"
                    name="engagement_title" value="" onchange="get_cluster_intelligence()" id="engagement_title" required>
                        <option value="- NOT LISTED -">- NOT LISTED -</option>
                        @foreach ($engagementTitleList as $key => $title)
                            <option value="{{ $title->title }}">{{ $title->title }}</option>
                        @endforeach
                    </select>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-t"></i>
                    </div>
                    @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="text" class="mt-2 form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="engagement_title_not_listed" id="engagement_title_not_listed" placeholder="Enter Engagement Title">
            </div>
        </div>
        <!-- NEED TO COMMENT OUT -->
        <!-- <div class="col-md-2 g-2">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Pilot</label>
            </div>
        </div> -->
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
                        oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" required>
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

    <!------------ NUMBER OF BATCHES AND SESSION ------------>
    <div class="form-group row" id="strt_batchNumber">
        <div class="col-md-2">
            <label class="fw-bold required">Start of Batch Number </label>
        </div>

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="number" class="form-control @error('start_batch_number') is-invalid @enderror"
                        value="{{ old('start_batch_number') }}" name="start_batch_number" id="str_BatchNumber" placeholder="Enter # of Batches" min="0"
                        oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" required>
                    <div class="form-control-icon">
                        <i class="fa-regular fa-calendar-days"></i>
                    </div>
                    @error('start_batch_number')
                        <span class="invalid-feedback" role="alert">
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label class="fw-bold required">Number of Batches </label>
        </div>

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="number" class="form-control @error('batch_number') is-invalid @enderror"
                        value="{{ old('batch_number') }}" name="batch_number" id="BatchNumber" placeholder="Enter # of Batches" min="0"
                        oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" required>
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
                        oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" required>
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

    <!------------ DATE COVERED BY ENGAGEMENT ------------>
    <h5>Date Covered by Engagement</h5>
    <div class="row mb-5" id="dcbe">
        
        <div class="d-flex" id="dateRows1">
            <div class="flex-column mt-3">
                <div>
                    <fieldset class="row" id="dateRows">

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
                                <label class="fw-bold">Start Time</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control start-time timepicker @error('program_start_time') is-invalid @enderror"
                                        value="{{ old('program_start_time') }}" placeholder="Enter Time" id="program_start_time" name="program_start_time">
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
                                        value="{{ old('program_end_time') }}" placeholder="Enter Time" id="program_end_time" name="program_end_time">
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
                                        <input type="text" class="form-control cluster" value="{{ old('cluster') }}" placeholder="Cluster" id="cluster" name="cluster">
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
                                        <input type="text" class="form-control core_area" value="{{ old('core_area') }}" placeholder="Intelligence" id="core_area" name="core_area">
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
    <!------------------- END ----------------------->
<!------------ END ------------>    
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@if($parentInfoList)
    <script>
        document.getElementById('status').value = '{{ $parentInfoList->status }}';
        document.getElementById('customized_type').value = '{{ $parentInfoList->customized_type }}';
        document.getElementById('client_id').value = '{{ $parentInfoList->client_id }}';
        document.getElementById('engagement_title').value = '{{ $parentInfoList->engagement_title }}'.replaceAll('&#039;','\'');
        document.getElementById('pax_number').value = '{{ $parentInfoList->pax_number }}';
        document.getElementById('BatchNumber').value = '{{ $parentInfoList->batch_number }}';
        document.getElementById('SessionNumber').value = '{{ $parentInfoList->session_number }}';
        document.getElementById('program_venue').value = '{{ $parentInfoList->venue }}';
        document.getElementById('program_start_time').value = '{{ $parentInfoList->program_start_time }}';
        document.getElementById('program_end_time').value = '{{ $parentInfoList->program_end_time }}';

        document.getElementById('strt_batchNumber').style.display = 'none';
        document.getElementById('str_BatchNumber').removeAttribute('required');
        document.getElementById('BatchNumber').readOnly = true;
        document.getElementById('SessionNumber').readOnly = true; 

        if (document.getElementById('engagement_title').value == '- NOT LISTED -') {
            document.getElementById('cluster').value = '';
            document.getElementById('core_area').value = '';
            document.getElementById('cluster').readOnly = false;
            document.getElementById('core_area').readOnly = false;
            document.getElementById('engagement_title_not_listed').required = true;
            $('#engagement_title_not_listed').val('');
            $('#engagement_title_not_listed').removeClass('d-none');
            document.getElementById('engagement_title_not_listed').value = '{{ $parentInfoList->engagement_title_not_listed }}';
        } else {
            $('#engagement_title_not_listed').addClass('d-none');
            $('#engagement_title_not_listed').val('');
            document.getElementById('cluster').readOnly = true;
            document.getElementById('core_area').readOnly = true;
            document.getElementById('engagement_title_not_listed').required = false;
        }
        
        document.getElementById('cluster').value = '{{ $parentInfoList->cluster }}'.replaceAll('amp;','');
        document.getElementById('core_area').value = '{{ $parentInfoList->intelligence }}'.replaceAll('amp;','');
    </script>
@endif

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

    function get_cluster_intelligence() {

if ($('#engagement_title').val() == '- NOT LISTED -') { 
    return notListed();
} else {
    $('#engagement_title_not_listed').addClass('d-none');
    $('#engagement_title_not_listed').val('');
    document.getElementById('cluster').readOnly = true;
    document.getElementById('core_area').readOnly = true;
    document.getElementById('engagement_title_not_listed').required = false;
}

var formData = {
    title: $('#engagement_title').val()
};
var type = "GET";
var ajaxurl = '{{ route("form/workshopEngagement/get_cluster_intelligence") }}';
console.log(formData);
$.ajax({
    type: type,
    url: ajaxurl,
    data: formData,
    dataType: 'json',
    success: function (data) {
        if (data.length > 0) {
            for (const res of data) {
                document.getElementById('cluster').value = res['cluster_name'];
                document.getElementById('core_area').value = res['intelligence_name'];
            }
        } else {
            document.getElementById('cluster').value = '';
            document.getElementById('core_area').value = '';
        }
    },
    error: function (data) {
        console.log(data);
    }
});
}

function notListed() {
document.getElementById('cluster').value = '';
document.getElementById('core_area').value = '';
document.getElementById('cluster').readOnly = false;
document.getElementById('core_area').readOnly = false;
document.getElementById('engagement_title_not_listed').required = true;
$('#engagement_title_not_listed').val('');
$('#engagement_title_not_listed').removeClass('d-none');
}
</script>
