@extends('layouts.app')

@section('title') User Stories Submission @endsection

@section('content')
<section class="single-page-header mb-4">
    <div class="container w-100">
        <div class="row">
            <div class="col-md-12">
                <h2>User Stories, Goal Model, and Use Case Diagram Submission</h2>
            </div>
        </div>
    </div>
</section>

<div class="container-sm mb-3">
    <div class="row">
        <div class="col-md-5">
            <div class="card p-5 shadow">
                <h2 class ="text-center mb-5">User Stories Template</h2>
                <ul class = "list-group list-group-flush">
                    <li class="list-group-item">As a (1)___________________, I want to (2) ___________________.</li>
                    <li class="list-group-item">(1)___________________ is a/may be type of (4) ___________________.</li>
                    <li class="list-group-item">(2)___________________ will cause/require (3) ___________________.</li>
                    <li class="list-group-item">(5)___________________ occurs/present if (1) ___________________ (6) ___________________.</li>
                </ul>
                <table class="table table-striped text-center">
                    <thead>
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
        </div>

      <div class="col-md-7 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <h5 class="card-title my-4 text-center">User Stories and UML Submission</h5>
            <div class="form-group p-5">
              <form method="POST" action="{{ route('submit.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-sm col-xs col-md">
                        <div class="mb-3">
                        <label for="project" class="form-label">Project Name</label>
                        <input type="text"
                            class="form-control" name="project" id="project" placeholder="Enter Project Name">
                        </div>
                    </div>

                    <div class="col-sm col-xs col-md">
                        <label for="project" class="form-label">Diagram Types</label>
                        <select name="diagram_type" id="diagram_type" class="form-select form-select-md">
                            <option disabled selected>Select Diagram Types</option>
                            @foreach ($diagram_type as $key)
                                <option value="{{ $key->id }}">{{ $key->diagram_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3" name="image">
                    <label for="uml_diagram" class="form-label">UML Diagram</label>
                    <input type="file" class="form-control" name="uml_diagram" accept="image/*"
                        id="uml_diagram" placeholder="Upload UML Diagram"  aria-describedby="helpId"
                        onchange="readURL(this);">
                    <small id="helpId" class="form-text text-muted">Image in PNG format is recommended</small>
                </div>

                <div class="text-center">
                    <img class="img-thumbnail" id="blah" src="http://placehold.it/180" alt="your image" style="display: none" />
                </div>

                <div class="mb-3 field_wrapper">
                    <label for="stories" class="form-label">User Story</label>
                    <div class="row">
                      <div class="col-11">
                        <textarea class="form-control" name="stories[]" id="stories[]" placeholder="Enter user story"></textarea>
                      </div>
                      <div class="col-1 position-relative">
                        <a href="javascript:void(0);" class="add_button btn btn-primary position-absolute top-50 start-50 translate-middle" role="button" title="Add field"><i class="bi bi-plus-square"></i></a>
                      </div>
                    </div>
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="text-center">
                  <button type="submit" class="btn btn-primary block w-50 start-50 end-50">Submit</button>
                </div>

              </form>
            </div>
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ session('success') }}</strong>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
          </div>
        </div>
      </div>


    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 100;
        var addButton = $('.add_button');
        var wrapper = $('.field_wrapper');
        var fieldHTML = '<div class="my-3 field_wrapper"><label for="stories" class="form-label">User Story</label><div class="row"><div class="col-11"><textarea class="form-control" name="stories[]" id="stories[]" placeholder="Enter user story"></textarea></div><div class="col-1 position-relative"><a href="javascript:void(0);" class="btn btn-danger remove_button position-absolute top-50 start-50 translate-middle" role="button"><i class="bi bi-dash-square"></i></a></div></div></div>';
        var x = 1;

        $(addButton).click(function(){
            if(x < maxField){
                x++;
                $(wrapper).append(fieldHTML);
            }
        });

        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).closest("div.field_wrapper").remove();
            x--;
        });
    });

    function readURL(input) {
            if (input.files && input.files[0]) {
                $('#blah').show();
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection
