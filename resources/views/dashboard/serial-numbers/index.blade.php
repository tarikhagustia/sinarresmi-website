<x-app-layout title="Serial Numbers">
    <div class="container grid px-6 mx-auto">
        <div class="mb-6">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Serial Numbers
            </h2>
            <a href="{{ route('dashboard.serial-numbers.create') }}" class="inline bg-purple-600 px-3 py-2 rounded-md text-white no-underline">
                Generate Serial Numbers
            </a>
        </div>

        @include('dashboard.serial-numbers.components.table')
    </div>
</x-app-layout>
