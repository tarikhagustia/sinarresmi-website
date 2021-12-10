<x-app-layout title="Event">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
           {{ $event->name }}
        </h2>


        <div class="bg-white col-12 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('storage/' . $event->image) }}" alt="event image">
            <p>Title: {{ $event->title }}</p>
            <p>Status: {{ $event->statis }}</p>
            <p>Description: {{ $event->description }}</p>
            <p>Start Date: {{ $event->date_start }}</p>
            <p>End Date: {{ $event->date_end }}</p>
        </div>

        <div class="col-12 d-flex justify-content-center align-items-center">
            <a href="{{ route('dashboard.events.index') }}" class="btn btn-primary d-inline">Back</a>

            <a href="{{ route('dashboard.events.edit', $event->id) }}" class="btn btn-warning d-inline">Edit</a>

            <form action="{{ route('dashboard.events.destroy', $event->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</x-app-layout>
