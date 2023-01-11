@extends('layouts.app')

@section('title') Contact Us @endsection

@section('content')
<section class="contact-us section bg-gray" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title text-center">
                    <h4>Drop us a note</h4>
                    <h2>Contact Us.</h2>
                    <span class="border"></span>
                    <p>Any enquiries? Reach us by filling the form below, or contact us directly through the contact information at bottom of the page!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Details -->
            <div class="col-md-6">
                <div class="map">
                    <div id="map"></div>
                </div>

            </div>
            <!-- / End Contact Details -->

            <!-- Contact Form -->
            <div class="contact-form col-md-6 " >
                <form id="contact-form" method="post" action="sendmail.php" role="form">

                    <div class="form-group">
                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                    </div>

                    <div class="form-group">
                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                    </div>

                    <div id="success" class="success">
                        Thank you. The Mailman is on His Way :)
                    </div>

                    <div id="error" class="error">
                        Sorry, don't know what happened. Try later :(
                    </div>

                    <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                    </div>

                </form>
            </div>
            <!-- ./End Contact Form -->
        </div> <!-- end row -->
        <div class="row">
            <div class="col-md-6">
                <div class="address-block contact-meta-block">
                    <i class="tf-ion-android-pin"></i>
                    <h4>Our Location</h4>
                    <p>
                        Faculty of Computer Science and Information Technology <br>
                    Universiti Malaysia Sarawak (UNIMAS) <br>

                    </p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="phone-block contact-meta-block">
                    <i class="tf-ion-ios-telephone"></i>
                    <h4>Reach Us</h4>
                    <p>
                        Email: jnurfauza@unimas.my<br>
                        Email: 21020048@siswa.unimas.my
                    </p>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</section> <!-- end section -->

@endsection
