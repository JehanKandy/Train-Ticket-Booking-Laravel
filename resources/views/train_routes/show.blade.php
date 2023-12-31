@extends('layouts.dash')

@section('content')
    
    <div class="admin-card">
        <a href="{{ url('/train_routes') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2>Train Route</h2><br><br>
        <div class="row">
            <div class="col-lg-6">
                <b>Train Name</b>
            </div>
            <div class="col-lg-6">
                {{ $train_routes->train_name }}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <b>Train Timings</b>
            </div>
            <div class="col-lg-3">
                <b>Start Station</b>
            </div>
            <div class="col-lg-3">
                <b>End Station</b>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-2">
                {{ $train_routes->start_station }}
            </div>
            <div class="col-lg-1">
                {{ $train_routes->start_time }}
            </div>
            <div class="col-lg-2">
                {{ $train_routes->end_station }}
            </div>
            <div class="col-lg-1">
                {{ $train_routes->end_time }}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <b>Weekly Schedule</b>
            </div>
            <div class="col-lg-6">
                @php
                    $schedule = json_decode($train_routes->weekly_schedule);
                @endphp
                @foreach ($schedule as $days)
                    {{ $days }},
                @endforeach
            </div>
        </div>
    </div>
@endsection