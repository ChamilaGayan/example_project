@extends('layouts.app')

@section('content')
<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <H2>Admin Panel</H2>
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



<form method="POST" action="">
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class='card-heading p-1 pl-3'>Totaly Added Companies</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="pl-3">


                                <div class="legends">
                                    {{-- @foreach ($items as $item) --}}
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class='w-3 h-3 rounded-full bg-info mr-2'></div><span class='text-xs'>aaaa</span>
                                    </div>
                                    {{-- @endforeach --}}


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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class='card-heading p-1 pl-3'>Totaly Added Emplyees</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="pl-3">


                                <div class="legends">
                                    {{-- @foreach ($items as $item) --}}
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class='w-3 h-3 rounded-full bg-info mr-2'></div><span class='text-xs'>aaaa</span>
                                    </div>
                                    {{-- @endforeach --}}


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
    </form>



    </div>
</section>
</div>


    </div>
</div>
@include('layouts.footer')


<script src="js/feather-icons/feather.min.js"></script>
<script src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="js/app.js"></script>

<script src="vendors/chartjs/Chart.min.js"></script>
<script src="vendors/apexcharts/apexcharts.min.js"></script>
<script src="js/pages/dashboard.js"></script>

<script src="js/main.js"></script>
@endsection
