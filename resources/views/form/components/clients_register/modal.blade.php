<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Register Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- Start Insert Client --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form method="POST" action="{{ route('client/add/save') }}" class="form form-horizontal"
                                enctype="multipart/form-data" autocomplete="off" id="registerIndustry">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Company Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control"
                                                        placeholder="Company Name" id="first-name-icon"
                                                        name="company_name" value="" required>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-building"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="status" id="status">
                                                        <option value="ACTIVE">Active</option>
                                                        <option value="INACTIVE">Inactive</option>
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-activity"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Sales Person</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder=""
                                                        name="sales_person" id="sales_person" value=""
                                                        oninput="filterConsultant('sales_person');"
                                                        list="filtered_consultant_list" autocomplete="off">
                                                    <input  type="hidden" value="" name="sales_person_id" id="sales_person_id">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-people"></i>
                                                    </div>
                                                    <div class="invalid-feedback">Unknown Sales Person</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Industry</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" placeholder=""
                                                        name="industry" id="industry" value=""
                                                        oninput="filterIndustry('industry')"
                                                        list="filtered_industry_list" autocomplete="off">
                                                <input  type="hidden" value="" name="industry_id" id="industry_id">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-building"></i>
                                                </div>
                                                <div class="invalid-feedback">Unknown Industry</div>
                                            </div>                                            
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Old/New</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="old_new" id="">                                                        
                                                        <option value="OLD">Old</option>
                                                        <option value="NEW">New</option>
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-archive"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>First Engagement</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="date" class="form-control"
                                                        placeholder="First Engagement" name="first_eng"
                                                        value="">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-calendar-event-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Latest Engagement</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="date" class="form-control"
                                                        placeholder="Second Engagement" name="latest_eng"
                                                        value="">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-calendar-event-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-2" onclick="validate_register_required_field()">Submit</button>
                                            <br>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End VInsert Client --}}

            <!-- AUTO COMPLETE -->
            <datalist id="filtered_consultant_list">
                @foreach ($consultantFee as $key => $feeData)
                    <option value="{{ $feeData->first_name }} {{ $feeData->last_name }}" data-id="{{$feeData->id}}">
                        {{ $feeData->first_name }} {{ $feeData->last_name }}
                    </option>
                @endforeach
            </datalist>          
            <datalist id="filtered_industry_list">
                @foreach ($industryList as $key => $data)
                    <option value="{{ $data->name }}" data-id="{{$data->id}}">
                        {{ $data->name }}
                    </option>
                @endforeach
            </datalist>
            <!-- END AUTO COMPLETE -->

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    var results = document.querySelector('#filtered_consultant_list');
    var templateContent = document.querySelector('#all_consultant_list').content;

    var industryResults = document.querySelector('#filtered_industry_list');
    var industryTemplateContent = document.querySelector('#all_industry_list').content;
    
    $(document).ready(function() {
        $('.select2s-hidden-accessible').select2({
            // closeOnSelect: false
            placeholder: 'Enter Client',
            tags: true,
        });
    });

    function filterConsultant(consultantField) {       
        var rosterValue = document.querySelector('#' + consultantField);
        var getFee = $('#filtered_consultant_list option[value="' + rosterValue.value + '"]');
        $('#' + consultantField + '_id').val(getFee.data('id'));
    }

    function filterIndustry(industryField) {        
        var industryValue = document.querySelector('#' + industryField);
        var getFee = $('#filtered_industry_list option[value="' + industryValue.value + '"]');
        $('#' + industryField + '_id').val(getFee.data('id'));
    }

    function validate_register_required_field() {
            // Get the forms we want to add validation styles to
            $('#sales_person_id').removeAttr('required');
            $('#industry_id').removeAttr('required');

            if ($('#sales_person').val() != ''  && $('#sales_person_id').val() == ''){
                $('#sales_person').val('');
                $('#sales_person').attr('required', '');
            }

            if ($('#industry').val() != '' && $('#industry_id').val() == ''){
                $('#industry').val('');
                $('#industry').attr('required', '');
            }
            
            var forms = document.getElementById('registerIndustry');
            if (forms.checkValidity() === false) {
                forms.classList.add('was-validated');
                event.preventDefault();
                event.stopPropagation();
            } else {
                forms.submit();
            }
        }
</script>
