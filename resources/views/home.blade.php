@extends('layouts.app')

@section('content')
<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <H2>Product</H2>
</div>

@include('layouts.sidebar')


<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
    </div>

    <div id="main">
        @include('layouts.navbar')

<div class="main-content container-fluid">
<div class="page-title">
    <h3>Dashboard</h3>

</div>
<section class="section">
    <div class="row mb-2">




    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class='card-heading p-1 pl-3'>Totaly Added Items</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="pl-3">


                                <div class="legends">

                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class='w-3 h-3 rounded-full bg-info mr-2'></div><span class='text-xs'></span>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <canvas id="bar"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 col-md-3">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'>Total Customers <br> <br>



                        </h3>
                            <div class="card-right d-flex align-items-center">
                            </div>

                        </div>
                        <div class="chart-wrapper">
                            <canvas id="canvas1" style="height:100px !important"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'>Totle Items
                                <br><br>

                            </h3>
                            <div class="card-right d-flex align-items-center">

                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="canvas3" style="height:100px !important"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
</div>
@include('layouts.footer')

    </div>
</div>



<script src="js/feather-icons/feather.min.js"></script>
<script src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="js/app.js"></script>

<script src="vendors/chartjs/Chart.min.js"></script>
<script src="vendors/apexcharts/apexcharts.min.js"></script>
<script src="js/pages/dashboard.js"></script>

<script src="js/main.js"></script>
@endsection
