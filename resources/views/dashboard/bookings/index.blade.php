<x-app-layout title="Booking">
    <div class="container grid px-6 mx-auto">
        <div class="mb-6">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Booking
            </h2>
        </div>

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th scope="col" class="px-4 py-3">ID</th>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Date In</th>
                            <th scope="col" class="px-4 py-3">Date Out</th>
                            <th scope="col" class="px-4 py-3">Visitors</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                            <th scope="col" class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($bookings as $booking)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <th scope="row" class="px-4 py-3">{{ $booking->id }}</th>
                            <td class="px-4 py-3">{{ $booking->name }}</td>
                            <td class="px-4 py-3">{{ $booking->date_in }}</td>
                            <td class="px-4 py-3">{{ $booking->date_out }}</td>
                            <td class="px-4 py-3">{{ $booking->visitors }}</td>
                            <td class="px-4 py-3">{{ $booking->status }}</td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4">
                                    {{-- Show Button --}}
                                    <a href="{{ route('dashboard.bookings.show', $booking->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 bg-purple-600 text-white">
                                        Show
                                    </a>

                                    {{-- Delete button --}}
                                    <form action="{{ route('dashboard.bookings.destroy', $booking->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            onclick="return confirm('Are you sure you want to delete this?')"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $bookings->onEachSide(5)->links() }}
        </div>
    </div>
</x-app-layout>
