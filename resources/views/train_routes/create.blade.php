@extends('layouts.dash')

@if (auth()->user()->role == 2 || auth()->user()->role == 3)
<script>window.location = "/train_routes";</script>
@endif

@section('content')
    <div class="admin-card">
        <a href="{{ url('/train_routes') }}"><button class="btn btn-primary">Back</button></a><br><br>

        <h2><i class="fas fa-subway"></i> Add Train Route</h2>
        <hr>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Errors : </strong> You got Following Errors while validation this form<br>
                        <b>{{ $error }}</b>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </ul>
        @endif

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
                        <input type="time" name="start_time" class="form-control" placeholder="Departure Time"><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_station">End Station</label>
                        <input type="text" name="end_station" class="form-control" placeholder="End Station">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_time">Arrival Time</label>
                        <input type="time" name="end_time" class="form-control" placeholder="Arrival Time"><br>
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
                        <input type="reset" value="Clear" class="btn btn-secondary" style="width: 100%">
                    </div>
                </div>
                <div class="col-lg-6">
                    <input type="submit" value="Add Train Route" class="btn btn-success" style="width: 100%">
                </div>
            </div>

        </form>
        
    </div>
@endsection