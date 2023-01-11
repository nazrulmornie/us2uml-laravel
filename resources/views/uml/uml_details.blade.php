@extends('layouts.app')

@section('title') Submission Details @endsection

@section('content')
<div class="container position-relative py-5 mb-3">
    <h1 class="text-center text-uppercase">
        <a href="{{ route('add-uml.edit', $uml->id) }}">{{ $uml->project_name }}</a>
    </h1>
    <div class="container-sm">
        <figure class="text-center">
            <a href="{{ route('add-uml.edit', $uml->id) }}">
                <img src="{{ asset('storage/images/'.$uml->image) }}" class="img-thumbnail rounded mx-auto d-block mt-3">
            </a>
            <figcaption>Click the diagram to update</figcaption>
        </figure>
    </div>

    <hr>
    <h1 class="text-center">User Stories</h1>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        <strong>{{ session('success') }}</strong>
    </div>
    @endif

    @if (session('danger'))
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <strong>{{ session('danger') }}</strong>
    </div>
    @endif

    <div class="container-fluid">
        <div class="table-responsive-md">
            <table class="table table-striped mb-4">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">User Story</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userStory as $key=>$story)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $story->user_story  }}</td>
                        <td><a href="{{ route('submit.edit', $story->id) }}" role="button" class="btn btn-warning mb-2" style="width: 100%">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <a href="{{ route('add-stories.edit', $uml->id )}}" class="btn btn-success mb-3 me-auto p-2 bd-highlight" style="width: 35%">Add More User Story</a>
            <a href="{{ route('submit.index')}}" class="btn btn-primary mb-3 p-2 bd-highlight" style="width: 35%">Back</a>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {

    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
            $(this).remove();
        });
    }, 5000);

    });
</script>
@endsection
