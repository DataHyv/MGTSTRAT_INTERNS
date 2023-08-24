@section('title', 'User Management')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div id="main">
        {{-- <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header> --}}
        @include('headers.header')
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>User Control</h3>
                        <!-- <h3>User Management Control</h3>
                        <p class="text-subtitle text-muted">For user to check they list</p> -->
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Control</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary mt-2 mb-2" href="{{ route('user/add/new') }}">
                            <span><i class="fa-solid fa-file-circle-plus"></i> &nbsp; New Record</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Profile</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                    <th>Role Name</th>
                                    <th class="text-center">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td class="id">{{ ++$key }}</td>
                                        <td class="name">{{ $item->name }}</td>
                                        <td class="name">
                                            <div class="avatar avatar-xl">
                                                <img src="{{ URL::to('/images/' . $item->avatar) }}"
                                                    alt="{{ $item->avatar }}">
                                            </div>
                                        </td>
                                        <td class="email">{{ $item->email }}</td>
                                        <td class="phone_number">{{ $item->phone_number }}</td>
                                        @if ($item->status == 'Active')
                                            <td class="status"><span
                                                    class="badge bg-success">{{ $item->status }}</span></td>
                                        @endif
                                        @if ($item->status == 'Disable')
                                            <td class="status"><span
                                                    class="badge bg-danger">{{ $item->status }}</span></td>
                                        @endif
                                        @if ($item->status == null)
                                            <td class="status"><span
                                                    class="badge bg-danger">{{ $item->status }}</span></td>
                                        @endif
                                        @if ($item->role_name == 'Admin')
                                            <td class="role_name"><span
                                                    class="badge bg-success">{{ $item->role_name }}</span></td>
                                        @endif
                                        @if ($item->role_name == 'Super Admin')
                                            <td class="role_name"><span
                                                    class="badge bg-info">{{ $item->role_name }}</span></td>
                                        @endif
                                        @if ($item->role_name == 'Normal User')
                                            <td class="role_name"><span
                                                    class=" badge bg-warning">{{ $item->role_name }}</span></td>
                                        @endif
                                        <td class="text-center">                                            
                                            <a href="{{ url('maintenance/user-management/detail/' . $item->id) }}">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_user{{$item->id}}"><span
                                                    class="badge bg-danger"><i class="bi bi-trash"></i></span></a>   
                                            
                                            <!-- Delete Modal -->
                                            <div class="modal custom-modal fade" id="delete_user{{$item->id}}" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="display: block; border: none">
                                                            <h3 class="mb-2 text-center">User</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-header">
                                                                <h5 class="text-center">Are you sure want to delete <br>
                                                                    <b>{{ $item->name }}</b>?
                                                                </h5>
                                                            </div>
                                                            <form action="{{ url('delete_user/' . $item->id) }}" method="GET">
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
        </div>
        <footer>
            <div class="footer clearfix mb-0 text-muted ">
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
@endsection
