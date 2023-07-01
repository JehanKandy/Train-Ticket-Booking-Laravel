@extends('layouts.dash')

@section('content')
    <div class="admin-card">
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
    </div>
@endsection