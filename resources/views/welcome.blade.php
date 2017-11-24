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

        <!-- home-section 
            ================================================== -->
        @include('includes.slider')
        <div class="container">
            
        </div>
        <!-- reportiing section -->
         <section id="reservation-section" >

           <div id="reservation-section1">
                <div class="container" >
                <div class="title-section white" >
                    <h1>Make Report</h1>
                    <span></span>
                </div>
                <div class="reservation-box" >
                    <form class="reservation-form" action="{{ route('store') }}" method="POST">
                    @if(Session::has('message')) <div class="alert alert-info"> {{Session::get('message')}} </div> @endif
                    {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="fname">Raw</label>
                                <input type="text" name="raw" id="fname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="lname">Type</label>
                                <input type="text" name="type" id="lname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="phone-number">Victim Name</label>
                                <input type="text" name="victim_name" id="lname" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="email-address">Reporter Name</label>
                                <input type="text" name="reporter_name" id="lname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="appointment-date">Location</label>
                                <input type="text" name="location" id="lname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="pattient">Country</label>
                                <input type="text" name="country" id="pattient" />
                            </div>

                        </div>
                         <div class="row">
                            <div class="col-sm-4">
                                <label for="email-address">Contact</label>
                                <input type="text" name="contact" id="lname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="email-address">Hotel</label>
                                <input type="text" name="hotel" id="lname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="appointment-date">Incident Date:</label>
                                <input type="date" name="incident_date" id="incident_date" />
                            </div>
                           
                            
                        </div>
                        <label for="message">Message:</label>
                        <textarea name="evidence_url" id="message"></textarea>
                        <div class="submit-area">
                            <input type="submit" value="Report Case" id="make_reservation" />
                        </div>


                    </form>
                </div>

            </div>
           </div>

        </section>
        <!-- end of reporting seciton-->
        <!-- End home section -->

        <!-- about-section 
            ================================================== -->
        <section id="about-section">
            <div class="title-section white">
                <div class="container">
                    <h1>Welcome to Taken</h1>
                    <p>Taken is an online and offline platform created to put a limit on human trafficking around the world.You are simply required to provide some information incase of any suspicious incidents by filling the reporting form and we shall be able to save a life. </p>
                </div>
            </div>
            <div class="about-box">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <div class="about-post">
                                <a href="#" data-link="1"><i class="fa fa-link"></i></a>
                                <h2>Victim Reports</h2>
                                <p>Taken allows victims to report of their abduction so authorities can follow them up for rescue through a simple sms and through a web application. </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="about-post">
                                <a href="#" data-link="2"><i class="fa fa-user"></i></a>
                                <h2>Witness Reports</h2>
                                <p>Taken allows witnesses to report suspicious cases to authorities so the victims can be rescued from their captors through  mobile and SMS applications. </p>
                            </div>
                        </div>                       

                        <div class="col-md-4 col-sm-6">
                            <div class="about-post">
                                <a href="#" data-link="4"><i class="fa fa-book"></i></a>
                                <h2>Awareness</h2>
                                <p>Through the information collected from the various reports, Taken raises awareness about Human Trafficking and areas in which it is most rampant. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content-tab">
                <div class="container">
                    <div class="tab-cont active" data-tab="1">
                        <div class="row">
                            <div class="col-md-8 triggerAnimation animated" data-animate="fadeInLeft">
                                <div class="image-content">
                                    <img src="images/taken_screen.png" alt="Taken">
                                </div>
                            </div>
                            <div class="col-md-4 triggerAnimation animated" data-animate="fadeInRight">
                                <div class="tab-text">
                                    <h2>How To Use</h2>
                                    <ul>
                                        <li><i class="fa fa-life-ring"></i>If you are a victim, send an SMS to 6990 with your details to get assistance. </li>
                                        <li><i class="fa fa-phone"></i>Type Victim, Name, City, Country where you are, Hotel or nearest land mark.</li>
                                        <li><i class="fa fa-phone"></i>For witnesses, Type Witness, Name, City, Country where you are, Hotel or nearest land mark.</li>
                                        <li><i class="fa fa-firefox"></i>You can also fill our a comprehensive web form on this website or use the Taken Mobile Application</li>
                                    </ul>
                                    <p>Don't be silent, Speak Up.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-cont" data-tab="2">
                        <div class="row">
                            <div class="col-md-8 triggerAnimation animated" data-animate="fadeInLeft">
                                <div class="image-content">
                                    <img src="images/dev2.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 triggerAnimation animated" data-animate="fadeInRight">
                                <div class="tab-text">
                                    <h2>Qualified Doctors</h2>
                                    <p><span>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</span></p>
                                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-cont" data-tab="3">
                        <div class="row">
                            <div class="col-md-4 triggerAnimation animated" data-animate="fadeInLeft">
                                <div class="tab-text">
                                    <h2>Great Infrastructure</h2>
                                    <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                </div>
                            </div>
                            <div class="col-md-8 triggerAnimation animated" data-animate="fadeInRight">
                                <div class="image-content">
                                    <img src="images/dev3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-cont" data-tab="4">
                        <div class="row">
                            <div class="col-md-4 triggerAnimation animated" data-animate="fadeInLeft">
                                <div class="tab-text">
                                    <h2>Great Infrastructure</h2>
                                    <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
                                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                </div>
                            </div>
                            <div class="col-md-8 triggerAnimation animated" data-animate="fadeInRight">
                                <div class="image-content">
                                    <img src="images/dev4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about section -->

        <!-- team-section 
            ================================================== -->
       
        <!-- End team section -->

        

        <!-- services-section 
            ================================================== -->
       <!--  <section id="services-section">
            <div class="container">
                <div class="title-section">
                    <h1>Our Medical Services</h1>
                    <span></span>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </p>
                </div>
                <div class="services-box">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="services-post">
                                <div class="inner-services">
                                    <img src="upload/others/ser1.jpg" alt="">
                                    <div class="up-box">
                                        <h2><a href="#">Cardiothoracic Surgery</a></h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-post">
                                <div class="inner-services">
                                    <img src="upload/others/ser2.jpg" alt="">
                                    <div class="up-box">
                                        <h2><a href="#">Dermatology</a></h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-post">
                                <div class="inner-services">
                                    <img src="upload/others/ser3.jpg" alt="">
                                    <div class="up-box">
                                        <h2><a href="#">Consultative &amp; Diagnostic</a></h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="services-post">
                                <div class="inner-services">
                                    <img src="upload/others/ser4.jpg" alt="">
                                    <div class="up-box">
                                        <h2><a href="#">Heart Clinic</a></h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-post">
                                <div class="inner-services">
                                    <img src="upload/others/ser5.jpg" alt="">
                                    <div class="up-box">
                                        <h2><a href="#">Rehabilitation Center</a></h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-post">
                                <div class="inner-services">
                                    <img src="upload/others/ser6.jpg" alt="">
                                    <div class="up-box">
                                        <h2><a href="#">Surgery &amp; Transplants</a></h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> -->
        <!-- End services section -->

        <!-- statistic-section 
            ================================================== -->
        <section id="statistic-section">
            <div class="container">
                <div class="title-section">
                    <h1>Current <span> Progress</h1>
                </div>
                <div class="statistic-box">
                    <div class="statistic-post">
                        <i class="fa fa-user"></i>
                        <h2>Victim Reports</h2>
                        <p><span class="timer" data-from="0" data-to="70"></span></p>
                    </div>
                    <div class="statistic-post">
                        <i class="fa fa-user-secret"></i>
                        <h2>Witness  Reports</h2>
                        <p><span class="timer" data-from="0" data-to="50"></span>+</p>
                    </div>
                    <div class="statistic-post">
                        <i class="fa fa-search"></i>
                        <h2>Victim Searches</h2>
                        <p><span class="timer" data-from="0" data-to="100"></span>+</p>
                    </div>
                    <div class="statistic-post">
                        <i class="fa fa-bed"></i>
                        <h2>Collaborating Hotels</h2>
                        <p><span class="timer" data-from="0" data-to="99"></span></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End statistic section -->

        <!-- clients-section 
            ================================================== -->
       
        <!-- End clients section -->

        <!-- news-section 


        <!-- contact-section 
            ================================================== -->
        <section id="contact-section">

            <div class="contact-info">
                <div class="container">
                    <div class="title-section white">
                        <h1>Join Our Cause</h1>
                        <span></span>
                    </div>
                    <div class="contact-info-box">
                        <div class="row">
                            <div class="col-md-4">
                                <span><i class="fa fa-clock-o"></i></span>
                                <h2>Opening Hours</h2>
                                <p> Monday - Fridat <br> 0900hrs - 2100hrs</p>
                            </div>
                            <div class="col-md-4">
                                <span><i class="fa fa-map-marker"></i></span>
                                <h2>Head Office</h2>
                                <p>Plot 62 <br> Kanjokya House, Kampala, Uganda</p>
                            </div>
                           
                            <div class="col-md-4">
                                <span><i class="fa fa-envelope"></i></span>
                                <h2>Email Us</h2>
                                <p> support@taken.com<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </section>
        <!-- End contact section -->


        <!-- footer 
            ================================================== -->
     @include('includes.footer')
        <!-- End footer -->

    </div>
    <!-- End Container -->

    <!-- Revolution slider -->
    <script type="text/javascript">

        jQuery(document).ready(function() {
                        
            jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:10000,
                startwidth:960,
                startheight:700,
                hideThumbs:200,
                
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                navigationType:"bullet",
                soloArrowLeftHOffset:50,
                soloArrowRightHOffset:50,
                
                touchenabled:"on",
                onHoverStop:"off",
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                                        
                                        parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                        
                keyboardNavigation:"off",
                
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:120,
                        
                shadow:0,
                fullWidth:"off",
                fullScreen:"on",

                spinner:"spinner4",
                
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",
                
                autoHeight:"off",                       
                forceFullWidth:"off",                       
                                        
                                        
                                        
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,                      
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                fullScreenOffsetContainer: ".header"    
            });
                            
        }); //ready
        
    </script>

@endsection