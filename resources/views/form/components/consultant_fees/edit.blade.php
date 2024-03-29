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
                            <form method="POST" action="{{ url('form/consultant-fees/update') }}" class="form form-horizontal"
                                enctype="multipart/form-data" autocomplete="off" id="editForm">
                                @csrf
                                <input type="hidden" id="EFI0" name="id">
                                <div class="form-group row justify-content-center">
                                    <label for="inputFname" class="col-md-3 col-form-label">First Name</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="EFI1" placeholder="" name="first_name">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputLname" class="col-md-3 col-form-label">Last Name</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="EFI2" placeholder="" name="last_name">
                                    </div>
                                </div>

                                <div class="hr-sect text-secondary mb-3 mt-4"> <small><i>Hourly Rate</i></small> </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputLeadFaci" class="col-md-3 col-form-label">Lead Facilitator</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="EFI3" placeholder="" data-type="currency" name="lead_faci" 
                                    oninput="computeConsultantFees_update();" onblur="formatCurrency(this);">
                                    </div>
                                    {{-- <div class="col-md-3"></div> --}}
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputCoFaci" class="col-md-3 col-form-label">Co-Facilitator</label>
                                    <div class="col-md-8">
                                    <input readonly type="text" class="form-control" id="EFI6" placeholder="" data-type="currency" name="co_faci">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputMarshal" class="col-md-3 col-form-label">Marshal</label>
                                    <div class="col-md-8">
                                    <input readonly type="text" class="form-control" id="EFI12" placeholder="" data-type="currency" name="marshal">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputLeadConsultant" class="col-md-3 col-form-label">Lead Consultant</label>
                                    <div class="col-md-8">
                                    <input readonly type="text" class="form-control" id="EFI7" placeholder="" data-type="currency" name="lead_consultant">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputConsulting" class="col-md-3 col-form-label">Consulting</label>
                                    <div class="col-md-8">
                                    <input readonly type="text" class="form-control" id="EFI8" placeholder="" data-type="currency" name="consulting">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputDesigner" class="col-md-3 col-form-label">Designer</label>
                                    <div class="col-md-8">
                                    <input readonly type="text" class="form-control" id="EFI9" placeholder="" data-type="currency" name="designer">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputModerator" class="col-md-3 col-form-label">Moderator</label>
                                    <div class="col-md-8">    
                                    <div>
                                        <label style="margin-right: 8px;
                                        ">
                                        <input type="radio" id="associatelevel" name="mod_opt_update" value="Associate level" onclick="
                                        (()=>{
                                            document.querySelector('#EFI10').value = '800.00';
                                            if (document.querySelector('#EFI3').value != ''){
                                                computeConsultantFees_update();
                                            }
                                        })()"> Associate level
                                        </label>
                                        <label style="margin-right: 8px;
                                        ">
                                        <input type="radio" id="consultant_update" name="mod_opt_update" value="Consultant" onclick="
                                        (()=>{
                                            document.querySelector('#EFI10').value = '1,100.00';
                                            if (document.querySelector('#EFI3').value != '') {
                                                computeConsultantFees_update();
                                            }
                                        })()"> Consultant
                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" id="srconsultant" name="mod_opt_update" value="Sr. Consultant" onclick="
                                        (()=>{
                                            document.querySelector('#EFI10').value = '1,350.00';
                                            if(document.querySelector('#EFI3').value != '') {
                                                computeConsultantFees_update();
                                            }
                                        })()"> Sr. Consultant
                                        </label>
                                    </div>                                    
                                        <input readonly type="text" class="form-control" id="EFI10" placeholder="" data-type="currency" name="moderator">
                                    </div>
                                </div>

                                <!-- <div class="form-group row justify-content-center d-none">
                                    <label for="inputModOpt" class="col-md-3 col-form-label">Moderator option</label>
                                    <div class="col-md-8">
                                    <input readonly type="text" class="form-control" id="EFI13" placeholder="" name="mod_opt">
                                    </div>
                                </div> -->

                                <div class="form-group row justify-content-center">
                                    <label for="inputProducer" class="col-md-3 col-form-label">Producer</label>
                                    <div class="col-md-8">
                                    <input readonly type="text" class="form-control" id="EFI11" placeholder="" data-type="currency" name="producer">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputCoLead" class="col-md-3 col-form-label">Co-Lead Virtual</label>
                                    <div class="col-md-8">
                                    <input readonly type="text" class="form-control" id="EFI4" placeholder="" data-type="currency"  name="co_lead">
                                    </div>
                                </div>


                                <div class="form-group row justify-content-center">
                                    <label for="inputCoLeadF2f" class="col-md-3 col-form-label">Co-Lead F2F</label>
                                    <div class="col-md-8">
                                    <input readonly type="text" class="form-control" id="EFI5" placeholder="" data-type="currency" name="co_lead_f2f">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>

                            </form>
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
