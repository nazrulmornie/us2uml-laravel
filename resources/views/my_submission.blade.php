@extends('layouts.app')

@section('title') My Submission @endsection

@section('content')
<section class="single-page-header">
    <div class="container w-100">
        <div class="row">
            <div class="col-md-12">
                <h2>My Submission</h2>
            </div>
        </div>
    </div>
</section>

{{-- <div class="container-fluid py-5 px-3">
    <table class="table table-striped table-sm">
        <thead class="text-center">
        <tr>
            <th scope="col">Project Name</th>
            <th scope="col">Diagram Type</th>
            <th scope="col">Diagram</th>
            <th scope="col">User Story Count</th>
            <th scope="col">Last Updated</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($uml as $key=>$uml)
        <tr>
            <td scope="row" class="text-center"> {{ $uml->project_name }} </td>
            <td  class="text-center"> Goal Model </td>
            <td>
                <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/'.$uml->image) }}" height="100px" width="100px">
            </td>
            <td  class="text-center"> {{ $uml->story()->count()  }}</td>
            <td  class="text-center"> {{ $uml->updated_at->diffForHumans() }} </td>
            <td style="width: 15%">
                <div class="d-flex justify-content-center align-items-end">
                    <a href="{{ route('submit.show' , $uml->id) }}" role="button" class="btn btn-primary mx-2">
                        <i class="bi bi-pencil bi-4x"></i>
                    </a>

                    <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal" data-item="{{ $uml->id }}">
                       <i class="bi bi-trash-fill"></i>
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


    <div class="text-center">
        <a href="{{ route('submit.create') }}" class="btn btn-primary">Make Another Submission</a>
    </div>
</div> --}}

<section class="intro vh-100">
    <div class="bg-image h-100 submission-bg">
        <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card bg-dark shadow-2-strong">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-dark table-borderless mb-0">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col">Project Name</th>
                                                <th scope="col">Diagram Type</th>
                                                <th scope="col">Diagram</th>
                                                <th scope="col">User Story Count</th>
                                                <th scope="col">Last Updated</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($uml as $key=>$uml)
                                            <tr>
                                                <td scope="row" class="text-center"> {{ $uml->project_name }} </td>
                                                <td  class="text-center"> {{ $uml->diagram_type->diagram_name }} </td>
                                                <td>
                                                    <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/'.$uml->diagram_type->diagram_name. '/'.$uml->image) }}" height="100px" width="100px">
                                                </td>
                                                <td  class="text-center"> {{ $uml->story()->count()  }}</td>
                                                <td  class="text-center"> {{ $uml->updated_at->diffForHumans() }} </td>

                                                <td style="width: 15%">
                                                    <div class="d-flex justify-content-center align-items-end">
                                                        <a href="{{ route('submit.show' , $uml->id) }}" role="button" class="btn btn-warning mx-2">
                                                            <i class="fas fa-info px-2"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center my-3">
                    <a href="{{ route('submit.create') }}" class="btn btn-primary">Make Another Submission</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).on("click", ".btn-danger", function () {
       var itemid= $(this).attr('data-item');
       $("#lineitem").attr("href","/orders/line-item-delete/"+itemid)
    });
</script>
@endsection
