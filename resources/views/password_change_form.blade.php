@extends('layouts.app')

@section('title') Change Password @endsection

@section('content')
<section class="vh-100 background-radial-gradient overflow-hidden">
    <div class="container py-5 h-100 ">
        <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
                <h3 class="text-center mb-4 pb-2 pb-md-0 mb-md-5">Change Password</h3>
                @if (auth()->user()->role_id == 3)
                    <p class="text-center"><strong class="text-danger">You are advised to change your password for additional security purposes</strong></p>
                @endif
                <form action="{{ route('password.updates') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="oldPasswordInput" class="form-label">Old Password</label>
                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                               >
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <input type="hidden" value="{{ auth()->user()->role_id }}" name="role_id">

                        <div class="mb-3">
                            <label for="newPasswordInput" class="form-label">New Password</label>
                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                               >
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput">
                        </div>

                        <div class="d-flex align-content-between justify-content-between">
                            @if (auth()->user()->role_id == 3)
                            <a class="btn btn-danger text-white" href="{{ route('home') }}">Skip</a>
                            @endif
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
