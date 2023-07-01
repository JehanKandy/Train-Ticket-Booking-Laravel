@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h2>Train Route</h2>
        <div class="row">
            <div class="col-lg-6">
                Train Name
            </div>
            <div class="col-lg-6">
                {{ $train_routes->train_name }}
            </div>
        </div>
    </div>
@endsection