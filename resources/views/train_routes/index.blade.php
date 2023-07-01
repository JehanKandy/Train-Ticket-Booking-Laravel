@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        @if (auth()->user()->role == 1)
            <a href="{{ url('train_routes/create') }}"><button class="btn btn-success"><i class="fas fa-subway"></i> Add Train Route</button></a><br>
        @endif

            <hr><br>
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Train Name</th>
                        <th>Start Station</th>
                        <th>Start Time</th>
                        <th>End Station</th>
                        <th>End Time</th>
                        <th>Weekly Schedule</th>
                        <th>Add Date</th>
                        <th>Last Update</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($train_routes as $train)
                        <td><b>{{ $loop->iteration }}</b></td>
                        <td>{{ $train->train_name }}</td>
                        <td>{{ $train->start_station }}</td>
                        <td>{{ $train->start_time }}</td>
                        <td>{{ $train->end_station }}</td>
                        <td>{{ $train->end_time }}</td>
                        <td>
                            @php
                                $schedule = json_decode($train->weekly_schedule);
                            @endphp
                            @foreach ($schedule as $days)
                                {{ $days }}<br>
                            @endforeach
                        </td>
                        <td>{{ $train->created_at }}</td>
                        <td>{{ $train->updated_at }}</td>
                        <td>
                            <a href="{{ url('/train_routes/' . $comment->id) }}" title="View Comments"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            
                            @if (auth()->user()->role == 1 || auth()->user()->role == 2 || auth()->user()->name == $comment->add_user)
                                <a href="{{ url('/train_routes/' . $comment->id . '/edit') }}" title="Edit Train Routes"><button class="btn btn-primary btn-sm"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button></a>
                            @endif

                            @if (auth()->user()->role == 1 || auth()->user()->name == $comment->add_user)
                                <form method="POST" action="{{ url('/comments' . '/' . $comment->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete train routes" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-calendar-times" aria-hidden="true"></i> Delete</button>
                                </form>                            
                            @endif
                            
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        

    </div>
@endsection