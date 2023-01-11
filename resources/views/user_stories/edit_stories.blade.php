@extends('layouts.app')

@section('title') Edit Stories @endsection

@section('content')
<div class="container-sm py-5">
    <h1 class="text-primary text-lg-center">Edit/Delete User Story</h1>
    <form action="{{ route('submit.update', $user_story->id) }}" method="POST" class="mb-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <h4 class="text-black my-3">User Story</h4>
          <textarea class="form-control" name="new_user_story" id="new_user_story" rows="10">{{ $user_story->user_story }}</textarea>
        </div>

        <div class="row">
          <div class="col">
            <div class="d-flex justify-content-start">
              <a href="{{ route('submit.show', $uml_id) }}" role="button" class="btn btn-primary" value="Back">Cancel</a>
            </div>
          </div>
          <div class="col">
            <div class="d-flex flex-row-reverse bd-highlight">
              <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
              </div>
              <div class="p-2 bd-highlight">
                <button type="submit" class="btn btn-primary">Confirm change</button>
              </div>
            </div>
          </div>
        </div>



    </form>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="exampleModalLabel">Delete selected user story?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure to delete this user story?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('submit.destroy', $user_story->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection
