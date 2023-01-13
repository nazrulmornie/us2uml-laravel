@extends('layouts.app')
@section('title')Generate UML Model @endsection
@section('content')

<div class="coming_soon">
    <div class="container-fluid">
        <div class="d-flex flex-column justify-content-center align-items-center vh-100">
            <h1 class="text-center mb-5 text-white display-2">This feature will be available soon!</h1>
            <div class="card p-4 w-75">
                <div class="card-body">
                    <h1 class="card-title">Get Notified!</h1>
                    <h4>Be the first to explore our new features by submitting your email address. </h4>
                    <form method="POST" action="{{ url('coming-soon')}}">
                        @csrf
                        <input type="email" class="form-control" placeholder="abc@email.com" aria-label="Email address" name="email_address" aria-describedby="button-addon2" required>
                        <input class="btn btn-primary w-100 mt-2" type="submit" id="button-addon2" value="Submit">
                    </form>
                    @if (session('success'))
                    <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
