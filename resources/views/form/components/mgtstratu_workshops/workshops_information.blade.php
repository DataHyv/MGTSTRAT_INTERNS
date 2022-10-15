{{-- datepicker css --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
{{-- tooltip css --}}
<link rel="stylesheet" href="{{ url('css/tooltip-css/jquery.mytooltip.min.css') }}">
{{--
<link rel="stylesheet" href="{{ url('css/tooltip-css/demo/style.css') }}"> --}}
{{-- datepicker js --}}
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
{{-- tooltip js --}}
{{-- <script src="{{ url('js/tooltipJs/jquery-1.11.3.min.js') }}"></script> --}}
<script src="{{ url('js/tooltipJs/jquery.mytooltip.js') }}"></script>
<script src="{{ url('js/tooltipJs/demo/script.js') }}"></script>

{{-- p --}}
<div class="card-header">
    <h4 class="card-title">Information</h4>
</div>
<div class="form-body container">
    <div class="form-group row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-2" id="dropdown-ga" style="visibility: hidden;">
        </div>

        <div class="col-md-3">
            <label class="fw-bold required">Client: </label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="fourth" title="asdasdasd">
                    <div class="form-control-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    @error('')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label class="fw-bold required">Engagement Title: </label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="">
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

        <div class="col-md-3">
            <label class="fw-bold required">MGTSTRAT-U Workshop Title</label>
        </div>
        <div class="col-md-4">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="" id="Mgtstrat-U-Titles" data-mytooltip-content="<i>
                            If not on the list, choose suggested cluster title at Core Area.
                            </i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                            <option id="not-listed" value="Not Listed" selected>-- Not listed --</option>
                            <option id="mindfullness" class="mindfulness" value="A Case for Mindfulness: A Strategic Approach to Stress" {{
                                old('')=='A Case for Mindfulness: A Strategic Approach to Stress'
                                ? 'selected="selected"' : '' }}>
                                A Case for Mindfulness: A Strategic Approach to Stress
                            </option>
                            <option value="ABC's of Gen XYZ">
                                ABC's of Gen XYZ
                            </option>
                            <option value="Activating the Growth Mindset">
                                Activating the Growth Mindset
                            </option>
                            <option value="Brand Called You">
                                Brand Called You
                            </option>
                            <option value="Anxiety Parties">
                                Anxiety Parties
                            </option>
                            <option value="Choose Your Own Adventure">
                                Choose Your Own Adventure
                            </option>
                            <option value="Co-operative Power and the Willingness to Resolve">
                                Co-operative Power and the Willingness to Resolve
                            </option>
                            <option value="Collaboration on the Fly">
                                Collaboration on the Fly
                            </option>
                            <option value="Creating Digital Bonds (Collborative Leadership)">
                                Creating Digital Bonds (Collborative Leadership)
                            </option>
                            <option value="Creative Thinking in the Workplace">
                                Creative Thinking in the Workplace
                            </option>
                            <option value="Culture Driven Team Building">
                                Culture Driven Team Building
                            </option>
                            <option value="Deep Dive: Psychological Resilience">
                                Deep Dive: Psychological Resilience
                            </option>
                            <option value="Deep Dive: The Role of Positive Emotions">
                                Deep Dive: The Role of Positive Emotions
                            </option>
                            <option value="Deep Diving with Strengths">
                                Deep Diving with Strengths
                            </option>
                            <option value="Designing Slides for Non-Designers">
                                Designing Slides for Non-Designers
                            </option>
                            <option value="Designing Virtual Learning">
                                Designing Virtual Learning
                            </option>
                            <option value="Developing the Growth Mindset">
                                Developing the Growth Mindset
                            </option>
                            <option value="Effective Virtual Communication">
                                Effective Virtual Communication
                            </option>
                            <option value="Everyday Workplace Innovation">
                                Everyday Workplace Innovation
                            </option>
                            <option value="Facilitating Virtual Learning">
                                Facilitating Virtual Learning
                            </option>
                            <option value="Facilitating Virtual Meetings">
                                Facilitating Virtual Meetings
                            </option>
                            <option value="Feedback with Candor (Feedback)">
                                Feedback with Candor (Feedback)
                            </option>
                            <option value="Feedback with Candor (Radical Candor)">
                                Feedback with Candor (Radical Candor)
                            </option>
                            <option value="Find Your Why">
                                Find Your Why
                            </option>
                            <option value="Foundations of Conflict Resolution">
                                Foundations of Conflict Resolution
                            </option>
                            <option value="Foundations of Strategic Agility">
                                Foundations of Strategic Agility
                            </option>
                            <option value="Foundations of Strengths Based Development">
                                Foundations of Strengths Based Development
                            </option>
                            <option value="Fundamentals of Collaboration">
                                Fundamentals of Collaboration
                            </option>
                            <option value="Future Proof Leadership">
                                Future Proof Leadership
                            </option>
                            <option value="Future-Backwards">
                                Future-Backwards
                            </option>
                            <option value="Game Nights">
                                Game Nights
                            </option>
                            <option value="Giving and Receiving Feedback">
                                Giving and Receiving Feedback
                            </option>
                            <option value="Graphic Gameplanning">
                                Graphic Gameplanning
                            </option>
                            <option value="Heroes Assemble">
                                Heroes Assemble
                            </option>
                            <option value="Inclusion is your Competitive Advantage">
                                Inclusion is your Competitive Advantage
                            </option>
                            <option value="Just Say &quot;Yes, And&quot; to Improv">
                                Just Say "Yes, And" to Improv
                            </option>
                            <option value="Leading Hybrid Teams">
                                Leading Hybrid Teams
                            </option>
                            <option value="Leading Virtual Teams">
                                Leading Virtual Teams
                            </option>
                            <option value="Leading with Emotional Intelligence">
                                Leading with Emotional Intelligence
                            </option>
                            <option value="Leading with the Growth Mindset">
                                Leading with the Growth Mindset
                            </option>
                            <option value="Lip Sync Battle">
                                Lip Sync Battle
                            </option>
                            <option value="Live Your Why">
                                Live Your Why
                            </option>
                            <option value="Magic of Habits">
                                Magic of Habits
                            </option>
                            <option value="Making Emotional Intelligence Visible">
                                Making Emotional Intelligence Visible
                            </option>
                            <option value="Managing Relationship thru EI">
                                Managing Relationship thru EI
                            </option>
                            <option value="Mapping the Conflict and Design Options">
                                Mapping the Conflict and Design Options
                            </option>
                            <option value="Mental Health Foundations">
                                Mental Health Foundations
                            </option>
                            <option value="Points of You">
                                Points of You
                            </option>
                            <option value="Power of Influence">
                                Power of Influence
                            </option>
                            <option value="Productivity Sprint: Designing your Flow State">
                                Productivity Sprint: Designing your Flow State
                            </option>
                            <option value="Productivity Sprint: Flow State on Demand">
                                Productivity Sprint: Flow State on Demand
                            </option>
                            <option value="Riding the Wave">
                                Riding the Wave
                            </option>
                            <option value="Secret Ingredient to High Performing Teams">
                                Secret Ingredient to High Performing Teams
                            </option>
                            <option value="Squid Games">
                                Squid Games
                            </option>
                            <option value="The Emotional Agility Toolbox">
                                The Emotional Agility Toolbox
                            </option>
                            <option value="The Heist">
                                The Heist
                            </option>
                            <option value="The Lab">
                                The Lab
                            </option>
                            <option value="The Power of Yet (Growth MIndset)">
                                The Power of Yet (Growth MIndset)
                            </option>
                            <option value="Time and Energy Management: Rethinking our Productivity Models">
                                Time and Energy Management: Rethinking our Productivity Models
                            </option>
                            <option value="Unconscious Bias">
                                Unconscious Bias
                            </option>
                            <option value="Virtual Teaming">
                                Virtual Teaming
                            </option>
                            <option value="Win over Anxiety: Addressing the Worrisome Thoughts in your Head">
                                Win over Anxiety: Addressing the Worrisome Thoughts in your Head
                            </option>
                            <option value="Work from Home Essentials">
                                Work from Home Essentials
                            </option>
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>
                        @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="col-md-4" id="div-notListed">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="input-notListed" disabled>
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

        <div class="col-md-3">
            <label class="fw-bold required">CLUSTER</label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="form-select @error('') is-invalid @enderror" name="" id="cluster" disabled>
                            <option value="" selected></option>
                            <option value="Mindfullness">Mindfullness</option>
                            <option value="Capability">Capability</option>
                            <option value="Leadership">Leadership</option>
                            <option value="Social">Social</option>
                            <option value="Strategy">Strategy</option>
                            <option value="Teams">Teams</option>
                        </select>
                    </fieldset>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-circle-nodes"></i>
                    </div>
                    @error('')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label class="fw-bold required">INTELLIGENCE:</label>
        </div>
        <div class="col-md-8">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    {{-- <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}"
                    name="" id="core-valueInput" disabled> --}}
                    <fieldset class="form-group">
                        <select class="form-select @error('') is-invalid @enderror" name="" id="core-valueInput" disabled>
                            <option value="Culture" selected>Culture</option>
                            <option value="Capability">Capability</option>
                            <option value="Leadership">Leadership</option>
                            <option value="Social">Social</option>
                            <option value="Strategy">Strategy</option>
                            <option value="Teams">Teams</option>
                        </select>
                    </fieldset>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-circle-nodes"></i>
                    </div>
                    @error('')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label class="fw-bold required">Number of pax </label>
        </div>

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="number" class="form-control @error('pax_number') is-invalid @enderror" value="{{ old('pax_number') }}" name="pax_number" id="pax_number" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
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

        <div class="row">
            <div class="col-md-3">
                <label class="fw-bold required">Date Covered by Engagement </label>
            </div>

            <div class="col-md-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="dcbeCheck">
                    <label class="form-check-label" for="dcbeCheck">To Be Announced</label>
                </div>
            </div>
        </div>

        <div class="row justify-content-center g-3 gx-5" id="dcbe">
            <h6 class="text-center mt-3 fst-italic">Date</h3>
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold required">Date</label>
                    <div class="position-relative">
                        <input type="text" class="form-control datepicker @error('doe') is-invalid @enderror" value="{{ old('doe') }}" placeholder="Enter Date" name="doe" id="datepicker" size="30">
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
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold required">Start Time</label>
                    <div class="position-relative">
                        <input type="time" class="form-control @error('dot') is-invalid @enderror" value="{{ old('dot') }}" placeholder="Enter Time" name="dot">
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
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold required">End Time</label>
                    <div class="position-relative">
                        <input type="time" class="form-control @error('dot') is-invalid @enderror" value="{{ old('dot') }}" placeholder="Enter Time" name="dot">
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
        </div>

    </div>
</div>
<script>
    // var titles = $('#Mgtstrat-U-Titles').val();
    document.getElementById('Mgtstrat-U-Titles').addEventListener("change", titles);
    function titles() {
        if($('#mindfullness').is(':selected')){
            $('#cluster').val('Mindfullness');
        }
        else{
            $('#cluster').val('');
        }
    }
</script>
