@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        @if (auth()->user()->role == 1)
            <a href="{{ url('train_routes/create') }}"><button class="btn btn-success"><i class="fas fa-subway"></i></button></a>
        @endif
    </div>
@endsection