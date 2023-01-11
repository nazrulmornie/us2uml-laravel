{{-- @extends('layouts.app')

@section('title') User Stories to UML @endsection

@section('content')

@guest
<div class="vh-100">
    <div class="row mx-0 align-items-center vh-100">
        <div class="col-lg-6 text-lg-left bg-dark-1 vh-100">
            <p class="display-2 text-end text-uppercase mb-3 text-white">Generating UML Model from your textual USER STORIES</p>
            <p class="text-white mb-4">Generating UML Model from your textual USER STORIES</p>
            <div class="text-center">
                <a href="{{ route('login') }}" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a>
            </div>
        </div>
        <div class="col-lg-6 px-2 text-center vh-100">
            <img class="img-fluid mt-5 mt-lg-0" src="img/mainlogo.png" alt="">
        <a href="https://www.freepik.com/free-vector/neon-style-coming-soon-glowing-background-design_8562880.htm#query=coming%20soon&position=4&from_view=search&track=sph">Image by starline</a> on Freepik

        </div>
    </div>
</div>
@else

@endguest
@endsection --}}

@extends('layouts.app')
@section('title') Login @endsection
@section('content')


 <!--
Welcome Slider
==================================== -->
<section class="hero-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-lg-0">
				<div class="video-player">
					<img class="img-fluid rounded w-100" src="images/slider/video-player-thumb.jpg" alt="">
					<a class="play-icon" href="javascript:void(0)">
						<i class="tf-ion-play" data-video="https://www.youtube.com/embed/g3-VxLQO7do?autoplay=1"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="block">
					<h2>We love to make brands grow</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quo dolor est incidunt suscipit minima, alias numquam voluptatum rerum porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore at laboriosam unde repellat id expedita quae quisquam libero officia consequatur. </p>
					<ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
						<li class="list-inline-item">
							<a href="https://themefisher.com/" target="_blank" class="btn btn-main">Download More</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--
Start About Section
==================================== -->
<section class="about-2 section bg-gray" id="about">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<h2>We have explored the digital landscape with passion for a long time</h2>
			</div>
			<div class="col-12 col-md-7">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae deleniti ipsa labore necessitatibus culpa veritatis quo accusantium, neque enim ea ad eaque iure, quas tempore velit, quibusdam dolor illo! Explicabo.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quisquam maiores iste soluta, nihil dolorem?</p>
			</div>

		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<section class="services section-xs" id="services">
	<div class="container">
		<div class="row">
			<!-- Single Service Item -->
			<div class="col-md-4 col-sm-6" >
				<div class="service-block color-bg text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-copy-outline"></i>
					</div>
					<h3>WordPress Theme</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-md-4 col-sm-6" >
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-alarm-outline"></i>
					</div>
					<h3>Responsive Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
			<!-- End Single Service Item -->

			<!-- Single Service Item -->
			<div class="col-md-4 col-sm-6 mx-auto"  >
				<div class="service-block color-bg text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-book-outline"></i>
					</div>
					<h3>Media & Advertisement</h3>
					<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
				</div>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->




<section class="about section-sm" id="about">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-md-5">
				<img src="images/about/about-1.jpg" class="img-fluid rounded shadow w-100" alt="about-img">
			</div>
			<div class="col-md-5">
				<div class="content">
					<h2>Creativity is in our <br> blood</h2>
					<p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl
						auctor eget. Donec dictum neque est, ac faucibus ex blandit a
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quo minima ab aperiam molestiae natus
						repellendus neque culpa iure, nemo veritatis explicabo facilis, officia, saepe! Et corrupti odit, non deserunt.
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-5 order-md-1 order-2">
				<div class="content">
					<h2>We think out of the <br> Box</h2>
					<p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl
						auctor eget. Donec dictum neque est, ac faucibus ex blandit a
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quo minima ab aperiam molestiae natus
						repellendus neque culpa iure, nemo veritatis explicabo facilis, officia, saepe! Et corrupti odit, non deserunt.
				</div>
			</div>
			<div class="col-md-5 order-md-2 order-1">
				<img src="images/about/about-2.jpg" class="img-fluid rounded shadow w-100" alt="">
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start About Section
==================================== -->
<section class="service-2 section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title text-center">
          <h4>How We Works</h4>
          <h2>Our work process</h2>
          <span class="border"></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque
            sit!</p>
        </div>
      </div>
      <div class="col-8 mx-auto">
        <div class="row">
          <div class="col-md-6 p-0">
            <div class="service-item text-center">
              <span class="count">1.</span>
              <i class="tf-ion-ios-briefcase-outline"></i>
              <h4>Project Analysis</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div>
          <div class="col-md-6 p-0">
            <div class="service-item text-center">
              <span class="count">2.</span>
              <i class="tf-ion-ios-alarm-outline"></i>
              <h4>Time Management</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div>
          <div class="col-md-6 p-0">
            <div class="service-item text-center">
              <span class="count">3.</span>
              <i class="tf-ion-ios-email-outline"></i>
              <h4>Mail Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div>
          <div class="col-md-6 p-0">
            <div class="service-item text-center">
              <span class="count">4.</span>
              <i class="tf-ion-ios-locked-outline"></i>
              <h4>Secure System</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- End section -->

<!-- Start Portfolio Section
=========================================== -->
<section class="portfolio section" id="portfolio">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>RECENT WORK</h4>
					<h2>WORK SHOWCASE.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row" >
			<div class="col-lg-12">
				<!-- /section title -->
				<div class="portfolio-filter">
					<button class="active" type="button" data-filter="all">All</button>
					<button type="button" data-filter="photography">Photography</button>
					<button type="button" data-filter="ios">IOS App</button>
					<button type="button" data-filter="development">Development</button>
					<button type="button" data-filter="design">Design</button>
				</div>
			</div>
		</div> <!-- /end col-lg-12 -->
		<div class="row filtr-container">
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design">
				<div class="portfolio-block">
					<img class="img-fluid" src="images/portfolio/portfolio-1.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design, ios">
				<div class="portfolio-block ">
					<img class="img-fluid" src="images/portfolio/portfolio-2.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="photography, development">
				<div class="portfolio-block">
					<img class="img-fluid" src="images/portfolio/portfolio-3.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="photography, ios">
				<div class="portfolio-block">
					<img class="img-fluid" src="images/portfolio/portfolio-4.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design">
				<div class="portfolio-block">
					<img class="img-fluid" src="images/portfolio/portfolio-5.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">AirBnB Postcard</a></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 p-0 filtr-item" data-category="design, development">
				<div class="portfolio-block">
					<img class="img-fluid" src="images/portfolio/portfolio-1.jpg" alt="">
					<div class="caption">
						<a class="search-icon" href="images/portfolio/portfolio-1.jpg" data-lightbox="image-1">
							<i class="tf-ion-ios-search-strong"></i>
						</a>
						<h4><a href="">Photography Website</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end row -->
</section>   <!-- End section -->






<!-- Start Our Team
=========================================== -->
<section class="team section bg-gray" id="team">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>TEAM MEMBER</h4>
					<h2>Our Team.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="images/team/member-1.jpg" alt="team people">
						<!-- /member photo -->
					</div>
					<!-- member name & designation -->
					<div class="member-content">
						<h3>Shawshank Redemption</h3>
						<span>Head Of Marketing</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="images/team/member-2.jpg" alt="team people">
						<!-- /member photo -->
					</div>
					<!-- member name & designation -->
					<div class="member-content">
						<h3>Luis Anthon</h3>
						<span>Web Developer</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->

			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="images/team/member-3.jpg" alt="team people">
						<!-- /member photo -->

					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Jonathon Andrew</h3>
						<span>Head Of Management</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->
			<!-- team member -->
			<div class="col-lg-3 col-sm-6">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img class="img-fluid" src="images/team/member-4.jpg" alt="team people">
						<!-- /member photo -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3>Michael Jonson</h3>
						<span>Head Of Management</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-google-outline"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#">
									<i class="tf-ion-social-dribbble"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /member name & designation -->
				</div>
			</div>
			<!-- end team member -->
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</section>
<!-- End section -->

<!-- Start Pricing section
		=========================================== -->
<section class="pricing-table  section" id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>Easy Pricing</h4>
					<h2>Pricing.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<!-- single pricing table -->
			<div class="col-md-4 col-sm-6">
				<div class="pricing-item">
					<!-- plan name & value -->
					<div class="price-title bg-pricing">
						<h3>Basic</h3>
						<strong class="value">$99</strong>
						<p>Perfect for single freelancers who work by themselves</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li>1GB Disk Space</li>
						<li>10 Email Account</li>
						<li>Script Installer</li>
						<li>1 GB Storage</li>
						<li>10 GB Bandwidth</li>
						<li>24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="#">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-md-4 col-sm-6">
				<div class="pricing-item">
					<!-- plan name & value -->
					<div class="price-title  bg-pricing">
						<h3>Advance</h3>
						<strong class="value">$199</strong>
						<p>Suitable for small businesses with up to 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li>1GB Disk Space</li>
						<li>10 Email Account</li>
						<li>Script Installer</li>
						<li>1 GB Storage</li>
						<li>10 GB Bandwidth</li>
						<li>24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="#">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-md-4 col-sm-6 mx-auto">
				<div class="pricing-item ">
					<!-- plan name & value -->
					<div class="price-title bg-pricing">
						<h3>Professional</h3>
						<strong class="value">$299</strong>
						<p>Great for large businesses with more than 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li>1GB Disk Space</li>
						<li>10 Email Account</li>
						<li>Script Installer</li>
						<li>1 GB Storage</li>
						<li>10 GB Bandwidth</li>
						<li>24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="#">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->


		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</section>
