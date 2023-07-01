@extends('layouts.dash')


@section('content')
    <div class="admin-card">
        <a href="{{ url('/train_routes') }}"><button class="btn btn-primary">Back</button></a><br><br>

        <h2><i class="fas fa-subway"></i> Add Train Route</h2>

        <form action="{{ url('/train_routes') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="train_name">Train Name</label>
                <input type="text" name="train_name" class="form-control" placeholder="Train Name">
            </div>
            <div class="form-group">
                <label for="start_station">Start Station</label>
                <input type="text" name="start_station" class="form-control" placeholder="Start Station">
            </div>
        </form>
        <hr>
    </div>
@endsection