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
                <input type="text" name="train_name" id="" value="{{ $train_routes->train_name }}" class="form-control">
            </div>

        </form>
    </div>
@endsection