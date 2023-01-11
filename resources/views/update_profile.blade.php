@extends('layouts.app')

@section('title') Update Profile @endsection

@section('content')

<section class="single-page-header">
    <div class="container w-100">
        <div class="row">
            <div class="col-md-12">
                <h2>Manage Profile</h2>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid py-5">
    <div class="card mx-auto p-3" style="width: 65%">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 my-auto text-center">
                    <img src="{{ asset('storage/users/'.auth()->user()->avatar) }}" width="304" height="286" class="rounded-circle" style="object-fit: cover;">
                </div>
                <div class="col-md-5 my-auto justify-content-center">
                    <h1 class="text-center mb-4">Update Profile Image</h1>
                    <form method="POST" action="{{ route('user.update', auth()->user()->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                          <label for="" class="form-label">Choose file</label>
                          <input type="file" class="form-control" accept="image/*" name="new_avatar" id="new_avatar" placeholder="" aria-describedby="fileHelpId">
                          <div id="fileHelpId" class="form-text">Upload your new profile image here</div>
                        </div>

                        <div class="text-end">
                            <input type="submit" role="button" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>

            <hr>

            <h1 class="text-center my-4">User Information</h1>

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')
                <div class="card-body py-3 px-5">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input class="form-control" type="text" name="phone_number" id="phone_number" placeholder="0123456789">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="about_me" class="form-label">About me</label>
                            <textarea class="form-control" name="about_me" id="about_me" rows="3" placeholder="Write something about yourself"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-7">
                            <div class="mb-3">
                                <label for="user_group" class="form-label">User Group</label>
                                <select class="form-select form-select-md" name="user_group" id="user_group">
                                    <option selected>Select one</option>
                                    <option value="">Students</option>
                                    <option value="">Industry Professionals</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 col-md-5">
                            <label for="" class="form-label">Gender</label>
                            <select class="form-select form-select-md" name="" id="">
                                <option selected>Select one</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                                <option value="">Rather Not To Say</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-2 text-end">
                        <input type="submit" class="btn btn-primary" role="button" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- <div class="card m-5">
        <div class="card-header">
            <h1 class="text-center">Change Password</h1>
        </div>

        <form action="{{ route('password.updates') }}" method="POST">
            @csrf
            <div class="card-body py-3 px-5">
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
                        placeholder="Old Password">
                    @error('old_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="newPasswordInput" class="form-label">New Password</label>
                        <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                            placeholder="New Password">
                        @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                        <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                            placeholder="Confirm New Password">
                    </div>
                </div>

                <div class="text-end">
                    <button class="btn btn-warning">Submit</button>
                </div>


            </div>
        </form>
    </div> --}}

</div>

@endsection
