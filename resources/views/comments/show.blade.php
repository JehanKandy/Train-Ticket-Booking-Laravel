@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/comments') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2>Comment</h2>
        <br>
        <h3>Owner : </h3> 
        <p>{{ $comments->add_user }}</p>

        <h3>Comment : </h3> 
        <p>{{ $comments->comment }}</p>

    </div>
@endsection