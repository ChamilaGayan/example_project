@extends('layouts.app')

@section('content')
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <h2>Product</h2>
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

                <!-- view -->



                    <section class="section">
        <div class="card">
            <div class="card-header">
                View Item
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('edit') }}">
                    @csrf
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>View Item</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($items as $item)
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{date('Y-m-d', strtotime($item->updated_at))}}</td>
                        <td><a href="{{ url('edit/').$item->id }}" class="btn btn-primary btn-sm">View Item</a></td>
                        </tr>

                      @endforeach

                    </tbody>
                </table>
                </form>
            </div>
        </div>

    </section>
            </div>
            </div>
        </div>

</div>
@include('layouts.footer')
        </div>
    </div>
    <script src="js/feather-icons/feather.min.js"></script>
    <script src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="js/app.js"></script>

    <script src="js/main.js"></script>
    @endsection
