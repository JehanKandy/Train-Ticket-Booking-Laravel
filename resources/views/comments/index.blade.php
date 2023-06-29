@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h2>All Comments</h2>
        <hr>
        <a href="{{ url('comments/create') }}"><button class="btn btn-success"><i class="fas fa-plus"></i> Add New Comment</button></a>
    </div>
@endsection