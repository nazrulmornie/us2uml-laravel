@extends('layouts.app')

@section('title') Update UML @endsection

@section('content')
<section class="single-page-header">
    <div class="container w-100">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit UML/GM Information</h2>
            </div>
        </div>
    </div>
</section>

<div class="container py-4">
    <div class="row">
        <div class="col-md-6 mb-4 align-self-center">
            {{-- <h2 class="text-center mb-4">Uploaded Diagram</h2> --}}
            <img src="{{ asset('storage/images/'. $uml->diagram_type->diagram_name .'/'. $uml->image) }}" class="rounded img-fluid">
        </div>
        <div class="col-md-6">
            <div class="card p-5">
                <h1 class="mb-3 text-center">Update Project Details</h1>
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
                        <label for="project_title" class="form-label">Diagram Type</label>
                        <select class="form-select form-select-md" name="diagram_type" id="diagram_type">
                            <option disabled selected>Select one</option>
                            @foreach ($diagram_type as $key)
                                <option value="{{ $key->id }}" {{ $uml->diagram_id == $key->id ? 'selected' : '' }}>{{ $key->diagram_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="new_uml_diagram" class="form-label">Choose file</label>
                        <input type="file" class="form-control" name="new_uml_diagram" id="new_uml_diagram"
                        accept="image/*" onChange="loadFile(event)">
                         <div id="fileHelpId" class="form-text">Image in PNG format is preferable</div>
                    </div>

                    <div class="text-center">
                        <img id="output" class="rounded mx-auto d-block mt-3 w-75 h-75" />
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
