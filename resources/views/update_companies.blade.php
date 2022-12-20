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
                <h3>company</h3>

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Company</li>
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
        <img class="" src="{{asset('/storage/logo/'.$company->logo)}}" alt="." style="width: 150px;height: 150px; padding: 10px; margin: 0px; ">

            <div class="card-body">


                @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

<form action="{{url('update-company'.$company->id)}}" name="11" method="POST" class="contact-form" enctype="multipart/form-data">
@csrf
            <div class="form-body">
                <div class="row">

                <div class="col-md-2">
                    <label>Company Name</label>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" id="contact-info" class="form-control" name="company_name" value="{{ $company->company_name }}">
                </div>


                <div class="col-md-2">
                    <label>Email</label>
                </div>
                <div class="col-md-4 form-group">
                    <input type="email" id="contact-info" class="form-control" name="email" value="{{ $company->email }}">
                </div>

                <div class="col-md-2">
                    <label>Telephone</label>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" id="contact-info" class="form-control" name="telephone" value="{{ $company->telephone }}">
                </div>

                <div class="col-md-2">
                    <label>Facebook</label> <i class="fa fa-facebook"></i>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="facebook" id="fb" value="{{ $company->facebook }}">
                </div>

                <div class="col-md-2">
                    <label>Instagram</label> <i class="fa fa-instagram"></i>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="instagram" id="instagram" value="{{ $company->instagram }}">
                </div>

                <div class="col-md-2">
                    <label>WhatsApp</label> <i class="fa fa-whatsapp"></i>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{ $company->whatsapp }}">
                </div>

                <div class="col-md-2">
                    <label>Telegram</label> <i class="fa fa-telegram"></i>
                </div>
                <div class="col-md-4 form-group">
                    <input type="telegram" class="form-control" name="telegram" id="telegram" value="{{ $company->telegram }}">
                </div>

                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" name="update" class="btn btn-primary mr-1 mb-1" onClick="return confirm('Do you want to update this company?')">Update</button>
                    <a href="{{ url('delete-company/').$company->id }}" class="btn btn-danger mr-1 mb-1" onClick="return confirm('Do you want to delete this company?')">Delete</a>
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
