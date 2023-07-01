@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        @if (auth()->user()->role == 1)
            <a href="{{ url('train_routes/create') }}"><button class="btn btn-success"><i class="fas fa-subway"></i> Add Train Route</button></a><br>
        @endif

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
                <tbody>
                    @foreach ($trainRoute as $train)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $train->train_name }}</td>
                    @endforeach
                </tbody>
            </table>
        

    </div>
@endsection