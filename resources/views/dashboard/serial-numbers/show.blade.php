<x-app-layout title="Serial Numbers">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Serial Number: {{ $serialNumber->serial_number }}
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="mt-5 col-12 d-flex flex-column justify-content-center align-items-center">
                {!! $qrCode !!}
                <p>ID: {{ $serialNumber->id }}</p>
                <p>Serial Number: {{ $serialNumber->serial_number }}</p>
                <p>Product Name: {{ $serialNumber->product->name }}</p>
                <p>Production Date: {{ $serialNumber->production_date }}</p>
                <p>Expiration Date: {{ $serialNumber->expiration_date }}</p>
            </div>

            <div class="col-12 d-flex justify-content-center align-items-center">
                <a href="{{ route('dashboard.serial-numbers.index') }}" class="btn btn-primary d-inline">Back</a>

                <a href="{{ route('dashboard.serial-numbers.edit', $serialNumber->id) }}" class="btn btn-warning d-inline">Edit</a>

                <form action="{{ route('dashboard.serial-numbers.destroy', $serialNumber->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
