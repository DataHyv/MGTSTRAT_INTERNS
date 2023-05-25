{{-- datepicker css --}}
{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> --}}

{{-- tooltip css --}}
{{-- <link rel="stylesheet" href="{{ url('css/tooltip-css/jquery.mytooltip.min.css') }}"> --}}

{{-- datepicker js --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> --}}

{{-- tooltip js --}}
{{-- <script src="{{ url('js/tooltipJs/jquery.mytooltip.js') }}"></script>
<script src="{{ url('js/tooltipJs/demo/script.js') }}"></script> --}}

{{-- p --}}
<div class="card-header mb-5">
    <h4 class="card-title">Information</h4>
</div>

<div class="form-body container">

    <div class="form-group row">

        <div class="col-md-10">
        </div>

        <div class="col-md-2" id="dropdown-ga" style="visibility: hidden;">
        </div>

        <div class="col-md-3">
            <label class="fw-bold required">Client: </label>
        </div>

        <div class="col-md-7">
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
            <label class="fw-bold required">Engagement Type: </label>
        </div>

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="engagement_type" id="">
                        <option value="Capability">Capability</option>
                        <option value="Culture">Culture</option>
                        <option value="Leadership">Leadership</option>
                        <option value="Society">Society</option>
                        <option value="Strategy">Strategy</option>
                        <option value="Teams">Teams</option>
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

        <div class="col-md-5"></div>

        <div class="col-md-3">
            <label class="fw-bold required">Engagement Title: </label>
        </div>

        <div class="col-md-6">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="engagement_title" id="">
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
            <label class="fw-bold required">MGTSTRAT-U Webinar Title</label>
        </div>

        <div class="col-md-7">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="webinar_title" id="Mgtstrat-U-Titles" data-mytooltip-content="<i>
                            If not on the list, choose suggested cluster title at Core Area.
                            </i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                            <option class="not-listed" id="not-listed" value="Not Listed" selected>-- Not listed --</option>
                            <option class="mindfullness" id="mindfullness" value="A Case for Mindfulness: A Strategic Approach to Stress" {{
                                old('')=='A Case for Mindfulness: A Strategic Approach to Stress'
                                ? 'selected="selected"' : '' }}>
                                A Case for Mindfulness: A Strategic Approach to Stress
                            </option>
                            <option class="diversity-and-inclusion" id="" value="ABC's of Gen XYZ">
                                ABC's of Gen XYZ
                            </option>
                            <option class="growth-mindset" id="" value="Activating the Growth Mindset">
                                Activating the Growth Mindset
                            </option>
                            <option class="anxiety" id="" value="Anxiety Parties">
                                Anxiety Parties
                            </option>
                            <option class="leadership-brand" id="" value="Brand Called You">
                                Brand Called You
                            </option>
                            <option class="virtual-team-building" id="" value="Choose Your Own Adventure">
                                Choose Your Own Adventure
                            </option>
                            <option class="conflict-resolution" id="" value="Co-operative Power and the Willingness to Resolve">
                                Co-operative Power and the Willingness to Resolve
                            </option>
                            <option class="collaborative-leadership" id="" value="Collaboration on the Fly">
                                Collaboration on the Fly
                            </option>
                            <option class="collaborative-leadership" id="" value="Creating Digital Bonds (Collborative Leadership)">
                                Creating Digital Bonds (Collborative Leadership)
                            </option>
                            <option class="creativity" id="" value="Creative Thinking in the Workplace">
                                Creative Thinking in the Workplace
                            </option>
                            <option class="virtual-team-building" id="" value="Culture Driven Team Building">
                                Culture Driven Team Building
                            </option>
                            <option class="mental-health" id="" value="Deep Dive: Psychological Resilience">
                                Deep Dive: Psychological Resilience
                            </option>
                            <option class="mental-health" id="" value="Deep Dive: The Role of Positive Emotions">
                                Deep Dive: The Role of Positive Emotions
                            </option>
                            <option class="strengths" id="" value="Deep Diving with Strengths">
                                Deep Diving with Strengths
                            </option>
                            <option class="learning-evolution" id="" value="Designing Slides for Non-Designers">
                                Designing Slides for Non-Designers
                            </option>
                            <option class="learning-evolution" id="" value="Designing Virtual Learning">
                                Designing Virtual Learning
                            </option>
                            <option class="growth-mindset" id="" value="Developing the Growth Mindset">
                                Developing the Growth Mindset
                            </option>
                            <option class="communication" id="" value="Effective Virtual Communication">
                                Effective Virtual Communication
                            </option>
                            <option class="everyday-innovation" id="" value="Everyday Workplace Innovation">
                                Everyday Workplace Innovation
                            </option>
                            <option class="learning-evolution" id="" value="Facilitating Virtual Learning">
                                Facilitating Virtual Learning
                            </option>
                            <option class="facilitating-virtual-meetings" id="" value="Facilitating Virtual Meetings">
                                Facilitating Virtual Meetings
                            </option>
                            <option class="feedback" id="" value="Feedback with Candor (Feedback)">
                                Feedback with Candor (Feedback)
                            </option>
                            <option class="radical-candor" id="" value="Feedback with Candor (Radical Candor)">
                                Feedback with Candor (Radical Candor)
                            </option>
                            <option class="find-your-why" id="" value="Find Your Why">
                                Find Your Why
                            </option>
                            <option class="conflict-resolution" id="" value="Foundations of Conflict Resolution">
                                Foundations of Conflict Resolution
                            </option>
                            <option class="strategic-agility" id="" value="Foundations of Strategic Agility">
                                Foundations of Strategic Agility
                            </option>
                            <option class="strengths" id="" value="Foundations of Strengths Based Development">
                                Foundations of Strengths Based Development
                            </option>
                            <option class="collaborative-leadership" id="" value="Fundamentals of Collaboration">
                                Fundamentals of Collaboration
                            </option>
                            <option class="future-proof-leadership" id="" value="Future Proof Leadership">
                                Future Proof Leadership
                            </option>
                            <option class="business-transformation" id="" value="Future-Backwards">
                                Future-Backwards
                            </option>
                            <option class="game-night" id="" value="Game Nights">
                                Game Nights
                            </option>
                            <option class="feedback" id="" value="Giving and Receiving Feedback">
                                Giving and Receiving Feedback
                            </option>
                            <option class="business-transformation" id="" value="Graphic Gameplanning">
                                Graphic Gameplanning
                            </option>
                            <option class="heroes-assemble" id="" value="Heroes Assemble">
                                Heroes Assemble
                            </option>
                            <option class="diversity-inclusion" id="" value="Inclusion is your Competitive Advantage">
                                Inclusion is your Competitive Advantage
                            </option>
                            <option class="improv" id="" value="Just Say &quot;Yes, And&quot; to Improv">
                                Just Say "Yes, And" to Improv
                            </option>
                            <option class="leading-hybrid-teams" id="" value="Leading Hybrid Teams">
                                Leading Hybrid Teams
                            </option>
                            <option class="leading-virtual-teams" id="" value="Leading Virtual Teams">
                                Leading Virtual Teams
                            </option>
                            <option class="leading-emotional-intelligence" id="" value="Leading with Emotional Intelligence">
                                Leading with Emotional Intelligence
                            </option>
                            <option class="growth-mindset" id="" value="Leading with the Growth Mindset">
                                Leading with the Growth Mindset
                            </option>
                            <option class="lip-sync-battle" id="" value="Lip Sync Battle">
                                Lip Sync Battle
                            </option>
                            <option class="find-your-why" id="" value="Live Your Why">
                                Live Your Why
                            </option>
                            <option class="habit-formation" id="" value="Magic of Habits">
                                Magic of Habits
                            </option>
                            <option class="emotional-intelligence" id="" value="Making Emotional Intelligence Visible">
                                Making Emotional Intelligence Visible
                            </option>
                            <option class="emotional-intelligence" id="" value="Managing Relationship thru EI">
                                Managing Relationship thru EI
                            </option>
                            <option class="conflict-resolution" id="" value="Mapping the Conflict and Design Options">
                                Mapping the Conflict and Design Options
                            </option>
                            <option class="mental-health" id="" value="Mental Health Foundations">
                                Mental Health Foundations
                            </option>
                            <option class="virtual-team-building" id="" value="Points of You">
                                Points of You
                            </option>
                            <option class="influencing" id="" value="Power of Influence">
                                Power of Influence
                            </option>
                            <option class="productivity" id="" value="Productivity Sprint: Designing your Flow State">
                                Productivity Sprint: Designing your Flow State
                            </option>
                            <option class="productivity" id="" value="Productivity Sprint: Flow State on Demand">
                                Productivity Sprint: Flow State on Demand
                            </option>
                            <option class="anxiety" id="" value="Riding the Wave">
                                Riding the Wave
                            </option>
                            <option class="psychological-safety" id="" value="Secret Ingredient to High Performing Teams">
                                Secret Ingredient to High Performing Teams
                            </option>
                            <option class="virtual-team-building" id="" value="Squid Games">
                                Squid Games
                            </option>
                            <option class="emotional-intelligence" id="" value="The Emotional Agility Toolbox">
                                The Emotional Agility Toolbox
                            </option>
                            <option class="the-heist" id="" value="The Heist">
                                The Heist
                            </option>
                            <option class="the-lab" id="" value="The Lab">
                                The Lab
                            </option>
                            <option class="growth-mindset" id="" value="The Power of Yet (Growth MIndset)">
                                The Power of Yet (Growth MIndset)
                            </option>
                            <option class="productivity" id="" value="Time and Energy Management: Rethinking our Productivity Models">
                                Time and Energy Management: Rethinking our Productivity Models
                            </option>
                            <option class="diversity-inclusion" id="" value="Unconscious Bias">
                                Unconscious Bias
                            </option>
                            <option class="virtual-team-building" id="" value="Virtual Teaming">
                                Virtual Teaming
                            </option>
                            <option class="mindfullness" id="" value="Win over Anxiety: Addressing the Worrisome Thoughts in your Head">
                                Win over Anxiety: Addressing the Worrisome Thoughts in your Head
                            </option>
                            <option class="work-from-home" id="" value="Work from Home Essentials">
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

        <div class="col-md-3">
            <label class="fw-bold required">CLUSTER</label>
        </div>
        <div class="col-md-7">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="form-select @error('') is-invalid @enderror" name="cluster" id="cluster">
                            <option value="Anxiety">Anxiety</option>
                            <option value="Business Transformation">Business Transformation</option>
                            <option value="Collaborative Leadership">Collaborative Leadership</option>
                            <option value="Communication">Communication</option>
                            <option value="Conflict Resolution">Conflict Resolution</option>
                            <option value="Creativity">Creativity</option>
                            <option value="Diversity & Inclusion">Diversity & Inclusion</option>
                            <option value="Emotional Intelligence">Emotional Intelligence</option>
                            <option value="Everyday Innovation">Everyday Innovation</option>
                            <option value="Facilitating Virtual Meetings">Facilitating Virtual Meetings</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Find Your Why">Find Your Why</option>
                            <option value="Future Proof Leadership">Future Proof Leadership</option>
                            <option value="Game Night">Game Night</option>
                            <option value="Growth Mindset">Growth Mindset</option>
                            <option value="Habit Formation">Habit Formation</option>
                            <option value="Heroes Assemble">Heroes Assemble</option>
                            <option value="Improv">Improv</option>
                            <option value="Influencing">Influencing</option>
                            <option value="Leadership Brand">Leadership Brand</option>
                            <option value="Leading Hybrid Teams">Leading Hybrid Teams</option>
                            <option value="Leading Virtual Teams">Leading Virtual Teams</option>
                            <option value="Leading with Emotional Intelligence">Leading with Emotional Intelligence</option>
                            <option value="Learning Evolution">Learning Evolution</option>
                            <option value="Lip Sync Battle">Lip Sync Battle</option>
                            <option value="Mental Health">Mental Health</option>
                            <option value="Mindfullness">Mindfullness</option>
                            <option value="Productivity">Productivity</option>
                            <option value="Psychological Safety">Psychological Safety</option>
                            <option value="Radical Candor">Radical Candor</option>
                            <option value="Strategic Agility">Strategic Agility</option>
                            <option value="Strengths">Strengths</option>
                            <option value="The Heist">The Heist</option>
                            <option value="The Lab">The Lab</option>
                            <option value="Virtual Team Building">Virtual Team Building</option>
                            <option value="Work From Home">Work From Home</option>
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
        <div class="col-md-7">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    {{-- <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}"
                    name="" id="core-valueInput" disabled> --}}
                    <fieldset class="form-group">
                        <select class="form-select @error('') is-invalid @enderror" name="intelligence" id="intelligence" >
                            <option value="Contextual">Contextual</option>
                            <option value="Generative">Generative</option>
                            <option value="Moral">Moral</option>
                            <option value="Social & Emotional">Social & Emotional</option>
                            <option value="Technological">Technological</option>
                            <option value="Transformative">Transformative</option>
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
                        <input type="text" class="form-control datepicker @error('doe') is-invalid @enderror" value="{{ old('doe') }}" placeholder="Enter Date" name="program_date" id="datepicker" size="30">
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
                        <input type="time" class="form-control @error('dot') is-invalid @enderror" value="{{ old('dot') }}" placeholder="Enter Time" name="program_start_time">
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
                        <input type="time" class="form-control @error('dot') is-invalid @enderror" value="{{ old('dot') }}" placeholder="Enter Time" name="program_end_time">
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
    document.getElementById('Mgtstrat-U-Titles').addEventListener("change", titles);
    // var title = $("#Mgtstrat-U-Titles");
    function titles() {
        $( "#Mgtstrat-U-Titles option:selected" ).each(function() {
            if($('.mindfullness').is(':selected')){
                $('#cluster').val('Mindfullness');
                $('#intelligence').val('Social & Emotional');
            }
            else if($('.diversity-and-inclusion').is(':selected')) {
                $('#cluster').val('Diversity & Inclusion');
                $('#intelligence').val('Moral');
            }
            else if($('.growth-mindset').is(':selected')) {
                $('#cluster').val('Growth Mindset');
                $('#intelligence').val('Transformative');
            }
            else if ($('.anxiety').is(':selected')) {
                $('#cluster').val('Anxiety');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.leadership-brand').is(':selected')) {
                $('#cluster').val('Leadership Brand');
                $('#intelligence').val('Moral');
            }
            else if ($('.virtual-team-building').is(':selected')) {
                $('#cluster').val('Virtual Team Building');
                $('#intelligence').val('Generative');
            }
            else if ($('.conflict-resolution').is(':selected')) {
                $('#cluster').val('Conflict Resolution');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.collaborative-leadership').is(':selected') ) {
                $('#cluster').val('Collaborative Leadership');
                $('#intelligence').val('Generative');
            }
            else if ($('.creativity').is(':selected')) {
                $('#cluster').val('Creativity');
                $('#intelligence').val('Generative');
            }
            else if ($('.mental-health').is(':selected')) {
                $('#cluster').val('Mental Health');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.strengths').is(':selected')) {
                $('#cluster').val('Strengths');
                $('#intelligence').val('Moral');
            }
            else if ($('.learning-evolution').is(':selected')) {
                $('#cluster').val('Learning Evolution');
                $('#intelligence').val('Technological');
            }
            else if ($('.communication').is(':selected')) {
                $('#cluster').val('Communication');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.everyday-innovation').is(':selected')) {
                $('#cluster').val('Everyday Innovation');
                $('#intelligence').val('Generative');
            }
            else if ($('.facilitating-virtual-meetings').is(':selected')) {
                $('#cluster').val('Facilitating Virtual Meetings');
                $('#intelligence').val('Technological');
            }
            else if ($('.feedback').is(':selected')) {
                $('#cluster').val('Feedback');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.radical-candor').is(':selected')) {
                $('#cluster').val('Radical Candor');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.find-your-why').is(':selected')) {
                $('#cluster').val('Find Your Why');
                $('#intelligence').val('Moral');
            }
            else if ($('.strategic-agility').is(':selected')) {
                $('#cluster').val('Strategic Agility');
                $('#intelligence').val('Contextual');
            }
            else if ($('.future-proof-leadership').is(':selected')) {
                $('#cluster').val('Future Proof Leadership');
                $('#intelligence').val('Contextual');
            }
            else if ($('.business-transformation').is(':selected')) {
                $('#cluster').val('Business Transformation');
                $('#intelligence').val('Transformative');
            }
            else if ($('.game-night').is(':selected')) {
                $('#cluster').val('Game Night');
                $('#intelligence').val('Transformative');
            }
            else if ($('.heroes-assemble').is(':selected')) {
                $('#cluster').val('Heroes Assemble');
                $('#intelligence').val('Transformative');
            }
            else if ($('.diversity-inclusion').is(':selected')) {
                $('#cluster').val('Diversity & Inclusion');
                $('#intelligence').val('Moral');
            }
            else if ($('.improv').is(':selected')) {
                $('#cluster').val('Improv');
                $('#intelligence').val('Generative');
            }
            else if ($('.leading-hybrid-teams').is(':selected')) {
                $('#cluster').val('Leading Hybrid Teams');
                $('#intelligence').val('Technological');
            }
            else if ($('.leading-virtual-teams').is(':selected')) {
                $('#cluster').val('Leading Virtual Teams');
                $('#intelligence').val('Technological');
            }
            else if ($('.leading-emotional-intelligence').is(':selected')) {
                $('#cluster').val('Leading with Emotional Intelligence');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.lip-sync-battle').is(':selected')) {
                $('#cluster').val('Lip Sync Battle');
                $('#intelligence').val('Generative');
            }
            else if ($('.habit-formation').is(':selected')) {
                $('#cluster').val('Habit Formation');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.emotional-intelligence').is(':selected')) {
                $('#cluster').val('Emotional Intelligence');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.influencing').is(':selected')) {
                $('#cluster').val('Influencing');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.productivity').is(':selected')) {
                $('#cluster').val('Productivity');
                $('#intelligence').val('Social & Emotional');
            }
            else if ($('.psychological-safety').is(':selected')) {
                $('#cluster').val('Psychological Safety');
                $('#intelligence').val('Contextual');
            }
            else if ($('.the-heist').is(':selected')) {
                $('#cluster').val('The Heist');
                $('#intelligence').val('Generative');
            }
            else if ($('.the-lab').is(':selected')) {
                $('#cluster').val('The Lab');
                $('#intelligence').val('Generative');
            }
            else if ($('.work-from-home').is(':selected')) {
                $('#cluster').val('Work From Home');
                $('#intelligence').val('Technological');
            }
            else{
                $('#cluster').val('');
                $('#intelligence').val('');
            }
        });
    }
</script>
