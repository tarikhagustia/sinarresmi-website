@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('storage/'.$event->image) }}" alt="event image">
            <p>Name: {{ $event->name }}</p>
            <p>Start Date: {{ $event->start_date }}</p>
            <p>End Date: {{ $event->end_date }}</p>
            <p>Visitors: {{ $event->description }}</p>
        </div>

        <div class="col-12 d-flex justify-content-center align-items-center">
            <a href="{{ route('dashboard.events.index') }}" class="btn btn-primary d-inline">Back</a>

            <a href="{{ route('dashboard.events.edit', $event->id) }}" class="btn btn-warning d-inline">Edit</a>

            <form action="{{ route('dashboard.events.destroy', $event->id) }}" method="POST"
                class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
