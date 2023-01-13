@extends('layouts.app')

@section('title') User Stories to UML @endsection

@section('content')

@guest
<div class="container-fluid background-radial-gradient" style="height: 30em">
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%">
        <h1 class="text-white fs-1 text-capitalize fw-bolder">Us2UML - User Stories to Unified Modelling Language (UML) and Goal Model</h1>
        <p class="text-white">A study to generate UML model and Goal Model from structured user stories.</p>
    </div>
</div>
<div class="container my-3">
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5" style="border-right: 6px solid rgb(0, 5, 154)">
                    <h2>About this site</h2>
                </div>
                <div class="col-12 col-md-7">
                    <p class="fs-4">This site is developed to gather samples of user stories, UML model, and Goal model from different groups mainly
                        computer science students and industry professionals. It is done as part of
                        our research entitled “Visualisation of User Stories to UML Model & Goal Model”. The data gathered through this site is strictly used only
                        for this research.</p>
                </div>

            </div>
        </div>
    </section>
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
                                        <img class="img-fluid rounded shadow " src="{{ asset('theme/images/company/company-image.jpg') }}" alt="">
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
                                        <img class="img-fluid rounded shadow mt-20" src="{{ asset('theme/images/company/company-image-2.jpg') }}" alt="">
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
                                        <img class="img-fluid rounded shadow mt-20" src="{{ asset('theme/images/company/company-image-3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@else
<script type="text/javascript">
    window.location = "{{ route('home') }}";//here double curly bracket
</script>
@endguest

@endsection
