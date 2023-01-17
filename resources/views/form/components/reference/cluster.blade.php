{{-- <div class="form-group row justify-content-center clusterRows" id="clusterRows"> --}}
    <div class="col-lg-3 col-md-3 listed" id="listed1">
        <div class="form-group has-icon-left">
            <label class="fw-bold required">Cluster</label>
            <div class="position-relative">
                @if(Route::is('form/customizedEngagement/new') )
                <fieldset class="form-group">
                    <select class="input js-mytooltip form-select cluster-dropdown @error('cluster') is-invalid @enderror" name="cluster" id="cluster-dropdown1"
                        data-mytooltip-content="<i>
                            If not on the list, choose suggested cluster title at Core Area.
                            </i>"
                        data-mytooltip-theme="dark"
                        data-mytooltip-action="focus"
                        data-mytooltip-direction="top">
                        <option value="" id="notListed" class="notListed1">-- Not listed --</option>
                        <option id="capability" class="capability1" value="Above The Line" {{ old('cluster') == 'Above The Line' ? 'selected="selected"' : '' }}>
                            Above The Line
                        </option>
                        <option id="culture" class="culture1" value="Action Learning" {{ old('cluster') == 'Action Learning' ? 'selected="selected"' : '' }}>
                            Action Learning
                        </option>
                        <option id="culture" class="culture1" value="Anxiety" {{ old('cluster') == 'Anxiety' ? 'selected="selected"' : '' }}>
                            Anxiety
                        </option>
                        <option id="capability" class="capability1" value="Art of Asking Questions" {{ old('cluster') == 'Art of Asking Questions' ? 'selected="selected"' : '' }}>
                            Art of Asking Questions
                        </option>
                        <option id="capability" class="capability1" value="Building Effective Relationships" {{ old('cluster') == 'Building Effective Relationships' ? 'selected="selected"' : '' }}>
                            Building Effective Relationships
                        </option>
                        <option id="capability" class="capability1" value="Business Analytics" {{ old('cluster') == 'Business Analytics' ? 'selected="selected"' : '' }}>
                            Business Analytics
                        </option>
                        <option id="capability" class="capability1" value="Business Storytelling" {{ old('cluster') == 'Business Storytelling' ? 'selected="selected"' : '' }}>
                            Business Storytelling
                        </option>
                        <option id="leadership" class="leadership1" value="Change Management" {{ old('cluster') == 'Change Management' ? 'selected="selected"' : '' }}>
                            Change Management
                        </option>
                        <option id="leadership" class="leadership1" value="Coaching" {{ old('cluster') == 'Coaching' ? 'selected="selected"' : '' }}>
                            Coaching
                        </option>
                        <option id="leadership" class="leadership1" value="Collaborative Leadership" {{ old('cluster') == 'Collaborative Leadership' ? 'selected="selected"' : '' }}>
                            Collaborative Leadership
                        </option>
                        <option id="capability" class="capability1" value="Communicating Across the Organization" {{ old('cluster') == 'Communicating Across the Organization' ? 'selected="selected"' : '' }}>
                            Communicating Across the Organization
                        </option>
                        <option id="capability" class="capability1" value="Communication 1 (Capability)" {{ old('cluster') == 'Communication 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Communication 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Communication 2 (Leadership)" {{ old('cluster') == 'Communication 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Communication 2 (Leadership)
                        </option>
                        <option id="capability" class="capability1" value="Competency Building" {{ old('cluster') == 'Competency Building' ? 'selected="selected"' : '' }}>
                            Competency Building
                        </option>
                        <option id="capability" class="capability1" value="Conflict Resolution" {{ old('cluster') == 'Conflict Resolution' ? 'selected="selected"' : '' }}>
                            Conflict Resolution
                        </option>
                        <option id="capability" class="capability1" value="Create Authentic Connections" {{ old('cluster') == 'Create Authentic Connections' ? 'selected="selected"' : '' }}>
                            Create Authentic Connections
                        </option>
                        <option id="capability" class="capability1" value="Credibility" {{ old('cluster') == 'Credibility' ? 'selected="selected"' : '' }}>
                            Credibility
                        </option>
                        <option id="capability" class="capability1" value="Critical Thinking" {{ old('cluster') == 'Critical Thinking' ? 'selected="selected"' : '' }}>
                            Critical Thinking
                        </option>
                        <option id="capability" class="capability1" value="Design Thinking" {{ old('cluster') == 'Design Thinking' ? 'selected="selected"' : '' }}>
                            Design Thinking
                        </option>
                        <option id="society" class="society" value="Diversity & Inclusion 1 (Society)" {{ old('cluster') == 'Diversity & Inclusion 1 (Society)' ? 'selected="selected"' : '' }}>
                            Diversity & Inclusion 1 (Society)
                        </option>
                        <option id="culture" class="culture1" value="Diversity & Inclusion 2 (Culture)" {{ old('cluster') == 'Diversity & Inclusion 2 (Culture)' ? 'selected="selected"' : '' }}>
                            Diversity & Inclusion 2 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Emotional Intelligence 1 (Leadership)" {{ old('cluster') == 'Emotional Intelligence 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Emotional Intelligence 1 (Leadership)
                        </option>
                        <option id="culture" class="culture1" value="Emotional Intelligence 2 (Capability)" {{ old('cluster') == 'Emotional Intelligence 2 (Capability)' ? 'selected="selected"' : '' }}>
                            Emotional Intelligence 2 (Capability)
                        </option>
                        <option id="capability" class="capability1" value="Enhance My Credibility" {{ old('cluster') == 'Enhance My Credibility' ? 'selected="selected"' : '' }}>
                            Enhance My Credibility
                        </option>
                        <option id="strategy" class="strategy1" value="Goal Setting" {{ old('cluster') == 'Goal Setting' ? 'selected="selected"' : '' }}>
                            Goal Setting
                        </option>
                        <option id="capability" class="capability1" value="Growth Mindset" {{ old('cluster') == 'Growth Mindset' ? 'selected="selected"' : '' }}>
                            Growth Mindset
                        </option>
                        <option id="capability" class="capability1" value="Improv" {{ old('cluster') == 'Improv' ? 'selected="selected"' : '' }}>
                            Improv
                        </option>
                        <option id="capability" class="capability1" value="Influencing" {{ old('cluster') == 'Influencing' ? 'selected="selected"' : '' }}>
                            Influencing
                        </option>
                        <option id="leadership" class="leadership1" value="Kick Off (Leadership)" {{ old('cluster') == 'Kick Off (Leadership)' ? 'selected="selected"' : '' }}>
                            Kick Off (Leadership)
                        </option>
                        <option id="culture" class="culture1" value="Kick Off 1 (Culture)" {{ old('cluster') == 'Kick Off 1 (Culture)' ? 'selected="selected"' : '' }}>
                            Kick Off 1 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership" {{ old('cluster') == 'Leadership' ? 'selected="selected"' : '' }}>
                            Leadership
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Brand" {{ old('cluster') == 'Leadership Brand' ? 'selected="selected"' : '' }}>
                            Leadership Brand
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Presence" {{ old('cluster') == 'Leadership Presence' ? 'selected="selected"' : '' }}>
                            Leadership Presence
                        </option>
                        <option id="capability" class="capability1" value="Leadership Hybrid Teams 1 (Capability)" {{ old('cluster') == 'Leadership Hybrid Teams 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams 1 (Capability)
                        </option>
                        <option id="culture" class="culture1" value="Leadership Hybrid Teams 2 (Culture)" {{ old('cluster') == 'Leadership Hybrid Teams 2 (Culture)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams 2 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Hybrid Teams  3 (Leadership)" {{ old('cluster') == 'Leadership Hybrid Teams  3 (Leadership)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams  3 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Leading with Questions" {{ old('cluster') == 'Leading with Questions' ? 'selected="selected"' : '' }}>
                            Leading with Questions
                        </option>
                        <option id="capability" class="capability1" value="Learning Evolution" {{ old('cluster') == 'Learning Evolution' ? 'selected="selected"' : '' }}>
                            Learning Evolution
                        </option>
                        <option id="capability" class="capability1" value="Learning How to Set Goals" {{ old('cluster') == 'Learning How to Set Goals' ? 'selected="selected"' : '' }}>
                            Learning How to Set Goals
                        </option>
                        <option id="capability" class="capability1" value="Mental Health 1 (Capability)" {{ old('cluster') == 'Mental Health 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Mental Health 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Mental Health 2 (Leadership)" {{ old('cluster') == 'Mental Health 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Mental Health 2 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Mentoring" {{ old('cluster') == 'Mentoring' ? 'selected="selected"' : '' }}>
                            Mentoring
                        </option>
                        <option id="capability" class="capability1" value="Mindfulness" {{ old('cluster') == 'Mindfulness' ? 'selected="selected"' : '' }}>
                            Mindfulness
                        </option>
                        <option id="strategy" class="strategy1" value="Mission & Vision Review" {{ old('cluster') == 'Mission & Vision Review' ? 'selected="selected"' : '' }}>
                            Mission & Vision Review
                        </option>
                        <option id="capability" class="capability1" value="Negotiation" {{ old('cluster') == 'Negotiation' ? 'selected="selected"' : '' }}>
                            Negotiation
                        </option>
                        <option id="society" class="society" value="Parenting" {{ old('cluster') == 'Parenting' ? 'selected="selected"' : '' }}>
                            Parenting
                        </option>
                        <option id="capability" class="capability1" value="Problem-Solving" {{ old('cluster') == 'Problem-Solving' ? 'selected="selected"' : '' }}>
                            Problem-Solving
                        </option>
                        <option id="capability" class="capability1" value="Productivity" {{ old('cluster') == 'Productivity' ? 'selected="selected"' : '' }}>
                            Productivity
                        </option>
                        <option id="capability" class="capability1" value="Project Management" {{ old('cluster') == 'Project Management' ? 'selected="selected"' : '' }}>
                            Project Management
                        </option>
                        <option id="capability" class="capability1" value="Psychological Safety" {{ old('cluster') == 'Psychological Safety' ? 'selected="selected"' : '' }}>
                            Psychological Safety
                        </option>
                        <option id="capability" class="capability1" value="Purpose 1 (Capability)" {{ old('cluster') == 'Purpose 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Purpose 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Purpose 2 (Leadership)" {{ old('cluster') == 'Purpose 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Purpose 2 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Situational Leadership" {{ old('cluster') == 'Situational Leadership' ? 'selected="selected"' : '' }}>
                            Situational Leadership
                        </option>
                        <option id="capability" class="capability1" value="Stakeholder Management" {{ old('cluster') == 'Stakeholder Management' ? 'selected="selected"' : '' }}>
                            Stakeholder Management
                        </option>
                        <option id="capability" class="capability1" value="Strategic Agility" {{ old('cluster') == 'Strategic Agility' ? 'selected="selected"' : '' }}>
                            Strategic Agility
                        </option>
                        <option id="capability" class="capability1" value="Strategic Execution" {{ old('cluster') == 'Strategic Execution' ? 'selected="selected"' : '' }}>
                            Strategic Execution
                        </option>
                        <option id="leadership" class="leadership1" value="Strategic Leadership" {{ old('cluster') == 'Strategic Leadership' ? 'selected="selected"' : '' }}>
                            Strategic Leadership
                        </option>
                        <option id="capability" class="capability1" value="Strategic Thinking" {{ old('cluster') == 'Strategic Thinking' ? 'selected="selected"' : '' }}>
                            Strategic Thinking
                        </option>
                        <option id="leadership" class="leadership1" value="Strengths 1 (Leadership)" {{ old('cluster') == 'Strengths 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Strengths 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Strengths 2 (Teams)" {{ old('cluster') == 'Strengths 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Strengths 2 (Teams)
                        </option>
                        <option id="capability" class="capability1" value="Systems Thinking" {{ old('cluster') == 'Systems Thinking' ? 'selected="selected"' : '' }}>
                            Systems Thinking
                        </option>
                        <option id="capability" class="capability1" value="Talent Building" {{ old('cluster') == 'Talent Building' ? 'selected="selected"' : '' }}>
                            Talent Building
                        </option>
                        <option id="teams" class="teams1" value="Talent Building - F2F" {{ old('cluster') == 'Talent Building - F2F' ? 'selected="selected"' : '' }}>
                            Talent Building - F2F
                        </option>
                        <option id="leadership" class="leadership1" value="Talent Building - Virtual 1 (Leadership)" {{ old('cluster') == 'Talent Building - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Talent Building - Virtual 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Talent Building - Virtual 2 (Teams)" {{ old('cluster') == 'Talent Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Talent Building - Virtual 2 (Teams)
                        </option>
                        <option id="teams" class="teams1" value="Team Engagement" {{ old('cluster') == 'Team Engagement' ? 'selected="selected"' : '' }}>
                            Team Engagement
                        </option>
                        <option id="teams" class="teams1" value="Team Engagement - F2F" {{ old('cluster') == 'Team Engagement - F2F' ? 'selected="selected"' : '' }}>
                            Team Engagement - F2F
                        </option>
                        <option id="leadership" class="leadership1" value="Team Engagement - Virtual 1 (Leadership)" {{ old('cluster') == 'Team Engagement - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Team Engagement - Virtual 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Team Building - Virtual 2 (Teams)" {{ old('cluster') == 'Team Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Team Building - Virtual 2 (Teams)
                        </option>
                        <option id="capability" class="capability1" value="Time and Energy Management" {{ old('cluster') == 'Time and Energy Management' ? 'selected="selected"' : '' }}>
                            Time and Energy Management
                        </option>
                        <option id="society" class="society" value="Unconscious Bias" {{ old('cluster') == 'Unconscious Bias' ? 'selected="selected"' : '' }}>
                            Unconscious Bias
                        </option>
                        <option id="strategy" class="strategy1" value="Visioning" {{ old('cluster') == 'Visioning' ? 'selected="selected"' : '' }}>
                            Visioning
                        </option>
                        <option id="capability" class="capability1" value="Work From Home" {{ old('cluster') == 'Work From Home' ? 'selected="selected"' : '' }}>
                            Work From Home
                        </option>
                        <option id="capability" class="capability1" value="Workplace Learning" {{ old('cluster') == 'Workplace Learning' ? 'selected="selected"' : '' }}>
                            Workplace Learning
                        </option>
                        <option id="strategy" class="strategy1" value="World Cafe" {{ old('cluster') == 'World Cafe' ? 'selected="selected"' : '' }}>
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
                @else
                <fieldset class="form-group">
                    <select class="input js-mytooltip form-select cluster-dropdown @error('cluster') is-invalid @enderror" name="cluster" id="cluster-dropdown1"
                        data-mytooltip-content="<i>
                            If not on the list, choose suggested cluster title at Core Area.
                            </i>"
                        data-mytooltip-theme="dark"
                        data-mytooltip-action="focus"
                        data-mytooltip-direction="top">
                        <option value="" id="notListed" class="notListed1">-- Not listed --</option>
                        <option id="capability" class="capability1" value="Above The Line" {{ $data->cluster == 'Above The Line' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Above The Line' ? 'selected="selected"' : '' }}>
                            Above The Line
                        </option>
                        <option id="culture" class="culture1" value="Action Learning" {{ $data->cluster == 'Action Learning' ? 'selected="selected"' : '' }}
                            {{ old('Action Learning') == 'Action Learning' ? 'selected="selected"' : '' }}>
                            Action Learning
                        </option>
                        <option id="culture" class="culture1" value="Anxiety" {{ $data->cluster == 'Anxiety' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Anxiety' ? 'selected="selected"' : '' }}>
                            Anxiety
                        </option>
                        <option id="capability" class="capability1" value="Art of Asking Questions" {{ $data->cluster == 'Art of Asking Questions' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Art of Asking Questions' ? 'selected="selected"' : '' }}>
                            Art of Asking Questions
                        </option>
                        <option id="capability" class="capability1" value="Building Effective Relationships" {{ $data->cluster == 'Building Effective Relationships' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Building Effective Relationships' ? 'selected="selected"' : '' }}>
                            Building Effective Relationships
                        </option>
                        <option id="capability" class="capability1" value="Business Analytics" {{ $data->cluster == 'Business Analytics' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Business Analytics' ? 'selected="selected"' : '' }}>
                            Business Analytics
                        </option>
                        <option id="capability" class="capability1" value="Business Storytelling" {{ $data->cluster == 'Business Storytelling' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Business Storytelling' ? 'selected="selected"' : '' }}>
                            Business Storytelling
                        </option>
                        <option id="leadership" class="leadership1" value="Change Management" {{ $data->cluster == 'Change Management' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Change Management' ? 'selected="selected"' : '' }}>
                            Change Management
                        </option>
                        <option id="leadership" class="leadership1" value="Coaching" {{ $data->cluster == 'Coaching' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Coaching' ? 'selected="selected"' : '' }}>
                            Coaching
                        </option>
                        <option id="leadership" class="leadership1" value="Collaborative Leadership" {{ $data->cluster == 'Collaborative Leadership' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Collaborative Leadership' ? 'selected="selected"' : '' }}>
                            Collaborative Leadership
                        </option>
                        <option id="capability" class="capability1" value="Communicating Across the Organization" {{ $data->cluster == 'Communicating Across the Organization' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Communicating Across the Organization' ? 'selected="selected"' : '' }}>
                            Communicating Across the Organization
                        </option>
                        <option id="capability" class="capability1" value="Communication 1 (Capability)" {{ $data->cluster == 'Communication 1 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Communication 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Communication 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Communication 2 (Leadership)" {{ $data->cluster == 'Communication 2 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Communication 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Communication 2 (Leadership)
                        </option>
                        <option id="capability" class="capability1" value="Competency Building" {{ $data->cluster == 'Competency Building' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Competency Building' ? 'selected="selected"' : '' }}>
                            Competency Building
                        </option>
                        <option id="capability" class="capability1" value="Conflict Resolution" {{ $data->cluster == 'Conflict Resolution' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Conflict Resolution' ? 'selected="selected"' : '' }}>
                            Conflict Resolution
                        </option>
                        <option id="capability" class="capability1" value="Create Authentic Connections" {{ $data->cluster == 'Create Authentic Connections' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Create Authentic Connections' ? 'selected="selected"' : '' }}>
                            Create Authentic Connections
                        </option>
                        <option id="capability" class="capability1" value="Credibility" {{ $data->cluster == 'Credibility' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Credibility' ? 'selected="selected"' : '' }}>
                            Credibility
                        </option>
                        <option id="capability" class="capability1" value="Critical Thinking" {{ $data->cluster == 'Critical Thinking' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Critical Thinking' ? 'selected="selected"' : '' }}>
                            Critical Thinking
                        </option>
                        <option id="capability" class="capability1" value="Design Thinking" {{ $data->cluster == 'Design Thinking' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Design Thinking' ? 'selected="selected"' : '' }}>
                            Design Thinking
                        </option>
                        <option id="society" class="society" value="Diversity & Inclusion 1 (Society)" {{ $data->cluster == 'Diversity & Inclusion 1 (Society)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Diversity & Inclusion 1 (Society)' ? 'selected="selected"' : '' }}>
                            Diversity & Inclusion 1 (Society)
                        </option>
                        <option id="culture" class="culture1" value="Diversity & Inclusion 2 (Culture)" {{ $data->cluster == 'Diversity & Inclusion 2 (Culture)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Diversity & Inclusion 2 (Culture)' ? 'selected="selected"' : '' }}>
                            Diversity & Inclusion 2 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Emotional Intelligence 1 (Leadership)" {{ $data->cluster == 'Emotional Intelligence 1 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Emotional Intelligence 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Emotional Intelligence 1 (Leadership)
                        </option>
                        <option id="culture" class="culture1" value="Emotional Intelligence 2 (Capability)" {{ $data->cluster == 'Emotional Intelligence 2 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Emotional Intelligence 2 (Capability)' ? 'selected="selected"' : '' }}>
                            Emotional Intelligence 2 (Capability)
                        </option>
                        <option id="capability" class="capability1" value="Enhance My Credibility" {{ $data->cluster == 'Enhance My Credibility' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Enhance My Credibility' ? 'selected="selected"' : '' }}>
                            Enhance My Credibility
                        </option>
                        <option id="strategy" class="strategy1" value="Goal Setting" {{ $data->cluster == 'Goal Setting' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Goal Setting' ? 'selected="selected"' : '' }}>
                            Goal Setting
                        </option>
                        <option id="capability" class="capability1" value="Growth Mindset" {{ $data->cluster == 'Growth Mindset' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Growth Mindset' ? 'selected="selected"' : '' }}>
                            Growth Mindset
                        </option>
                        <option id="capability" class="capability1" value="Improv" {{ $data->cluster == 'Improv' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Improv' ? 'selected="selected"' : '' }}>
                            Improv
                        </option>
                        <option id="capability" class="capability1" value="Influencing" {{ $data->cluster == 'Influencing' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Influencing' ? 'selected="selected"' : '' }}>
                            Influencing
                        </option>
                        <option id="leadership" class="leadership1" value="Kick Off (Leadership)" {{ $data->cluster == 'Kick Off (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Kick Off (Leadership)' ? 'selected="selected"' : '' }}>
                            Kick Off (Leadership)
                        </option>
                        <option id="culture" class="culture1" value="Kick Off 1 (Culture)" {{ $data->cluster == 'Kick Off 1 (Culture)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Kick Off 1 (Culture)' ? 'selected="selected"' : '' }}>
                            Kick Off 1 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership" {{ $data->cluster == 'Leadership' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership' ? 'selected="selected"' : '' }}>
                            Leadership
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Brand" {{ $data->cluster == 'Leadership Brand' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Brand' ? 'selected="selected"' : '' }}>
                            Leadership Brand
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Presence" {{ $data->cluster == 'Leadership Presence' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Presence' ? 'selected="selected"' : '' }}>
                            Leadership Presence
                        </option>
                        <option id="capability" class="capability1" value="Leadership Hybrid Teams 1 (Capability)" {{ $data->cluster == 'Leadership Hybrid Teams 1 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Hybrid Teams 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams 1 (Capability)
                        </option>
                        <option id="culture" class="culture1" value="Leadership Hybrid Teams 2 (Culture)" {{ $data->cluster == 'Leadership Hybrid Teams 2 (Culture)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Hybrid Teams 2 (Culture)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams 2 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Hybrid Teams  3 (Leadership)" {{ $data->cluster == 'Leadership Hybrid Teams  3 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Hybrid Teams  3 (Leadership)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams  3 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Leading with Questions" {{ $data->cluster == 'Leading with Questions' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leading with Questions' ? 'selected="selected"' : '' }}>
                            Leading with Questions
                        </option>
                        <option id="capability" class="capability1" value="Learning Evolution" {{ $data->cluster == 'Learning Evolution' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Learning Evolution' ? 'selected="selected"' : '' }}>
                            Learning Evolution
                        </option>
                        <option id="capability" class="capability1" value="Learning How to Set Goals" {{ $data->cluster == 'Learning How to Set Goals' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Learning How to Set Goals' ? 'selected="selected"' : '' }}>
                            Learning How to Set Goals
                        </option>
                        <option id="capability" class="capability1" value="Mental Health 1 (Capability)" {{ $data->cluster == 'Mental Health 1 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mental Health 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Mental Health 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Mental Health 2 (Leadership)" {{ $data->cluster == 'Mental Health 2 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mental Health 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Mental Health 2 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Mentoring" {{ $data->cluster == 'Mentoring' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mentoring' ? 'selected="selected"' : '' }}>
                            Mentoring
                        </option>
                        <option id="capability" class="capability1" value="Mindfulness" {{ $data->cluster == 'Mindfulness' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mindfulness' ? 'selected="selected"' : '' }}>
                            Mindfulness
                        </option>
                        <option id="strategy" class="strategy1" value="Mission & Vision Review" {{ $data->cluster == 'Mission & Vision Review' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mission & Vision Review' ? 'selected="selected"' : '' }}>
                            Mission & Vision Review
                        </option>
                        <option id="capability" class="capability1" value="Negotiation" {{ $data->cluster == 'Negotiation' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Negotiation' ? 'selected="selected"' : '' }}>
                            Negotiation
                        </option>
                        <option id="society" class="society" value="Parenting" {{ $data->cluster == 'Parenting' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Parenting' ? 'selected="selected"' : '' }}>
                            Parenting
                        </option>
                        <option id="capability" class="capability1" value="Problem-Solving" {{ $data->cluster == 'Problem-Solving' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Problem-Solving' ? 'selected="selected"' : '' }}>
                            Problem-Solving
                        </option>
                        <option id="capability" class="capability1" value="Productivity" {{ $data->cluster == 'Productivity' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Productivity' ? 'selected="selected"' : '' }}>
                            Productivity
                        </option>
                        <option id="capability" class="capability1" value="Project Management" {{ $data->cluster == 'Project Management' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Project Management' ? 'selected="selected"' : '' }}>
                            Project Management
                        </option>
                        <option id="capability" class="capability1" value="Psychological Safety" {{ $data->cluster == 'Psychological Safety' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Psychological Safety' ? 'selected="selected"' : '' }}>
                            Psychological Safety
                        </option>
                        <option id="capability" class="capability1" value="Purpose 1 (Capability)" {{ $data->cluster == 'Purpose 1 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Purpose 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Purpose 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Purpose 2 (Leadership)" {{ $data->cluster == 'Purpose 2 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Purpose 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Purpose 2 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Situational Leadership" {{ $data->cluster == 'Situational Leadership' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Situational Leadership' ? 'selected="selected"' : '' }}>
                            Situational Leadership
                        </option>
                        <option id="capability" class="capability1" value="Stakeholder Management" {{ $data->cluster == 'Stakeholder Management' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Stakeholder Management' ? 'selected="selected"' : '' }}>
                            Stakeholder Management
                        </option>
                        <option id="capability" class="capability1" value="Strategic Agility" {{ $data->cluster == 'Strategic Agility' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strategic Agility' ? 'selected="selected"' : '' }}>
                            Strategic Agility
                        </option>
                        <option id="capability" class="capability1" value="Strategic Execution" {{ $data->cluster == 'Strategic Execution' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strategic Execution' ? 'selected="selected"' : '' }}>
                            Strategic Execution
                        </option>
                        <option id="leadership" class="leadership1" value="Strategic Leadership" {{ $data->cluster == 'Strategic Leadership' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strategic Leadership' ? 'selected="selected"' : '' }}>
                            Strategic Leadership
                        </option>
                        <option id="capability" class="capability1" value="Strategic Thinking" {{ $data->cluster == 'Strategic Thinking' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strategic Thinking' ? 'selected="selected"' : '' }}>
                            Strategic Thinking
                        </option>
                        <option id="leadership" class="leadership1" value="Strengths 1 (Leadership)" {{ $data->cluster == 'Strengths 1 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strengths 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Strengths 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Strengths 2 (Teams)" {{ $data->cluster == 'Strengths 2 (Teams)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strengths 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Strengths 2 (Teams)
                        </option>
                        <option id="capability" class="capability1" value="Systems Thinking" {{ $data->cluster == 'Systems Thinking' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Systems Thinking' ? 'selected="selected"' : '' }}>
                            Systems Thinking
                        </option>
                        <option id="capability" class="capability1" value="Talent Building" {{ $data->cluster == 'Talent Building' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Talent Building' ? 'selected="selected"' : '' }}>
                            Talent Building
                        </option>
                        <option id="teams" class="teams1" value="Talent Building - F2F" {{ $data->cluster == 'Talent Building - F2F' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Talent Building - F2F' ? 'selected="selected"' : '' }}>
                            Talent Building - F2F
                        </option>
                        <option id="leadership" class="leadership1" value="Talent Building - Virtual 1 (Leadership)" {{ $data->cluster == 'Talent Building - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Talent Building - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Talent Building - Virtual 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Talent Building - Virtual 2 (Teams)" {{ $data->cluster == 'Talent Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Talent Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Talent Building - Virtual 2 (Teams)
                        </option>
                        <option id="teams" class="teams1" value="Team Engagement" {{ $data->cluster == 'Team Engagement' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Team Engagement' ? 'selected="selected"' : '' }}>
                            Team Engagement
                        </option>
                        <option id="teams" class="teams1" value="Team Engagement - F2F" {{ $data->cluster == 'Team Engagement - F2F' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Team Engagement - F2F' ? 'selected="selected"' : '' }}>
                            Team Engagement - F2F
                        </option>
                        <option id="leadership" class="leadership1" value="Team Engagement - Virtual 1 (Leadership)" {{ $data->cluster == 'Team Engagement - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Team Engagement - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Team Engagement - Virtual 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Team Building - Virtual 2 (Teams)" {{ $data->cluster == 'Team Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Team Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Team Building - Virtual 2 (Teams)
                        </option>
                        <option id="capability" class="capability1" value="Time and Energy Management" {{ $data->cluster == 'Time and Energy Management' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Time and Energy Management' ? 'selected="selected"' : '' }}>
                            Time and Energy Management
                        </option>
                        <option id="society" class="society" value="Unconscious Bias" {{ $data->cluster == 'Unconscious Bias' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Unconscious Bias' ? 'selected="selected"' : '' }}>
                            Unconscious Bias
                        </option>
                        <option id="strategy" class="strategy1" value="Visioning" {{ $data->cluster == 'Visioning' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Visioning' ? 'selected="selected"' : '' }}>
                            Visioning
                        </option>
                        <option id="capability" class="capability1" value="Work From Home" {{ $data->cluster == 'Work From Home' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Work From Home' ? 'selected="selected"' : '' }}>
                            Work From Home
                        </option>
                        <option id="capability" class="capability1" value="Workplace Learning" {{ $data->cluster == 'Workplace Learning' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Workplace Learning' ? 'selected="selected"' : '' }}>
                            Workplace Learning
                        </option>
                        <option id="strategy" class="strategy1" value="World Cafe" {{ $data->cluster == 'World Cafe' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'World Cafe' ? 'selected="selected"' : '' }}>
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
                @endif
                {{-- <fieldset class="form-group">
                    <select class="input js-mytooltip form-select cluster-dropdown @error('') is-invalid @enderror" name="cluster" id="cluster-dropdown1"
                        data-mytooltip-content="<i>
                            If not on the list, choose suggested cluster title at Core Area.
                            </i>"
                        data-mytooltip-theme="dark"
                        data-mytooltip-action="focus"
                        data-mytooltip-direction="top">
                        <option value="" id="notListed" class="notListed1">-- Not listed --</option>
                        <option id="capability" class="capability1" value="Above The Line" {{ $data->cluster == 'Above The Line' ? 'selected="selected"' : '' }}
                            {{ old('Above The Line') == 'Above The Line' ? 'selected="selected"' : '' }}>
                            Above The Line
                        </option>
                        <option id="culture" class="culture1" value="Action Learning" {{ $data->cluster == 'Action Learning' ? 'selected="selected"' : '' }}
                            {{ old('Action Learning') == 'Action Learning' ? 'selected="selected"' : '' }}>
                            Action Learning
                        </option>
                        <option id="culture" class="culture1" value="Anxiety" {{ $data->cluster == 'Anxiety' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Anxiety' ? 'selected="selected"' : '' }}>
                            Anxiety
                        </option>
                        <option id="capability" class="capability1" value="Art of Asking Questions" {{ $data->cluster == 'Art of Asking Questions' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Art of Asking Questions' ? 'selected="selected"' : '' }}>
                            Art of Asking Questions
                        </option>
                        <option id="capability" class="capability1" value="Building Effective Relationships" {{ $data->cluster == 'Building Effective Relationships' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Building Effective Relationships' ? 'selected="selected"' : '' }}>
                            Building Effective Relationships
                        </option>
                        <option id="capability" class="capability1" value="Business Analytics" {{ $data->cluster == 'Business Analytics' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Business Analytics' ? 'selected="selected"' : '' }}>
                            Business Analytics
                        </option>
                        <option id="capability" class="capability1" value="Business Storytelling" {{ $data->cluster == 'Business Storytelling' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Business Storytelling' ? 'selected="selected"' : '' }}>
                            Business Storytelling
                        </option>
                        <option id="leadership" class="leadership1" value="Change Management" {{ $data->cluster == 'Change Management' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Change Management' ? 'selected="selected"' : '' }}>
                            Change Management
                        </option>
                        <option id="leadership" class="leadership1" value="Coaching" {{ $data->cluster == 'Coaching' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Coaching' ? 'selected="selected"' : '' }}>
                            Coaching
                        </option>
                        <option id="leadership" class="leadership1" value="Collaborative Leadership" {{ $data->cluster == 'Collaborative Leadership' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Collaborative Leadership' ? 'selected="selected"' : '' }}>
                            Collaborative Leadership
                        </option>
                        <option id="capability" class="capability1" value="Communicating Across the Organization" {{ $data->cluster == 'Communicating Across the Organization' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Communicating Across the Organization' ? 'selected="selected"' : '' }}>
                            Communicating Across the Organization
                        </option>
                        <option id="capability" class="capability1" value="Communication 1 (Capability)" {{ $data->cluster == 'Communication 1 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Communication 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Communication 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Communication 2 (Leadership)" {{ $data->cluster == 'Communication 2 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Communication 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Communication 2 (Leadership)
                        </option>
                        <option id="capability" class="capability1" value="Competency Building" {{ $data->cluster == 'Competency Building' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Competency Building' ? 'selected="selected"' : '' }}>
                            Competency Building
                        </option>
                        <option id="capability" class="capability1" value="Conflict Resolution" {{ $data->cluster == 'Conflict Resolution' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Conflict Resolution' ? 'selected="selected"' : '' }}>
                            Conflict Resolution
                        </option>
                        <option id="capability" class="capability1" value="Create Authentic Connections" {{ $data->cluster == 'Create Authentic Connections' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Create Authentic Connections' ? 'selected="selected"' : '' }}>
                            Create Authentic Connections
                        </option>
                        <option id="capability" class="capability1" value="Credibility" {{ $data->cluster == 'Credibility' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Credibility' ? 'selected="selected"' : '' }}>
                            Credibility
                        </option>
                        <option id="capability" class="capability1" value="Critical Thinking" {{ $data->cluster == 'Critical Thinking' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Critical Thinking' ? 'selected="selected"' : '' }}>
                            Critical Thinking
                        </option>
                        <option id="capability" class="capability1" value="Design Thinking" {{ $data->cluster == 'Design Thinking' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Design Thinking' ? 'selected="selected"' : '' }}>
                            Design Thinking
                        </option>
                        <option id="society" class="society" value="Diversity & Inclusion 1 (Society)" {{ $data->cluster == 'Diversity & Inclusion 1 (Society)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Diversity & Inclusion 1 (Society)' ? 'selected="selected"' : '' }}>
                            Diversity & Inclusion 1 (Society)
                        </option>
                        <option id="culture" class="culture1" value="Diversity & Inclusion 2 (Culture)" {{ $data->cluster == 'Diversity & Inclusion 2 (Culture)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Diversity & Inclusion 2 (Culture)' ? 'selected="selected"' : '' }}>
                            Diversity & Inclusion 2 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Emotional Intelligence 1 (Leadership)" {{ $data->cluster == 'Emotional Intelligence 1 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Emotional Intelligence 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Emotional Intelligence 1 (Leadership)
                        </option>
                        <option id="culture" class="culture1" value="Emotional Intelligence 2 (Capability)" {{ $data->cluster == 'Emotional Intelligence 2 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Emotional Intelligence 2 (Capability)' ? 'selected="selected"' : '' }}>
                            Emotional Intelligence 2 (Capability)
                        </option>
                        <option id="capability" class="capability1" value="Enhance My Credibility" {{ $data->cluster == 'Enhance My Credibility' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Enhance My Credibility' ? 'selected="selected"' : '' }}>
                            Enhance My Credibility
                        </option>
                        <option id="strategy" class="strategy1" value="Goal Setting" {{ $data->cluster == 'Goal Setting' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Goal Setting' ? 'selected="selected"' : '' }}>
                            Goal Setting
                        </option>
                        <option id="capability" class="capability1" value="Growth Mindset" {{ $data->cluster == 'Growth Mindset' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Growth Mindset' ? 'selected="selected"' : '' }}>
                            Growth Mindset
                        </option>
                        <option id="capability" class="capability1" value="Improv" {{ $data->cluster == 'Improv' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Improv' ? 'selected="selected"' : '' }}>
                            Improv
                        </option>
                        <option id="capability" class="capability1" value="Influencing" {{ $data->cluster == 'Influencing' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Influencing' ? 'selected="selected"' : '' }}>
                            Influencing
                        </option>
                        <option id="leadership" class="leadership1" value="Kick Off (Leadership)" {{ $data->cluster == 'Kick Off (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Kick Off (Leadership)' ? 'selected="selected"' : '' }}>
                            Kick Off (Leadership)
                        </option>
                        <option id="culture" class="culture1" value="Kick Off 1 (Culture)" {{ $data->cluster == 'Kick Off 1 (Culture)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Kick Off 1 (Culture)' ? 'selected="selected"' : '' }}>
                            Kick Off 1 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership" {{ $data->cluster == 'Leadership' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership' ? 'selected="selected"' : '' }}>
                            Leadership
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Brand" {{ $data->cluster == 'Leadership Brand' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Brand' ? 'selected="selected"' : '' }}>
                            Leadership Brand
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Presence" {{ $data->cluster == 'Leadership Presence' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Presence' ? 'selected="selected"' : '' }}>
                            Leadership Presence
                        </option>
                        <option id="capability" class="capability1" value="Leadership Hybrid Teams 1 (Capability)" {{ $data->cluster == 'Leadership Hybrid Teams 1 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Hybrid Teams 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams 1 (Capability)
                        </option>
                        <option id="culture" class="culture1" value="Leadership Hybrid Teams 2 (Culture)" {{ $data->cluster == 'Leadership Hybrid Teams 2 (Culture)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Hybrid Teams 2 (Culture)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams 2 (Culture)
                        </option>
                        <option id="leadership" class="leadership1" value="Leadership Hybrid Teams  3 (Leadership)" {{ $data->cluster == 'Leadership Hybrid Teams  3 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leadership Hybrid Teams  3 (Leadership)' ? 'selected="selected"' : '' }}>
                            Leadership Hybrid Teams  3 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Leading with Questions" {{ $data->cluster == 'Leading with Questions' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Leading with Questions' ? 'selected="selected"' : '' }}>
                            Leading with Questions
                        </option>
                        <option id="capability" class="capability1" value="Learning Evolution" {{ $data->cluster == 'Learning Evolution' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Learning Evolution' ? 'selected="selected"' : '' }}>
                            Learning Evolution
                        </option>
                        <option id="capability" class="capability1" value="Learning How to Set Goals" {{ $data->cluster == 'Learning How to Set Goals' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Learning How to Set Goals' ? 'selected="selected"' : '' }}>
                            Learning How to Set Goals
                        </option>
                        <option id="capability" class="capability1" value="Mental Health 1 (Capability)" {{ $data->cluster == 'Mental Health 1 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mental Health 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Mental Health 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Mental Health 2 (Leadership)" {{ $data->cluster == 'Mental Health 2 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mental Health 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Mental Health 2 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Mentoring" {{ $data->cluster == 'Mentoring' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mentoring' ? 'selected="selected"' : '' }}>
                            Mentoring
                        </option>
                        <option id="capability" class="capability1" value="Mindfulness" {{ $data->cluster == 'Mindfulness' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mindfulness' ? 'selected="selected"' : '' }}>
                            Mindfulness
                        </option>
                        <option id="strategy" class="strategy1" value="Mission & Vision Review" {{ $data->cluster == 'Mission & Vision Review' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Mission & Vision Review' ? 'selected="selected"' : '' }}>
                            Mission & Vision Review
                        </option>
                        <option id="capability" class="capability1" value="Negotiation" {{ $data->cluster == 'Negotiation' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Negotiation' ? 'selected="selected"' : '' }}>
                            Negotiation
                        </option>
                        <option id="society" class="society" value="Parenting" {{ $data->cluster == 'Parenting' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Parenting' ? 'selected="selected"' : '' }}>
                            Parenting
                        </option>
                        <option id="capability" class="capability1" value="Problem-Solving" {{ $data->cluster == 'Problem-Solving' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Problem-Solving' ? 'selected="selected"' : '' }}>
                            Problem-Solving
                        </option>
                        <option id="capability" class="capability1" value="Productivity" {{ $data->cluster == 'Productivity' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Productivity' ? 'selected="selected"' : '' }}>
                            Productivity
                        </option>
                        <option id="capability" class="capability1" value="Project Management" {{ $data->cluster == 'Project Management' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Project Management' ? 'selected="selected"' : '' }}>
                            Project Management
                        </option>
                        <option id="capability" class="capability1" value="Psychological Safety" {{ $data->cluster == 'Psychological Safety' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Psychological Safety' ? 'selected="selected"' : '' }}>
                            Psychological Safety
                        </option>
                        <option id="capability" class="capability1" value="Purpose 1 (Capability)" {{ $data->cluster == 'Purpose 1 (Capability)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Purpose 1 (Capability)' ? 'selected="selected"' : '' }}>
                            Purpose 1 (Capability)
                        </option>
                        <option id="leadership" class="leadership1" value="Purpose 2 (Leadership)" {{ $data->cluster == 'Purpose 2 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Purpose 2 (Leadership)' ? 'selected="selected"' : '' }}>
                            Purpose 2 (Leadership)
                        </option>
                        <option id="leadership" class="leadership1" value="Situational Leadership" {{ $data->cluster == 'Situational Leadership' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Situational Leadership' ? 'selected="selected"' : '' }}>
                            Situational Leadership
                        </option>
                        <option id="capability" class="capability1" value="Stakeholder Management" {{ $data->cluster == 'Stakeholder Management' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Stakeholder Management' ? 'selected="selected"' : '' }}>
                            Stakeholder Management
                        </option>
                        <option id="capability" class="capability1" value="Strategic Agility" {{ $data->cluster == 'Strategic Agility' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strategic Agility' ? 'selected="selected"' : '' }}>
                            Strategic Agility
                        </option>
                        <option id="capability" class="capability1" value="Strategic Execution" {{ $data->cluster == 'Strategic Execution' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strategic Execution' ? 'selected="selected"' : '' }}>
                            Strategic Execution
                        </option>
                        <option id="leadership" class="leadership1" value="Strategic Leadership" {{ $data->cluster == 'Strategic Leadership' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strategic Leadership' ? 'selected="selected"' : '' }}>
                            Strategic Leadership
                        </option>
                        <option id="capability" class="capability1" value="Strategic Thinking" {{ $data->cluster == 'Strategic Thinking' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strategic Thinking' ? 'selected="selected"' : '' }}>
                            Strategic Thinking
                        </option>
                        <option id="leadership" class="leadership1" value="Strengths 1 (Leadership)" {{ $data->cluster == 'Strengths 1 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strengths 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Strengths 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Strengths 2 (Teams)" {{ $data->cluster == 'Strengths 2 (Teams)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Strengths 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Strengths 2 (Teams)
                        </option>
                        <option id="capability" class="capability1" value="Systems Thinking" {{ $data->cluster == 'Systems Thinking' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Systems Thinking' ? 'selected="selected"' : '' }}>
                            Systems Thinking
                        </option>
                        <option id="capability" class="capability1" value="Talent Building" {{ $data->cluster == 'Talent Building' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Talent Building' ? 'selected="selected"' : '' }}>
                            Talent Building
                        </option>
                        <option id="teams" class="teams1" value="Talent Building - F2F" {{ $data->cluster == 'Talent Building - F2F' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Talent Building - F2F' ? 'selected="selected"' : '' }}>
                            Talent Building - F2F
                        </option>
                        <option id="leadership" class="leadership1" value="Talent Building - Virtual 1 (Leadership)" {{ $data->cluster == 'Talent Building - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Talent Building - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Talent Building - Virtual 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Talent Building - Virtual 2 (Teams)" {{ $data->cluster == 'Talent Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Talent Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Talent Building - Virtual 2 (Teams)
                        </option>
                        <option id="teams" class="teams1" value="Team Engagement" {{ $data->cluster == 'Team Engagement' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Team Engagement' ? 'selected="selected"' : '' }}>
                            Team Engagement
                        </option>
                        <option id="teams" class="teams1" value="Team Engagement - F2F" {{ $data->cluster == 'Team Engagement - F2F' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Team Engagement - F2F' ? 'selected="selected"' : '' }}>
                            Team Engagement - F2F
                        </option>
                        <option id="leadership" class="leadership1" value="Team Engagement - Virtual 1 (Leadership)" {{ $data->cluster == 'Team Engagement - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Team Engagement - Virtual 1 (Leadership)' ? 'selected="selected"' : '' }}>
                            Team Engagement - Virtual 1 (Leadership)
                        </option>
                        <option id="teams" class="teams1" value="Team Building - Virtual 2 (Teams)" {{ $data->cluster == 'Team Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Team Building - Virtual 2 (Teams)' ? 'selected="selected"' : '' }}>
                            Team Building - Virtual 2 (Teams)
                        </option>
                        <option id="capability" class="capability1" value="Time and Energy Management" {{ $data->cluster == 'Time and Energy Management' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Time and Energy Management' ? 'selected="selected"' : '' }}>
                            Time and Energy Management
                        </option>
                        <option id="society" class="society" value="Unconscious Bias" {{ $data->cluster == 'Unconscious Bias' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Unconscious Bias' ? 'selected="selected"' : '' }}>
                            Unconscious Bias
                        </option>
                        <option id="strategy" class="strategy1" value="Visioning" {{ $data->cluster == 'Visioning' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Visioning' ? 'selected="selected"' : '' }}>
                            Visioning
                        </option>
                        <option id="capability" class="capability1" value="Work From Home" {{ $data->cluster == 'Work From Home' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Work From Home' ? 'selected="selected"' : '' }}>
                            Work From Home
                        </option>
                        <option id="capability" class="capability1" value="Workplace Learning" {{ $data->cluster == 'Workplace Learning' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'Workplace Learning' ? 'selected="selected"' : '' }}>
                            Workplace Learning
                        </option>
                        <option id="strategy" class="strategy1" value="World Cafe" {{ $data->cluster == 'World Cafe' ? 'selected="selected"' : '' }}
                            {{ old('cluster') == 'World Cafe' ? 'selected="selected"' : '' }}>
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
                </fieldset> --}}
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 div-notListed" id="div-notListed1" style="display: none">
        <div class="form-group has-icon-right">
            <label class="fw-bold required">Cluster</label>
            <div class="position-relative">
                @if(Route::is('form/customizedEngagement/new') )
                    <input type="text" class="form-control input-notListed @error('input_cluster') is-invalid @enderror" value="{{ old('input_cluster') }}" name="cluster" id="input-notListed1" disabled>
                @else
                    <input type="text" class="form-control input-notListed @error('input_cluster') is-invalid @enderror" value="{{ $data->cluster }}" name="cluster" id="input-notListed1" disabled>
                @endif
                {{-- <input type="text" class="form-control input-notListed @error('') is-invalid @enderror" value="{{ $data->cluster }}"
                    name="cluster[]" id="input-notListed1" disabled> --}}
                <div class="form-control-icon">
                    <a href="javascript:void(0)" class="remove-not-listed" name="cluster" id="remove-not-listed1">
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
                @if(Route::is('form/customizedEngagement/new') )
                    <fieldset class="form-group">
                        <select class="form-select core-valueInput @error('core_area') is-invalid @enderror" name="core_area" id="core-valueInput1">
                            <option value="Culture" {{ old('core_area') == 'Culture' ? 'selected="selected"' : '' }}>Culture</option>
                            <option value="Capability" {{ old('core_area') == 'Capability' ? 'selected="selected"' : '' }}>Capability</option>
                            <option value="Leadership" {{ old('core_area') == 'Leadership' ? 'selected="selected"' : '' }}>Leadership</option>
                            <option value="Social" {{ old('core_area') == 'Social' ? 'selected="selected"' : '' }}>Social</option>
                            <option value="Strategy" {{ old('core_area') == 'Strategy' ? 'selected="selected"' : '' }}>Strategy</option>
                            <option value="Teams" {{ old('core_area') == 'Teams' ? 'selected="selected"' : '' }}>Teams</option>
                        </select>
                    </fieldset>
                @else
                    <fieldset class="form-group">
                        <select class="form-select core-valueInput @error('') is-invalid @enderror" name="core_area" id="core-valueInput1">
                            <option value="Culture" {{ $data->core_area == 'Culture' ? 'selected="selected"' : '' }}>Culture</option>
                            <option value="Capability" {{ $data->core_area == 'Capability' ? 'selected="selected"' : '' }}>Capability</option>
                            <option value="Leadership" {{ $data->core_area == 'Leadership' ? 'selected="selected"' : '' }}>Leadership</option>
                            <option value="Social" {{ $data->core_area == 'Social' ? 'selected="selected"' : '' }}>Social</option>
                            <option value="Strategy" {{ $data->core_area == 'Strategy' ? 'selected="selected"' : '' }}>Strategy</option>
                            <option value="Teams" {{ $data->core_area == 'Teams' ? 'selected="selected"' : '' }}>Teams</option>
                        </select>
                    </fieldset>
                @endif

                {{-- <fieldset class="form-group">
                    <select class="form-select core-valueInput @error('') is-invalid @enderror" name="core_area" id="core-valueInput1">
                        <option value="Culture" {{ $data->core_area == 'Culture' ? 'selected="selected"' : '' }}>Culture</option>
                        <option value="Capability" {{ $data->core_area == 'Capability' ? 'selected="selected"' : '' }}>Capability</option>
                        <option value="Leadership" {{ $data->core_area == 'Leadership' ? 'selected="selected"' : '' }}>Leadership</option>
                        <option value="Social" {{ $data->core_area == 'Social' ? 'selected="selected"' : '' }}>Social</option>
                        <option value="Strategy" {{ $data->core_area == 'Strategy' ? 'selected="selected"' : '' }}>Strategy</option>
                        <option value="Teams" {{ $data->core_area == 'Teams' ? 'selected="selected"' : '' }}>Teams</option>
                    </select>
                </fieldset> --}}
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

