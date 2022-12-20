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

                <!-- view -->
                    <section class="section">
                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="table-responsive bg-white shadow rounded">
                                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                        <thead class="thead-light">
                                          <tr>
                                            <th>Nic</th>
                                            <th>Patient Name</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Doctor</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                            {{-- @foreach ($companies as $company) --}}
                                          <tr>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>a</td>
                                            <td>
                                                {{-- @if ($appointment->status == 0)
                                                <a href="{{ route ('update.appointment', $appointment->id) }}" class="btn btn-icon btn-pills btn-soft-success" onClick="return confirm('Confirm Appointment ?')"><i class="uil uil-check"></i></a>
                                                <a href="{{ route ('delete.appointment', $appointment->id) }}" class="btn btn-icon btn-pills btn-soft-danger" onClick="return confirm('Close Appointment ?')"><i class="uil uil-times"></i></a>

                                                @else --}}
                                                <span class="badge bg-soft-success">Approved</span>
                                                {{-- @endif --}}
                                            </td>
                                          </tr>
                                          {{-- @endforeach --}}

                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div><!--end row-->



</div>
</section>

        </div>
    </div>
    @include('layouts.footer')
    <script src="js/feather-icons/feather.min.js"></script>
    <script src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="js/app.js"></script>

    <script src="js/main.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script>
$(document).ready(function () {
  $('#dataTable').DataTable(); // ID From dataTable
  $('#dataTableHover').DataTable(); // ID From dataTable with Hover
});
</script>
    @endsection
