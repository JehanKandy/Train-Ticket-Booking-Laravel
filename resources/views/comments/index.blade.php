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
                    <th>Created At</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $comment->add_user }}</td>
                        <td>{{ $comment->add_user }}</td>
                        <td>{{ $comment->add_user }}</td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection