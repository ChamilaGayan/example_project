@extends('layouts.app')

@section('content')
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <h2>Admin Panel</h2>
    </div>
    @include('layouts.sidebar')
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            @include('layouts.navbar')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Item</h3>

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Item</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
    <div class="row match-height">

        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-content">

            <div class="card-body">


                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <!-- update -->
                <form action="{{url('update-employee'.$employee->id)}}" name="11" method="POST" class="contact-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">

                        <div class="col-md-2">
                            <label>Full Name</label>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" id="contact-info" class="form-control" name="full_name" value="{{ $employee->full_name }}">
                        </div>


                        <div class="col-md-2">
                            <label>Nick Name</label>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" id="contact-info" class="form-control" name="nick_name" value="{{ $employee->nick_name }}">
                        </div>

                        <div class="col-md-2">
                            <label>Company</label>
                        </div>
                        <div class="col-md-4 form-group">
                            <select class="form-select" aria-label="Default select example" name="company">
                                <option value="{{ $employee->company }}">{{ $employee->company }}</option>
    @foreach ($companies as $company)
    <option value="{{ $company->company_name }}">{{ $company->company_name }}</option>
    @endforeach
                              </select>

                        </div>

                        <div class="col-md-2">
                            <label>Email</label>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control" name="email" id="email" value="{{ $employee->email }}">
                        </div>

                        <div class="col-md-2">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ $employee->phone }}">
                        </div>

                        <div class="col-md-2">
                            <label>Position</label>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" name="position" id="position" value="{{ $employee->position }}">
                        </div>

                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" name="update" class="btn btn-primary mr-1 mb-1" onClick="return confirm('Do you want to update this employee?')">Update</button>
                            <a href="{{ url('delete-employee/').$employee->id }}" class="btn btn-danger mr-1 mb-1" onClick="return confirm('Do you want to delete this employee?')">Delete</a>
                            <button type="reset" class="btn btn-light-secondary mr-1 mb-1" onClick="return confirm('Do you want to reset this form?')">Reset</button>
                        </div>
                        </div>
                    </div>
                                </form>
            </div>
            </div>
        </div>

</div>

        </div>
    </div>
    @include('layouts.footer')
    <script src="js/feather-icons/feather.min.js"></script>
    <script src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="js/app.js"></script>

    <script src="js/main.js"></script>
    @endsection
