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
                        <label for="start_time">Departure Time</label>
                        <input type="time" name="start_time" class="form-control" placeholder="Start Time"><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <label for="days"><b>Select Days</b></label> <br><br>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Monday" name="weekly_schedule[]" id="flexCheckDefault">
                        <label class="form-check-label" for="Monday">
                          Monday
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Tuesday" name="weekly_schedule[]" id="flexCheckDefault">
                        <label class="form-check-label" for="Tuesday">
                          Tuesday
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Wednesday" name="weekly_schedule[]" id="flexCheckDefault">
                        <label class="form-check-label" for="Wednesday">
                          Wednesday
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Thursday" name="weekly_schedule[]" id="flexCheckDefault">
                        <label class="form-check-label" for="Thursday">
                          Thursday
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Friday" name="weekly_schedule[]" id="flexCheckDefault">
                            <label class="form-check-label" for="Friday">
                              Friday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saturday" name="weekly_schedule[]" id="flexCheckDefault">
                            <label class="form-check-label" for="Saturday">
                             Saturday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sunday" name="weekly_schedule[]" id="flexCheckDefault">
                            <label class="form-check-label" for="Sunday">
                              Sunday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_station">End Station</label>
                        <input type="text" name="start_station" class="form-control" placeholder="Start Station">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_time">Arrival Time</label>
                        <input type="time" name="start_time" class="form-control" placeholder="Start Time"><br>
                    </div>
                </div>
            </div>

        </form>
        
    </div>
@endsection