<!-- End section -->

<!-- Start Testimonial
=========================================== -->

<section class="testimonial section" id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- testimonial wrapper -->
				<div class="testimonial-slider">
					<!-- testimonial single -->
					<div class="item text-center">
						<i class="tf-ion-quote"></i>
						<!-- client info -->
						<div class="client-details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores,
								unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing
								elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
						</div>
						<!-- /client info -->
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/client-logo/clients-1.jpg" class="img-fluid" alt="">
						</div>
						<div class="client-meta">
							<h4>Matt Cutts</h4>
							<span>CEO , Company Name</span>
						</div>
						<!-- /client photo -->
					</div>
					<!-- /testimonial single -->

					<!-- testimonial single -->
					<div class="item text-center">
						<i class="tf-ion-quote"></i>
						<!-- client info -->
						<div class="client-details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores,
								unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing
								elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
						</div>
						<!-- /client info -->
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/client-logo/clients-2.jpg" class="img-fluid" alt="">
						</div>
						<div class="client-meta">
							<h4>Elon Musk</h4>
							<span>CEO , Company Name</span>
						</div>
						<!-- /client photo -->
					</div>
					<!-- /testimonial single -->

					<!-- testimonial single -->
					<div class="item text-center">
						<i class="tf-ion-quote"></i>
						<!-- client info -->
						<div class="client-details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores,
								unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing
								elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
						</div>
						<!-- /client info -->
						<!-- client photo -->
						<div class="client-thumb">
							<img src="images/client-logo/clients-1.jpg" class="img-fluid" alt="">
						</div>
						<div class="client-meta">
							<h4>Jonathon Ive</h4>
							<span>CEO , Company Name</span>
						</div>
						<!-- /client photo -->
					</div>
					<!-- /testimonial single -->
				</div>
			</div>
			<!-- end col lg 12 -->
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</section>
<!-- End Section -->

<!--
Start Blog Section
=========================================== -->
<section class="blog section" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h4>Our untold story</h4>
					<h2>Blog.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<!-- single blog post -->
			<article class="col-md-4 col-sm-6" >
				<div class="post-item">
					<div class="post-thumb">
					  	<img class="img-fluid shadow rounded" src="images/blog/post-1.jpg" alt="Generic placeholder image">
					</div>
			  		<div class="post-title">
				    	<h3 class="mt-0"><a href="">Ten things about Business</a></h3>
			  		</div>
			  		<div class="post-meta">
			  			<span>By</span> <a href="" class="">Jonathon Ive</a>
			  		</div>
			  		<div class="post-content">
					    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos blanditiis sint enim necessitatibus placeat dolor.</p>
			  		</div>
				    <a class="btn btn-main" href="#">Read more</a>
				</div>
			</article>
			<!-- /single blog post -->

			<!-- single blog post -->
				<article class="col-md-4 col-sm-6" >
					<div class="post-item">
						<div class="post-thumb">
						  	<img class="img-fluid shadow rounded" src="images/blog/post-2.jpg" alt="Generic placeholder image">
						</div>
				  		<div class="post-title">
					    	<h3 class="mt-0"><a href="">Something I need to tell you</a></h3>
				  		</div>
				  		<div class="post-meta">
				  			<ul class="list-inline">
				  				<li class="list-inline-item">
				  					<span>By</span> <a href="" class="">Jonathon Ive</a>
				  				</li>
				  				<li class="list-inline-item">
				  					<span>By</span> <span> 15th December 2017</span>
				  				</li>
							</ul>
				  		</div>
				  		<div class="post-content">
						    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos blanditiis sint enim necessitatibus placeat dolor.</p>
				  		</div>
					    <a class="btn btn-main" href="#">Read more</a>
					</div>
				</article>
			<!-- end single blog post -->
			<!-- single blog post -->
				<article class="col-md-4 col-sm-6" >
					<div class="post-item">
						<div class="post-thumb">
						  	<img class="img-fluid shadow rounded" src="images/blog/post-3.jpg" alt="Generic placeholder image">
						</div>
				  		<div class="post-title">
					    	<h3 class="mt-0"><a href="">Are you doing the Right Way?</a></h3>
				  		</div>
				  		<div class="post-meta">
				  			<ul class="list-inline">
				  				<li class="list-inline-item">
				  					<span>By</span> <a href="" class="">Jonathon Ive</a>
				  				</li>
				  				<li class="list-inline-item">
				  					<span>By</span> <span> 15th December 2017</span>
				  				</li>
							</ul>
				  		</div>
				  		<div class="post-content">
						    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptatem accusantium dolorum, maxime eos blanditiis sint enim necessitatibus placeat dolor.</p>
				  		</div>
					    <a class="btn btn-main" href="#">Read more</a>
					</div>
				</article>
			<!-- end single blog post -->

		</div> <!-- end row -->
	</div> <!-- end container -->
</section>

@endsection
