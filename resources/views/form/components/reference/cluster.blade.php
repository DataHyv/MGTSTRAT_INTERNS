{{-- <div class="form-group row justify-content-center clusterRows" id="clusterRows"> --}}
    <div class="col-lg-3 col-md-3 listed" id="listed1">
        <div class="form-group has-icon-left">
            <label class="fw-bold required">Cluster</label>
            <div class="position-relative">
                <fieldset class="form-group">
                    <select class="input js-mytooltip form-select cluster-dropdown @error('') is-invalid @enderror" name="cluster[]" id="cluster-dropdown1"
                        data-mytooltip-content="<i>
                            If not on the list, choose suggested cluster title at Core Area.
                            </i>"
                        data-mytooltip-theme="dark"
                        data-mytooltip-action="focus"
                        data-mytooltip-direction="top">
                        <option value="" id="notListed" class="notListed1">-- Not listed --</option>
                        <option id="capability" class="capability1" value="Above The Line"
                            {{ old('') == 'Above The Line' ? 'selected="selected"' : '' }} selected>
                            Above The Line
                        </option>
                        <option id="culture" class="culture1" value="Action Learning"
                            {{ old('') == 'Action Learning' ? 'selected="selected"' : '' }}>
                            Action Learning
                        </option>
                        <option id="culture" class="culture1" value="Anxiety"
                            {{ old('') == 'Anxiety' ? 'selected="selected"' : '' }}>
                            Anxiety
                        </option>
                        <option id="capability" class="capability1"
                            value="Art of Asking Questions"
                            {{ old('') == 'Art of Asking Questions' ? 'selected="selected"' : '' }}>
                            Art of Asking Questions
                        </option>
                        <option id="capability" class="capability1"
                            value="Building Effective Relationships"
                            {{ old('') == 'Building Effective Relationships' ? 'selected="selected"' : '' }}>
                            Building Effective Relationships
                        </option>
                        <option id="capability" class="capability1" value="Business Analytics"
                            {{ old('') == 'Business Analytics' ? 'selected="selected"' : '' }}>
                            Business Analytics
                        </option>
                        <option id="capability" class="capability1" value="Business Storytelling"
                            {{ old('') == 'Business Storytelling' ? 'selected="selected"' : '' }}>
                            Business Storytelling
                        </option>
                        <option id="leadership" class="leadership1" value="Change Management"
                            {{ old('') == 'Change Management' ? 'selected="selected"' : '' }}>
                            Change Management
                        </option>
                        <option id="leadership" class="leadership1" value="Coaching"
                            {{ old('') == 'Coaching' ? 'selected="selected"' : '' }}>
                            Coaching
                        </option>
                        <option id="leadership" class="leadership1"
                            value="Collaborative Leadership"
                            {{ old('') == 'Collaborative Leadership' ? 'selected="selected"' : '' }}>
                            Collaborative Leadership
                        </option>
                        <option id="capability" class="capability1" value="Communicating Across the Organization"
                            {{ old('') == 'Communicating Across the Organization' ? 'selected="selected"' : '' }}>
                            Communicating Across the Organization
                        </option>
                        <option id="capability" class="capability1" value="Communication 1 (Capability)"
                            {{ old('') == 'Communication 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Communication 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Communication 2 (Leadership)"
                            {{ old('') == 'Communication 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Communication 2 (Leadership)
                        </option>
                        <option id="capability" class="capability1" value="Competency Building"
                            {{ old('') == 'Competency Building' ? 'selected="selected"' : '' }}>
                            Competency Building
                        </option>
                        <option id="capability" class="capability1" value="Conflict Resolution"
                            {{ old('') == 'Conflict Resolution' ? 'selected="selected"' : '' }}>
                            Conflict Resolution
                        </option>
                        <option id="capability" class="capability1" value="Create Authentic Connections"
                            {{ old('') == 'Create Authentic Connections' ? 'selected="selected"' : '' }}>
                            Create Authentic Connections
                        </option>
                        <option id="capability" class="capability1" value="Credibility"
                            {{ old('') == 'Credibility' ? 'selected="selected"' : '' }}>
                            Credibility
                        </option>
                        <option id="capability" class="capability1" value="Critical Thinking"
                            {{ old('') == 'Critical Thinking' ? 'selected="selected"' : '' }}>
                            Critical Thinking
                        </option>
                        <option id="capability" class="capability1" value="Design Thinking"
                            {{ old('') == 'Design Thinking' ? 'selected="selected"' : '' }}>
                            Design Thinking
                        </option>
                        <option id="society" class="society" value="Diversity & Inclusion 1 (Society)"
                            {{ old('') == 'Diversity & Inclusion 1 (Society)' ? 'selected="selected"' : '' }}>
                            Diversity & Inclusion 1 (Society)
                        </option>
                        <option id="culture" class="culture1" value="Diversity & Inclusion 2 (Culture)"
                            {{ old('') == 'Diversity & Inclusion 2 (Culture)' ? 'selected="selected"' : '' }}>
                            Diversity & Inclusion 2 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Emotional Intelligence 1 (Leadership)"
                            {{ old('') == 'Emotional Intelligence 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Emotional Intelligence 1 (Leadership)
                        </option>
                        <option id="culture" class="culture1" value="Emotional Intelligence 2 (Capability)"
                            {{ old('') == 'Emotional Intelligence 2 (Capability)' ? 'selected="selected"' : '' }}>
                            Emotional Intelligence 2 (Capability)
                        </option>
                        <option id="capability" class="capability1" value="Enhance My Credibility"
                            {{ old('') == 'Enhance My Credibility' ? 'selected="selected"' : '' }}>
                            Enhance My Credibility
                        </option>
                        <option id="strategy" class="strategy1" value="Goal Setting"
                            {{ old('') == 'Goal Setting' ? 'selected="selected"' : '' }}>
                            Goal Setting
                        </option>
                        <option id="capability" class="capability1" value="Growth Mindset"
                            {{ old('') == 'Growth Mindset' ? 'selected="selected"' : '' }}>
                            Growth Mindset
                        </option>
                        <option id="capability" class="capability1" value="Improv"
                            {{ old('') == 'Improv' ? 'selected="selected"' : '' }}>
                            Improv
                        </option>
                        <option id="capability" class="capability1" value="Influencing"
                            {{ old('') == 'Influencing' ? 'selected="selected"' : '' }}>
                            Influencing
                        </option>
                        <option id="leadership" class="leadership1" value="Kick Off (Leadership)"
                            {{ old('') == 'Kick Off (Leadership)' ? 'selected="selected"' : '' }}>
                            Kick Off (Leadership)
                        </option>
                        <option id="culture" class="culture1" value="Kick Off 1 (Culture)"
                            {{ old('') == 'Kick Off 1 (Culture)' ? 'selected="selected"' : '' }}>
                            Kick Off 1 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership"
                            {{ old('') == 'Leadership' ? 'selected="selected"' : '' }}>
                            Leadership
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Brand"
                            {{ old('') == 'Leadership Brand' ? 'selected="selected"' : '' }}>
                            Leadership Brand
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Presence"
                            {{ old('') == 'Leadership Presence' ? 'selected="selected"' : '' }}>
                            Leadership Presence
                        </option>
                        <option id="capability" class="capability1" value="Leadership Hybrid Teams 1 (Capability)"
                            {{ old('') == 'Leadership Hybrid Teams 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams 1 (Capability)
                        </option>
                        <option id="culture" class="culture1" value="Leadership Hybrid Teams 2 (Culture)"
                            {{ old('') == 'Leadership Hybrid Teams 2 (Culture)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams 2 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Hybrid Teams  3 (Leadership)"
                            {{ old('') == 'Leadership Hybrid Teams  3 (Leadership)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams  3 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Leading with Questions"
                            {{ old('') == 'Leading with Questions' ? 'selected="selected"' : '' }}>
                            Leading with Questions
                        </option>
                        <option id="capability" class="capability1" value="Learning Evolution"
                            {{ old('') == 'Learning Evolution' ? 'selected="selected"' : '' }}>
                            Learning Evolution
                        </option>
                        <option id="capability" class="capability1" value="Learning How to Set Goals"
                            {{ old('') == 'Learning How to Set Goals' ? 'selected="selected"' : '' }}>
                            Learning How to Set Goals
                        </option>
                        <option id="capability" class="capability1" value="Mental Health 1 (Capability)"
                            {{ old('') == 'Mental Health 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Mental Health 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Mental Health 2 (Leadership)"
                            {{ old('') == 'Mental Health 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Mental Health 2 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Mentoring"
                            {{ old('') == 'Mentoring' ? 'selected="selected"' : '' }}>
                            Mentoring
                        </option>
                        <option id="capability" class="capability1" value="Mindfulness"
                            {{ old('') == 'Mindfulness' ? 'selected="selected"' : '' }}>
                            Mindfulness
                        </option>
                        <option id="strategy" class="strategy1" value="Mission & Vision Review"
                            {{ old('') == 'Mission & Vision Review' ? 'selected="selected"' : '' }}>
                            Mission & Vision Review
                        </option>
                        <option id="capability" class="capability1"
                            value="Negotiation"
                            {{ old('') == 'Negotiation' ? 'selected="selected"' : '' }}>
                            Negotiation
                        </option>
                        <option id="society" class="society" value="Parenting"
                            {{ old('') == 'Parenting' ? 'selected="selected"' : '' }}>
                            Parenting
                        </option>
                        <option id="capability" class="capability1" value="Problem-Solving"
                            {{ old('') == 'Problem-Solving' ? 'selected="selected"' : '' }}>
                            Problem-Solving
                        </option>
                        <option id="capability" class="capability1" value="Productivity"
                            {{ old('') == 'Productivity' ? 'selected="selected"' : '' }}>
                            Productivity
                        </option>
                        <option id="capability" class="capability1" value="Project Management"
                            {{ old('') == 'Project Management' ? 'selected="selected"' : '' }}>
                            Project Management
                        </option>
                        <option id="capability" class="capability1" value="Psychological Safety"
                            {{ old('') == 'Psychological Safety' ? 'selected="selected"' : '' }}>
                            Psychological Safety
                        </option>
                        <option id="capability" class="capability1" value="Purpose 1 (Capability)"
                            {{ old('') == 'Purpose 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Purpose 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Purpose 2 (Leadership)"
                            {{ old('') == 'Purpose 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Purpose 2 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Situational Leadership"
                            {{ old('') == 'Situational Leadership' ? 'selected="selected"' : '' }}>
                            Situational Leadership
                        </option>
                        <option id="capability" class="capability1" value="Stakeholder Management"
                            {{ old('') == 'Stakeholder Management' ? 'selected="selected"' : '' }}>
                            Stakeholder Management
                        </option>
                        <option id="capability" class="capability1" value="Strategic Agility"
                            {{ old('') == 'Strategic Agility' ? 'selected="selected"' : '' }}>
                            Strategic Agility
                        </option>
                        <option id="capability" class="capability1" value="Strategic Execution"
                            {{ old('') == 'Strategic Execution' ? 'selected="selected"' : '' }}>
                            Strategic Execution
                        </option>
                        <option id="leadership" class="leadership1" value="Strategic Leadership"
                            {{ old('') == 'Strategic Leadership' ? 'selected="selected"' : '' }}>
                            Strategic Leadership
                        </option>
                        <option id="capability" class="capability1" value="Strategic Thinking"
                            {{ old('') == 'Strategic Thinking' ? 'selected="selected"' : '' }}>
                            Strategic Thinking
                        </option>
                        <option id="leadership" class="leadership1" value="Strengths 1 (Leadership)"
                            {{ old('') == 'Strengths 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Strengths 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Strengths 2 (Teams)"
                            {{ old('') == 'Strengths 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Strengths 2 (Teams)
                        </option>
                        <option id="capability" class="capability1" value="Systems Thinking"
                            {{ old('') == 'Systems Thinking' ? 'selected="selected"' : '' }}>
                            Systems Thinking
                        </option>
                        <option id="capability" class="capability1" value="Talent Building"
                            {{ old('') == 'Talent Building' ? 'selected="selected"' : '' }}>
                            Talent Building
                        </option>
                        <option id="teams" class="teams1" value="Talent Building - F2F"
                            {{ old('') == 'Talent Building - F2F' ? 'selected="selected"' : '' }}>
                            Talent Building - F2F
                        </option>
                        <option id="leadership" class="leadership1" value="Talent Building - Virtual 1 (Leadership)"
                            {{ old('') == 'Talent Building - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Talent Building - Virtual 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Talent Building - Virtual 2 (Teams)"
                            {{ old('') == 'Talent Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Talent Building - Virtual 2 (Teams)
                        </option>
                        <option id="teams" class="teams1" value="Team Engagement"
                            {{ old('') == 'Team Engagement' ? 'selected="selected"' : '' }}>
                            Team Engagement
                        </option>
                        <option id="teams" class="teams1" value="Team Engagement - F2F"
                            {{ old('') == 'Team Engagement - F2F' ? 'selected="selected"' : '' }}>
                            Team Engagement - F2F
                        </option>
                        <option id="leadership" class="leadership1" value="Team Engagement - Virtual 1 (Leadership)"
                            {{ old('') == 'Team Engagement - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Team Engagement - Virtual 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Team Building - Virtual 2 (Teams)"
                            {{ old('') == 'Team Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Team Building - Virtual 2 (Teams)
                        </option>
                        <option id="capability" class="capability1" value="Time and Energy Management"
                            {{ old('') == 'Time and Energy Management' ? 'selected="selected"' : '' }}>
                            Time and Energy Management
                        </option>
                        <option id="society" class="society" value="Unconscious Bias"
                            {{ old('') == 'Unconscious Bias' ? 'selected="selected"' : '' }}>
                            Unconscious Bias
                        </option>
                        <option id="strategy" class="strategy1" value="Visioning"
                            {{ old('') == 'Visioning' ? 'selected="selected"' : '' }}>
                            Visioning
                        </option>
                        <option id="capability" class="capability1" value="Work From Home"
                            {{ old('') == 'Work From Home' ? 'selected="selected"' : '' }}>
                            Work From Home
                        </option>
                        <option id="capability" class="capability1" value="Workplace Learning"
                            {{ old('') == 'Workplace Learning' ? 'selected="selected"' : '' }}>
                            Workplace Learning
                        </option>
                        <option id="strategy" class="strategy1" value="World Cafe"
                            {{ old('') == 'World Cafe' ? 'selected="selected"' : '' }}>
                            World Cafe
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

    <div class="col-lg-3 col-md-3 div-notListed" id="div-notListed1" style="display: none">
        <div class="form-group has-icon-right">
            <label class="fw-bold required">Cluster</label>
            <div class="position-relative">
                <input type="text" class="form-control input-notListed @error('') is-invalid @enderror" value="{{ old('') }}"
                    name="cluster[]" id="input-notListed1" disabled>
                <div class="form-control-icon">
                    <a href="javascript:void(0)" class="remove-not-listed" name="cluster[]" id="remove-not-listed1">
                        <i class="fa-solid fa-square-xmark text-danger" title="remove"></i>
                    </a>
                </div>
                {{-- <div class="form-control-icon">
                    <i class="fa-solid fa-diagram-project"></i>
                </div> --}}
                @error('')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-md-2">
        <div class="form-group has-icon-left">
            <label class="fw-bold required">Core Area</label>
            <div class="position-relative">
                <fieldset class="form-group">
                    <select class="form-select core-valueInput @error('') is-invalid @enderror" name="core_area[]" id="core-valueInput1">
                        <option value="Culture">Culture</option>
                        <option value="Capability" selected>Capability</option>
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
{{-- </div> --}}
{{-- <hr> --}}

<script>
    document.getElementById('cluster-dropdown1').addEventListener("change", clusterChange);

    function clusterChange() {
        if($('.capability1').is(':selected')){
            // document.getElementById('core-valueInput').value = 'Capability';
            $('#listed1').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown1').prop( 'disabled', false );
            $('#input-notListed1').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed1').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput1').each(function (){
                $(this).val('Capability');
            });
        }
        if($('.culture1').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Culture';
            $('#listed1').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown1').prop( 'disabled', false );
            $('#input-notListed1').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed1').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput1').each(function (){
                $(this).val('Culture');
            });
        }
        if($('.leadership1').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Leadership';
            $('#listed1').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown1').prop( 'disabled', false );
            $('#input-notListed1').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed1').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput1').each(function (){
                $(this).val('Leadership');
            });
        }
        if($('.social1').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Social';
            $('#listed1').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown1').prop( 'disabled', false );
            $('#input-notListed1').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed1').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput1').each(function (){
                $(this).val('Social');
            });
        }
        if($('.strategy1').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Strategy';
            $('#listed1').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown1').prop( 'disabled', false );
            $('#input-notListed1').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed1').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput1').each(function (){
                $(this).val('Strategy');
            });
        }
        if($('.teams1').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Teams';
            $('#listed1').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown1').prop( 'disabled', false );
            $('#input-notListed1').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed1').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput1').each(function (){
                $(this).val('Teams');
            });
        }
        if($('.notListed1').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Teams';
            $(`#listed1`).each(function (){
                $(this).css('display', 'none');
            });
            $('#cluster-dropdown1').prop( 'disabled', true );
            $(`#input-notListed1`).each(function (){
                $(this).prop( 'disabled', false );
                $(this).val('');
            });
            $(`#div-notListed1`).each(function (){
                $(this).css('display', '');
            });
        }
    }

    // REMOVE NOT-LISTED INPUT FIELD WHEN CLICK THE REMOVE ICON
    $('#remove-not-listed1').click(function (){
        document.getElementById("cluster-dropdown1").value = 'Above The Line';
        document.getElementById("listed1").style.display = "";
        $('#cluster-dropdown1').prop( 'disabled', false );
        document.getElementById("core-valueInput1").value = "Capability";
        document.getElementById("input-notListed1").disabled = true;
        document.getElementById("div-notListed1").style.display = "none";
    });

</script>

