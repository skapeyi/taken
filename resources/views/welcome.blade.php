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
        <section id="home-section" class="slider1">
            
            <!--
            #################################
                - THEMEPUNCH BANNER -
            #################################
            -->
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>    <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
                            <!-- MAIN IMAGE -->
                            <img src="upload/slide/1.jpg"  alt="slidebg1" data-lazyload="upload/slide/1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption small_text customin tp-resizeme rs-parallaxlevel-0"
                                data-x="2"
                                data-y="220" 
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><span style="color:white;">HUMAN TRAFFICKING</span>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption finewide_medium_white lfr tp-resizeme rs-parallaxlevel-0"
                                data-x="2"
                                data-y="280" 
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="1800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Report suspicious <br>incidents now!. 
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                                data-x="2"
                                data-y="475" 
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-linktoslide="next"
                                style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn'><span style="color:white;">REPORT</span></a>
                            </div>

                        </li>

                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="Ken Burns Slide">
                            <!-- MAIN IMAGE -->
                            <img src="upload/slide/2.jpg"  alt="2" data-lazyload="upload/slide/2.jpg" data-bgposition="right top" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="center bottom">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption small_text customin tp-resizeme rs-parallaxlevel-0"
                                data-x="190"
                                data-y="240" 
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><span style="color:white;">with the platform you any phone user can access it</span>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption finewide_medium_white lfr tp-resizeme rs-parallaxlevel-0 center-align"
                                data-x="20"
                                data-y="280" 
                                data-speed="500"
                                data-start="1800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><span>simply use our</span>  ussd codes <br> 6990 <span>AND SAVE A LIFE</span>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"
                                data-x="390"
                                data-y="475"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2300"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-linktoslide="next"
                                style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn'>Read More</a>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="Parallax 3D">
                            <!-- MAIN IMAGE -->
                            <img src="upload/slide/4.jpg"  alt="3dbg" data-lazyload="upload/slide/4.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption small_text lft tp-resizeme rs-parallaxlevel-0"
                                data-x="190"
                                data-y="240"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption finewide_medium_white lfl tp-resizeme rs-parallaxlevel-0 center-align"
                                data-x="15"
                                data-y="280" 
                                data-speed="500"
                                data-start="1800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><span>Every 30 Seconds  A person</span> <br> becomes A Victim</span>
                            </div>

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption small_text lfb tp-resizeme rs-parallaxlevel-0"
                                data-x="378"
                                data-y="530" 
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2300"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn'>Read More</a>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </section>

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
                    <form class="reservation-form">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="fname">First Name:</label>
                                <input type="text" name="fname" id="fname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="lname">Last Name:</label>
                                <input type="text" name="lname" id="lname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="phone-number">Phone Number:</label>
                                <input type="text" name="phone-number" id="phone-number" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="email-address">EMAIL ADDRESS:</label>
                                <input type="text" name="email-address" id="email-address" />
                            </div>
                            <div class="col-sm-4">
                                <label for="appointment-date">Appointment Date:</label>
                                <input type="text" name="appointment-date" id="appointment-date" />
                            </div>
                            <div class="col-sm-4">
                                <label for="pattient">Patient:</label>
                                <input type="text" name="pattient" id="pattient" />
                            </div>
                        </div>
                        <label for="message">Message:</label>
                        <textarea name="message" id="message"></textarea>
                        <div class="submit-area">
                            <input type="submit" value="make a reservation" id="make_reservation" />
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

                        <div class="col-md-3 col-sm-6">
                            <div class="about-post">
                                <a href="#" data-link="1" class="active"><i class="fa fa-clock-o"></i></a>
                                <h2>24 Hours Service</h2>
                                <p>Donec odio. Quisque volutpat mattis eros. Nullam malesuada </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="about-post">
                                <a href="#" data-link="2"><i class="fa fa-user-md"></i></a>
                                <h2>Qualified Doctors</h2>
                                <p>Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="about-post">
                                <a href="#" data-link="3"><i class="fa fa-heart"></i></a>
                                <h2>Cardio Monitoring</h2>
                                <p>Donec nec justo eget felis facilisis fermentum.  </p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="about-post">
                                <a href="#" data-link="4"><i class="fa fa-building"></i></a>
                                <h2>Great Infrastructure</h2>
                                <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. </p>
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
                                    <img src="images/dev1.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 triggerAnimation animated" data-animate="fadeInRight">
                                <div class="tab-text">
                                    <h2>24 Hours Service</h2>
                                    <ul>
                                        <li><i class="fa fa-user-md"></i>Donec odio. </li>
                                        <li><i class="fa fa-ambulance"></i>Quisque volutpat mattis eros. </li>
                                        <li><i class="fa fa-life-ring"></i>Nullam malesuada erat ut turpis. </li>
                                        <li><i class="fa fa-magic"></i>Suspendisse urna nibh</li>
                                    </ul>
                                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim </p>
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

        <!-- reservation-section 
            ================================================== -->
        <section id="reservation-section">

            <div class="container">
                <div class="title-section white">
                    <h1>Make Reservation</h1>
                    <span></span>
                </div>
                <div class="reservation-box">
                    <form class="reservation-form">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="fname">First Name:</label>
                                <input type="text" name="fname" id="fname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="lname">Last Name:</label>
                                <input type="text" name="lname" id="lname" />
                            </div>
                            <div class="col-sm-4">
                                <label for="phone-number">Phone Number:</label>
                                <input type="text" name="phone-number" id="phone-number" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="email-address">EMAIL ADDRESS:</label>
                                <input type="text" name="email-address" id="email-address" />
                            </div>
                            <div class="col-sm-4">
                                <label for="appointment-date">Appointment Date:</label>
                                <input type="text" name="appointment-date" id="appointment-date" />
                            </div>
                            <div class="col-sm-4">
                                <label for="pattient">Patient:</label>
                                <input type="text" name="pattient" id="pattient" />
                            </div>
                        </div>
                        <label for="message">Message:</label>
                        <textarea name="message" id="message"></textarea>
                        <div class="submit-area">
                            <input type="submit" value="make a reservation" id="make_reservation" />
                        </div>
                    </form>
                </div>

            </div>

        </section>
        <!-- End reservation section -->

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
                    <h1>ABOUT <span>TAKEN USERS</h1>
                </div>
                <div class="statistic-box">
                    <div class="statistic-post">
                        <i class="fa fa-stethoscope"></i>
                        <h2>OUR STAFF</h2>
                        <p><span class="timer" data-from="0" data-to="70"></span></p>
                    </div>
                    <div class="statistic-post">
                        <i class="fa fa-hospital-o"></i>
                        <h2>CLINIC ROOMS</h2>
                        <p><span class="timer" data-from="0" data-to="50"></span>+</p>
                    </div>
                    <div class="statistic-post">
                        <i class="fa fa-ambulance"></i>
                        <h2>MACHINES</h2>
                        <p><span class="timer" data-from="0" data-to="100"></span>+</p>
                    </div>
                    <div class="statistic-post">
                        <i class="fa fa-trophy"></i>
                        <h2>Awwards</h2>
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
            ================================================== -->
        {{-- <section id="news-section">
            <div class="container">

                <div class="title-section">
                    <h1>Latest News</h1>
                    <span></span>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </p>
                </div>

                <div class="news-box">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="news-post">
                                <img src="upload/blog/news1.jpg" alt="">
                                <div class="news-cont">
                                    <h2><a href="single-post.html">Cras ornare tristique elit.</a></h2>
                                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                    <a href="single-post.html">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="news-post">
                                <img src="upload/blog/news2.jpg" alt="">
                                <div class="news-cont">
                                    <h2><a href="single-post.html">Cras ornare tristique elit.</a></h2>
                                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                    <a href="single-post.html">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="news-post">
                                <img src="upload/blog/news3.jpg" alt="">
                                <div class="news-cont">
                                    <h2><a href="single-post.html">Cras ornare tristique elit.</a></h2>
                                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                    <a href="single-post.html">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="news-post">
                                <img src="upload/blog/news4.jpg" alt="">
                                <div class="news-cont">
                                    <h2><a href="single-post.html">Cras ornare tristique elit.</a></h2>
                                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                    <a href="single-post.html">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="show-more">
                    <a href="blog.html" class="button-two">View all news</a>
                </div>
            </div>
        </section> --}}
        <!-- End news section -->

        <!-- contact-section 
            ================================================== -->
        <section id="contact-section">

            <div class="contact-info">
                <div class="container">
                    <div class="title-section white">
                        <h1>Contacts</h1>
                        <span></span>
                    </div>
                    <div class="contact-info-box">
                        <div class="row">
                            <div class="col-md-3">
                                <span><i class="fa fa-clock-o"></i></span>
                                <h2>Opening Hours</h2>
                                <p> Monday - Thursday <br> 7.00 - 21.00</p>
                                <p> Friday - Sunday <br> 7.00 - 23.00</p>
                            </div>
                            <div class="col-md-3">
                                <span><i class="fa fa-map-marker"></i></span>
                                <h2>Head Office</h2>
                                <p>795 Fake Ave, Door 6 <br> Wonderland, CA 94107, USA</p>
                            </div>
                            <div class="col-md-3">
                                <span><i class="fa fa-phone"></i></span>
                                <h2>Call Us</h2>
                                <p> Phone: +351123456789 <br> Fax: +351987654321</p>
                            </div>
                            <div class="col-md-3">
                                <span><i class="fa fa-envelope"></i></span>
                                <h2>Email Us</h2>
                                <p> info@marble.com <br> support@marble.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="contact-form">
                <div class="container">
                    <form id="contact-form">
                        <h2>GET IN TOUCH</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <input name="name" id="name" type="text" placeholder="Name(Required)">
                            </div>
                            <div class="col-md-4">
                                <input name="mail" id="mail" type="text" placeholder="Email(Required)">
                            </div>
                            <div class="col-md-4">
                                <input name="website" id="website" type="text" placeholder="Website">
                            </div>
                        </div>
                        <textarea name="comment" id="comment" placeholder="Your Message(Required)"></textarea>
                        <div class="submit-area">
                            <input type="submit" id="submit_contact" value="Send Message">
                            <div id="msg" class="message"></div>                                
                        </div>
                    </form>
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