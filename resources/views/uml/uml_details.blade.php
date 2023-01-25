@extends('layouts.app')

@section('title') Submission Details @endsection

@section('content')

<section class="single-page-header">
    <div class="container w-100">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase">Project Name: <a href="{{ route('add-uml.edit', $uml->id) }}" style="text-decoration: none">{{ $uml->project_name }}</a></h2>
            </div>
        </div>
    </div>
</section>

<div class="container position-relative py-5 mb-3">
    <div class="container-sm">
        <figure class="text-center">
            <a href="{{ route('add-uml.edit', $uml->id) }}">
                <img src="{{ asset('storage/images/'. $uml->diagram_type->diagram_name . '/' .$uml->image) }}" class="img-fluid rounded mx-auto d-block m-3">
            </a>
            <figcaption class="font-monospace">Click the diagram to update</figcaption>
        </figure>
    </div>

    <hr class="my-3">

    <h1 class="text-center mt-5">User Stories</h1>

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
                        <th scope="row" class="text-center">{{ ++$key }}</th>
                        <td class="text-center" style="text-align: justify">{{ $story->user_story  }}</td>
                        <td class="text-center"><a href="{{ route('submit.edit', $story->id) }}" role="button" class="btn btn-warning mb-2">
                            <i class="fas fa-pen"></i>
                        </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <a href="{{ route('submit.index')}}" class="btn btn-primary">Back</a>
            <a href="{{ route('add-stories.edit', $uml->id )}}" class="btn btn-secondary">Add User Story</a>
            <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" data-item="{{ $uml->id }}">
                Delete this Project</i>
            </button>
        </div>
    </div>


     <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header bg-primary">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Delete {{ $uml->project_name }}</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <p>All information related to {{ $uml->project_name }} will be deleted including all of the user stories.</p>
                 <p>Are you sure to <strong>delete</strong> {{ $uml->project_name }}?</p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <form action="{{ route('add-uml.destroy', $uml->id)}}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger">Delete</button>
                 </form>
             </div>

         </div>
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
