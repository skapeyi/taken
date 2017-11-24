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
                            <h2><span>Statistics</span> Reports</h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="page-pagin">
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="tabs.html">Statistics Reports</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End page-banner section -->

           <section>
            <div class="row">
                <div class="container"> 
                    <br>
               {!! $chart->html() !!}

               {!! $piechart->html() !!}

           </div>
            </div>
           </section>
            
        </div>
        <!-- End content -->

        <!-- footer 
            ================================================== -->
     @include('includes.footer')
        <!-- End footer -->

    </div>
    <!-- End Container -->
    
{!! Charts::scripts() !!}
{!! $chart->script() !!}
{!! $piechart->script() !!}
    
@endsection