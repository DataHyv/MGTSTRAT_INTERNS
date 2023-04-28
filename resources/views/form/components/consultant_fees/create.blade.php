<!-- Modal -->
<div class="modal fade" id="ConsultantFeesModal" tabindex="-1" aria-labelledby="ConsultantFeesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="ConsultantFeesModalLabel">Create Consultant Fees</h5>
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
                            <form method="POST" action="{{ url('form/consultant-fees') }}" class="form form-horizontal"
                                enctype="multipart/form-data" autocomplete="off" id="createForm">
                                @csrf

                                <div class="form-group row justify-content-center">
                                    <label for="inputFname" class="col-md-3 col-form-label">First Name</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="" placeholder="" name="first_name">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputLname" class="col-md-3 col-form-label">Last Name</label>
                                    <div class="col-md-8">
                                    <input type="text" class="form-control" id="" placeholder="" name="last_name">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputLeadFaci" class="col-md-3 col-form-label">Lead Facilitator</label>
                                    <div class="col-md-8">
                                    <input type="number" class="form-control" id="CFI1" placeholder="" name="lead_faci" oninput="(()=>{document.querySelector('#CFI2').value=(Number(document.querySelector('#CFI1').value)*0.6).toString();document.querySelector('#CFI3').value=(Number(document.querySelector('#CFI1').value)*0.4).toString();document.querySelector('#CFI4').value=(Number(document.querySelector('#CFI1').value)*0.85).toString();document.querySelector('#CFI5').value=(Number(document.querySelector('#CFI1').value)*0.75).toString();document.querySelector('#CFI6').value=(Number(document.querySelector('#CFI1').value)*0.75).toString();document.querySelector('#CFI8').value=((Number(document.querySelector('#CFI1').value)*0.725)+Number(document.querySelector('#CFI7').value)).toString();document.querySelector('#CFI9').value=(Number(document.querySelector('#CFI1').value)*1.325).toString();})()">
                                    </div>
                                    {{-- <div class="col-md-3"></div> --}}
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputCoFaci" class="col-md-3 col-form-label">Co-Faci</label>
                                    <div class="col-md-8">
                                    <input type="number" class="form-control" id="CFI2" placeholder="" name="co_faci" disabled>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputMarshal" class="col-md-3 col-form-label">Marshal</label>
                                    <div class="col-md-8">
                                    <input type="number" class="form-control" id="CFI3" placeholder="" name="marshal" disabled>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputLeadConsultant" class="col-md-3 col-form-label">Lead Consultant</label>
                                    <div class="col-md-8">
                                    <input type="number" class="form-control" id="CFI4" placeholder="" name="lead_consultant" disabled>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputConsulting" class="col-md-3 col-form-label">Consulting Support</label>
                                    <div class="col-md-8">
                                    <input type="number" class="form-control" id="CFI5" placeholder="" name="consulting" disabled>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputDesigner" class="col-md-3 col-form-label">Designer</label>
                                    <div class="col-md-8">
                                    <input type="number" class="form-control" id="CFI6" placeholder="" name="designer" disabled>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputModerator" class="col-md-3 col-form-label">Moderator</label>
                                    <div class="col-md-8">
                                        <div>
                                            <label style="margin-right: 8px;">
                                            <input type="radio" id="associate-level" name="mod_opt" value="Associate level" checked onclick="(()=>{document.querySelector('#CFI7').value='800';if(document.querySelector('#CFI1').value!='')document.querySelector('#CFI8').value=((Number(document.querySelector('#CFI1').value)*0.725)+Number(document.querySelector('#CFI7').value)).toString();})()"> Associate level
                                            </label>
                                            <label style="margin-right: 8px;">
                                            <input type="radio" id="consultant" name="mod_opt" value="Consultant" onclick="(()=>{document.querySelector('#CFI7').value='1100';if(document.querySelector('#CFI1').value!='')document.querySelector('#CFI8').value=((Number(document.querySelector('#CFI1').value)*0.725)+Number(document.querySelector('#CFI7').value)).toString();})()"> Consultant
                                            </label>
                                            <label class="radio-inline">
                                            <input type="radio" id="sr-consultant" name="mod_opt" value="Sr. Consultant" onclick="(()=>{document.querySelector('#CFI7').value='1350';if(document.querySelector('#CFI1').value!='')document.querySelector('#CFI8').value=((Number(document.querySelector('#CFI1').value)*0.725)+Number(document.querySelector('#CFI7').value)).toString();})()"> Sr. Consultant
                                            </label>
                                        </div>
                                        <input type="number" class="form-control" id="CFI7" placeholder="" name="moderator" value="800" disabled>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputProducer" class="col-md-3 col-form-label">Producer</label>
                                    <div class="col-md-8">
                                    <input type="number" class="form-control" id="CFI10" placeholder="" name="producer" value="550" disabled>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="inputCoLead" class="col-md-3 col-form-label">Co-Lead</label>
                                    <div class="col-md-8">
                                    <input type="number" class="form-control" id="CFI8" placeholder=""  name="co_lead" disabled>
                                    </div>
                                </div>


                                <div class="form-group row justify-content-center">
                                    <label for="inputCoLeadF2f" class="col-md-3 col-form-label">Co-Lead F2F</label>
                                    <div class="col-md-8">
                                    <input type="number" class="form-control" id="CFI9" placeholder="" name="co_lead_f2f" disabled>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="(()=>{document.querySelector('#CFI2').disabled=false;document.querySelector('#CFI3').disabled=false;document.querySelector('#CFI4').disabled=false;document.querySelector('#CFI5').disabled=false;document.querySelector('#CFI6').disabled=false;document.querySelector('#CFI7').disabled=false;document.querySelector('#CFI10').disabled=false;document.querySelector('#CFI8').disabled=false;document.querySelector('#CFI9').disabled=false;document.querySelector('#createForm').submit();document.querySelector('#CFI2').disabled=true;document.querySelector('#CFI3').disabled=true;document.querySelector('#CFI4').disabled=true;document.querySelector('#CFI5').disabled=true;document.querySelector('#CFI6').disabled=true;document.querySelector('#CFI7').disabled=true;document.querySelector('#CFI10').disabled=true;document.querySelector('#CFI8').disabled=true;document.querySelector('#CFI9').disabled=true;})()">Save</button>
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
            // closeOnSelect: false
            placeholder: 'Enter Client',
            tags: true,
        });
    });
</script>
