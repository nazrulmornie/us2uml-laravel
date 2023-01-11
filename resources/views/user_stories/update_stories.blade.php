@extends('layouts.app')

@section('content')
<div>
    <form action="#" method="POST">
        @csrf
        <input type="text" name="user_story" value="">
        <input type="submit" value="Update" role="button" class="button btn-secondary">
    </form>
</div>
@endsection
