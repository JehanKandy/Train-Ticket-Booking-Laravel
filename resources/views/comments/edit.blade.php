@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/comments') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2>Update Comment</h2>
        <hr>

        <form action="{{ url('users/' .$members->id) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for="Owner">Owner</label>
                <input type="text" name="add_user" value="{{ $comments->add_user }}" class="form-control">
            </div>
        </form>

        
    </div>
@endsection