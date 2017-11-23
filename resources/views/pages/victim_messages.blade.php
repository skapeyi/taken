@extends('layouts.app')

@section('after_scripts')

@endsection

@section('content')


 @include('includes.nav')
	



		<!-- content
				================================================== -->
		<div id="content">

			<!-- page-banner-section 
				================================================== -->
			<section class="page-banner-section">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2><span style="color:white;">View</span>  <span style="color:white;">Recieved Messages</span> </h2>
						</div>
						<div class="col-md-6">
							<ul class="page-pagin">
								<li><a href="{{ url('/') }}">Home</a></li>
								<li><a href="{{ url('victims-messages') }}">Messages Recieved</a></li>
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
					
					<!-- Nav tabs -->

					<div class="tab-posts-box">

						<ul class="nav nav-tabs" id="myTab">
							<li class="active">
								<a href="#option1" data-toggle="tab">About Victims messages</a>
							</li>
							<li>
								<a href="#option2" data-toggle="tab">Victims Statistics</a>
							</li>
							<li>
								<a href="#option3" data-toggle="tab">How do you save more lives</a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="option1">
								<h2>Fully Responsive</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								</p>
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
					<div class="accordion-box">
						<div class="accord-elem active">
							<div class="accord-title">
								<a class="accord-link" href="#"></a>
								<h2>Vivamus vestibulum nulla nec ante.</h2>
							</div>
							<div class="accord-content">
								<p>Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							</div>
						</div>

						<div class="accord-elem">
							<div class="accord-title">
								<a class="accord-link" href="#"></a>
								<h2>Morbi in sem quis dui placerat ornare. </h2>
							</div>
							<div class="accord-content">
								<p>Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							</div>
						</div>

						<div class="accord-elem">
							<div class="accord-title">
								<a class="accord-link" href="#"></a>
								<h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </h2>
							</div>
							<div class="accord-content">
								<p>Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							</div>
						</div>

						<div class="accord-elem">
							<div class="accord-title">
								<a class="accord-link" href="#"></a>
								<h2>Donec quis dui at dolor tempor interdum.</h2>
							</div>
							<div class="accord-content">
								<p>Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							</div>
						</div>

						<div class="accord-elem">
							<div class="accord-title">
								<a class="accord-link" href="#"></a>
								<h2>Sed adipiscing ornare risus.</h2>
							</div>
							<div class="accord-content">
								<p>Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							</div>
						</div>

						<div class="accord-elem">
							<div class="accord-title">
								<a class="accord-link" href="#"></a>
								<h2>Aenean dignissim pellentesque felis.</h2>
							</div>
							<div class="accord-content">
								<p>Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
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

	</div>
	<!-- End Container -->
	
	
</body>


@endsection