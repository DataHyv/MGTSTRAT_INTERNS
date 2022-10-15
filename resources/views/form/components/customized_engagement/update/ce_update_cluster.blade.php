<div class="col-lg-3 col-md-3 listed" id="listed{{$dateRow}}">
    <div class="form-group has-icon-left">
        <label class="fw-bold required">Cluster</label>
        <div class="position-relative">
            <fieldset class="form-group">
                <select class="input js-mytooltip form-select cluster-dropdown @error('') is-invalid @enderror" name="cluster[]" id="cluster-dropdown{{$dateRow}}"
                    data-mytooltip-content="<i>
                        If not on the list, choose suggested cluster title at Core Area.
                        </i>"
                    data-mytooltip-theme="dark"
                    data-mytooltip-action="focus" 
                    data-mytooltip-direction="top">
                    <option value="" id="notListed" class="notListed{{$dateRow}}">-- Not listed --</option>
                    <option id="capability" class="capability{{$dateRow}}" value="Above The Line"
                        {{ $Cluster[$key] == 'Above The Line' ? 'selected="selected"' : '' }} selected>
                        Above The Line
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Action Learning"
                        {{ $Cluster[$key] == 'Action Learning' ? 'selected="selected"' : '' }}>
                        Action Learning
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Anxiety"
                        {{ $Cluster[$key] == 'Anxiety' ? 'selected="selected"' : '' }}>
                        Anxiety
                    </option>
                    <option id="capability" class="capability{{$dateRow}}"
                        value="Art of Asking Questions"
                        {{ $Cluster[$key] == 'Art of Asking Questions' ? 'selected="selected"' : '' }}>
                        Art of Asking Questions
                    </option>
                    <option id="capability" class="capability{{$dateRow}}"
                        value="Building Effective Relationships"
                        {{ $Cluster[$key] == 'Building Effective Relationships' ? 'selected="selected"' : '' }}>
                        Building Effective Relationships
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Business Analytics"
                        {{ $Cluster[$key] == 'Business Analytics' ? 'selected="selected"' : '' }}>
                        Business Analytics
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Business Storytelling"
                        {{ $Cluster[$key] == 'Business Storytelling' ? 'selected="selected"' : '' }}>
                        Business Storytelling
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Change Management"
                        {{ $Cluster[$key] == 'Change Management' ? 'selected="selected"' : '' }}>
                        Change Management
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Coaching"
                        {{ $Cluster[$key] == 'Coaching' ? 'selected="selected"' : '' }}>
                        Coaching
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}"
                        value="Collaborative Leadership"
                        {{ $Cluster[$key] == 'Collaborative Leadership' ? 'selected="selected"' : '' }}>
                        Collaborative Leadership
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Communicating Across the Organization"
                        {{ $Cluster[$key] == 'Communicating Across the Organization' ? 'selected="selected"' : '' }}>
                        Communicating Across the Organization
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Communication 1 (Capability)"
                        {{ $Cluster[$key] == 'Communication 1 (Capability)' ? 'selected="selected"' : '' }}>
                        Communication 1 (Capability)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Communication 2 (Leadership)"
                        {{ $Cluster[$key] == 'Communication 2 (Leadership)' ? 'selected="selected"' : '' }}>
                        Communication 2 (Leadership)
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Competency Building"
                        {{ $Cluster[$key] == 'Competency Building' ? 'selected="selected"' : '' }}>
                        Competency Building
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Conflict Resolution"
                        {{ $Cluster[$key] == 'Conflict Resolution' ? 'selected="selected"' : '' }}>
                        Conflict Resolution
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Create Authentic Connections"
                        {{ $Cluster[$key] == 'Create Authentic Connections' ? 'selected="selected"' : '' }}>
                        Create Authentic Connections
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Credibility"
                        {{ $Cluster[$key] == 'Credibility' ? 'selected="selected"' : '' }}>
                        Credibility
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Critical Thinking"
                        {{ $Cluster[$key] == 'Critical Thinking' ? 'selected="selected"' : '' }}>
                        Critical Thinking
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Design Thinking"
                        {{ $Cluster[$key] == 'Design Thinking' ? 'selected="selected"' : '' }}>
                        Design Thinking
                    </option>
                    <option id="society" class="society{{$dateRow}}" value="Diversity & Inclusion 1 (Society)"
                        {{ $Cluster[$key] == 'Diversity & Inclusion 1 (Society)' ? 'selected="selected"' : '' }}>
                        Diversity & Inclusion 1 (Society)
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Diversity & Inclusion 2 (Culture)"
                        {{ $Cluster[$key] == 'Diversity & Inclusion 2 (Culture)' ? 'selected="selected"' : '' }}>
                        Diversity & Inclusion 2 (Culture)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Emotional Intelligence 1 (Leadership)"
                        {{ $Cluster[$key] == 'Emotional Intelligence 1 (Leadership)' ? 'selected="selected"' : '' }}>
                        Emotional Intelligence 1 (Leadership)
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Emotional Intelligence 2 (Capability)"
                        {{ $Cluster[$key] == 'Emotional Intelligence 2 (Capability)' ? 'selected="selected"' : '' }}>
                        Emotional Intelligence 2 (Capability)
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Enhance My Credibility"
                        {{ $Cluster[$key] == 'Enhance My Credibility' ? 'selected="selected"' : '' }}>
                        Enhance My Credibility
                    </option>
                    <option id="strategy" class="strategy{{$dateRow}}" value="Goal Setting"
                        {{ $Cluster[$key] == 'Goal Setting' ? 'selected="selected"' : '' }}>
                        Goal Setting
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Growth Mindset"
                        {{ $Cluster[$key] == 'Growth Mindset' ? 'selected="selected"' : '' }}>
                        Growth Mindset
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Improv"
                        {{ $Cluster[$key] == 'Improv' ? 'selected="selected"' : '' }}>
                        Improv
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Influencing"
                        {{ $Cluster[$key] == 'Influencing' ? 'selected="selected"' : '' }}>
                        Influencing
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Kick Off (Leadership)"
                        {{ $Cluster[$key] == 'Kick Off (Leadership)' ? 'selected="selected"' : '' }}>
                        Kick Off (Leadership)
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Kick Off 1 (Culture)"
                        {{ $Cluster[$key] == 'Kick Off 1 (Culture)' ? 'selected="selected"' : '' }}>
                        Kick Off 1 (Culture)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leadership"
                        {{ $Cluster[$key] == 'Leadership' ? 'selected="selected"' : '' }}>
                        Leadership
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leadership Brand"
                        {{ $Cluster[$key] == 'Leadership Brand' ? 'selected="selected"' : '' }}>
                        Leadership Brand
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leadership Presence"
                        {{ $Cluster[$key] == 'Leadership Presence' ? 'selected="selected"' : '' }}>
                        Leadership Presence
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Leadership Hybrid Teams 1 (Capability)"
                        {{ $Cluster[$key] == 'Leadership Hybrid Teams 1 (Capability)' ? 'selected="selected"' : '' }}>
                        Leadership Hybrid Teams 1 (Capability)
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Leadership Hybrid Teams 2 (Culture)"
                        {{ $Cluster[$key] == 'Leadership Hybrid Teams 2 (Culture)' ? 'selected="selected"' : '' }}>
                        Leadership Hybrid Teams 2 (Culture)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leadership Hybrid Teams  3 (Leadership)"
                        {{ $Cluster[$key] == 'Leadership Hybrid Teams  3 (Leadership)' ? 'selected="selected"' : '' }}>
                        Leadership Hybrid Teams  3 (Leadership)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leading with Questions"
                        {{ $Cluster[$key] == 'Leading with Questions' ? 'selected="selected"' : '' }}>
                        Leading with Questions
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Learning Evolution"
                        {{ $Cluster[$key] == 'Learning Evolution' ? 'selected="selected"' : '' }}>
                        Learning Evolution
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Learning How to Set Goals"
                        {{ $Cluster[$key] == 'Learning How to Set Goals' ? 'selected="selected"' : '' }}>
                        Learning How to Set Goals
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Mental Health 1 (Capability)"
                        {{ $Cluster[$key] == 'Mental Health 1 (Capability)' ? 'selected="selected"' : '' }}>
                        Mental Health 1 (Capability)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Mental Health 2 (Leadership)"
                        {{ $Cluster[$key] == 'Mental Health 2 (Leadership)' ? 'selected="selected"' : '' }}>
                        Mental Health 2 (Leadership)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Mentoring"
                        {{ $Cluster[$key] == 'Mentoring' ? 'selected="selected"' : '' }}>
                        Mentoring
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Mindfulness"
                        {{ $Cluster[$key] == 'Mindfulness' ? 'selected="selected"' : '' }}>
                        Mindfulness
                    </option>
                    <option id="strategy" class="strategy{{$dateRow}}" value="Mission & Vision Review"
                        {{ $Cluster[$key] == 'Mission & Vision Review' ? 'selected="selected"' : '' }}>
                        Mission & Vision Review
                    </option>
                    <option id="capability" class="capability{{$dateRow}}"
                        value="Negotiation"
                        {{ $Cluster[$key] == 'Negotiation' ? 'selected="selected"' : '' }}>
                        Negotiation
                    </option>
                    <option id="society" class="society{{$dateRow}}" value="Parenting"
                        {{ $Cluster[$key] == 'Parenting' ? 'selected="selected"' : '' }}>
                        Parenting
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Problem-Solving"
                        {{ $Cluster[$key] == 'Problem-Solving' ? 'selected="selected"' : '' }}>
                        Problem-Solving
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Productivity"
                        {{ $Cluster[$key] == 'Productivity' ? 'selected="selected"' : '' }}>
                        Productivity
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Project Management"
                        {{ $Cluster[$key] == 'Project Management' ? 'selected="selected"' : '' }}>
                        Project Management
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Psychological Safety"
                        {{ $Cluster[$key] == 'Psychological Safety' ? 'selected="selected"' : '' }}>
                        Psychological Safety
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Purpose 1 (Capability)"
                        {{ $Cluster[$key] == 'Purpose 1 (Capability)' ? 'selected="selected"' : '' }}>
                        Purpose 1 (Capability)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Purpose 2 (Leadership)"
                        {{ $Cluster[$key] == 'Purpose 2 (Leadership)' ? 'selected="selected"' : '' }}>
                        Purpose 2 (Leadership)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Situational Leadership"
                        {{ $Cluster[$key] == 'Situational Leadership' ? 'selected="selected"' : '' }}>
                        Situational Leadership
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Stakeholder Management"
                        {{ $Cluster[$key] == 'Stakeholder Management' ? 'selected="selected"' : '' }}>
                        Stakeholder Management
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Strategic Agility"
                        {{ $Cluster[$key] == 'Strategic Agility' ? 'selected="selected"' : '' }}>
                        Strategic Agility
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Strategic Execution"
                        {{ $Cluster[$key] == 'Strategic Execution' ? 'selected="selected"' : '' }}>
                        Strategic Execution
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Strategic Leadership"
                        {{ $Cluster[$key] == 'Strategic Leadership' ? 'selected="selected"' : '' }}>
                        Strategic Leadership
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Strategic Thinking"
                        {{ $Cluster[$key] == 'Strategic Thinking' ? 'selected="selected"' : '' }}>
                        Strategic Thinking
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Strengths 1 (Leadership)"
                        {{ $Cluster[$key] == 'Strengths 1 (Leadership)' ? 'selected="selected"' : '' }}>
                        Strengths 1 (Leadership)
                    </option>
                    <option id="teams" class="teams{{$dateRow}}" value="Strengths 2 (Teams)"
                        {{ $Cluster[$key] == 'Strengths 2 (Teams)' ? 'selected="selected"' : '' }}>
                        Strengths 2 (Teams)
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Systems Thinking"
                        {{ $Cluster[$key] == 'Systems Thinking' ? 'selected="selected"' : '' }}>
                        Systems Thinking
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Talent Building"
                        {{ $Cluster[$key] == 'Talent Building' ? 'selected="selected"' : '' }}>
                        Talent Building
                    </option>
                    <option id="teams" class="teams{{$dateRow}}" value="Talent Building - F2F"
                        {{ $Cluster[$key] == 'Talent Building - F2F' ? 'selected="selected"' : '' }}>
                        Talent Building - F2F
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Talent Building - Virtual 1 (Leadership)"
                        {{ $Cluster[$key] == 'Talent Building - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                        Talent Building - Virtual 1 (Leadership)
                    </option>
                    <option id="teams" class="teams{{$dateRow}}" value="Talent Building - Virtual 2 (Teams)"
                        {{ $Cluster[$key] == 'Talent Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                        Talent Building - Virtual 2 (Teams)
                    </option>
                    <option id="teams" class="teams{{$dateRow}}" value="Team Engagement"
                        {{ $Cluster[$key] == 'Team Engagement' ? 'selected="selected"' : '' }}>
                        Team Engagement
                    </option>
                    <option id="teams" class="teams{{$dateRow}}" value="Team Engagement - F2F"
                        {{ $Cluster[$key] == 'Team Engagement - F2F' ? 'selected="selected"' : '' }}>
                        Team Engagement - F2F
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Team Engagement - Virtual 1 (Leadership)"
                        {{ $Cluster[$key] == 'Team Engagement - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                        Team Engagement - Virtual 1 (Leadership)
                    </option>
                    <option id="teams" class="teams{{$dateRow}}" value="Team Building - Virtual 2 (Teams)"
                        {{ $Cluster[$key] == 'Team Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                        Team Building - Virtual 2 (Teams)
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Time and Energy Management"
                        {{ $Cluster[$key] == 'Time and Energy Management' ? 'selected="selected"' : '' }}>
                        Time and Energy Management
                    </option>
                    <option id="society" class="society{{$dateRow}}" value="Unconscious Bias"
                        {{ $Cluster[$key] == 'Unconscious Bias' ? 'selected="selected"' : '' }}>
                        Unconscious Bias
                    </option>
                    <option id="strategy" class="strategy{{$dateRow}}" value="Visioning"
                        {{ $Cluster[$key] == 'Visioning' ? 'selected="selected"' : '' }}>
                        Visioning
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Work From Home"
                        {{ $Cluster[$key] == 'Work From Home' ? 'selected="selected"' : '' }}>
                        Work From Home
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Workplace Learning"
                        {{ $Cluster[$key] == 'Workplace Learning' ? 'selected="selected"' : '' }}>
                        Workplace Learning
                    </option>
                    <option id="strategy" class="strategy{{$dateRow}}" value="World Cafe"
                        {{ $Cluster[$key] == 'World Cafe' ? 'selected="selected"' : '' }}>
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

<div class="col-lg-3 col-md-3 div-notListed" id="div-notListed{{$dateRow}}" style="display: none">
    <div class="form-group has-icon-right">
        <label class="fw-bold required">Cluster</label>
        <div class="position-relative">
            <input type="text" class="form-control input-notListed @error('') is-invalid @enderror" value="{{ old('') }}"
                name="cluster[]" id="input-notListed{{$dateRow}}" disabled>
            <div class="form-control-icon">
                <a href="javascript:void(0)" class="remove-not-listed" name="cluster[]" id="remove-not-listed{{$dateRow}}">
                    <i class="fa-solid fa-square-xmark text-danger" title="remove"></i>
                </a>
            </div>
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
                <select class="form-select core-valueInput @error('') is-invalid @enderror" name="core_area[]" id="core-valueInput{{$dateRow}}">
                    <option value="Culture" {{ $CoreArea[$key] == 'Culture' ? 'selected="selected"' : '' }}>Culture</option>
                    <option value="Capability" {{ $CoreArea[$key] == 'Capability' ? 'selected="selected"' : '' }}>Capability</option>
                    <option value="Leadership" {{ $CoreArea[$key] == 'Leadership' ? 'selected="selected"' : '' }}>Leadership</option>
                    <option value="Social" {{ $CoreArea[$key] == 'Social' ? 'selected="selected"' : '' }}>Social</option>
                    <option value="Strategy" {{ $CoreArea[$key] == 'Strategy' ? 'selected="selected"' : '' }}>Strategy</option>
                    <option value="Teams" {{ $CoreArea[$key] == 'Teams' ? 'selected="selected"' : '' }}>Teams</option>
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

<script>
    document.getElementById('cluster-dropdown{{$dateRow}}').addEventListener("change", clusterChange{{$dateRow}});

    function clusterChange{{$dateRow}}() {
        if($('.capability{{$dateRow}}').is(':selected')){
            // document.getElementById('core-valueInput').value = 'Capability';
            $('#listed{{$dateRow}}').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown{{$dateRow}}').prop( 'disabled', false );
            $('#input-notListed{{$dateRow}}').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed{{$dateRow}}').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput{{$dateRow}}').each(function (){
                $(this).val('Capability');
            });
        } 
        if($('.culture{{$dateRow}}').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Culture';
            $('#listed{{$dateRow}}').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown{{$dateRow}}').prop( 'disabled', false );
            $('#input-notListed{{$dateRow}}').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed{{$dateRow}}').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput{{$dateRow}}').each(function (){
                $(this).val('Culture');
            });
        } 
        if($('.leadership{{$dateRow}}').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Leadership';
            $('#listed{{$dateRow}}').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown{{$dateRow}}').prop( 'disabled', false );
            $('#input-notListed{{$dateRow}}').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed{{$dateRow}}').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput{{$dateRow}}').each(function (){
                $(this).val('Leadership');
            });
        } 
        if($('.society{{$dateRow}}').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Social';
            $('#listed{{$dateRow}}').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown{{$dateRow}}').prop( 'disabled', false );
            $('#input-notListed{{$dateRow}}').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed{{$dateRow}}').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput{{$dateRow}}').each(function (){
                $(this).val('Social');
            });
        } 
        if($('.strategy{{$dateRow}}').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Strategy';
            $('#listed{{$dateRow}}').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown{{$dateRow}}').prop( 'disabled', false );
            $('#input-notListed{{$dateRow}}').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed{{$dateRow}}').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput{{$dateRow}}').each(function (){
                $(this).val('Strategy');
            });
        } 
        if($('.teams{{$dateRow}}').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Teams';
            $('#listed{{$dateRow}}').each(function (){
                $(this).css('display', '');
            });
            $('#cluster-dropdown{{$dateRow}}').prop( 'disabled', false );
            $('#input-notListed{{$dateRow}}').each(function (){
                $(this).prop( 'disabled', true );
            });
            $('#div-notListed{{$dateRow}}').each(function (){
                $(this).css('display', 'none');
            });
            $('#core-valueInput{{$dateRow}}').each(function (){
                $(this).val('Teams');
            });
        }
        if($('.notListed{{$dateRow}}').is(':selected')) {
            // document.getElementById('core-valueInput').value = 'Teams';
            $(`#listed{{$dateRow}}`).each(function (){
                $(this).css('display', 'none');
            });
            $('#cluster-dropdown{{$dateRow}}').prop( 'disabled', true );
            $(`#input-notListed{{$dateRow}}`).each(function (){
                $(this).prop( 'disabled', false );
                $(this).val('');
            });
            $(`#div-notListed{{$dateRow}}`).each(function (){
                $(this).css('display', '');
            });
        }
    }

    // REMOVE NOT-LISTED INPUT FIELD WHEN CLICK THE REMOVE ICON
    $('#remove-not-listed{{$dateRow}}').click(function (){
        document.getElementById("cluster-dropdown{{$dateRow}}").value = 'Above The Line';
        document.getElementById("listed{{$dateRow}}").style.display = "";
        $('#cluster-dropdown{{$dateRow}}').prop( 'disabled', false );
        document.getElementById("core-valueInput{{$dateRow}}").value = "Capability";
        document.getElementById("input-notListed{{$dateRow}}").disabled = true;
        document.getElementById("div-notListed{{$dateRow}}").style.display = "none";
    });

</script>
