@extends('layouts.app')

@section('title') Contact Us @endsection

@section('content')
@auth
<section class="single-page-header mb-4">
    <div class="container w-100">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
</section>
@endauth
<section class="contact-us section bg-gray" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title text-center">
                    <p>Any enquiries? Reach us by filling the form below, or contact us directly through the contact information at bottom of the page!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contact Details -->
            <div class="col-md-6">
                <div style="width: 100%">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Faculty%20of%20Computer%20Science%20and%20Information%20Technology,%20Universiti%20Malaysia%20Sarawak,%20Sarawak,%2094300%20Kota%20Samarahan+(Faculty%20of%20Computer%20Science%20and%20Information%20Technology)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        <a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a>
                    </iframe>
                </div>
            </div>
            <!-- / End Contact Details -->

            <!-- Contact Form -->
            <div class="contact-form col-md-6 " >
                <div class="card py-5" style="height: 400px; border:none;">
                    <div class="container">
                        <form action="https://formsubmit.co/mohdnazrulm9@gmail.com" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                    </div>
                                    <div class="col">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                            </div>


                            <div class="form-group mb-5">
                                <textarea placeholder="Your Message" class="form-control" name="message" rows="10" required></textarea>
                            </div>

                            <input type="hidden" name="_autoresponse" value="Thank you for your enquiries. We will get back as soon as possible!">
                            <input type="hidden" name="_subject" value="Contact Form - US2UML">
                            <input type="hidden" name="_next" value="{{ route('success-email') }}">
                            <input type="hidden" name="_template" value="table">
                            <input type="text" name="_honey" style="display:none">

                            <div class="text-center">
                                <button type="submit" class="btn btn-sm btn-primary">Submit Form</button>
                            </div>
                        </form>
                    </div>
                </div>
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
                        Universiti Malaysia Sarawak (UNIMAS)<br>
                        94300, Kota Samarahan <br>
                        Sarawak
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="phone-block contact-meta-block">
                    <i class="tf-ion-ios-telephone"></i>
                    <h4>Reach Us</h4>
                    <p>
                        Nurfauza Binti Jali <br>
                        Email: jnurfauza@unimas.my<br>
                        Mohammad Nazrul bin Mornie<br>
                        Email: 21020048@siswa.unimas.my
                    </p>
                </div>
            </div>
        </div>

    </div> <!-- end container -->
</section> <!-- end section -->



@endsection
