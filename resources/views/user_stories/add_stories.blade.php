@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h1 class ="text-center mb-5">Add User Stories</h1>

    <div class="row">
      <div class="col-md-5">
        <h2 class ="text-center mb-5">User Stories Template</h2>
        <ul class = "list-group list-group-flush">
          <li class="list-group-item">As a (1)___________________, I want to (2) ___________________.</li>
          <li class="list-group-item">(1)___________________ is a/may be type of (4) ___________________.</li>
          <li class="list-group-item">(2)___________________ will cause/require (3) ___________________.</li>
          <li class="list-group-item">(5)___________________ occurs/present if (1) ___________________ (6) ___________________.</li>
        </ul>
        <table class="w-100">
          <thead class="table table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Elements</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"  class="text-center">1</th>
              <td>Actor</td>
            </tr>
            <tr>
              <th scope="row"  class="text-center">2</th>
              <td>Use case</td>
            </tr>
            <tr>
              <th scope="row"  class="text-center">3</th>
              <td>Use case with INCLUDE relationship</td>
            </tr>
            <tr>
              <th scope="row"  class="text-center">4</th>
              <td>GENERALIZATION of actor</td>
            </tr>
            <tr>
              <th scope="row"  class="text-center">5</th>
              <td>Use case with EXTEND relationship</td>
            </tr>
            <tr>
              <th scope="row"  class="text-center">6</th>
              <td colspan="2">Condition for EXTEND relationship between use cases</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-7 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <h5 class="card-title my-4 text-center">User Story {{$uml->user_id}}</h5>
            <div class="form-group p-5">
              <form method="POST" action="{{ route('add-stories.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="stories" class="form-label">User Story</label>
                  <textarea class="form-control" name="stories" id="stories" rows="5" required></textarea>
                </div>

                <input type="hidden" name="uml" id="uml" value="{{ $uml->id }}">
                <div class="d-flex justify-content-center">
                  <a href="{{ route('submit.show' , $uml->id) }}" role="button" class="btn btn-secondary me-auto mb-3 p-2 bd-highlight" style="width: 35%; height: 20%" value="Back">Cancel</a>
                  <a type="button" class="btn btn-success mb-3 p-2 bd-highlight" style="width: 35%; height: 20%" data-bs-toggle="modal" data-bs-target="#addStoryModal">Submit</a>
                </div>
                <div class="modal fade" id="addStoryModal" tabindex="-1" aria-labelledby="addStoryModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="addStoryModalLabel">Add User Story</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              Are you sure to add this user story?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                      </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>

      </div>
    </div>



    </div>
@endsection

