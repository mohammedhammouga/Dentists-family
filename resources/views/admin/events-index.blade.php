@extends('admin.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Events</div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-3">Add Event</a>

                    <table class="table"> 
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($events as $event)
                            <tr>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->start_date }}</td>
                                <td>{{ $event->end_date }}</td>
                                <td>
                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">No events found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
