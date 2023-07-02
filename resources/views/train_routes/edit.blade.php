@extends('layouts.dash')

@if (auth()->user()->role == 3)
<script>window.location = "/train_routes";</script>
@endif

@section('content')
    <div class="admin-card">
        <a href="{{ url('train_routes') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2>Update Train Route</h2>
    </div>
@endsection