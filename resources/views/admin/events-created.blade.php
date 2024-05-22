@extends('admin.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Event</div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('events.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="datetime-local" name="start_date" id="start_date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="datetime-local" name="end_date" id="end_date" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
