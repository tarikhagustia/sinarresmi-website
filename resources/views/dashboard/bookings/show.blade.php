<x-app-layout title="Booking">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
           {{ $booking->name }}
        </h2>


        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <p>Name: {{ $booking->name }}</p>
            <p>Date In: {{ $booking->date_in }}</p>
            <p>Date Out: {{ $booking->date_out }}</p>
            <p>Visitors: {{ $booking->visitors }}</p>
            <p>Status: {{ $booking->status }}</p>
        </div>

        <div class="col-12 d-flex justify-content-center align-items-center">
            <a href="{{ route('dashboard.bookings.index') }}" class="btn btn-primary d-inline">Back</a>

            <form action="{{ route('dashboard.bookings.approve', $booking->id) }}" method="POST"
                class="d-inline">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure?')">Approve</button>
            </form>

            <form action="{{ route('dashboard.bookings.reject', $booking->id) }}" method="POST"
                class="d-inline">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-warning" onclick="return confirm('Are you sure?')">Reject</button>
            </form>

            <form action="{{ route('dashboard.bookings.destroy', $booking->id) }}" method="POST"
                class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>
