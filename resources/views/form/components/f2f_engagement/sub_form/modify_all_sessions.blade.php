@section('title', 'MODIFY SESSIONS')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
<div class="customized-engagement" id="main">
    @include('headers.header')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>FTF Engagement Sessions</h3>
            </div>                
        </div>
    </div>

    <!------------ CARD BODY ------------>
    <div class="col-12">
    {{-- card --}}
    <div class="card">
        {{-- card content --}}
        <div class="card-content">
            {{-- card body --}}
            <div class="card-body">
                <form class="form form-horizontal multisteps-form__form" action="{{ route('form/ftfEngagement/sub-form/savebatchsessions') }}" method="POST" autocomplete="off"> 
                @csrf 
                <input type="hidden" id="customized_type" value="{{ $parentData[0]->customized_type }}">
                <!-- HEADER CHECK BOXES -->
                <div class="alert alert-light row" role="alert" style="border-left: 3px solid #818182;">    
                    <div class="col-lg-6 col-md-6"> 
                        <span style="font-size:10pt">Customized Type</span>
                        <h5 id="custType">{{ $parentData[0]->customized_type }}</h5>

                        <span style="font-size:10pt">Client</span>
                        <h5 id="clientName">{{$getClient[0]->company_name }}</h5>
                        
                        <a href="{{ url('update_ftf_eng/' . $parentData[0]->id ) }}" target="_blank">
                            <h5 id="engType" style="text-decoration: underline">
                                {{ $parentData[0]->engagement_title }}
                            </h5>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6"> 
                        <span style="font-size:10pt">Form ID</span>
                        <h5 id="paxhNo">{{ $parentData[0]->ftf_eng_form_id }}</h5>

                        <span style="font-size:10pt">Number of Pax</span>
                        <h5 id="paxhNo">{{ $parentData[0]->pax_number }}</h5>
                    </div>
                </div>
                <!-- END HEADER CHECK BOXES -->    

                <div id="customized_engagement_cost_tab" class="mt-5">
                    <div class="form-body">
                        <section>
                            <div class="table-responsive" id="no-more-tables">
                                <table class="table" id="ec_tableEngagementBatchSession" style="width: 100%;border: 3px solid black;">
                                <!------------------- TABLE HEAD ----------------------->
                                    <thead class="th-blue-grey">
                                        <tr class="text-center">
                                            <th colspan="8"></th>  
                                            <th colspan="4">Commission</th>  
                                            <th colspan="2">Consulting</th>  
                                            <th colspan="3">Design</th>  
                                            <th colspan="6">Program</th>  
                                            <th>Other Roles</th>  
                                            <th>Per Diem</th>  
                                            <th>Off-Program</th>                                                           
                                        </tr>
                                    </thead>
                                    <thead class="th-blue-grey-lighten">
                                        <tr class="text-center text-sm">
                                            <th class="p-1" style="min-width: 150px" id="batchSession">Batch/Session</th>  
                                            <th class="p-1" style="min-width: 180px">Status</th>  
                                            <th class="p-1" style="min-width: 180px">Venue</th>  
                                            <th class="p-1" style="min-width: 180px">Date</th>  
                                            <th class="p-1" style="min-width: 180px">Start time</th>  
                                            <th class="p-1" style="min-width: 180px">End time</th>  
                                            <th class="p-1" style="min-width: 180px">Cluster</th>  
                                            <th class="p-1" style="min-width: 180px">Core Area</th>  
                                            <th class="p-1" style="min-width: 200px">Sales <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Referral <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Engagement Manager <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Offsite PC <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Lead Consultant <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Analyst <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Designer <h6><small>[Roster]</small></h6></th> 
                                            <th class="p-1" style="min-width: 200px">Creators Fees <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Creators Fees <h6><small>[Hourly Fees]</small></h6></th>
                                            <th class="p-1" style="min-width: 200px">Lead Facilitator <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Co-Lead <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Action Learning Coach <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Co-Facilitator / Resource Speaker <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Marshal <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">On-site PC <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Documentor <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Per Diem <h6><small>[Roster]</small></h6></th>  
                                            <th class="p-1" style="min-width: 200px">Off-Program fee <h6><small>[Roster]</small></h6></th>  
                                        </tr>
                                    </thead>
                                <!------------------- END TABLE HEAD ----------------------->
                                <p class="d-none">{{ $recordCount = 0 }} </p>
                                @foreach ($subInfoList as $subInfo_data)
                                <tbody>
                                    <tr class="th-blue-grey-lighten-2">
                                        <td class="p-1">
                                            <input type="hidden" value="{{$subInfo_data->id}}" name="subinfo_id[]">
                                            <a href="{{ url('form/ftfEngagement/sub-form/' . $subInfo_data->id) }}" target="_blank" class="text-primary text-link" title="View Record"> 
                                                <span>Batch:</span> <strong style="float: right">{{ $subInfo_data->batch_number }}</strong><br>
                                                <span>Session:</span> <strong style="float: right">{{ $subInfo_data->session_number }}</strong>
                                            </a>
                                        </td>   
                                        <td class="p-1">
                                            <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                                name="status[]" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right"
                                                id="status_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}" 
                                                value="{{ old('') }}" data-mytooltip-content="<i>Please Choose Status</i>" >
                                                <option value="Confirmed" {{ $subInfo_data->status == 'Confirmed' ? 'selected="selected"' : '' }} selected>Confirmed</option>
                                                <option value="Trial" {{ $subInfo_data->status == 'Trial' ? 'selected="selected"' : '' }}>Trial</option>
                                                <option value="In-progress" {{ $subInfo_data->status == 'In-progress' ? 'selected="selected"' : '' }}>In-progress</option>
                                                <option value="Completed" {{ $subInfo_data->status == 'Completed' ? 'selected="selected"' : '' }}>Completed</option>
                                                <option value="Lost" {{ $subInfo_data->status == 'Lost' ? 'selected="selected"' : '' }}>Lost</option>
                                            </select>
                                        </td>  
                                        <td class="p-1">
                                            <input type="text" class="form-control"
                                                value="{{ $subInfo_data->venue }}" placeholder="Enter Venue" 
                                                name="venue[]" 
                                                id="venue{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}"> 
                                        </td> 
                                        <td class="p-1">
                                            <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror"
                                                value="{{ $subInfo_data->date }}" placeholder="Enter Date" 
                                                name="date[]" 
                                                id="datepicker_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}"
                                                size="30">   
                                        </td>
                                        <td class="p-1">
                                            <input type="text" class="form-control start-time timepicker @error('dot') is-invalid @enderror"
                                                value="{{ $subInfo_data->start_time }}" placeholder="Enter Time" name="start_time[]"
                                                id="program_start_time_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}">
                                        </td> 
                                        <td class="p-1">
                                            <input type="text" class="form-control end-time timepicker @error('dot') is-invalid @enderror"
                                                value="{{ $subInfo_data->end_time }}" placeholder="Enter Time" name="end_time[]"
                                                id="program_end_time_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}">
                                        </td>   
                                        <td class="p-1">
                                            <select class="form-select" name="cluster[]">
                                                @foreach ($cluster as $cluster_data)
                                                    @if($subInfo_data->cluster == $cluster_data->cluster_name)
                                                        <option selected>{{$cluster_data->cluster_name}}</option>
                                                    @else
                                                        <option>{{$cluster_data->cluster_name}}</option>
                                                    @endif
                                                
                                                @endforeach
                                            </select>
                                        </td>   
                                        <td class="p-1">
                                            <select class="form-select" name="core_area[]">
                                                @foreach ($coreArea as $coreArea_data)                                                            
                                                    @if($subInfo_data->core_area == $coreArea_data->core_area_name)
                                                        <option selected>{{$coreArea_data->core_area_name}}</option>
                                                    @else
                                                        <option>{{$coreArea_data->core_area_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </td>   
                                        <td class="p-1">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Sales')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Referral')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach                   
                                        </td>   
                                        <td class="p-1">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Engagement Manager')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Offsite PC')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td> 
                                        <td class="p-1 table-warning">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Lead Consultant')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`,``,`leadConsultant`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Analyst')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1 table-warning">
                                            @foreach($subCostData as $subCostData_record)

                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Designer')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`,``,`designer`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td> 
                                        <td class="p-1">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Creators Fees')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <!-- <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]"  -->
                                                    <!-- id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"> -->
                                                @endif
                                            @endforeach
                                        </td>  
                                        <td class="table-danger">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Creators Fees')
                                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                                        name="cost_day_fee[{{ $recordCount }}][]" 
                                                        id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"                                                        
                                                        data-mytooltip-content="<i>
                                                                Creators Fee - 0 - no creators fee<br><br>
                                                                500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                                                1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                                        <option value="0" {{ $subCostData_record->day_fee == '0' ? 'selected="selected"' : '' }}
                                                            title="">
                                                            &#8369;0
                                                        </option>
                                                        <option value="500" {{ $subCostData_record->day_fee == '500' ? 'selected="selected"' : '' }}
                                                            title="">
                                                            &#8369;500
                                                        </option>
                                                        <option value="1000" {{ $subCostData_record->day_fee == '1000' ? 'selected="selected"' : '' }}
                                                            title="">
                                                            &#8369;1,000
                                                        </option>
                                                        <option value="2000" {{ $subCostData_record->day_fee == '2000' ? 'selected="selected"' : '' }}
                                                            title="">
                                                            &#8369;2,000
                                                        </option>
                                                    </select>
                                                @endif
                                            @endforeach
                                        </td> 
                                        <td class="p-1 table-warning">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Lead Facilitator')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`,``,`leadFacilitator`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1 table-warning">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Co-lead')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`,``,`coLead`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1 table-warning">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Action Learning Coach')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`,``,`alCoach`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1 table-warning">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Co-Facilitator / Resource Speaker')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`,``,`coFaci`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1 table-warning">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Marshal')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`,``,`moderator`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>  
                                        <td class="p-1 table-warning">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'On-site PC')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`,``,`producer`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Documentor')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`,``,``)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>   
                                        <td class="p-1">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Per Diem')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>  
                                        <td class="p-1">
                                            @foreach($subCostData as $subCostData_record)
                                                @if($subCostData_record->ftf_sub_informations_id ==  $subInfo_data->id && $subCostData_record->type == 'Off-Program fee')
                                                    <input type="hidden" value="{{$subCostData_record->id}}" name="subcost_id[{{ $recordCount }}][]">
                                                    <input type="text" class="d-none" value="{{$subCostData_record->type}}" name="cost_type[{{ $recordCount }}][]" readonly>
                                                    <input type="text" class="form-control input-table" name="cost_rooster[{{ $recordCount }}][]" 
                                                    id="roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}"
                                                    value="{{$subCostData_record->rooster}}"
                                                    oninput="filterConsultant(`roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}`)"
                                                    list="filtered_consultant_list" 
                                                    autocomplete="off">
                                                    <input  type="hidden" value="{{$subCostData_record->consultant_id}}" name="cost_rooster_id[{{ $recordCount }}][]" 
                                                    id="id_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                    <input  type="hidden" value="{{$subCostData_record->day_fee}}" name="cost_day_fee[{{ $recordCount }}][]" 
                                                    id="cost_hourfee_roster_batch{{ $subInfo_data->batch_number }}session{{ $subInfo_data->session_number }}_subinfo{{$subInfo_data->id}}_subcos{{$subCostData_record->id}}">
                                                @endif
                                            @endforeach
                                        </td>           
                                    </tr>   
                                </tbody>
                                <p class="d-none">{{ $recordCount++ }}</p>
                                @endforeach
                                
                                </table>
                            </div>   
                            <div class="col-12 d-flex justify-content-center mt-3">
                                <button class="btn btn-success ml-auto js-btn-next" type="submit" title="Save Record" onclick="this.readonly = true;">Save</button>
                            </div>         
                            <!-- AUTO COMPLETE -->
                            {{-- <template id="all_consultant_list">
                                @foreach ($consultantFee as $key => $feeData)
                                    <option 
                                        value="{{ strtoupper($feeData->first_name) }} {{ strtoupper($feeData->last_name) }}" 
                                        data-id="{{$feeData->id}}"
                                        data-feeleadfaci="{{$feeData->lead_faci}}"
                                        data-cofaci="{{$feeData->co_faci}}",
                                        data-marshal="{{$feeData->marshal}}",
                                        data-leadconsultant="{{$feeData->lead_consultant}}",
                                        data-consulting="{{$feeData->consulting}}",
                                        data-designer="{{$feeData->designer}}",
                                        data-moderator="{{$feeData->moderator}}",
                                        data-producer="{{$feeData->producer}}",
                                        data-colead="{{$feeData->co_lead}}",
                                        data-coleadf2f="{{$feeData->co_lead_f2f}}"
                                        >
                                        {{ strtoupper($feeData->first_name) }} {{ strtoupper($feeData->last_name) }}
                                    </option>
                                @endforeach
                            </template> --}}
                            <datalist id="filtered_consultant_list">
                                @foreach ($consultantFee as $key => $feeData)
                                    <option 
                                        value="{{ $feeData->first_name }} {{ $feeData->last_name }}" 
                                        data-id="{{$feeData->id}}"
                                        data-feeleadfaci="{{$feeData->lead_faci}}"
                                        data-cofaci="{{$feeData->co_faci}}",
                                        data-marshal="{{$feeData->marshal}}",
                                        data-leadconsultant="{{$feeData->lead_consultant}}",
                                        data-consulting="{{$feeData->consulting}}",
                                        data-designer="{{$feeData->designer}}",
                                        data-moderator="{{$feeData->moderator}}",
                                        data-producer="{{$feeData->producer}}",
                                        data-colead="{{$feeData->co_lead}}",
                                        data-coleadf2f="{{$feeData->co_lead_f2f}}"
                                        >
                                        {{ $feeData->first_name }} {{ $feeData->last_name }}
                                    </option>
                                @endforeach
                            </datalist>
                            <!-- END AUTO COMPLETE -->
                        </section>
                        
                    </div>                                
                </div>

                </form>
                <!------------ END OF BUDGET FORM ------------>
            </div>
        </div>
    </div>
    </div>
    <!------------ END OF CARD BODY ------------>

    <!------------ FOOTER ------------>
    <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-end">
            <p><script>document.write(new Date().getFullYear());</script> Copyright &copy MGT-STRAT</p>
        </div>
        {{-- <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                    href="#">MGT-STRAT</a></p>
        </div> --}}
    </div>
    </footer>
    <!------------ END OF FOOTER ------------>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="/js/engagement_show_roster.js"></script>
