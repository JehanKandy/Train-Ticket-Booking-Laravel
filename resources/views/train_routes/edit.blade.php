@extends('layouts.dash')

@if (auth()->user()->role == 3)
<script>window.location = "/train_routes";</script>
@endif

@section('content')
    <div class="admin-card">
        <a href="{{ url('train_routes') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2>Update Train Route</h2>
        <hr><br>

        @php
            $days = json_decode($trainRoute[0]->weekly_schedule);
        @endphp


        <form action="{{ url('train_routes/' .  $trainRoute[0]->id) }}" method="POST">
            @csrf
            @method("PATCH")
            
            <div class="form-group">
                <label for="train_name">Train Name</label>
                <input type="text" name="train_name" id="" value="{{ $trainRoute[0]->train_name }}" class="form-control"><br>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_station">Start Station</label>
                        <input type="text" name="start_station" id="" value="{{ $trainRoute[0]->start_station }}" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="start_time">Departure Time</label>
                        <input type="time" name="start_time" id="" value="{{ $trainRoute[0]->start_time }}" class="form-control"><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="end_station">End Station</label>
                        <input type="text" name="end_station" id="" value="{{ $trainRoute[0]->end_station }}" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="end_time">Arrival Time</label>
                        <input type="time" name="end_time" id="" value="{{ $trainRoute[0]->end_time }}" class="form-control"><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <label for="days"><b>Select Days</b></label> <br><br>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Monday" name="weekly_schedule[]" id="flexCheckDefault" {{ in_array('Monday',$days)? 'checked':'' }}>
                        <label class="form-check-label" for="Monday">
                          Monday
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Tuesday" name="weekly_schedule[]" id="flexCheckDefault" {{ in_array('Tuesday',$days)? 'checked':'' }}>
                        <label class="form-check-label" for="Tuesday">
                          Tuesday
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Wednesday" name="weekly_schedule[]" id="flexCheckDefault" {{ in_array('Wednesday',$days)? 'checked':'' }}>
                        <label class="form-check-label" for="Wednesday">
                          Wednesday
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Thursday" name="weekly_schedule[]" id="flexCheckDefault" {{ in_array('Thursday',$days)? 'checked':'' }}>
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
                            <input class="form-check-input" type="checkbox" value="Friday" name="weekly_schedule[]" id="flexCheckDefault" {{ in_array('Friday',$days)? 'checked':'' }}>
                            <label class="form-check-label" for="Friday">
                              Friday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saturday" name="weekly_schedule[]" id="flexCheckDefault" {{ in_array('Saturday',$days)? 'checked':'' }}>
                            <label class="form-check-label" for="Saturday">
                             Saturday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sunday" name="weekly_schedule[]" id="flexCheckDefault" {{ in_array('Sunday',$days)? 'checked':'' }}>
                            <label class="form-check-label" for="Sunday">
                              Sunday
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div><br><br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="submit" value="Update Train Route" class="btn btn-success" style="width: 100%;">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection