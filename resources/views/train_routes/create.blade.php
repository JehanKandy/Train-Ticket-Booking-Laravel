@extends('layouts.dash')


@section('content')
    <div class="admin-card">
        <a href="{{ url('/train_routes') }}"><button class="btn btn-primary">Back</button></a><br><br>

        <h2><i class="fas fa-subway"></i> Add Train Route</h2>
        <hr>

        <form action="{{ url('/train_routes') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="train_name">Train Name</label>
                <input type="text" name="train_name" class="form-control" placeholder="Train Name"><br>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_station">Start Station</label>
                        <input type="text" name="start_station" class="form-control" placeholder="Start Station">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_time">Start Time</label>
                        <input type="time" name="start_time" class="form-control" placeholder="Start Time"><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <label for="days">Select Days</label>
                <div class="col-lg-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Default checkbox
                        </label>
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4"></div>
            </div>

        </form>
        
    </div>
@endsection