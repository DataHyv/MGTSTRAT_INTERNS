{{-- datepicker css --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
{{-- timepicker css --}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
{{-- tooltip css --}}
<link rel="stylesheet" href="{{ url('css/tooltip-css/jquery.mytooltip.min.css') }}">
{{-- <link rel="stylesheet" href="{{ url('css/tooltip-css/demo/style.css') }}"> --}}

<!------------ CARD HEADER ------------>
<div class="card-header">
    <h4 class="card-title">Information</h4>
</div>
<!------------ END OF CARD HEADER ------------>

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
                        <select class="input form-select @error('client_id') is-invalid @enderror" id="client_id" name="client_id" style="width: 100%;" tabindex="-1" aria-hidden="true">
                            <option value="">-- Select --</option>
                            @foreach ($companyList as $key=>$client)
                                <option value="{{ $client->id }}" data-first_eng={{ $client->first_eng }} {{ old('client_id') == $client->id ? 'selected' : '' }}>
                                    {{ $client->company_name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-clients"></i>
                        </div>
                        @error('client_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <!------------ END OF CLIENT NAME ------------>

        <!------------ ENGAGEMENT TITLE AND PILOT SWITCH ------------>
        <div class="col-md-3">
            <label class="fw-bold required">Engagement Title: </label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <input type="text" class="form-control @error('engagement_title') is-invalid @enderror" value="{{ old('engagement_title') }}" name="engagement_title" id="">
                    <div class="form-control-icon">
                        <i class="fa-solid fa-t"></i>
                    </div>
                    @error('engagement_title')
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
        <!------------ END OF ENGAGEMENT TITLE AND PILOT SWITCH ------------>
        
        <!------------ WORKSHOP TITLE ------------>
        <div class="col-md-3">
            <label class="fw-bold required">MGTSTRAT-U Workshop Title</label>
        </div>
        <div class="col-md-7">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="input js-mytooltip form-select @error('workshop_title') is-invalid @enderror" name="workshop_title" id="Mgtstrat-U-Titles" data-mytooltip-content="<i>If not on the list, choose suggested cluster title at Core Area.</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                            <option class="not-listed" id="not-listed" value="" selected>-- Not listed --</option>
                            <option class="mindfullness" id="mindfullness" value="A Case for Mindfulness: A Strategic Approach to Stress" {{ old('workshop_title') == 'A Case for Mindfulness: A Strategic Approach to Stress' ? 'selected' : '' }}>
                                A Case for Mindfulness: A Strategic Approach to Stress
                            </option>
                            <option class="diversity-and-inclusion" id="" value="ABC's of Gen XYZ" {{ old('workshop_title') == 'ABC\'s of Gen XYZ' ? 'selected' : '' }}>
                                ABC's of Gen XYZ
                            </option>
                            <option class="growth-mindset" id="" value="Activating the Growth Mindset" {{ old('workshop_title') == 'Activating the Growth Mindset' ? 'selected' : '' }}>
                                Activating the Growth Mindset
                            </option>
                            <option class="anxiety" id="" value="Anxiety Parties" {{ old('workshop_title') == 'Anxiety Parties' ? 'selected' : '' }}>
                                Anxiety Parties
                            </option>
                            <option class="leadership-brand" id="" value="Brand Called You" {{ old('workshop_title') == 'Brand Called You' ? 'selected' : '' }}>
                                Brand Called You
                            </option>
                            <option class="virtual-team-building" id="" value="Choose Your Own Adventure" {{ old('workshop_title') == 'Choose Your Own Adventure' ? 'selected' : '' }}>
                                Choose Your Own Adventure
                            </option>
                            <option class="conflict-resolution" id="" value="Co-operative Power and the Willingness to Resolve" {{ old('workshop_title') == 'Co-operative Power and the Willingness to Resolve' ? 'selected' : '' }}>
                                Co-operative Power and the Willingness to Resolve
                            </option>
                            <option class="collaborative-leadership" id="" value="Collaboration on the Fly" {{ old('workshop_title') == 'Collaboration on the Fly' ? 'selected' : '' }}>
                                Collaboration on the Fly
                            </option>
                            <option class="collaborative-leadership" id="" value="Creating Digital Bonds (Collborative Leadership)" {{ old('workshop_title') == 'Creating Digital Bonds (Collborative Leadership)' ? 'selected' : '' }}>
                                Creating Digital Bonds (Collborative Leadership)
                            </option>
                            <option class="creativity" id="" value="Creative Thinking in the Workplace" {{ old('workshop_title') == 'Creative Thinking in the Workplace' ? 'selected' : '' }}>
                                Creative Thinking in the Workplace
                            </option>
                            <option class="virtual-team-building" id="" value="Culture Driven Team Building" {{ old('workshop_title') == 'Culture Driven Team Building' ? 'selected' : '' }}>
                                Culture Driven Team Building
                            </option>
                            <option class="mental-health" id="" value="Deep Dive: Psychological Resilience" {{ old('workshop_title') == 'Deep Dive: Psychological Resilience' ? 'selected' : '' }}>
                                Deep Dive: Psychological Resilience
                            </option>
                            <option class="mental-health" id="" value="Deep Dive: The Role of Positive Emotions" {{ old('workshop_title') == 'Deep Dive: The Role of Positive Emotions' ? 'selected' : '' }}>
                                Deep Dive: The Role of Positive Emotions
                            </option>
                            <option class="strengths" id="" value="Deep Diving with Strengths" {{ old('workshop_title') == 'Deep Diving with Strengths' ? 'selected' : '' }}>
                                Deep Diving with Strengths
                            </option>
                            <option class="learning-evolution" id="" value="Designing Slides for Non-Designers" {{ old('workshop_title') == 'Designing Slides for Non-Designers' ? 'selected' : '' }}>
                                Designing Slides for Non-Designers
                            </option>
                            <option class="learning-evolution" id="" value="Designing Virtual Learning" {{ old('workshop_title') == 'Designing Virtual Learning' ? 'selected' : '' }}>
                                Designing Virtual Learning
                            </option>
                            <option class="growth-mindset" id="" value="Developing the Growth Mindset" {{ old('workshop_title') == 'Developing the Growth Mindset' ? 'selected' : '' }}>
                                Developing the Growth Mindset
                            </option>
                            <option class="communication" id="" value="Effective Virtual Communication" {{ old('workshop_title') == 'Effective Virtual Communication' ? 'selected' : '' }}>
                                Effective Virtual Communication
                            </option>
                            <option class="everyday-innovation" id="" value="Everyday Workplace Innovation" {{ old('workshop_title') == 'Everyday Workplace Innovation' ? 'selected' : '' }}>
                                Everyday Workplace Innovation
                            </option>
                            <option class="learning-evolution" id="" value="Facilitating Virtual Learning" {{ old('workshop_title') == 'Facilitating Virtual Learning' ? 'selected' : '' }}>
                                Facilitating Virtual Learning
                            </option>
                            <option class="facilitating-virtual-meetings" id="" value="Facilitating Virtual Meetings" {{ old('workshop_title') == 'Facilitating Virtual Meetings' ? 'selected' : '' }}>
                                Facilitating Virtual Meetings
                            </option>
                            <option class="feedback" id="" value="Feedback with Candor (Feedback)" {{ old('workshop_title') == 'Feedback with Candor (Feedback)' ? 'selected' : '' }}>
                                Feedback with Candor (Feedback)
                            </option>
                            <option class="radical-candor" id="" value="Feedback with Candor (Radical Candor)" {{ old('workshop_title') == 'Feedback with Candor (Radical Candor)' ? 'selected' : '' }}>
                                Feedback with Candor (Radical Candor)
                            </option>
                            <option class="find-your-why" id="" value="Find Your Why" {{ old('workshop_title') == 'Find Your Why' ? 'selected' : '' }}>
                                Find Your Why
                            </option>
                            <option class="conflict-resolution" id="" value="Foundations of Conflict Resolution" {{ old('workshop_title') == 'Foundations of Conflict Resolution' ? 'selected' : '' }}>
                                Foundations of Conflict Resolution
                            </option>
                            <option class="strategic-agility" id="" value="Foundations of Strategic Agility" {{ old('workshop_title') == 'Foundations of Strategic Agility' ? 'selected' : '' }}>
                                Foundations of Strategic Agility
                            </option>
                            <option class="strengths" id="" value="Foundations of Strengths Based Development" {{ old('workshop_title') == 'Foundations of Strengths Based Development' ? 'selected' : '' }}>
                                Foundations of Strengths Based Development
                            </option>
                            <option class="collaborative-leadership" id="" value="Fundamentals of Collaboration" {{ old('workshop_title') == 'Fundamentals of Collaboration' ? 'selected' : '' }}>
                                Fundamentals of Collaboration
                            </option>
                            <option class="future-proof-leadership" id="" value="Future Proof Leadership" {{ old('workshop_title') == 'Future Proof Leadership' ? 'selected' : '' }}>
                                Future Proof Leadership
                            </option>
                            <option class="business-transformation" id="" value="Future-Backwards" {{ old('workshop_title') == 'Future-Backwards' ? 'selected' : '' }}>
                                Future-Backwards
                            </option>
                            <option class="game-night" id="" value="Game Nights" {{ old('workshop_title') == 'Game Nights' ? 'selected' : '' }}>
                                Game Nights
                            </option>
                            <option class="feedback" id="" value="Giving and Receiving Feedback" {{ old('workshop_title') == 'Giving and Receiving Feedback' ? 'selected' : '' }}>
                                Giving and Receiving Feedback
                            </option>
                            <option class="business-transformation" id="" value="Graphic Gameplanning" {{ old('workshop_title') == 'Graphic Gameplanning' ? 'selected' : '' }}>
                                Graphic Gameplanning
                            </option>
                            <option class="heroes-assemble" id="" value="Heroes Assemble" {{ old('workshop_title') == 'Heroes Assemble' ? 'selected' : '' }}>
                                Heroes Assemble
                            </option>
                            <option class="diversity-inclusion" id="" value="Inclusion is your Competitive Advantage" {{ old('workshop_title') == 'Inclusion is your Competitive Advantage' ? 'selected' : '' }}>
                                Inclusion is your Competitive Advantage
                            </option>
                            <option class="improv" id="" value="Just Say &quot;Yes, And&quot; to Improv" {{ old('workshop_title') == 'Just Say "Yes, And" to Improv' ? 'selected' : '' }}>
                                Just Say "Yes, And" to Improv
                            </option>
                            <option class="leading-hybrid-teams" id="" value="Leading Hybrid Teams" {{ old('workshop_title') == 'Leading Hybrid Teams' ? 'selected' : '' }}>
                                Leading Hybrid Teams
                            </option>
                            <option class="leading-virtual-teams" id="" value="Leading Virtual Teams" {{ old('workshop_title') == 'Leading Virtual Teams' ? 'selected' : '' }}>
                                Leading Virtual Teams
                            </option>
                            <option class="leading-emotional-intelligence" id="" value="Leading with Emotional Intelligence" {{ old('workshop_title') == 'Leading with Emotional Intelligence' ? 'selected' : '' }}>
                                Leading with Emotional Intelligence
                            </option>
                            <option class="growth-mindset" id="" value="Leading with the Growth Mindset" {{ old('workshop_title') == 'Leading with the Growth Mindset' ? 'selected' : '' }}>
                                Leading with the Growth Mindset
                            </option>
                            <option class="lip-sync-battle" id="" value="Lip Sync Battle" {{ old('workshop_title') == 'Lip Sync Battle' ? 'selected' : '' }}>
                                Lip Sync Battle
                            </option>
                            <option class="find-your-why" id="" value="Live Your Why" {{ old('workshop_title') == 'Live Your Why' ? 'selected' : '' }}>
                                Live Your Why
                            </option>
                            <option class="habit-formation" id="" value="Magic of Habits" {{ old('workshop_title') == 'Magic of Habits' ? 'selected' : '' }}>
                                Magic of Habits
                            </option>
                            <option class="emotional-intelligence" id="" value="Making Emotional Intelligence Visible" {{ old('workshop_title') == 'Making Emotional Intelligence Visible' ? 'selected' : '' }}>
                                Making Emotional Intelligence Visible
                            </option>
                            <option class="emotional-intelligence" id="" value="Managing Relationship thru EI" {{ old('workshop_title') == 'Managing Relationship thru EI' ? 'selected' : '' }}>
                                Managing Relationship thru EI
                            </option>
                            <option class="conflict-resolution" id="" value="Mapping the Conflict and Design Options" {{ old('workshop_title') == 'Mapping the Conflict and Design Options' ? 'selected' : '' }}>
                                Mapping the Conflict and Design Options
                            </option>
                            <option class="mental-health" id="" value="Mental Health Foundations" {{ old('workshop_title') == 'Mental Health Foundations' ? 'selected' : '' }}>
                                Mental Health Foundations
                            </option>
                            <option class="virtual-team-building" id="" value="Points of You" {{ old('workshop_title') == 'Points of You' ? 'selected' : '' }}>
                                Points of You
                            </option>
                            <option class="influencing" id="" value="Power of Influence" {{ old('workshop_title') == 'Power of Influence' ? 'selected' : '' }}>
                                Power of Influence
                            </option>
                            <option class="productivity" id="" value="Productivity Sprint: Designing your Flow State" {{ old('workshop_title') == 'Productivity Sprint: Designing your Flow State' ? 'selected' : '' }}>
                                Productivity Sprint: Designing your Flow State
                            </option>
                            <option class="productivity" id="" value="Productivity Sprint: Flow State on Demand" {{ old('workshop_title') == 'Productivity Sprint: Flow State on Demand' ? 'selected' : '' }}>
                                Productivity Sprint: Flow State on Demand
                            </option>
                            <option class="anxiety" id="" value="Riding the Wave" {{ old('workshop_title') == 'Riding the Wave' ? 'selected' : '' }}>
                                Riding the Wave
                            </option>
                            <option class="psychological-safety" id="" value="Secret Ingredient to High Performing Teams" {{ old('workshop_title') == 'Secret Ingredient to High Performing Teams' ? 'selected' : '' }}>
                                Secret Ingredient to High Performing Teams
                            </option>
                            <option class="virtual-team-building" id="" value="Squid Games" {{ old('workshop_title') == 'Squid Games' ? 'selected' : '' }}>
                                Squid Games
                            </option>
                            <option class="emotional-intelligence" id="" value="The Emotional Agility Toolbox" {{ old('workshop_title') == 'The Emotional Agility Toolbox' ? 'selected' : '' }}>
                                The Emotional Agility Toolbox
                            </option>
                            <option class="the-heist" id="" value="The Heist" {{ old('workshop_title') == 'The Heist' ? 'selected' : '' }}>
                                The Heist
                            </option>
                            <option class="the-lab" id="" value="The Lab" {{ old('workshop_title') == 'The Lab' ? 'selected' : '' }}>
                                The Lab
                            </option>
                            <option class="growth-mindset" id="" value="The Power of Yet (Growth MIndset)" {{ old('workshop_title') == 'The Power of Yet (Growth MIndset)' ? 'selected' : '' }}>
                                The Power of Yet (Growth MIndset)
                            </option>
                            <option class="productivity" id="" value="Time and Energy Management: Rethinking our Productivity Models" {{ old('workshop_title') == 'Time and Energy Management: Rethinking our Productivity Models' ? 'selected' : '' }}>
                                Time and Energy Management: Rethinking our Productivity Models
                            </option>
                            <option class="diversity-inclusion" id="" value="Unconscious Bias" {{ old('workshop_title') == 'Unconscious Bias' ? 'selected' : '' }}>
                                Unconscious Bias
                            </option>
                            <option class="virtual-team-building" id="" value="Virtual Teaming" {{ old('workshop_title') == 'Virtual Teaming' ? 'selected' : '' }}>
                                Virtual Teaming
                            </option>
                            <option class="mindfullness" id="" value="Win over Anxiety: Addressing the Worrisome Thoughts in your Head" {{ old('workshop_title') == 'Win over Anxiety: Addressing the Worrisome Thoughts in your Head' ? 'selected' : '' }}>
                                Win over Anxiety: Addressing the Worrisome Thoughts in your Head
                            </option>
                            <option class="work-from-home" id="" value="Work from Home Essentials" {{ old('workshop_title') == 'Work from Home Essentials' ? 'selected' : '' }}>
                                Work from Home Essentials
                            </option>
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>
                        @error('workshop_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </fieldset>
                </div>
            </div>
        </div>
        <!------------ END OF WORKSHOP TITLE ------------>

        <!------------ CLUSTER ------------>
        <div class="col-md-3">
            <label class="fw-bold required">CLUSTER</label>
        </div>
        <div class="col-md-7">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <fieldset class="form-group">
                            <select class="form-select @error('cluster') is-invalid @enderror" name="cluster" id="cluster">
                                <option value="Anxiety" {{ old('cluster') == 'Anxiety' ? 'selected' : '' }}>Anxiety</option>
                                <option value="Business Transformation" {{ old('cluster') == 'Business Transformation' ? 'selected' : '' }}>Business Transformation</option>
                                <option value="Collaborative Leadership" {{ old('cluster') == 'Collaborative Leadership' ? 'selected' : '' }}>Collaborative Leadership</option>
                                <option value="Communication" {{ old('cluster') == 'Communication' ? 'selected' : '' }}>Communication</option>
                                <option value="Conflict Resolution" {{ old('cluster') == 'Conflict Resolution' ? 'selected' : '' }}>Conflict Resolution</option>
                                <option value="Creativity" {{ old('cluster') == 'Creativity' ? 'selected' : '' }}>Creativity</option>
                                <option value="Diversity &amp; Inclusion" {{ old('cluster') == 'Diversity &amp; Inclusion' ? 'selected' : '' }}>Diversity &amp; Inclusion</option>
                                <option value="Emotional Intelligence" {{ old('cluster') == 'Emotional Intelligence' ? 'selected' : '' }}>Emotional Intelligence</option>
                                <option value="Everyday Innovation" {{ old('cluster') == 'Everyday Innovation' ? 'selected' : '' }}>Everyday Innovation</option>
                                <option value="Facilitating Virtual Meetings" {{ old('cluster') == 'Facilitating Virtual Meetings' ? 'selected' : '' }}>Facilitating Virtual Meetings</option>
                                <option value="Feedback" {{ old('cluster') == 'Feedback' ? 'selected' : '' }}>Feedback</option>
                                <option value="Find Your Why" {{ old('cluster') == 'Find Your Why' ? 'selected' : '' }}>Find Your Why</option>
                                <option value="Future Proof Leadership" {{ old('cluster') == 'Future Proof Leadership' ? 'selected' : '' }}>Future Proof Leadership</option>
                                <option value="Game Night" {{ old('cluster') == 'Game Night' ? 'selected' : '' }}>Game Night</option>
                                <option value="Growth Mindset" {{ old('cluster') == 'Growth Mindset' ? 'selected' : '' }}>Growth Mindset</option>
                                <option value="Habit Formation" {{ old('cluster') == 'Habit Formation' ? 'selected' : '' }}>Habit Formation</option>
                                <option value="Heroes Assemble" {{ old('cluster') == 'Heroes Assemble' ? 'selected' : '' }}>Heroes Assemble</option>
                                <option value="Improv" {{ old('cluster') == 'Improv' ? 'selected' : '' }}>Improv</option>
                                <option value="Influencing" {{ old('cluster') == 'Influencing' ? 'selected' : '' }}>Influencing</option>
                                <option value="Leadership Brand" {{ old('cluster') == 'Leadership Brand' ? 'selected' : '' }}>Leadership Brand</option>
                                <option value="Leading Hybrid Teams" {{ old('cluster') == 'Leading Hybrid Teams' ? 'selected' : '' }}>Leading Hybrid Teams</option>
                                <option value="Leading Virtual Teams" {{ old('cluster') == 'Leading Virtual Teams' ? 'selected' : '' }}>Leading Virtual Teams</option>
                                <option value="Leading with Emotional Intelligence" {{ old('cluster') == 'Leading with Emotional Intelligence' ? 'selected' : '' }}>Leading with Emotional Intelligence</option>
                                <option value="Learning Evolution" {{ old('cluster') == 'Learning Evolution' ? 'selected' : '' }}>Learning Evolution</option>
                                <option value="Lip Sync Battle" {{ old('cluster') == 'Lip Sync Battle' ? 'selected' : '' }}>Lip Sync Battle</option>
                                <option value="Mental Health" {{ old('cluster') == 'Mental Health' ? 'selected' : '' }}>Mental Health</option>
                                <option value="Mindfullness" {{ old('cluster') == 'Mindfullness' ? 'selected' : '' }}>Mindfullness</option>
                                <option value="Productivity" {{ old('cluster') == 'Productivity' ? 'selected' : '' }}>Productivity</option>
                                <option value="Psychological Safety" {{ old('cluster') == 'Psychological Safety' ? 'selected' : '' }}>Psychological Safety</option>
                                <option value="Radical Candor" {{ old('cluster') == 'Radical Candor' ? 'selected' : '' }}>Radical Candor</option>
                                <option value="Strategic Agility" {{ old('cluster') == 'Strategic Agility' ? 'selected' : '' }}>Strategic Agility</option>
                                <option value="Strengths" {{ old('cluster') == 'Strengths' ? 'selected' : '' }}>Strengths</option>
                                <option value="The Heist" {{ old('cluster') == 'The Heist' ? 'selected' : '' }}>The Heist</option>
                                <option value="The Lab" {{ old('cluster') == 'The Lab' ? 'selected' : '' }}>The Lab</option>
                                <option value="Virtual Team Building" {{ old('cluster') == 'Virtual Team Building' ? 'selected' : '' }}>Virtual Team Building</option>
                                <option value="Work From Home" {{ old('cluster') == 'Work From Home' ? 'selected' : '' }}>Work From Home</option>
                        </select>
                    </fieldset>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-circle-nodes"></i>
                    </div>
                    @error('cluster')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <!------------ END OF CLUSTER ------------>

        <!------------ INTELLIGENCE ------------>
        <div class="col-md-3">
            <label class="fw-bold required">INTELLIGENCE:</label>
        </div>
        <div class="col-md-7">
            <div class="form-group has-icon-left">
                <div class="position-relative">
                    <fieldset class="form-group">
                        <select class="form-select @error('intelligence') is-invalid @enderror" name="intelligence" id="intelligence">
                            <option value="Contextual" {{ old('intelligence') == 'Contextual' ? 'selected' : '' }}>Contextual</option>
                            <option value="Generative" {{ old('intelligence') == 'Generative' ? 'selected' : '' }}>Generative</option>
                            <option value="Moral" {{ old('intelligence') == 'Moral' ? 'selected' : '' }}>Moral</option>
                            <option value="Social & Emotional" {{ old('intelligence') == 'Social & Emotional' ? 'selected' : '' }}>Social & Emotional</option>
                            <option value="Technological" {{ old('intelligence') == 'Technological' ? 'selected' : '' }}>Technological</option>
                            <option value="Transformative" {{ old('intelligence') == 'Transformative' ? 'selected' : '' }}>Transformative</option>
                        </select>
                    </fieldset>                    
                    <div class="form-control-icon">
                        <i class="fa-solid fa-circle-nodes"></i>
                    </div>
                    @error('intelligence')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <!------------ END OF INTELLIGENCE ------------>

        <!------------ NUMBER OF PAX ------------>
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
        <!------------ END OF NUMBER OF PAX ------------>

        <!------------ DATE COVERED BYENT ------------>
        <!-- To hide the date and time fields when the "To Be Announced" checkbox is checked, configured id="dcbe" in the script below -->
        <div class="row">
            <div class="col-md-3">
                <label class="fw-bold required">Date Covered byent </label>
            </div>
            <div class="col-md-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="dcbeCheck" name="dcbeCheck" {{ old('dcbeCheck') ? 'checked' : '' }}>
                    <label class="form-check-label" for="dcbeCheck">To Be Announced</label>
                </div>
            </div>
        </div>
        <!------------ END OF DATE COVERED BYENT ------------>

        <!------------ DATE ------------>
        <div class="row justify-content-center g-3 gx-5" id="dcbe">
            <h6 class="text-center mt-3 fst-italic">Date</h3>

            <div class="d-flex justify-content-center mt-4">
            <div class="flex-column">
                <fieldset class="row justify-content-center" id="dateRows">
                
                    {{-- add button --}}
                    <div class="col-md-1">
                        <div class="px-0">
                            <label class="fw-bold invisible overflow-hidden mb-4">Add</label>
                            <a href="javascript:void(0)" class="text-success font-18 px-0" title="Add"
                            id="addDates"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>

                    {{-- date --}}
                    <div class="col-md-3">
                        <div class="form-group has-icon-left">
                            <label class="fw-bold required">Date</label>
                            <div class="position-relative">
                                <input type="text" class="form-control date datepicker @error('program_dates') is-invalid @enderror" value="{{ old('program_dates') }}" placeholder="Enter Date" name="program_dates" id="datepicker" size="30">
                                <div class="form-control-icon">
                                    <i class="bi bi-calendar"></i>
                                </div>
                                @error('program_dates')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- start time --}}
                    <div class="col-md-3">
                        <div class="form-group has-icon-left">
                            <label class="fw-bold required">Start Time</label>
                            <div class="position-relative">
                                <input type="text" id="start-time" class="form-control start-time timepicker @error('program_start_time') is-invalid @enderror" value="{{ old('program_start_time') }}" placeholder="Enter Time" name="program_start_time">
                                <div class="form-control-icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                @error('program_start_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- end time --}}
                    <div class="col-md-3">
                        <div class="form-group has-icon-left">
                            <label class="fw-bold required">End Time</label>
                            <div class="position-relative">
                                <input type="text" id="end-time" class="form-control end-time timepicker @error('program_end_time') is-invalid @enderror" value="{{ old('program_end_time') }}" placeholder="Enter Time" name="program_end_time">
                                <div class="form-control-icon">
                                    <i class="fa-solid fa-hourglass-end"></i>
                                </div>
                                @error('program_end_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                </fieldset>
            </div>
            </div>

            <hr class="mt-3">
            
        </div>
        <!------------ END OF DATE ------------>
    </div>
</div>
<!------------ END OF FORM BODY ------------>

<!-- JQuery to listen to the click event of the "To Be Announced" checkbox and hide/show the date and time fields container whether the checkbox is checked or not -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- datepicker js --}}
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
{{-- timepicker js --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
{{-- tooltip js --}}
<script src="{{ url('js/tooltipJs/jquery.mytooltip.js') }}"></script>
<script src="{{ url('js/tooltipJs/demo/script.js') }}"></script>
<script>
    // The $(document).ready() function is used to ensure that the script is executed after the HTML has finished loading
    $(document).ready(function() {
        // get the checkbox element
        var dcbeCheck = $('#dcbeCheck');
        // get the date and time fields container
        var dcbe = $('#dcbe');
        
        // check initial state on page load
        if (dcbeCheck.is(':checked')) {
            dcbe.hide();
        } else {
            dcbe.show();
        }
        
        // toggle the visibility of the date and time fields container when the checkbox is clicked
        dcbeCheck.on('click', function() {
            if (dcbeCheck.is(':checked')) {
                dcbe.hide();
            } else {
                dcbe.show();
            }
        });

        // This will help with displaying the date
        $('.datepicker').datepicker({
        autoclose: true,
        onSelect: function(dateText, inst) {
            // Prevent scrolling to the top of the page
            return false;
        }
        });
        $('#ui-datepicker-div').css('clip', 'auto');

        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '06',
            maxTime: '10:00pm',
            // defaultTime: '06',
            startTime: '06:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });

        // add date of engagement
        var dates = 1;
        $("#addDates").on("click", function() {
            // Adding a row inside the tbody.
            $("#dcbe").append(`

            <fieldset class="d-flex justify-content-center mt-4" id="dateRows${++dates}">
                <div class="flex-column">
                    <div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-1 col-md-1" style="margin-top: 40px;">
                                <div class="px-0 text-center">
                                    <label class="fw-bold invisible mb-4">Add</label>
                                    <a href="javascript:void(0)" class="text-danger font-18 remove px-0" title="Remove">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold required">Date</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror"
                                            value="{{ old('doe') }}" placeholder="Enter Date" name="program_dates[]" id="datepicker${dates}"
                                            size="30">
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
                                        <input type="text" class="form-control start-time timepicker @error('dot') is-invalid @enderror"
                                            value="{{ old('dot') }}" placeholder="Enter Time" id="program_start_time" name="program_start_time[]">
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
                                        <input type="text" class="form-control end-time timepicker @error('dot') is-invalid @enderror"
                                            value="{{ old('dot') }}" placeholder="Enter Time" id="program_end_time" name="program_end_time[]">
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


            </fieldset>
            `);

            // This will help with displaying the date
        $('.datepicker').datepicker({
        autoclose: true,
        onSelect: function(dateText, inst) {
            // Prevent scrolling to the top of the page
            return false;
        }
        });
        $('#ui-datepicker-div').css('clip', 'auto');

        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '06',
            maxTime: '10:00pm',
            // defaultTime: '06',
            startTime: '06:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });

        });

        // remove date of engagement
        $("#dcbe").on("click", ".remove", function () {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest('.d-flex').nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");


                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(8));

                // Modifying row id.
                $(this).attr("id", `dateRows${dig - 1}`);

            });

            // Removing the current row.
            $(this).closest('.d-flex').remove();

            // Decreasing total number of rows by 1.
            dates--;
        });

        // This will help with displaying the date
        $('.datepicker').datepicker({
        autoclose: true,
        onSelect: function(dateText, inst) {
            // Prevent scrolling to the top of the page
            return false;
        }
        });
        $('#ui-datepicker-div').css('clip', 'auto');

        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '06',
            maxTime: '10:00pm',
            // defaultTime: '06',
            startTime: '06:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });

    });

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

    // $( "#Mgtstrat-U-Titles" ).change(function() {
    //     // var str = "";
    //     $( "#Mgtstrat-U-Titles option:selected" ).each(function() {
    //         // str += $( this ).text() + " ";
    //         // $( this ).text() + " ";
    //         if ($( this ).text() == 'A Case for Mindfulness: A Strategic Approach to Stress') {
    //             $('#cluster').val('Mindfullness');
    //             $('#intelligence').val('Social & Emotional');
    //         }
    //         else {
    //             $('#cluster').val('');
    //             $('#intelligence').val('');
    //         }
    //     });
    //     $( "div" ).text( str );
    // })
    // .trigger( "change" );
</script>