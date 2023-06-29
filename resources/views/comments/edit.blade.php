@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/comments') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h2>Update Comment</h2>
        <hr>

        <form action="{{ url('comments/' .$comments->id) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for="Owner">Owner</label>
                <input type="text" value="{{ $comments->add_user }}" class="form-control" disabled><br>
                <input type="hidden" name="add_user">
            </div>
            <div class="form-group">
                <label for="Comment">Comment</label>
                <textarea name="comment" cols="30" rows="10" class="form-control">{{ $comments->comment }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Update Comment" class="btn btn-success">
            </div>
        </form>

        
    </div>
@endsection