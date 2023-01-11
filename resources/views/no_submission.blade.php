@extends('layouts.app')

@section('title') No submissions @endsection

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="p-2">
            <h1>No submission yet</h1>
        </div>
        <div class="p-2">
            <a href="{{ route('submit.create') }}" class="btn btn-secondary">Make new submission</a>
        </div>
    </div>
@endsection
