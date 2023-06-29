@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/comments') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <h3>Add New Comment</h3>
        <hr>
        <br>
        <form action="{{ url('/comments') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="add_user">Owner</label>
                <input type="text" value=" @php echo Auth::user()->name; @endphp" class="form-control" disabled><br>
                <input type="hidden" name="add_user" value=" @php echo Auth::user()->name; @endphp"> 
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" id="" cols="30" rows="10" class="form-control" style="resize: none;"></textarea><br>
            </div>
            <div class="form-group">
                <input type="submit" value="Add Comment" class="btn btn-success" style="width: 100%;">
            </div>
        </form>
    </div>
@endsection