@extends('layouts.dash')


@section('content')
    <div class="admin-card">
        <a href="{{ url('/train_routes') }}"><button class="btn btn-primary">Back</button></a><br><br>

        <h2><i class="fas fa-subway"></i> Add Train Route</h2>

        <form action="{{ url('/train_routes') }}" method="post">
        
        </form>
        <hr>
    </div>
@endsection