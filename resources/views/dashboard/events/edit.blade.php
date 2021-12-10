@extends('layouts.master')

@section('content')
    <div class="container">
        <form action="{{ route('dashboard.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Event Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $event->name }}">
            </div>

            <div class="form-group">
                <label for="start_date">Date Start</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $event->start_date }}">
            </div>

            <div class="form-group">
                <label for="end_date">Date End</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $event->end_date }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $event->description }}">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ $event->image }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
