@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/comments') }}"><button class="btn btn-primary">Back</button></a><br><br>
        Comment
        <br>
        <h3>Owner</h3>
        <h5>{{ $comments->add_user }}</h5>

    </div>
@endsection