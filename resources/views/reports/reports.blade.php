@extends('layouts.app')

@section('after_scripts')

@endsection

@section('content')

    <!-- Container -->
    <div id="container">
        <!-- Header
            ================================================== -->
    
            @include('includes.nav')
        <!-- End Header -->

        <!-- content
                ================================================== -->
        <div id="content">

            <!-- page-banner-section 
                ================================================== -->
            <section class="page-banner-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2><span>Incidence</span> Reports</h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="page-pagin">
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="tabs.html">Incidence Reports</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End page-banner section -->

            <!-- tabs & accord-section 
                ================================================== -->
            <section class="tabs-accord-section">
                <div class="container">
                    <div class="title-section">
                        <h1>Incidence Reports</h1>
                    </div>
                    <!-- Nav tabs -->
                    <div class="tab-posts-box">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active">
                                <a href="#option1" data-toggle="tab">All Reports</a>
                            </li>
                            <li>
                                <a href="#option2" data-toggle="tab">Victims</a>
                            </li>
                            <li>
                                <a href="#option3" data-toggle="tab">Whistle blowers</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="option1">
                                
                                 <div class="row">
                                <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Victim</th>
                                <th>Whistle Blower</th>
                                <th>Location</th>
                                <th>Country of Origin</th>
                                <th>Hotel/Landmark</th>
                                <th>Time of Reporting</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                    </table>
                            </div>
                            </div>
                            <div class="tab-pane" id="option2">
                                <div class="row">
                                <table class="table table-hover table-bordered table-striped victimdatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Victim</th>
                                <th>Location</th>
                                <th>Country of Origin</th>
                                <th>Contact</th>
                                <th>Hotel/Landmark</th>
                                <th>Time of Reporting</th>
                            </tr>
                        </thead>
                    </table>
                            </div>

                            </div>
                            <div class="tab-pane" id="option3">
                                <div class="row">
                                <table class="table table-hover table-bordered table-striped whistleblowerdatatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Witness</th>
                                <th>Location</th>
                                <th>Country of Origin</th>
                                <th>Hotel/Landmark</th>
                                <th>Time of Reporting</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                    </table>
                            </div>

                            </div>
                        </div>
                    </div>
                  
            </section>
            <!-- End tabs & accord section -->
            
        </div>
        <!-- End content -->

        <!-- footer 
            ================================================== -->
     @include('includes.footer')
        <!-- End footer -->

    </div>
    <!-- End Container -->
    
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('reports/getallreports') }}',
        columns: [
            {data: 'victim_name', name: 'victim_name'},
            {data: 'reporter_name', name: 'reporter_name'},
            {data: 'location', name: 'location'},
            {data: 'country', name: 'country'},
            {data: 'hotel', name: 'hotel'},
            {data: 'incident_date', name: 'incident_date'},
            {data: 'evidence_url', name: 'evidence_url'},
        ]
    });

    $('.victimdatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('reports/getvictimreports') }}',
        columns: [
            {data: 'victim_name', name: 'victim_name'},
            {data: 'location', name: 'location'},
            {data: 'country', name: 'country'},
            {data: 'contact', name: 'contact'},
            {data: 'hotel', name: 'hotel'},
            {data: 'incident_date', name: 'incident_date'},
        ]
    });

    $('.whistleblowerdatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('reports/getwhistlereports') }}',
        columns: [
            {data: 'reporter_name', name: 'reporter_name'},
            {data: 'location', name: 'location'},
            {data: 'country', name: 'country'},
            {data: 'hotel', name: 'hotel'},
            {data: 'incident_date', name: 'incident_date'},
            {data: 'evidence_url', name: 'evidence_url'},
        ]
    });
});
</script>
    
@endsection