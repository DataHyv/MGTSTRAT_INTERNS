<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <form> --}}

            {{-- Start Insert Client --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form method="POST" action="{{ route('client/add/save') }}" class="form form-horizontal"
                                enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Company Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control"
                                                        placeholder="Company Name" id="first-name-icon"
                                                        name="company_name" value="">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-building"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4">
                                <label>ID Number</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder=""
                                            name="cstmzd_eng_form_id" value="">
                                        <div class="form-control-icon">
                                            <i class="bi bi-123"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="status" id="status">
                                                        <option value="">...
                                                        </option>
                                                        <option value="ACTIVE">Active
                                                        </option>
                                                        <option value="INACTIVE">Inactive
                                                        </option>
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-activity"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Sales Person</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder=""
                                                        name="sales_person" value="">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-people"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Industry</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left">
                                                {{-- <div class="position-relative"> --}}
                                                <fieldset class="form-group">
                                                    <select class="form-select select select2s-hidden-accessible"
                                                        style="width: 100%;" tabindex="-1" aria-hidden="true"
                                                        id="industry" name="industry">
                                                        <option value="">...
                                                        </option>
                                                        <option value="Advertising">Advertising
                                                        </option>
                                                        <option value="Agro Industrial">Agro Industrial
                                                        </option>
                                                        <option value="Airline">Airline
                                                        </option>
                                                        <option value="Airport">Airport
                                                        </option>
                                                        <option value="Architechture and Design">Architechture and
                                                            Design
                                                        </option>
                                                        <option value="Association">Association
                                                        </option>
                                                        <option value="Automotive">Automotive
                                                        </option>
                                                        <option value="Banking">Banking
                                                        </option>
                                                        <option value="Banking and Finance">Banking and Finance
                                                        </option>
                                                        <option value="BPO">BPO
                                                        </option>
                                                        <option value="Chemical/Ingredients Manufacturer">
                                                            Chemical/Ingredients Manufacturer
                                                        </option>
                                                        <option value="Chemical/Ingredients Manufacturer">
                                                            Chemical/Ingredients Manufacturer
                                                        </option>
                                                        <option value="Church">Church
                                                        </option>
                                                        <option value="Construction">Construction
                                                        </option>
                                                        <option value="Consultancy">Consultancy
                                                        </option>
                                                        <option value="Data Analytics">Data Analytics
                                                        </option>
                                                        <option value="Distribution">Distribution
                                                        </option>
                                                        <option value="Distributor">Distributor
                                                        </option>
                                                        <option value="E Commerce Marketing/ Tech Solution">E Commerce
                                                            Marketing/ Tech Solution
                                                        </option>
                                                        <option value="Education">Education
                                                        </option>
                                                        <option value="Electronics">Electronics
                                                        </option>
                                                        <option value="Embassy">Embassy
                                                        </option>
                                                        <option value="Events">Events
                                                        </option>
                                                        <option value="Fast Food">Fast Food
                                                        </option>
                                                        <option value="Finance Tech">Finance Tech
                                                        </option>
                                                        <option value="Financial Svcs & Digital Payments">Financial Svcs
                                                            & Digital Payments
                                                        </option>
                                                        <option value="FMCG">FMCG
                                                        </option>
                                                        <option value="Food">Food
                                                        </option>
                                                        <option value="Foundation">Foundation
                                                        </option>
                                                        <option value="Government">Government
                                                        </option>
                                                        <option value="Healthcare">Healthcare
                                                        </option>
                                                        <option value="HMO">HMO
                                                        </option>
                                                        <option value="Home Appliance">Home Appliance
                                                        </option>
                                                        <option value="Hospitality">Hospitality
                                                        </option>
                                                        <option value="Incubator">Incubator
                                                        </option>
                                                    </select>
                                                </fieldset>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-building"></i>
                                                </div>
                                                {{-- </div> --}}
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Old/ New</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="old_new" id="">
                                                        <option value="">...
                                                        </option>
                                                        <option value="OLD">Old
                                                        </option>
                                                        <option value="NEW">New
                                                        </option>
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-archive"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
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
                                            <button type="submit" class="btn btn-primary mr-2">Save</button>
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

            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button> --}}

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
</script>
