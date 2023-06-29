@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h2>All Comments</h2>
        <hr>
        <a href="{{ url('comments/create') }}"><button class="btn btn-success"><i class="fas fa-plus"></i> Add New Comment</button></a>
        <br><br>

        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection