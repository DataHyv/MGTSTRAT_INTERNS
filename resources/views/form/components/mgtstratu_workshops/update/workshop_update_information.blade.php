{{-- datepicker css --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
{{-- timepicker css --}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
{{-- tooltip css --}}
<link rel="stylesheet" href="{{ url('css/tooltip-css/jquery.mytooltip.min.css') }}">
{{--
<link rel="stylesheet" href="{{ url('css/tooltip-css/demo/style.css') }}"> --}}
{{-- datepicker js --}}
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
{{-- timepicker js --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
{{-- tooltip js --}}
{{-- <script src="{{ url('js/tooltipJs/jquery-1.11.3.min.js') }}"></script> --}}
<script src="{{ url('js/tooltipJs/jquery.mytooltip.js') }}"></script>
<script src="{{ url('js/tooltipJs/demo/script.js') }}"></script>

<!------------ CARD HEADER ------------>
<div class="card-header">
    <h4 class="card-title">Information</h4>
</div>
<!------------ END CARD HEADER ------------>

<!------------ FORM BODY ------------>
<div class="form-body container">
    <div class="form-group row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-2" id="dropdown-ga" style="visibility: hidden;">
        </div>

        <!------------ CLIENT NAME ------------>
        <div class="form-group row">
            <div class="col-md-3">
                <label class="fw-bold required">Client: </label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-icon-left">
                    <div class="position-relative">
                        <select class="select select2s-hidden-accessible @error('client_id') is-invalid @enderror"
                        id="client_id"
                        name="client_id"
                        style="width: 100%;"
                        tabindex="-1"
                        aria-hidden="true">

                            <option value="Select">-- Select --</option>
                            @foreach ($data2 as $client)
                                <option @if ($client->id === (int)$data->client_id) selected @endif value="{{ $client->id }}">
                                    {{ $client->company_name }}
                                </option>
                            @endforeach
                        </select>

                        @error('client_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <!------------ END ------------>

        <!------------ ENGAGEMENT TITLE AND PILOT SWITCH ------------>
        <div class="col-md-3">
            <label class="fw-bold required">Engagement Title: </label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('') is-invalid @enderror" 
                    value="{{ $data->engagement_title }}" 
                    name="engagement_title" id="">
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
        <!------------ END ------------>
        
        <!------------ WORKSHOP TITLE ------------>
        <div class="col-md-3">
            <label class="fw-bold required">MGTSTRAT-U Workshop Title</label>
        </div>

        <div class="col-md-7">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="workshop_title" id="Mgtstrat-U-Titles" data-mytooltip-content="<i>
                            If not on the list, choose suggested cluster title at Core Area.
                            </i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                            <option class="not-listed" id="not-listed" value="Not Listed" selected>-- Not listed --</option>
                            <option class="mindfullness" id="mindfullness" value="A Case for Mindfulness: A Strategic Approach to Stress" 
                            {{ $data->workshop_title == 'A Case for Mindfulness: A Strategic Approach to Stress'
                                ? 'selected="selected"' : '' }} >
                                A Case for Mindfulness: A Strategic Approach to Stress
                            </option>
                            <option class="diversity-and-inclusion" id="" value="ABC's of Gen XYZ"
                            {{ $data->workshop_title == 'ABC\'s of Gen XYZ'
                                ? 'selected="selected"' : '' }} >
                                ABC's of Gen XYZ
                            </option>
                            <option class="growth-mindset" id="" value="Activating the Growth Mindset"
                            {{ $data->workshop_title == 'Activating the Growth Mindset'
                                ? 'selected="selected"' : '' }} >
                                Activating the Growth Mindset
                            </option>
                            <option class="anxiety" id="" value="Anxiety Parties"
                            {{ $data->workshop_title == 'Anxiety Parties'
                                ? 'selected="selected"' : '' }} >
                                Anxiety Parties
                            </option>
                            <option class="leadership-brand" id="" value="Brand Called You"
                            {{ $data->workshop_title == 'Brand Called You'
                                ? 'selected="selected"' : '' }} >
                                Brand Called You
                            </option>
                            <option class="virtual-team-building" id="" value="Choose Your Own Adventure"
                            {{ $data->workshop_title == 'Choose Your Own Adventure'
                                ? 'selected="selected"' : '' }} >
                                Choose Your Own Adventure
                            </option>
                            <option class="conflict-resolution" id="" value="Co-operative Power and the Willingness to Resolve"
                            {{ $data->workshop_title == 'Co-operative Power and the Willingness to Resolve'
                                ? 'selected="selected"' : '' }} >
                                Co-operative Power and the Willingness to Resolve
                            </option>
                            <option class="collaborative-leadership" id="" value="Collaboration on the Fly"
                            {{ $data->workshop_title == 'Collaboration on the Fly'
                                ? 'selected="selected"' : '' }} >
                                Collaboration on the Fly
                            </option>
                            <option class="collaborative-leadership" id="" value="Creating Digital Bonds (Collborative Leadership)"
                            {{ $data->workshop_title == 'Creating Digital Bonds (Collborative Leadership)'
                                ? 'selected="selected"' : '' }} >
                                Creating Digital Bonds (Collborative Leadership)
                            </option>
                            <option class="creativity" id="" value="Creative Thinking in the Workplace"
                            {{ $data->workshop_title == 'Creative Thinking in the Workplace'
                                ? 'selected="selected"' : '' }} >
                                Creative Thinking in the Workplace
                            </option>
                            <option class="virtual-team-building" id="" value="Culture Driven Team Building"
                            {{ $data->workshop_title == 'Culture Driven Team Building'
                                ? 'selected="selected"' : '' }} >
                                Culture Driven Team Building
                            </option>
                            <option class="mental-health" id="" value="Deep Dive: Psychological Resilience"
                            {{ $data->workshop_title == 'Deep Dive: Psychological Resilience'
                                ? 'selected="selected"' : '' }} >
                                Deep Dive: Psychological Resilience
                            </option>
                            <option class="mental-health" id="" value="Deep Dive: The Role of Positive Emotions"
                            {{ $data->workshop_title == 'Deep Dive: The Role of Positive Emotions'
                                ? 'selected="selected"' : '' }} >
                                Deep Dive: The Role of Positive Emotions
                            </option>
                            <option class="strengths" id="" value="Deep Diving with Strengths"
                            {{ $data->workshop_title == 'Deep Diving with Strengths'
                                ? 'selected="selected"' : '' }} >
                                Deep Diving with Strengths
                            </option>
                            <option class="learning-evolution" id="" value="Designing Slides for Non-Designers"
                            {{ $data->workshop_title == 'Designing Slides for Non-Designers'
                                ? 'selected="selected"' : '' }} >
                                Designing Slides for Non-Designers
                            </option>
                            <option class="learning-evolution" id="" value="Designing Virtual Learning"
                            {{ $data->workshop_title == 'Designing Virtual Learning'
                                ? 'selected="selected"' : '' }} >
                                Designing Virtual Learning
                            </option>
                            <option class="growth-mindset" id="" value="Developing the Growth Mindset"
                            {{ $data->workshop_title == 'Developing the Growth Mindset'
                                ? 'selected="selected"' : '' }} >
                                Developing the Growth Mindset
                            </option>
                            <option class="communication" id="" value="Effective Virtual Communication"
                            {{ $data->workshop_title == 'Effective Virtual Communication'
                                ? 'selected="selected"' : '' }} >
                                Effective Virtual Communication
                            </option>
                            <option class="everyday-innovation" id="" value="Everyday Workplace Innovation"
                            {{ $data->workshop_title == 'Everyday Workplace Innovation'
                                ? 'selected="selected"' : '' }} >
                                Everyday Workplace Innovation
                            </option>
                            <option class="learning-evolution" id="" value="Facilitating Virtual Learning"
                            {{ $data->workshop_title == 'Facilitating Virtual Learning'
                                ? 'selected="selected"' : '' }} >
                                Facilitating Virtual Learning
                            </option>
                            <option class="facilitating-virtual-meetings" id="" value="Facilitating Virtual Meetings"
                            {{ $data->workshop_title == 'Facilitating Virtual Meetings'
                                ? 'selected="selected"' : '' }} >
                                Facilitating Virtual Meetings
                            </option>
                            <option class="feedback" id="" value="Feedback with Candor (Feedback)"
                            {{ $data->workshop_title == 'Feedback with Candor (Feedback)'
                                ? 'selected="selected"' : '' }} >
                                Feedback with Candor (Feedback)
                            </option>
                            <option class="radical-candor" id="" value="Feedback with Candor (Radical Candor)"
                            {{ $data->workshop_title == 'Feedback with Candor (Radical Candor)'
                                ? 'selected="selected"' : '' }} >
                                Feedback with Candor (Radical Candor)
                            </option>
                            <option class="find-your-why" id="" value="Find Your Why"
                            {{ $data->workshop_title == 'Find Your Why'
                                ? 'selected="selected"' : '' }} >
                                Find Your Why
                            </option>
                            <option class="conflict-resolution" id="" value="Foundations of Conflict Resolution"
                            {{ $data->workshop_title == 'Foundations of Conflict Resolution'
                                ? 'selected="selected"' : '' }} >
                                Foundations of Conflict Resolution
                            </option>
                            <option class="strategic-agility" id="" value="Foundations of Strategic Agility"
                            {{ $data->workshop_title == 'Foundations of Strategic Agility'
                                ? 'selected="selected"' : '' }} >
                                Foundations of Strategic Agility
                            </option>
                            <option class="strengths" id="" value="Foundations of Strengths Based Development"
                            {{ $data->workshop_title == 'Foundations of Strengths Based Development'
                                ? 'selected="selected"' : '' }} >
                                Foundations of Strengths Based Development
                            </option>
                            <option class="collaborative-leadership" id="" value="Fundamentals of Collaboration"
                            {{ $data->workshop_title == 'Fundamentals of Collaboration'
                                ? 'selected="selected"' : '' }} >
                                Fundamentals of Collaboration
                            </option>
                            <option class="future-proof-leadership" id="" value="Future Proof Leadership"
                            {{ $data->workshop_title == 'Future Proof Leadership'
                                ? 'selected="selected"' : '' }} >
                                Future Proof Leadership
                            </option>
                            <option class="business-transformation" id="" value="Future-Backwards"
                            {{ $data->workshop_title == 'Future-Backwards'
                                ? 'selected="selected"' : '' }} >
                                Future-Backwards
                            </option>
                            <option class="game-night" id="" value="Game Nights"
                            {{ $data->workshop_title == 'Game Nights'
                                ? 'selected="selected"' : '' }} >
                                Game Nights
                            </option>
                            <option class="feedback" id="" value="Giving and Receiving Feedback"
                            {{ $data->workshop_title == 'Giving and Receiving Feedback'
                                ? 'selected="selected"' : '' }} >
                                Giving and Receiving Feedback
                            </option>
                            <option class="business-transformation" id="" value="Graphic Gameplanning"
                            {{ $data->workshop_title == 'Graphic Gameplanning'
                                ? 'selected="selected"' : '' }} >
                                Graphic Gameplanning
                            </option>
                            <option class="heroes-assemble" id="" value="Heroes Assemble"
                            {{ $data->workshop_title == 'Heroes Assemble'
                                ? 'selected="selected"' : '' }} >
                                Heroes Assemble
                            </option>
                            <option class="diversity-inclusion" id="" value="Inclusion is your Competitive Advantage"
                            {{ $data->workshop_title == 'Inclusion is your Competitive Advantage'
                                ? 'selected="selected"' : '' }} >
                                Inclusion is your Competitive Advantage
                            </option>
                            <option class="improv" id="" value="Just Say &quot;Yes, And&quot; to Improv"
                            {{ $data->workshop_title == 'Just Say "Yes, And" to Improv'
                                ? 'selected="selected"' : '' }} >
                                Just Say "Yes, And" to Improv
                            </option>
                            <option class="leading-hybrid-teams" id="" value="Leading Hybrid Teams"
                            {{ $data->workshop_title == 'Leading Hybrid Teams'
                                ? 'selected="selected"' : '' }} >
                                Leading Hybrid Teams
                            </option>
                            <option class="leading-virtual-teams" id="" value="Leading Virtual Teams"
                            {{ $data->workshop_title == 'Leading Virtual Teams'
                                ? 'selected="selected"' : '' }} >
                                Leading Virtual Teams
                            </option>
                            <option class="leading-emotional-intelligence" id="" value="Leading with Emotional Intelligence"
                            {{ $data->workshop_title == 'Leading with Emotional Intelligence'
                                ? 'selected="selected"' : '' }} >
                                Leading with Emotional Intelligence
                            </option>
                            <option class="growth-mindset" id="" value="Leading with the Growth Mindset"
                            {{ $data->workshop_title == 'Leading with the Growth Mindset'
                                ? 'selected="selected"' : '' }} >
                                Leading with the Growth Mindset
                            </option>
                            <option class="lip-sync-battle" id="" value="Lip Sync Battle"
                            {{ $data->workshop_title == 'Lip Sync Battle'
                                ? 'selected="selected"' : '' }} >
                                Lip Sync Battle
                            </option>
                            <option class="find-your-why" id="" value="Live Your Why"
                            {{ $data->workshop_title == 'Live Your Why'
                                ? 'selected="selected"' : '' }} >
                                Live Your Why
                            </option>
                            <option class="habit-formation" id="" value="Magic of Habits"
                            {{ $data->workshop_title == 'Magic of Habits'
                                ? 'selected="selected"' : '' }} >
                                Magic of Habits
                            </option>
                            <option class="emotional-intelligence" id="" value="Making Emotional Intelligence Visible"
                            {{ $data->workshop_title == 'Making Emotional Intelligence Visible'
                                ? 'selected="selected"' : '' }} >
                                Making Emotional Intelligence Visible
                            </option>
                            <option class="emotional-intelligence" id="" value="Managing Relationship thru EI"
                            {{ $data->workshop_title == 'Managing Relationship thru EI'
                                ? 'selected="selected"' : '' }} >
                                Managing Relationship thru EI
                            </option>
                            <option class="conflict-resolution" id="" value="Mapping the Conflict and Design Options"
                            {{ $data->workshop_title == 'Mapping the Conflict and Design Options'
                                ? 'selected="selected"' : '' }} >
                                Mapping the Conflict and Design Options
                            </option>
                            <option class="mental-health" id="" value="Mental Health Foundations"
                            {{ $data->workshop_title == 'Mental Health Foundations'
                                ? 'selected="selected"' : '' }} >
                                Mental Health Foundations
                            </option>
                            <option class="virtual-team-building" id="" value="Points of You"
                            {{ $data->workshop_title == 'Points of You'
                                ? 'selected="selected"' : '' }} >
                                Points of You
                            </option>
                            <option class="influencing" id="" value="Power of Influence"
                            {{ $data->workshop_title == 'Power of Influence'
                                ? 'selected="selected"' : '' }} >
                                Power of Influence
                            </option>
                            <option class="productivity" id="" value="Productivity Sprint: Designing your Flow State"
                            {{ $data->workshop_title == 'Productivity Sprint: Designing your Flow State'
                                ? 'selected="selected"' : '' }} >
                                Productivity Sprint: Designing your Flow State
                            </option>
                            <option class="productivity" id="" value="Productivity Sprint: Flow State on Demand"
                            {{ $data->workshop_title == 'Productivity Sprint: Flow State on Demand'
                                ? 'selected="selected"' : '' }} >
                                Productivity Sprint: Flow State on Demand
                            </option>
                            <option class="anxiety" id="" value="Riding the Wave"
                            {{ $data->workshop_title == 'Riding the Wave'
                                ? 'selected="selected"' : '' }} >
                                Riding the Wave
                            </option>
                            <option class="psychological-safety" id="" value="Secret Ingredient to High Performing Teams"
                            {{ $data->workshop_title == 'Secret Ingredient to High Performing Teams'
                                ? 'selected="selected"' : '' }} >
                                Secret Ingredient to High Performing Teams
                            </option>
                            <option class="virtual-team-building" id="" value="Squid Games"
                            {{ $data->workshop_title == 'Squid Games'
                                ? 'selected="selected"' : '' }} >
                                Squid Games
                            </option>
                            <option class="emotional-intelligence" id="" value="The Emotional Agility Toolbox"
                            {{ $data->workshop_title == 'The Emotional Agility Toolbox'
                                ? 'selected="selected"' : '' }} >
                                The Emotional Agility Toolbox
                            </option>
                            <option class="the-heist" id="" value="The Heist"
                            {{ $data->workshop_title == 'The Heist'
                                ? 'selected="selected"' : '' }} >
                                The Heist
                            </option>
                            <option class="the-lab" id="" value="The Lab"
                            {{ $data->workshop_title == 'The Lab'
                                ? 'selected="selected"' : '' }} >
                                The Lab
                            </option>
                            <option class="growth-mindset" id="" value="The Power of Yet (Growth MIndset)"
                            {{ $data->workshop_title == 'The Power of Yet (Growth MIndset)'
                                ? 'selected="selected"' : '' }} >
                                The Power of Yet (Growth MIndset)
                            </option>
                            <option class="productivity" id="" value="Time and Energy Management: Rethinking our Productivity Models"
                            {{ $data->workshop_title == 'Time and Energy Management: Rethinking our Productivity Models'
                                ? 'selected="selected"' : '' }} >
                                Time and Energy Management: Rethinking our Productivity Models
                            </option>
                            <option class="diversity-inclusion" id="" value="Unconscious Bias"
                            {{ $data->workshop_title == 'Unconscious Bias'
                                ? 'selected="selected"' : '' }} >
                                Unconscious Bias
                            </option>
                            <option class="virtual-team-building" id="" value="Virtual Teaming"
                            {{ $data->workshop_title == 'Virtual Teaming'
                                ? 'selected="selected"' : '' }} >
                                Virtual Teaming
                            </option>
                            <option class="mindfullness" id="" value="Win over Anxiety: Addressing the Worrisome Thoughts in your Head"
                            {{ $data->workshop_title == 'Win over Anxiety: Addressing the Worrisome Thoughts in your Head'
                                ? 'selected="selected"' : '' }} >
                                Win over Anxiety: Addressing the Worrisome Thoughts in your Head
                            </option>
                            <option class="work-from-home" id="" value="Work from Home Essentials"
                            {{ $data->workshop_title == 'Work from Home Essentials'
                                ? 'selected="selected"' : '' }} >
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
        <!------------ END ------------>

        <!------------ CLUSTER ------------>
        <div class="col-md-3">
            <label class="fw-bold required">CLUSTER</label>
        </div>
        <div class="col-md-7">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="form-select @error('') is-invalid @enderror" name="cluster" id="cluster" >
                            <option value="Anxiety" {{ $data->cluster == 'Anxiety' ? 'selected="selected"' : '' }} >Anxiety</option>
                            <option value="Business Transformation" {{ $data->cluster == 'Business Transformation' ? 'selected="selected"' : '' }} >Business Transformation</option>
                            <option value="Collaborative Leadership" {{ $data->cluster == 'Collaborative Leadership' ? 'selected="selected"' : '' }} >Collaborative Leadership</option>
                            <option value="Communication" {{ $data->cluster == 'Communication' ? 'selected="selected"' : '' }} >Communication</option>
                            <option value="Conflict Resolution" {{ $data->cluster == 'Conflict Resolution' ? 'selected="selected"' : '' }} >Conflict Resolution</option>
                            <option value="Creativity" {{ $data->cluster == 'Creativity' ? 'selected="selected"' : '' }} >Creativity</option>
                            <option value="Diversity & Inclusion" {{ $data->cluster == 'Diversity & Inclusion' ? 'selected="selected"' : '' }} >Diversity & Inclusion</option>
                            <option value="Emotional Intelligence" {{ $data->cluster == 'Emotional Intelligence' ? 'selected="selected"' : '' }} >Emotional Intelligence</option>
                            <option value="Everyday Innovation" {{ $data->cluster == 'Everyday Innovation' ? 'selected="selected"' : '' }} >Everyday Innovation</option>
                            <option value="Facilitating Virtual Meetings" {{ $data->cluster == 'Facilitating Virtual Meetings' ? 'selected="selected"' : '' }} >Facilitating Virtual Meetings</option>
                            <option value="Feedback" {{ $data->cluster == 'Feedback' ? 'selected="selected"' : '' }} >Feedback</option>
                            <option value="Find Your Why" {{ $data->cluster == 'Find Your Why' ? 'selected="selected"' : '' }} >Find Your Why</option>
                            <option value="Future Proof Leadership" {{ $data->cluster == 'Future Proof Leadership' ? 'selected="selected"' : '' }} >Future Proof Leadership</option>
                            <option value="Game Night" {{ $data->cluster == 'Game Night' ? 'selected="selected"' : '' }} >Game Night</option>
                            <option value="Growth Mindset" {{ $data->cluster == 'Growth Mindset' ? 'selected="selected"' : '' }} >Growth Mindset</option>
                            <option value="Habit Formation" {{ $data->cluster == 'Habit Formation' ? 'selected="selected"' : '' }} >Habit Formation</option>
                            <option value="Heroes Assemble" {{ $data->cluster == 'Heroes Assemble' ? 'selected="selected"' : '' }} >Heroes Assemble</option>
                            <option value="Improv" {{ $data->cluster == 'Improv' ? 'selected="selected"' : '' }} >Improv</option>
                            <option value="Influencing" {{ $data->cluster == 'Influencing' ? 'selected="selected"' : '' }} >Influencing</option>
                            <option value="Leadership Brand" {{ $data->cluster == 'Leadership Brand' ? 'selected="selected"' : '' }} >Leadership Brand</option>
                            <option value="Leading Hybrid Teams" {{ $data->cluster == 'Leading Hybrid Teams' ? 'selected="selected"' : '' }} >Leading Hybrid Teams</option>
                            <option value="Leading Virtual Teams" {{ $data->cluster == 'Leading Virtual Teams' ? 'selected="selected"' : '' }} >Leading Virtual Teams</option>
                            <option value="Leading with Emotional Intelligence" {{ $data->cluster == 'Leading with Emotional Intelligence' ? 'selected="selected"' : '' }} >Leading with Emotional Intelligence</option>
                            <option value="Learning Evolution" {{ $data->cluster == 'Learning Evolution' ? 'selected="selected"' : '' }} >Learning Evolution</option>
                            <option value="Lip Sync Battle" {{ $data->cluster == 'Lip Sync Battle' ? 'selected="selected"' : '' }} >Lip Sync Battle</option>
                            <option value="Mental Health" {{ $data->cluster == 'Mental Health' ? 'selected="selected"' : '' }} >Mental Health</option>
                            <option value="Mindfullness" {{ $data->cluster == 'Mindfullness' ? 'selected="selected"' : '' }} >Mindfullness</option>
                            <option value="Productivity" {{ $data->cluster == 'Productivity' ? 'selected="selected"' : '' }} >Productivity</option>
                            <option value="Psychological Safety" {{ $data->cluster == 'Psychological Safety' ? 'selected="selected"' : '' }} >Psychological Safety</option>
                            <option value="Radical Candor" {{ $data->cluster == 'Radical Candor' ? 'selected="selected"' : '' }} >Radical Candor</option>
                            <option value="Strategic Agility" {{ $data->cluster == 'Strategic Agility' ? 'selected="selected"' : '' }} >Strategic Agility</option>
                            <option value="Strengths" {{ $data->cluster == 'Strengths' ? 'selected="selected"' : '' }} >Strengths</option>
                            <option value="The Heist" {{ $data->cluster == 'The Heist' ? 'selected="selected"' : '' }} >The Heist</option>
                            <option value="The Lab" {{ $data->cluster == 'The Lab' ? 'selected="selected"' : '' }} >The Lab</option>
                            <option value="Virtual Team Building" {{ $data->cluster == 'Virtual Team Building' ? 'selected="selected"' : '' }} >Virtual Team Building</option>
                            <option value="Work From Home" {{ $data->cluster == 'Work From Home' ? 'selected="selected"' : '' }} >Work From Home</option>
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
        <!------------ END ------------>

        <!------------ INTELLIGENCE ------------>
        <div class="col-md-3">
            <label class="fw-bold required">INTELLIGENCE:</label>
        </div>
        <div class="col-md-7">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    {{-- <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}"
                    name="" id="core-valueInput" disabled> --}}
                    <fieldset class="form-group">
                        <select class="form-select @error('') is-invalid @enderror" name="intelligence" id="intelligence">
                            <option value="Contextual" {{ $data->cluster == 'Contextual' ? 'selected="selected"' : '' }} >Contextual</option>
                            <option value="Generative" {{ $data->cluster == 'Generative' ? 'selected="selected"' : '' }} >Generative</option>
                            <option value="Moral" {{ $data->cluster == 'Moral' ? 'selected="selected"' : '' }} >Moral</option>
                            <option value="Social & Emotional" {{ $data->cluster == 'Social & Emotional' ? 'selected="selected"' : '' }} >Social & Emotional</option>
                            <option value="Technological" {{ $data->cluster == 'Technological' ? 'selected="selected"' : '' }} >Technological</option>
                            <option value="Transformative" {{ $data->cluster == 'Transformative' ? 'selected="selected"' : '' }} >Transformative</option>
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
        <!------------ END ------------>

        <!------------ NUMBER OF PAX ------------>
        <div class="col-md-3">
            <label class="fw-bold required">Number of pax </label>
        </div>
        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="number" class="form-control @error('pax_number') is-invalid @enderror" value="{{ $data->pax_number }}" name="pax_number" id="pax_number" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
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
        <!------------ END ------------>

        <!------------ DATE COVERED BYENT ------------>
        <div class="row">
            <div class="col-md-3">
                <label class="fw-bold required">Date Covered byent </label>
            </div>
            <div class="col-md-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="dcbeCheck">
                    <label class="form-check-label" for="dcbeCheck">To Be Announced</label>
                </div>
            </div>
        </div>
        <!------------ END ------------>

        <!------------ DATE ------------>
        <div class="row justify-content-center g-3 gx-5" id="dcbe">
            <h6 class="text-center mt-3 fst-italic">Date</h3>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold required">Date</label>
                    <div class="position-relative">
                        <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror" value="{{ $data->program_dates }}" placeholder="Enter Date" name="program_dates" id="datepicker" size="30">
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
                        <input type="text" id="start-time" class="form-control start-time timepicker @error('dot') is-invalid @enderror" value="{{ $data->program_start_time }}" placeholder="Enter Time" name="program_start_time">
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
                        <input type="text" id="end-time" class="form-control end-time timepicker @error('dot') is-invalid @enderror" value="{{ $data->program_end_time }}" placeholder="Enter Time" name="program_end_time">
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
        <!------------ END ------------>

    </div>
</div>

<script>
    $(document).ready(function() {
        // This will help with displaying the date
        $('.date').datepicker();
        $('#ui-datepicker-div').css('clip', 'auto');

        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '06',
            maxTime: '10:00pm',
            startTime: '06:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    });

    document.getElementById('Mgtstrat-U-Titles').addEventListener("change", titles);

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