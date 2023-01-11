@extends('layouts.app')

@section('title') Update UML @endsection

@section('content')

<div class="container py-4 vh-100">
    <div class="text-center">
        <h1>Update UML/GM Information</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="{{ asset('storage/images/'.$uml->image) }}" class="rounded">
            </div>
        </div>
        <div class="col-md-6">

            <form action="{{ route('add-uml.update', $uml->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="project_title" class="form-label">Project Title</label>
                  <input type="text"
                    class="form-control" name="project_title" id="project_title" aria-describedby="helpId"
                    value="{{ $uml->project_name }}">
                </div>

                <div class="mb-3">
                  <label for="new_uml_diagram" class="form-label">Choose file</label>
                  <input type="file" class="form-control" name="new_uml_diagram" id="new_uml_diagram"
                  accept="image/*" onChange="loadFile(event)">
                  <div id="fileHelpId" class="form-text">Image in PNG format is preferable</div>
                </div>

                <div class="text-center">
                    <img id="output" class="rounded mx-auto d-block mt-3 w-50 h-50" />
                </div>

                <div class="d-flex justify-content-between">
                    <div class="text-center">
                        <a class="btn btn-secondary" type="button" href="{{ route('submit.show', $uml->id)}}">Back</a>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-success" type="button">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<script type="text/javascript">
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>

@endsection
