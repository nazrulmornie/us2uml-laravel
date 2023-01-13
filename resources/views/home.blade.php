@extends('layouts.app')
@section('title') Home @endsection
@section('content')
<div class="container-fluid background-radial-gradient" style="height: 50em">
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%">
        <h1 class="text-center text-white fs-1 text-capitalize fw-bolder">Us2UML - User Stories to Unified Modelling Language (UML) and Goal Model</h1>
        <p class="text-center text-white">A study to generate UML model and Goal Model from structured user stories.</p>
    </div>
</div>
<div class="container-fluid bg-white">
    <div class="container-fluid py-5">
    <h1 class="display-4 text-uppercase text-center mb-5 text-primary">Project Overview</h1>

        <div class="row align-items-center">
            <div class="col-lg-8">
                <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('img/Slide2.png') }}" alt="Proposed Framework">
            </div>
            <div class="col-lg-3">
                <h1 class="display-4 text-uppercase mb-4">Proposed Framework</h1>
                <h5 class="text-uppercase text-primary mb-3">Project Title : </h5>
                <p class="text-uppercase text-black mb-3">Visualisation of User Stories to UML/Goal Model</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 bg-dark">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5 text-primary">Objective</h1>
        <div class="row">
            <h3 class="text-white">The research questions mentioned earlier can be answered through a set of objectives.
                These objectives are designed and identified based on the research questions themselves.
                The objectives of this research are:</h3>
            <div class="col-lg-4 mb-2">
                <div class="service-item rounded p-5 mb-4 text-center">
                    <i class="fas fa-3x fa-magnifying-glass text-primary mb-4"></i>
                    <p class="m-0">To identify the challenges faced by academia and industry people when designing UML Model and the best method for automating the generation of UML model from user stories</p>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="service-item rounded p-5 mb-4 text-center">
                    <i class="fa-solid fa-3x fa-screwdriver-wrench text-primary mb-4"></i>
                    <p class="m-0">To develop a framework and prototype of an automated system that generates UML model from user stories.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="service-item rounded p-5 mb-4 text-center">
                    <i class="fa-solid fa-3x fa-check text-primary mb-4"></i>
                    <p class="m-0">To test and evaluate the effectiveness of the framework by using a prototype.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid py-5 bg-white">
    <div class="container pt-5 pb-3">
        <h1 class="display-4 text-uppercase text-center mb-5 text-primary">Research Questions</h1>
        <div class="row">
            <h3>In order to solve the problem that has been mentioned in the previous sub-section,
                three questions that have been identified. These questions will be the ones that need to be solved
                or answered by completing this research.
                The research questions (RQs) that have been identified are:</h3>
            <div class="col-lg-4 mb-2">
                <div class="service-item rounded p-5 mb-4 text-center">
                    <i class="fa-3x fas fa-stairs text-primary mb-4"></i>
                    <p class="m-0">RQ1: What challenges do academia and industry people face to design UML Model?</p>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="service-item rounded p-5 mb-4 text-center">
                    <i class="fa fa-3x fa-code text-primary mb-4"></i>
                    <p class="m-0">RQ2: How to develop a framework and prototype for automatically generating UML models from user stories?</p>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="service-item rounded p-5 mb-4 text-center">
                    <i class="fa fa-3x fa-envelope-open-text text-primary mb-4"></i>
                    <p class="m-0">RQ3: How to test framework’s efficacy with a developed prototype?</p>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
