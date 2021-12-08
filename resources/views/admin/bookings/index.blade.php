@extends('layouts.master')

@section('content')
    <div class="container min-vh-100">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date In</th>
                    <th scope="col">Date Out</th>
                    <th scope="col">Visitors</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <th scope="row">{{ $booking->id }}</th>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->date_in }}</td>
                        <td>{{ $booking->date_out }}</td>
                        <td>{{ $booking->visitors }}</td>
                        <td>{{ $booking->status }}</td>
                        <td>
                            <a href="{{ route('admin.bookings.show', $booking->id) }}" class="btn btn-primary d-inline">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $bookings->links() }}
    </div>
@endsection
