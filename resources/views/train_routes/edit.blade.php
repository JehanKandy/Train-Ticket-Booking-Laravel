@extends('layouts.dash')

@if (auth()->user()->role == 3)
<script>window.location = "/train_routes";</script>
@endif

@section('content')
    <div class="admin-card">
        <a href="{{ url('train_routes') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2>Update Train Route</h2>
        <hr><br>

        <form action="{{ url('train_routes/' .$train_routes->id) }}" method="POST">
            @csrf
            @method("PATCH")
            
            <div class="form-group">
                <label for="train_name">Train Name</label>
                <input type="text" name="train_name" id="" value="{{ $train_routes->train_name }}" class="form-control"><br>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_station">Start Station</label>
                        <input type="text" name="start_station" id="" value="{{ $train_routes->start_station }}" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_time">Start Station</label>
                        <input type="time" name="start_time" id="" value="{{ $train_routes->start_time }}" class="form-control"><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="end_station">End Station</label>
                        <input type="text" name="end_station" id="" value="{{ $train_routes->end_station }}" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_time">Start Station</label>
                        <input type="time" name="start_time" id="" value="{{ $train_routes->start_time }}" class="form-control"><br>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection