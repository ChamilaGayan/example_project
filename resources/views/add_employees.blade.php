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
                <h3>Employee</h3>
<br>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Employee</li>
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

<form action="{{route('add.employee')}}" name="11" method="POST" class="contact-form" enctype="multipart/form-data">
    @csrf
                <div class="form-body">
                    <div class="row">

                    <div class="col-md-2">
                        <label>Full Name</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" id="contact-info" class="form-control" name="full_name" placeholder="Full Name">
                    </div>


                    <div class="col-md-2">
                        <label>Nick Name</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" id="contact-info" class="form-control" name="nick_name" placeholder="Nick Name">
                    </div>

                    <div class="col-md-2">
                        <label>Company</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" id="contact-info" class="form-control" name="telephone" placeholder="Telephone">
                    </div>

                    <div class="col-md-2">
                        <label>Email</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="col-md-2">
                        <label>Phone</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                    </div>

                    <div class="col-md-2">
                        <label>Position</label>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control" name="position" id="position" placeholder="Position">
                    </div>

                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary mr-1 mb-1" onClick="return confirm('Do you want to submit this form?')">Submit</button>
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
