@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/comments') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2>Comment</h2>
        <br>
        <span><h3>Owner : </h3> {{ $comments->add_user }}</span>


    </div>
@endsection