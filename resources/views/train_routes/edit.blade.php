@extends('layouts.dash')

@if (auth()->user()->role == 3)
<script>window.location = "/train_routes";</script>
@endif

@section('content')
    <div class="admin-card">
        
        <h2>Update Train Route</h2>
    </div>
@endsection