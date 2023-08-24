@section('title', 'CLIENTS')
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div id="main">
        @include('headers.header')
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Consultant Fees</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Consultant Fees</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Customized Engagement</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Customized Engagement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> --}}

        @include('form.components.consultant_fees.create')
        @include('form.components.consultant_fees.edit')

        {{-- message --}}
        {{-- {!! Alert::message() !!} --}}
        {{-- @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif --}}
        <section class="section">
            <div class="card mb-5 mt-5">
                <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3 mx-3">
                    <button type="button" class="btn btn-primary me-1 mb-1" data-toggle="modal" data-target="#ConsultantFeesModal">
                        <span><i class="fa-solid fa-user-plus mr-2"></i> New Consultant Fees</span>
                    </button>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-light display dt-responsive compact" id="consultant_table">

                        <thead>
                            <tr>
                                <th class="text-center text-uppercase">#</th>
                                <th class="text-center">Full Name</th>
                                {{-- <th class="text-center">Lead Facilitator</th>
                                <th class="text-center">Co-facilitator</th>
                                <th class="text-center">Lead Consultant</th>
                                <th class="text-center">Consulting</th>
                                <th class="text-center">Designer</th>
                                <th class="text-center">Moderator</th>
                                <th class="text-center">Producer</th>
                                <th class="text-center">Co-lead</th>
                                <th class="text-center">Co-lead f2f</th> --}}
                                <th class="text-center">Date Added</th>
                                <th class="text-center text-uppercase">Modify</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($consultantFee as $key => $data)
                                <tr>
                                    <td class="font-weight-bold text-center">{{++$key}}</td>
                                    <td class="text-center">
                                        {{$data->first_name}} {{$data->last_name}}
                                    </td>
                                    {{-- <td class="text-center">
                                        {{$data->lead_faci}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->co_faci}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->marshal}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->lead_consultant}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->consulting}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->designer}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->moderator}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->producer}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->co_lead}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->co_lead_f2f}}
                                    </td> --}}

                                    <td class="text-center">
                                        {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString()}}
                                    </td>
                                    <td class="text-center">
                                        {{-- <a href="{{ url('form/consultant-fees/'.$data->id.'/edit') }}" > --}}
                                        <a href="#editModal"  data-toggle="modal" data-target="#editModal" onclick="
                                        (()=>{
                                            document.querySelector('#EFI0').value='{{$data->id}}';
                                            document.querySelector('#EFI1').value='{{$data->first_name}}';
                                            document.querySelector('#EFI2').value='{{$data->last_name}}';
                                            document.querySelector('#EFI3').value='{{$data->lead_faci}}';
                                            document.querySelector('#EFI4').value='{{$data->co_lead}}';
                                            document.querySelector('#EFI5').value='{{$data->co_lead_f2f}}';
                                            document.querySelector('#EFI6').value='{{$data->co_faci}}';
                                            document.querySelector('#EFI7').value='{{$data->lead_consultant}}';
                                            document.querySelector('#EFI8').value='{{$data->consulting}}';
                                            document.querySelector('#EFI9').value='{{$data->designer}}';
                                            document.querySelector('#EFI10').value='{{$data->moderator}}';
                                            document.querySelector('#EFI11').value='{{$data->producer}}';
                                            document.querySelector('#EFI12').value='{{$data->marshal}}';
                                            document.getElementById('associatelevel').checked = false;
                                            document.getElementById('consultant').checked = false;
                                            document.getElementById('srconsultant').checked = false;
                                            if ('{{$data->mod_opt}}' == 'Associate level') {
                                                document.getElementById('associatelevel').checked = true;
                                            } else if ('{{$data->mod_opt}}' == 'Consultant') {
                                                document.getElementById('consultant_update').checked = true;
                                            } else if ('{{$data->mod_opt}}' == 'Sr. Consultant') {
                                                document.getElementById('srconsultant').checked = true;
                                            }
                                        })()" >
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#delete_consultant{{$data->id}}"><span
                                                class="badge bg-danger"><i class="bi bi-trash"></i></span>
                                        </a>

                                        <!-- Delete Modal -->
                                        <div class="modal custom-modal fade" id="delete_consultant{{$data->id}}" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="display: block; border: none">
                                                        <h3 class="mb-2 text-center">Consultant Fee</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-header">
                                                            <h5 class="text-center">Are you sure want to delete <br>
                                                                <b>{{$data->first_name}} {{$data->last_name}}</b>?
                                                            </h5>
                                                        </div>
                                                        <form action="{{ url('deleteConsultantFees/' . $data->id) }}" method="GET">
                                                            @csrf
                                                            <div class="modal-footer text-center" style="border-top: none;justify-content: center;">
                                                                <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                                                <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</a>
                                                            </div>  
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </section>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2022 &copy; MGT-STRAT</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="#">MGT-STRAT</a></p>
                </div>
            </div>
        </footer>

    </div>

    {{-- F2F ENGAGEMENT SCRIPT --}}
    <script type="text/javascript" src="/js/currencyFormat.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    @section('script')
    <script>
        $(document).ready( function () {
            $.fn.dataTable.moment( 'HH:mm MMM D, YY' );
            $.fn.dataTable.moment( 'dddd, MMMM Do, YYYY' );
            $('#consultant_table').dataTable( {
                responsive: true,
                stateSave: true,
                "bScrollCollapse": true,
                "autoWidth": false,
                "order": [ 2, 'desc' ],
                "columnDefs": [
                    { "type": "date", "targets":2 }
                ],
            } );
        } );
        function computeConsultantFees() {
            document.querySelector('#CFI2').value = Math.round((Number($('#CFI1').val().replace(/,/g, ""))*0.6).toString()).toFixed(2);
            document.querySelector('#CFI3').value = Math.round((Number($('#CFI1').val().replace(/,/g, ""))*0.4).toString()).toFixed(2);
            document.querySelector('#CFI4').value = Math.round((Number($('#CFI1').val().replace(/,/g, ""))*0.85).toString()).toFixed(2);
            document.querySelector('#CFI5').value = Math.round((Number($('#CFI1').val().replace(/,/g, ""))*0.75).toString()).toFixed(2);
            document.querySelector('#CFI6').value = Math.round((Number($('#CFI1').val().replace(/,/g, ""))*0.75).toString()).toFixed(2);
            document.querySelector('#CFI8').value = Math.round(
                                                        ( 
                                                            // ( Number(document.querySelector('#CFI1').value) * 0.725 ) + 
                                                            (Number( $('#CFI1').val().replace(/,/g, "")) + Number($('#CFI7').val().replace(/,/g, ""))) / 2
                                                        ).toString()).toFixed(2);
            document.querySelector('#CFI9').value = Math.round((
                                                                // Number(document.querySelector('#CFI1').value)*1.325
                                                                (Number($('#CFI1').val().replace(/,/g, "")) + Number($('#CFI2').val().replace(/,/g, ""))) / 2
                                                            ).toString()).toFixed(2);
            $("input[data-type='currency']").keyup();
        }

        function computeConsultantFees_update() {
            document.querySelector('#EFI6').value = Math.round((Number ($('#EFI3').val().replace(/,/g, ""))*0.6).toString()).toFixed(2);
            document.querySelector('#EFI12').value = Math.round((Number($('#EFI3').val().replace(/,/g, ""))*0.4).toString()).toFixed(2);
            document.querySelector('#EFI7').value = Math.round((Number ($('#EFI3').val().replace(/,/g, ""))*0.85).toString()).toFixed(2);
            document.querySelector('#EFI8').value = Math.round((Number ($('#EFI3').val().replace(/,/g, ""))*0.75).toString()).toFixed(2);
            document.querySelector('#EFI9').value = Math.round((Number ($('#EFI3').val().replace(/,/g, ""))*0.75).toString()).toFixed(2);
            document.querySelector('#EFI4').value = 
                Math.round((
                    (( Number($('#EFI3').val().replace(/,/g, "")) ) + 
                    Number($('#EFI10').val().replace(/,/g, ""))) /2
                ).toString()).toFixed(2);
            document.querySelector('#EFI5').value = 
                Math.round((
                    (Number($('#EFI3').val().replace(/,/g, "")) + 
                    Number( $('#EFI6').val().replace(/,/g, ""))) / 2
                ).toString()).toFixed(2);
                $("input[data-type='currency']").keyup();
        }

        function formatCurrency(element) { 
            var inputValue = element.value.replace(/,/g, "");
            return element.value = Number(inputValue).toFixed(2);
        }
    </script>
    @endsection
@endsection
