@extends('layouts.app')

@section('after_scripts')

@endsection

@section('content')

    <!-- Container -->
    <div id="container">
        <!-- Header
            ================================================== -->
        <header class="clearfix">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.html">Ima<span>go</span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right navigate-section">
                            <li class="megadrop"><a class="active" href="index-2.html#home-section">Home</a>
                                <div class="megadrop-down">
                                    <div class="dropdown">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-8">
                                                <h2>One Page Layouts</h2>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <ul>
                                                            <li><a href="http://nunforest.com/site/imago-demo/creative">Creative</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/classic">Classic</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/business">Business</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/restaurant">Restaurant</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/minimal">Minimal</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <ul>
                                                            <li><a href="http://nunforest.com/site/imago-demo/photography">Photography</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/application">application</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/travel">Travel</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/interior">Interior</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/personal">Personal</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <ul>
                                                            <li><a href="index-2.html">Medicine</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/gallery">Gallery</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/shop1">Shop 1</a></li>
                                                            <li><a href="http://nunforest.com/site/imago-demo/shop2">Shop 2</a></li>
                                                            <li><a class="comming" href="#">Comming soon</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <h2>Multiple Layouts</h2>
                                                <ul>
                                                    <li><a href="http://nunforest.com/site/imago-demo/multipurpose">Multipurpose</a></li>
                                                    <li><a href="http://nunforest.com/site/imago-demo/magazine">Magazine</a></li>
                                                    <li><a class="comming" href="#">Comming soon</a></li>
                                                    <li><a class="comming" href="#">Comming soon</a></li>
                                                    <li><a class="comming" href="#">Comming soon</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="index-2.html#about-section">About</a></li>
                            <li><a href="index-2.html#team-section">Team</a></li>
                            <li><a href="index-2.html#portfolio-section">Works</a></li>
                            <li><a href="index-2.html#services-section">Services</a></li>
                            <li class="megadrop"><a href="#">Pages</a>
                                <div class="megadrop-down">
                                    <div class="dropdown">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5">
                                                <h2>Portfolio Pages</h2>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li><a href="portfolio-grid-2col.html">Grid 2 Col</a></li>
                                                            <li><a href="portfolio-grid-3col.html">Grid 3 Col</a></li>
                                                            <li><a href="portfolio-grid-fullwidth.html">Grid Full</a></li>
                                                            <li><a href="portfolio-masonry-3col.html">Masonry 3 Col</a></li>
                                                            <li><a href="portfolio-masonry-4col.html">Masonry 4 Col</a></li>
                                                            <li><a href="portfolio-masonry-fullwidth.html">Masonry Full</a></li>
                                                            <li><a href="portfolio-alt1.html">Alternative 1</a></li>
                                                            <li><a href="portfolio-alt2.html">Alternative 2</a></li>
                                                            <li><a href="portfolio-alt3.html">Alternative 3</a></li>
                                                            <li><a href="portfolio-black-2col.html">Black 2 Col</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li><a href="portfolio-black-3col.html">Black 3 Col</a></li>
                                                            <li><a href="portfolio-black-fullwidth.html">Black Full</a></li>
                                                            <li><a href="portfolio-vertical-2col.html">Vertical 2 Col</a></li>
                                                            <li><a href="portfolio-vertical-3col.html">Vertical 3 Col</a></li>
                                                            <li><a href="portfolio-vertical-fullwidth.html">Vertical Full</a></li>
                                                            <li><a href="portfolio-vertical-dark-2col.html">Dark 2 Col</a></li>
                                                            <li><a href="portfolio-vertical-dark-3col.html">Dark 3 Col</a></li>
                                                            <li><a href="portfolio-vertical-dark-fullwidth.html">Dark Full</a></li>
                                                            <li><a href="single-project.html">Single Project 1</a></li>
                                                            <li><a href="single-project2.html">Single Project 2</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5">
                                                <h2>Blog Pages</h2>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li><a href="blog.html">Blog Default</a></li>
                                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                                            <li><a href="blog-timeline.html">Blog Timeline</a></li>
                                                            <li><a href="blog-grid-3col.html">Grid 3 col</a></li>
                                                            <li><a href="blog-grid-fullwidth.html">Grid Full</a></li>
                                                            <li><a href="blog-masonry-3col.html">Masonry 3 col</a></li>
                                                            <li><a href="blog-masonry-fullwidth.html">Masonry Full</a></li>
                                                            <li><a href="blog-alt.html">Blog Alternative</a></li>
                                                            <li><a href="blog-vertical.html">Blog Vertical</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li><a href="blog-vertical-grid.html">Vertical Grid</a></li>
                                                            <li><a href="blog-vertical-masonry.html">Vertical Masonry</a></li>
                                                            <li><a href="blog-vertical-medium.html">Vertical Medium</a></li>
                                                            <li><a href="blog-vertical-standard.html">Vertical Standard</a></li>
                                                            <li><a href="single-post.html">Single Post 1</a></li>
                                                            <li><a href="single-post2.html">Single Post 2</a></li>
                                                            <li><a href="single-video.html">Single Post Video</a></li>
                                                            <li><a href="single-image.html">Single Post image</a></li>
                                                            <li><a href="single-text.html">Single Post Text</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <h2>Other Pages</h2>
                                                <ul>
                                                    <li><a href="404-error.html">404 Error</a></li>
                                                    <li><a href="comming-soon.html">Countdown</a></li>
                                                    <li><a href="faqs.html">Faq's</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="tabs.html">Tabs &amp; Accordion</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="index-2.html#contact-section">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
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
                                <h2>All Reports</h2>
                                 <div class="row">
                                <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Country of Origin</th>
                                <th>Contact</th>
                                <th>Hotel</th>
                                <th>Time of Reporting</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                    </table>
                            </div>
                            </div>
                            <div class="tab-pane" id="option2">
                                <img src="upload/blog/1.jpg" alt="">
                                <h2>Easy Customizable</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            </div>
                            <div class="tab-pane" id="option3">
                                <img class="left-order" src="upload/blog/1.jpg" alt="">
                                <h2>Retina Ready</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
        ]
    });
});
</script>
    
@endsection