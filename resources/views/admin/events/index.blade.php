@extends('layouts.master')
@php
    debug(request()->session()->get('errors'));
@endphp
@section('content')
    <div class="container min-vh-100">
        <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
            Create New Event
        </a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date Start</th>
                    <th scope="col">Date End</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <th scope="row">{{ $event->id }}</th>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->start_date }}</td>
                        <td>{{ $event->end_date }}</td>
                        <td class="text-truncate" style="max-width: 200px">{{ $event->description }}</td>
                        <td>
                            <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-primary d-inline">
                                Show
                            </a>
                            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning d-inline">
                                Edit
                            </a>

                            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $events->links() }}
    </div>
@endsection
