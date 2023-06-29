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
                <input type="text" name="add_user" class="form-control" value="@php Auth::user->name @endphp" disabled>
            </div>
        </form>
    </div>
@endsection