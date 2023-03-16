<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Update Consultant Fees</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <form> --}}

            {{-- Start Insert Client --}}
            {{-- <div class="col-12"> --}}
                {{-- <div class="card"> --}}
                    {{-- <div class="card-content"> --}}
                        <div class="modal-body">
                            {{-- <form method="POST" action="form/consultant-fees" class="form form-horizontal"
                                enctype="multipart/form-data" autocomplete="off" id="editForm">
                                @csrf
                                @method('PUT') --}}

                                <div class="form-group row justify-content-center">
                                    <label hidden for="edit_consultant_id" class="col-md-3 col-form-label">ID:</label>
                                    <div class="col-md-3">
                                    <input type="hidden" class="form-control" id="edit_consultant_id" placeholder="" name="id">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputFname" class="col-md-3 col-form-label">First Name</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_fname" placeholder="" name="first_name">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputLname" class="col-md-3 col-form-label">Last Name</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_lname" placeholder="" name="last_name">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputLeadFaci" class="col-md-3 col-form-label">Lead Facilitator</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_lead_facilitator" placeholder="" data-type="currency" name="lead_faci">
                                    </div>
                                    {{-- <div class="col-md-3"></div> --}}
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputCoLead" class="col-md-3 col-form-label">Co-Lead</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_co_lead" placeholder="" data-type="currency"  name="co_lead">
                                    </div>
                                </div>


                                <div class="form-group row justify-content-center">
                                    <label for="inputCoLeadF2f" class="col-md-3 col-form-label">Co-Lead F2F</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_co_lead_f2f" placeholder="" data-type="currency" name="co_lead_f2f">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputCoFaci" class="col-md-3 col-form-label">Co-Faci</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_co_faci" placeholder="" data-type="currency" name="co_faci">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputLeadConsultant" class="col-md-3 col-form-label">Lead Consultant</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_lead_consultant" placeholder="" data-type="currency" name="lead_consultant">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputConsulting" class="col-md-3 col-form-label">Consulting</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_consulting" placeholder="" data-type="currency" name="consulting">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputDesigner" class="col-md-3 col-form-label">Designer</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_designer" placeholder="" data-type="currency" name="designer">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputModerator" class="col-md-3 col-form-label">Moderator</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_moderator" placeholder="" data-type="currency" name="moderator">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputProducer" class="col-md-3 col-form-label">Producer</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="edit_producer" placeholder="" data-type="currency" name="producer">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>

                            {{-- </form> --}}
                        </div>
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
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
            placeholder: 'Enter Client',
            tags: true,
        });
    });
</script>