<script>
var results = document.querySelector('#filtered_consultant_list');
// var templateContent = document.querySelector('#all_consultant_list').content;

function filterConsultant(rosterFieldID, hourlyFeeID = '', costType = '') {
    // var search = document.querySelector('#' + rosterFieldID);

    // while (results.children.length) {
    //     results.removeChild(results.firstChild);
    // }
    // var inputVal = new RegExp('^'+search.value.trim(), 'i');
    // var clonedOptions = templateContent.cloneNode(true);
    // var set = Array.prototype.reduce.call(clonedOptions.children, 
    //     function searchFilter(frag, el) {
    //       if (inputVal.test(el.textContent.trim()) && frag.children.length < 10) { 
    //         frag.appendChild(el)
    //     };
    //     return frag;
    //     }
    // , document.createDocumentFragment());
    // results.appendChild(set);

    getFee(rosterFieldID, hourlyFeeID, costType);
}

function getFee(rosterFieldID, hourlyFeeID = '', costType = '') {
    var rosterValue = document.querySelector('#' + rosterFieldID);
    // var getFee = $('#filtered_consultant_list option[value="' + rosterValue.value.toUpperCase() + '"]');
    var getFee = $('#filtered_consultant_list option[value="' + rosterValue.value + '"]');
    (getFee) ? $('#id_' + rosterFieldID).val(getFee.data('id')) : '';
    if (costType != '') {
        let currency = Intl.NumberFormat("en-US");
        switch(costType) {
            case 'leadConsultant':
                if(getFee.data('leadconsultant') != undefined) {    
                    $('#cost_hourfee_' + rosterFieldID).val(currency.format(getFee.data('leadconsultant').replace(/,/g, "") * 8));
                }
                console.log('lead consultant');
                break; 
            case 'designer':
                if(getFee.data('designer') != undefined) {   
                    $('#cost_hourfee_' + rosterFieldID).val(currency.format(getFee.data('designer').replace(/,/g, "") * 8));
                }
                break; 
            case 'leadFacilitator':
                if(getFee.data('feeleadfaci') != undefined) {
                    $('#cost_hourfee_' + rosterFieldID).val(currency.format(getFee.data('feeleadfaci').replace(/,/g, "") * 8));
                }
                break; 
            case 'coLead':
                if(getFee.data('coleadf2f') != undefined) {
                    $('#cost_hourfee_' + rosterFieldID).val(currency.format(getFee.data('coleadf2f').replace(/,/g, "") * 8));  
                }              
                break; 
            case 'alCoach':
                break;
            case 'coFaci':
                if(getFee.data('cofaci') != undefined) {
                    $('#cost_hourfee_' + rosterFieldID).val(currency.format(getFee.data('cofaci').replace(/,/g, "") * 8));                
                }
                break; 
            case 'marshal': 
                if(getFee.data('marshal') != undefined) {           
                    $('#cost_hourfee_' + rosterFieldID).val(currency.format(getFee.data('marshal') * 8)); 
                }
                break; 
            case 'moderator':
                if(getFee.data('moderator') != undefined) {  
                    $('#cost_hourfee_' + rosterFieldID).val(currency.format(getFee.data('moderator').replace(/,/g, "") * 8));         
                }       
                break; 
            case 'producer':
                if(getFee.data('producer') != undefined) {  
                    $('#cost_hourfee_' + rosterFieldID).val(currency.format(getFee.data('producer').replace(/,/g, "") * 8));   
                }             
                break; 
            default: 
                break;
            ;
        }
    } 
}
</script>
@endsection