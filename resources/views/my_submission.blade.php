@extends('layouts.app')

@section('title') My Submission @endsection

@section('content')
<div class="container-md container-fluid py-5">
    <h1>User Stories and UML Diagram Submission</h1>
    <div class="table-responsive mt-3">
    <table class="table align-middle">
        <thead class="table-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Upload Time</th>
            <th scope="col">Project Name</th>
            <th scope="col">UML Diagram</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($uml as $key=>$uml)
        <tr>
            <th scope="row">{{ ++$key }}</th>
            <td> {{ $uml->created_at->diffForHumans() }} </td>
            <td> {{ $uml->project_name }} </td>
            <td>
                <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/'.$uml->image) }}" height="100px" width="100px">
            </td>
            <td>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('submit.show' , $uml->id) }}" role="button" class="btn btn-primary">
                        <i class="bi bi-pencil bi-4x">EDIT</i>
                    </a>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-item="{{ $uml->id }}">
                       <i class="bi bi-trash-fill">DELETE</i>
                    </button>


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
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>

    <div class="text-center">
        <a href="{{ route('submit.create') }}" class="btn btn-primary">Make Another Submission</a>
    </div>
</div>

<script>
    $(document).on("click", ".btn-danger", function () {
       var itemid= $(this).attr('data-item');
       $("#lineitem").attr("href","/orders/line-item-delete/"+itemid)
    });
</script>

@endsection
