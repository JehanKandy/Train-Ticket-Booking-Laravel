@extends('layouts.dash')

@if (auth()->user()->role == 3)
<script>window.location = "/train_routes";</script>
@endif

@section('content')
    <div class="admin-card">
        hi all
    </div>
@endsection