@extends('layouts.app')

@section('title') About Us @endsection

@section('content')
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>About Us</h2>
				<nav aria-label="breadcrumb mx-auto" role="navigation">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">About Us</li>
					</ol>
				</nav>
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

<section class="about-mission-vision section">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="title">
					<h4>Little more brief</h4>
					<h2>About Us.</h2>
					<span class="border"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="commonTab">
					<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#philosophy" role="tab" aria-controls="philosophy"
							  aria-selected="true">Our Philosophy</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission"
							  aria-selected="false">mission</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision"
							  aria-selected="false">vision</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="philosophy" role="tabpanel" aria-labelledby="home-tab">
							<div class="row">
								<div class="col-md-6 align-self-center">
									<h2>We Create Designs<br> and technology</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus
										dolor harum voluptatibus modi dicta ducimus.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
										cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
								</div>
								<div class="col-md-6">
									<img class="img-fluid rounded shadow " src="images/company/company-image.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row">
								<div class="col-md-6 align-self-center">
									<h2>Our Mission</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus
										dolor harum voluptatibus modi dicta ducimus.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
										cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
								</div>
								<div class="col-md-6">
									<img class="img-fluid rounded shadow mt-20" src="images/company/company-image-2.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="contact-tab">
							<div class="row">
								<div class="col-md-6 align-self-center">
									<h2>Our Vision</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo natus
										dolor harum voluptatibus modi dicta ducimus.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
										cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
								</div>
								<div class="col-md-6">
									<img class="img-fluid rounded shadow mt-20" src="images/company/company-image-3.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


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

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
				<a href="contact.html" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
@endsection
