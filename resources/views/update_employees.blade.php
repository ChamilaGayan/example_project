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
        <img class="" src="{{asset('/storage/images/'.$item->image)}}" alt="." style="width: 150px;height: 150px; padding: 10px; margin: 0px; ">

            <div class="card-body">


                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <!-- update -->
                <form action="{{ url('itemupdate'.$item->id) }}" name="11" method="POST" class="contact-form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                                <div class="form-body">
                                    <div class="row">

                                    <div class="col-md-2">
                                        <label>Item Name</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" id="contact-info" class="form-control" name="name" placeholder="Name" value="{{$item->name}}">
                                    </div>

                                    <div class="col-md-2">
                                        <label>Price</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" id="contact-info" class="form-control" name="price" placeholder="Price" value="{{$item->price}}">
                                    </div>

                                    <div class="col-md-2">
                                        <label>Status</label>
                                    </div>

                                    <div class="col-md-4 form-group">

                                        <div class="btn-group">
                                            <input type="radio" class="btn-check" name="options" id="option1" value="active" autocomplete="off" checked />
                                            <label class="btn btn-success" for="option1">Active</label>

                                            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" value="inactive"/>
                                            <label class="btn btn-success" for="option2">Inactive</label>

                                          </div>
                                    </div>

                                    <div class="col-md-2">
                                        <label>Date</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label >{{date('Y-m-d', strtotime($item->updated_at))}}</label>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" name="update" class="btn btn-primary mr-1 mb-1" onClick="return confirm('Do you want to update this form?')">Update</button>

                                        <a href="{{ url('delete/').$item->id }}" class="btn btn-danger mr-1 mb-1" onClick="return confirm('Do you want to delete this user?')">Delete</a>

                                        {{-- <button type="submit" name="delete" class="btn btn-danger mr-1 mb-1" onClick="return confirm('Do you want to delete this user?')">Delete</button> --}}
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
