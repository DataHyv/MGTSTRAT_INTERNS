<div class="col-lg-3 col-md-3 listed" id="listed{{$dateRow}}">
    <div class="form-group has-icon-left">
        <label class="fw-bold required">Cluster</label>
        <div class="position-relative">
            <fieldset class="form-group">
                <select class="input js-mytooltip form-select cluster-dropdown @error('') is-invalid @enderror" name="cluster[]" id="cluster-dropdown{{$dateRow}}"
                onchange=" 
                    if($('.capability{{$dateRow}}').is(':selected')){
                        document.getElementById('cluster-dropdown{{$dateRow}}').style.display = '';
                        document.getElementById('cluster-dropdown{{$dateRow}}').disabled = false;
                        document.getElementById('listed{{$dateRow}}').style.display = '';
                        document.getElementById('input-notListed{{$dateRow}}').disabled = true;
                        document.getElementById('div-notListed{{$dateRow}}').style.display = 'none';
                        document.getElementById('core-valueInput{{$dateRow}}').value = 'Capability';
                    } 
                    if($('.culture{{$dateRow}}').is(':selected')) {
                        document.getElementById('cluster-dropdown{{$dateRow}}').style.display = '';
                        document.getElementById('cluster-dropdown{{$dateRow}}').disabled = false;
                        document.getElementById('listed{{$dateRow}}').style.display = '';
                        document.getElementById('input-notListed{{$dateRow}}').disabled = true;
                        document.getElementById('div-notListed{{$dateRow}}').style.display = 'none';
                        document.getElementById('core-valueInput{{$dateRow}}').value = 'Culture';
                    } 
                    if($('.leadership{{$dateRow}}').is(':selected')) {
                        document.getElementById('cluster-dropdown{{$dateRow}}').style.display = '';
                        document.getElementById('cluster-dropdown{{$dateRow}}').disabled = false;
                        document.getElementById('listed{{$dateRow}}').style.display = '';
                        document.getElementById('input-notListed{{$dateRow}}').disabled = true;
                        document.getElementById('div-notListed{{$dateRow}}').style.display = 'none';
                        document.getElementById('core-valueInput{{$dateRow}}').value = 'Leadership';
                    } 
                    if($('.social').is(':selected')) {
                        document.getElementById('cluster-dropdown{{$dateRow}}').style.display = '';
                        document.getElementById('cluster-dropdown{{$dateRow}}').disabled = false;
                        document.getElementById('listed{{$dateRow}}').style.display = '';
                        document.getElementById('input-notListed{{$dateRow}}').disabled = true;
                        document.getElementById('div-notListed{{$dateRow}}').style.display = 'none';
                        document.getElementById('core-valueInput{{$dateRow}}').value = 'Social';
                    } 
                    if($('.strategy').is(':selected')) {
                        document.getElementById('cluster-dropdown{{$dateRow}}').style.display = '';
                        document.getElementById('cluster-dropdown{{$dateRow}}').disabled = false;
                        document.getElementById('listed{{$dateRow}}').style.display = '';
                        document.getElementById('input-notListed{{$dateRow}}').disabled = true;
                        document.getElementById('div-notListed{{$dateRow}}').style.display = 'none';
                        document.getElementById('core-valueInput{{$dateRow}}').value = 'Strategy';
                    } 
                    if($('.teams').is(':selected')) {
                        document.getElementById('cluster-dropdown{{$dateRow}}').style.display = '';
                        document.getElementById('cluster-dropdown{{$dateRow}}').disabled = false;
                        document.getElementById('listed{{$dateRow}}').style.display = '';
                        document.getElementById('input-notListed{{$dateRow}}').disabled = true;
                        document.getElementById('div-notListed{{$dateRow}}').style.display = 'none';
                        document.getElementById('core-valueInput{{$dateRow}}').value = 'Teams'
                    }
                    if($('.notListed').is(':selected')) {
                        document.getElementById('cluster-dropdown{{$dateRow}}').disabled = true;
                        document.getElementById('listed{{$dateRow}}').style.display = 'none';
                        document.getElementById('input-notListed{{$dateRow}}').disabled = false;
                        document.getElementById('input-notListed{{$dateRow}}').value = '';
                        document.getElementById('div-notListed{{$dateRow}}').style.display = '';
                        document.getElementById('core-valueInput{{$dateRow}}').disabled = false;
                    }
                    "
                data-mytooltip-content="<i>
                    If not on the list, choose suggested cluster title at Core Area.
                    </i>"
                data-mytooltip-theme="dark"
                data-mytooltip-action="focus" 
                data-mytooltip-direction="top">
                    <option value="" id="notListed" class="notListed">-- Not listed --</option>
                    <option id="capability" class="capability{{$dateRow}}" value="Above The Line"
                        {{ old('') == 'Above The Line' ? 'selected="selected"' : '' }} selected>
                        Above The Line
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Action Learning"
                        {{ old('') == 'Action Learning' ? 'selected="selected"' : '' }}>
                        Action Learning
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Anxiety"
                        {{ old('') == 'Anxiety' ? 'selected="selected"' : '' }}>
                        Anxiety
                    </option>
                    <option id="capability" class='capability{{$dateRow}}'
                        value="Art of Asking Questions"
                        {{ old('') == 'Art of Asking Questions' ? 'selected="selected"' : '' }}>
                        Art of Asking Questions
                    </option>
                    <option id="capability" class="capability{{$dateRow}}"
                        value="Building Effective Relationships"
                        {{ old('') == 'Building Effective Relationships' ? 'selected="selected"' : '' }}>
                        Building Effective Relationships
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Business Analytics"
                        {{ old('') == 'Business Analytics' ? 'selected="selected"' : '' }}>
                        Business Analytics
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Business Storytelling"
                        {{ old('') == 'Business Storytelling' ? 'selected="selected"' : '' }}>
                        Business Storytelling
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Change Management"
                        {{ old('') == 'Change Management' ? 'selected="selected"' : '' }}>
                        Change Management
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Coaching"
                        {{ old('') == 'Coaching' ? 'selected="selected"' : '' }}>
                        Coaching
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}"
                        value="Collaborative Leadership"
                        {{ old('') == 'Collaborative Leadership' ? 'selected="selected"' : '' }}>
                        Collaborative Leadership
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Communicating Across the Organization"
                        {{ old('') == 'Communicating Across the Organization' ? 'selected="selected"' : '' }}>
                        Communicating Across the Organization
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Communication 1 (Capability)"
                        {{ old('') == 'Communication 1 (Capability)' ? 'selected="selected"' : '' }}>
                        Communication 1 (Capability)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Communication 2 (Leadership)"
                        {{ old('') == 'Communication 2 (Leadership)' ? 'selected="selected"' : '' }}>
                        Communication 2 (Leadership)
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Competency Building"
                        {{ old('') == 'Competency Building' ? 'selected="selected"' : '' }}>
                        Competency Building
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Conflict Resolution"
                        {{ old('') == 'Conflict Resolution' ? 'selected="selected"' : '' }}>
                        Conflict Resolution
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Create Authentic Connections"
                        {{ old('') == 'Create Authentic Connections' ? 'selected="selected"' : '' }}>
                        Create Authentic Connections
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Credibility"
                        {{ old('') == 'Credibility' ? 'selected="selected"' : '' }}>
                        Credibility
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Critical Thinking"
                        {{ old('') == 'Critical Thinking' ? 'selected="selected"' : '' }}>
                        Critical Thinking
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Design Thinking"
                        {{ old('') == 'Design Thinking' ? 'selected="selected"' : '' }}>
                        Design Thinking
                    </option>
                    <option id="society" class="society" value="Diversity & Inclusion 1 (Society)"
                        {{ old('') == 'Diversity & Inclusion 1 (Society)' ? 'selected="selected"' : '' }}>
                        Diversity & Inclusion 1 (Society)
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Diversity & Inclusion 2 (Culture)"
                        {{ old('') == 'Diversity & Inclusion 2 (Culture)' ? 'selected="selected"' : '' }}>
                        Diversity & Inclusion 2 (Culture)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Emotional Intelligence 1 (Leadership)"
                        {{ old('') == 'Emotional Intelligence 1 (Leadership)' ? 'selected="selected"' : '' }}>
                        Emotional Intelligence 1 (Leadership)
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Emotional Intelligence 2 (Capability)"
                        {{ old('') == 'Emotional Intelligence 2 (Capability)' ? 'selected="selected"' : '' }}>
                        Emotional Intelligence 2 (Capability)
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Enhance My Credibility"
                        {{ old('') == 'Enhance My Credibility' ? 'selected="selected"' : '' }}>
                        Enhance My Credibility
                    </option>
                    <option id="strategy" class="strategy" value="Goal Setting"
                        {{ old('') == 'Goal Setting' ? 'selected="selected"' : '' }}>
                        Goal Setting
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Growth Mindset"
                        {{ old('') == 'Growth Mindset' ? 'selected="selected"' : '' }}>
                        Growth Mindset
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Improv"
                        {{ old('') == 'Improv' ? 'selected="selected"' : '' }}>
                        Improv
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Influencing"
                        {{ old('') == 'Influencing' ? 'selected="selected"' : '' }}>
                        Influencing
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Kick Off (Leadership)"
                        {{ old('') == 'Kick Off (Leadership)' ? 'selected="selected"' : '' }}>
                        Kick Off (Leadership)
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Kick Off 1 (Culture)"
                        {{ old('') == 'Kick Off 1 (Culture)' ? 'selected="selected"' : '' }}>
                        Kick Off 1 (Culture)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leadership"
                        {{ old('') == 'Leadership' ? 'selected="selected"' : '' }}>
                        Leadership
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leadership Brand"
                        {{ old('') == 'Leadership Brand' ? 'selected="selected"' : '' }}>
                        Leadership Brand
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leadership Presence"
                        {{ old('') == 'Leadership Presence' ? 'selected="selected"' : '' }}>
                        Leadership Presence
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Leadership Hybrid Teams 1 (Capability)"
                        {{ old('') == 'Leadership Hybrid Teams 1 (Capability)' ? 'selected="selected"' : '' }}>
                        Leadership Hybrid Teams 1 (Capability)
                    </option>
                    <option id="culture" class="culture{{$dateRow}}" value="Leadership Hybrid Teams 2 (Culture)"
                        {{ old('') == 'Leadership Hybrid Teams 2 (Culture)' ? 'selected="selected"' : '' }}>
                        Leadership Hybrid Teams 2 (Culture)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leadership Hybrid Teams  3 (Leadership)"
                        {{ old('') == 'Leadership Hybrid Teams  3 (Leadership)' ? 'selected="selected"' : '' }}>
                        Leadership Hybrid Teams  3 (Leadership)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Leading with Questions"
                        {{ old('') == 'Leading with Questions' ? 'selected="selected"' : '' }}>
                        Leading with Questions
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Learning Evolution"
                        {{ old('') == 'Learning Evolution' ? 'selected="selected"' : '' }}>
                        Learning Evolution
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Learning How to Set Goals"
                        {{ old('') == 'Learning How to Set Goals' ? 'selected="selected"' : '' }}>
                        Learning How to Set Goals
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Mental Health 1 (Capability)"
                        {{ old('') == 'Mental Health 1 (Capability)' ? 'selected="selected"' : '' }}>
                        Mental Health 1 (Capability)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Mental Health 2 (Leadership)"
                        {{ old('') == 'Mental Health 2 (Leadership)' ? 'selected="selected"' : '' }}>
                        Mental Health 2 (Leadership)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Mentoring"
                        {{ old('') == 'Mentoring' ? 'selected="selected"' : '' }}>
                        Mentoring
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Mindfulness"
                        {{ old('') == 'Mindfulness' ? 'selected="selected"' : '' }}>
                        Mindfulness
                    </option>
                    <option id="strategy" class="strategy" value="Mission & Vision Review"
                        {{ old('') == 'Mission & Vision Review' ? 'selected="selected"' : '' }}>
                        Mission & Vision Review
                    </option>
                    <option id="capability" class="capability{{$dateRow}}"
                        value="Negotiation"
                        {{ old('') == 'Negotiation' ? 'selected="selected"' : '' }}>
                        Negotiation
                    </option>
                    <option id="society" class="society" value="Parenting"
                        {{ old('') == 'Parenting' ? 'selected="selected"' : '' }}>
                        Parenting
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Problem-Solving"
                        {{ old('') == 'Problem-Solving' ? 'selected="selected"' : '' }}>
                        Problem-Solving
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Productivity"
                        {{ old('') == 'Productivity' ? 'selected="selected"' : '' }}>
                        Productivity
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Project Management"
                        {{ old('') == 'Project Management' ? 'selected="selected"' : '' }}>
                        Project Management
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Psychological Safety"
                        {{ old('') == 'Psychological Safety' ? 'selected="selected"' : '' }}>
                        Psychological Safety
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Purpose 1 (Capability)"
                        {{ old('') == 'Purpose 1 (Capability)' ? 'selected="selected"' : '' }}>
                        Purpose 1 (Capability)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Purpose 2 (Leadership)"
                        {{ old('') == 'Purpose 2 (Leadership)' ? 'selected="selected"' : '' }}>
                        Purpose 2 (Leadership)
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Situational Leadership"
                        {{ old('') == 'Situational Leadership' ? 'selected="selected"' : '' }}>
                        Situational Leadership
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Stakeholder Management"
                        {{ old('') == 'Stakeholder Management' ? 'selected="selected"' : '' }}>
                        Stakeholder Management
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Strategic Agility"
                        {{ old('') == 'Strategic Agility' ? 'selected="selected"' : '' }}>
                        Strategic Agility
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Strategic Execution"
                        {{ old('') == 'Strategic Execution' ? 'selected="selected"' : '' }}>
                        Strategic Execution
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Strategic Leadership"
                        {{ old('') == 'Strategic Leadership' ? 'selected="selected"' : '' }}>
                        Strategic Leadership
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Strategic Thinking"
                        {{ old('') == 'Strategic Thinking' ? 'selected="selected"' : '' }}>
                        Strategic Thinking
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Strengths 1 (Leadership)"
                        {{ old('') == 'Strengths 1 (Leadership)' ? 'selected="selected"' : '' }}>
                        Strengths 1 (Leadership)
                    </option>
                    <option id="teams" class="teams" value="Strengths 2 (Teams)"
                        {{ old('') == 'Strengths 2 (Teams)' ? 'selected="selected"' : '' }}>
                        Strengths 2 (Teams)
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Systems Thinking"
                        {{ old('') == 'Systems Thinking' ? 'selected="selected"' : '' }}>
                        Systems Thinking
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Talent Building"
                        {{ old('') == 'Talent Building' ? 'selected="selected"' : '' }}>
                        Talent Building
                    </option>
                    <option id="teams" class="teams" value="Talent Building - F2F"
                        {{ old('') == 'Talent Building - F2F' ? 'selected="selected"' : '' }}>
                        Talent Building - F2F
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Talent Building - Virtual 1 (Leadership)"
                        {{ old('') == 'Talent Building - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                        Talent Building - Virtual 1 (Leadership)
                    </option>
                    <option id="teams" class="teams" value="Talent Building - Virtual 2 (Teams)"
                        {{ old('') == 'Talent Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                        Talent Building - Virtual 2 (Teams)
                    </option>
                    <option id="teams" class="teams" value="Team Engagement"
                        {{ old('') == 'Team Engagement' ? 'selected="selected"' : '' }}>
                        Team Engagement
                    </option>
                    <option id="teams" class="teams" value="Team Engagement - F2F"
                        {{ old('') == 'Team Engagement - F2F' ? 'selected="selected"' : '' }}>
                        Team Engagement - F2F
                    </option>
                    <option id="leadership" class="leadership{{$dateRow}}" value="Team Engagement - Virtual 1 (Leadership)"
                        {{ old('') == 'Team Engagement - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                        Team Engagement - Virtual 1 (Leadership)
                    </option>
                    <option id="teams" class="teams" value="Team Building - Virtual 2 (Teams)"
                        {{ old('') == 'Team Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                        Team Building - Virtual 2 (Teams)
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Time and Energy Management"
                        {{ old('') == 'Time and Energy Management' ? 'selected="selected"' : '' }}>
                        Time and Energy Management
                    </option>
                    <option id="society" class="society" value="Unconscious Bias"
                        {{ old('') == 'Unconscious Bias' ? 'selected="selected"' : '' }}>
                        Unconscious Bias
                    </option>
                    <option id="strategy" class="strategy" value="Visioning"
                        {{ old('') == 'Visioning' ? 'selected="selected"' : '' }}>
                        Visioning
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Work From Home"
                        {{ old('') == 'Work From Home' ? 'selected="selected"' : '' }}>
                        Work From Home
                    </option>
                    <option id="capability" class="capability{{$dateRow}}" value="Workplace Learning"
                        {{ old('') == 'Workplace Learning' ? 'selected="selected"' : '' }}>
                        Workplace Learning
                    </option>
                    <option id="strategy" class="strategy" value="World Cafe"
                        {{ old('') == 'World Cafe' ? 'selected="selected"' : '' }}>
                        World Cafe
                    </option>


                    {{-- <option value="{{ $data[0]->cluster }}"
                        {{ $data[0]->cluster == $data[0]->cluster ? 'selected' : '' }}>
                        {{ $data[0]->cluster }}
                    </option>
                    @foreach ($cluster as $key => $value)
                        <option value="{{ $value->role_type }}">
                            {{ $value->role_type }}</option>
                    @endforeach --}}
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
                <a href="javascript:void(0)" class="remove-not-listed" id="remove-not-listed{{$dateRow}}"
                onclick="
                    document.getElementById('cluster-dropdown{{$dateRow}}').disabled = false;
                    document.getElementById('cluster-dropdown{{$dateRow}}').value = 'Above The Line';
                    document.getElementById('listed{{$dateRow}}').style.display = '';
                    document.getElementById('core-valueInput{{$dateRow}}').value = 'Capability';
                    document.getElementById('input-notListed{{$dateRow}}').disabled = true;
                    document.getElementById('div-notListed{{$dateRow}}').style.display = 'none';">
                    <i class="fa-solid fa-square-xmark text-danger"></i>
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
<hr class="mt-3">
