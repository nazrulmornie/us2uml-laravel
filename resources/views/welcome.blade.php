@extends('layouts.app')

@section('title') User Stories to UML @endsection

@section('content')

@guest
<div class="container-fluid background-radial-gradient vh-100">
    <div class="d-flex flex-column justify-content-center align-items-center text-center p-5" style="height: 100%">
        <h1 class="welcome-text text-white display-3 text-capitalize fw-bolder text-primary">Us2UML - User Stories to Unified Modelling Language (UML) and Goal Model</h1>
        <p class="text-white">This is a study to generate UML model and Goal Model from structured user stories. <br>Learn more
            <a href="{{ route('about') }}" class="text-primary fs-3 text-uppercase" style="text-decoration:none"> about</a>
            our study.
        </p>
        <a class="text-center btn btn-primary text-white text-capitalise fs-6 btn-lg"  href="{{ route('login') }}">Login</a>
    </div>
</div>

@else
<script type="text/javascript">
    window.location = "{{ route('home') }}";//here double curly bracket
</script>
@endguest

@endsection
