@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        @if (auth()->user()->role == 1)
            <a href="{{ url('train_routes/create') }}"><button class="btn btn-success"><i class="fas fa-subway"></i> Add Train Route</button></a><br>
            <hr><br>
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Train Name</th>
                        <th>Start Station</th>
                        <th>Start Time</th>
                        <th>End Station</th>
                        <th>End Time</th>
                        <th>Add Date</th>
                        <th>Last Update</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        @endif

    </div>
@endsection